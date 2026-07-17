/**
 * chat.js
 *
 * Mirnes AI chat controller.
 *
 * Author: Mirnes Glamočić
 * Created: 2026
 */

'use strict';
const DEBUG = false;

if (DEBUG) {
console.log('New Mirnes AI chat.js loaded');
}

function initMirnesAIChat() {
    /*
    |--------------------------------------------------------------------------
    | Chat elements
    |--------------------------------------------------------------------------
    */

    const toggleButton =
        document.getElementById('mirnes-ai-toggle');

    const widget =
        document.getElementById('mirnes-ai-widget');

    const closeButton =
        document.getElementById('mirnes-ai-close');

    const messages =
        document.getElementById('mirnes-ai-messages');

    const input =
        document.getElementById('mirnes-ai-input');

    const sendButton =
        document.getElementById('mirnes-ai-send');

    const typingIndicator =
        document.getElementById('mirnes-ai-typing');

    const quickActionButtons =
        document.querySelectorAll(
            '.mirnes-ai-quick-actions [data-question]'
        );

    if (DEBUG) {
        console.log('Mirnes AI elements:', {
            toggleButton,
            widget,
            closeButton,
            messages,
            input,
            sendButton,
            typingIndicator,
            quickActionButtons
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Required elements validation
    |--------------------------------------------------------------------------
    */

    if (
        !toggleButton ||
        !widget ||
        !closeButton ||
        !messages ||
        !input ||
        !sendButton ||
        !typingIndicator
    ) {
        console.error(
            'Mirnes AI: Required chat elements are missing.'
        );

        return;
    }


    /*
    |--------------------------------------------------------------------------
    | State
    |--------------------------------------------------------------------------
    */

    let conversationId =
        localStorage.getItem(
            'mirnes_ai_conversation_id'
        );

    let requestInProgress = false;

    const mobileMediaQuery =
        window.matchMedia('(max-width: 600px)');


    /*
    |--------------------------------------------------------------------------
    | Message scrolling
    |--------------------------------------------------------------------------
    */

    function scrollToBottom() {
        messages.scrollTop =
            messages.scrollHeight;
    }


    /*
    |--------------------------------------------------------------------------
    | Mobile visual viewport
    |--------------------------------------------------------------------------
    |
    | Keeps the complete chat window inside the visible part of the screen
    | when the mobile keyboard opens.
    |
    */

    function resetMobileChatViewport() {
        widget.style.removeProperty('top');
        widget.style.removeProperty('right');
        widget.style.removeProperty('bottom');
        widget.style.removeProperty('left');
        widget.style.removeProperty('width');
        widget.style.removeProperty('height');
        widget.style.removeProperty('max-height');
    }


    function updateMobileChatViewport() {
        /*
         * Restore normal CSS dimensions when the browser
         * is no longer within the mobile breakpoint.
         */
        if (!mobileMediaQuery.matches) {
            resetMobileChatViewport();

            return;
        }


        /*
         * Do not modify a closed widget.
         */
        if (
            !widget.classList.contains('is-open') ||
            !window.visualViewport
        ) {
            return;
        }


        const viewport =
            window.visualViewport;

        const horizontalGap = 10;
        const topGap = 10;
        const bottomGap = 10;


        /*
         * Account for a shifted visual viewport, which can occur
         * when the keyboard opens or the browser toolbar changes.
         */
        const visibleTop =
            Math.max(
                topGap,
                viewport.offsetTop + topGap
            );

        const visibleLeft =
            Math.max(
                horizontalGap,
                viewport.offsetLeft + horizontalGap
            );

        const visibleWidth =
            Math.max(
                280,
                viewport.width -
                horizontalGap * 2
            );

        const visibleHeight =
            Math.max(
                280,
                viewport.height -
                topGap -
                bottomGap
            );


        widget.style.top =
            `${visibleTop}px`;

        widget.style.right =
            'auto';

        widget.style.bottom =
            'auto';

        widget.style.left =
            `${visibleLeft}px`;

        widget.style.width =
            `${visibleWidth}px`;

        widget.style.height =
            `${visibleHeight}px`;

        widget.style.maxHeight =
            `${visibleHeight}px`;


        /*
         * Keep the newest chat messages visible.
         */
        window.requestAnimationFrame(
            scrollToBottom
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Open and close chat
    |--------------------------------------------------------------------------
    */

    function openChat() {
        widget.classList.add('is-open');

        widget.setAttribute(
            'aria-hidden',
            'false'
        );

        toggleButton.setAttribute(
            'aria-expanded',
            'true'
        );


        /*
         * Apply the initial visible viewport dimensions.
         */
        updateMobileChatViewport();


        /*
         * Focus may open the mobile keyboard, so run the viewport
         * calculation again after the browser has adjusted.
         */
        window.setTimeout(
            () => {
                input.focus();

                updateMobileChatViewport();

                scrollToBottom();
            },
            100
        );
    }


    function closeChat() {
        widget.classList.remove('is-open');

        widget.setAttribute(
            'aria-hidden',
            'true'
        );

        toggleButton.setAttribute(
            'aria-expanded',
            'false'
        );


        input.blur();

        resetMobileChatViewport();

        toggleButton.focus();
    }


    function toggleChat() {
        if (
            widget.classList.contains(
                'is-open'
            )
        ) {
            closeChat();
        } else {
            openChat();
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Message rendering
    |--------------------------------------------------------------------------
    */

    function createMessage(
        text,
        role
    ) {
        const messageElement =
            document.createElement('article');

        messageElement.classList.add(
            'mirnes-ai-message'
        );


        if (role === 'user') {
            messageElement.classList.add(
                'mirnes-ai-message-user'
            );
        } else {
            messageElement.classList.add(
                'mirnes-ai-message-assistant'
            );
        }


        const paragraphs =
            String(text)
                .trim()
                .split(/\n{2,}/);


        paragraphs.forEach(
            paragraphText => {
                const cleanText =
                    paragraphText.trim();

                if (cleanText === '') {
                    return;
                }


                const paragraph =
                    document.createElement('p');

                paragraph.textContent =
                    cleanText;

                messageElement.appendChild(
                    paragraph
                );
            }
        );


        messages.appendChild(
            messageElement
        );

        scrollToBottom();
    }


    /*
    |--------------------------------------------------------------------------
    | Typing indicator
    |--------------------------------------------------------------------------
    */

    function showTyping() {
        typingIndicator.hidden = false;

        scrollToBottom();
    }


    function hideTyping() {
        typingIndicator.hidden = true;
    }


    /*
    |--------------------------------------------------------------------------
    | Loading state
    |--------------------------------------------------------------------------
    */

    function setLoading(loading) {
        requestInProgress = loading;

        sendButton.disabled = loading;
        input.disabled = loading;

        sendButton.textContent =
            loading
                ? 'Sending…'
                : 'Send';
    }


    /*
    |--------------------------------------------------------------------------
    | Response parsing
    |--------------------------------------------------------------------------
    */

    async function parseResponse(response) {
        const responseText =
            await response.text();


        if (responseText.trim() === '') {
            return {};
        }


        try {
            return JSON.parse(
                responseText
            );
        } catch (error) {
            console.error(
                'Mirnes AI returned invalid JSON:',
                responseText
            );

            throw new Error(
                `Invalid server response. HTTP ${response.status}`
            );
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Send message
    |--------------------------------------------------------------------------
    */

    async function sendMessage(
        predefinedMessage = null
    ) {
        if (requestInProgress) {
            return;
        }


        const text =
            String(
                predefinedMessage ??
                input.value
            ).trim();


        if (text === '') {
            input.focus();

            return;
        }


        createMessage(
            text,
            'user'
        );


        input.value = '';

        setLoading(true);
        showTyping();


        try {
            const response =
                await fetch(
                    '/inc/ai.php',
                    {
                        method: 'POST',

                        headers: {
                            'Content-Type':
                                'application/json',

                            'Accept':
                                'application/json'
                        },

                        body:
                            JSON.stringify({
                                message: text,

                                conversation_id:
                                    conversationId
                                        ? Number(
                                            conversationId
                                        )
                                        : null
                            })
                    }
                );

            const data =
                await parseResponse(
                    response
                );

            if (DEBUG) {
                console.log(
                    'Mirnes AI raw response:',
                    data
                );
            }

            /*
             * Rate limit response.
             */
            if (response.status === 429) {
                createMessage(
                    data.message ||
                    'You have reached the AI request limit. Please try again later.',
                    'assistant'
                );

                return;
            }


            /*
             * Other HTTP error responses.
             */
            if (!response.ok) {
                throw new Error(
                    data.error ||
                    data.message ||
                    `HTTP ${response.status}`
                );
            }


            /*
             * Application-level error response.
             */
            if (!data.success) {
                throw new Error(
                    data.error ||
                    data.message ||
                    'AI request failed.'
                );
            }


            /*
             * Save conversation ID.
             */
            if (data.conversation_id) {
                conversationId =
                    String(
                        data.conversation_id
                    );

                localStorage.setItem(
                    'mirnes_ai_conversation_id',
                    conversationId
                );
            }


            /*
             * Render the assistant response.
             */
            createMessage(
                data.message ||
                'I did not receive a response.',
                'assistant'
            );

        } catch (error) {
            console.error(
                'Mirnes AI error:',
                error
            );


            createMessage(
                'Sorry, Mirnes AI is temporarily unavailable. Please try again.',
                'assistant'
            );

        } finally {
            hideTyping();

            setLoading(false);


            /*
             * Keep the chat dimensions correct after the response,
             * especially while the mobile keyboard is open.
             */
            updateMobileChatViewport();

            input.focus();

            scrollToBottom();
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Chat controls
    |--------------------------------------------------------------------------
    */

    toggleButton.addEventListener(
        'click',
        toggleChat
    );


    closeButton.addEventListener(
        'click',
        closeChat
    );


    sendButton.addEventListener(
        'click',
        () => {
            sendMessage();
        }
    );


    /*
    |--------------------------------------------------------------------------
    | Textarea keyboard controls
    |--------------------------------------------------------------------------
    */

    input.addEventListener(
        'keydown',
        event => {
            if (
                event.key === 'Enter' &&
                !event.shiftKey
            ) {
                event.preventDefault();

                sendMessage();
            }
        }
    );


    /*
     * Recalculate the popup when the textarea receives focus
     * and the mobile keyboard starts opening.
     */
    input.addEventListener(
        'focus',
        () => {
            window.setTimeout(
                updateMobileChatViewport,
                100
            );
        }
    );


    /*
    |--------------------------------------------------------------------------
    | Quick actions
    |--------------------------------------------------------------------------
    */

    quickActionButtons.forEach(
        button => {
            button.addEventListener(
                'click',
                () => {
                    const question =
                        button.dataset.question ??
                        '';

                    sendMessage(
                        question
                    );
                }
            );
        }
    );


    /*
    |--------------------------------------------------------------------------
    | Escape key
    |--------------------------------------------------------------------------
    */

    document.addEventListener(
        'keydown',
        event => {
            if (
                event.key === 'Escape' &&
                widget.classList.contains(
                    'is-open'
                )
            ) {
                closeChat();
            }
        }
    );


    /*
    |--------------------------------------------------------------------------
    | Mobile keyboard and visual viewport events
    |--------------------------------------------------------------------------
    */

    if (window.visualViewport) {
        window.visualViewport.addEventListener(
            'resize',
            updateMobileChatViewport
        );

        window.visualViewport.addEventListener(
            'scroll',
            updateMobileChatViewport
        );
    }


    /*
     * Modern MediaQueryList API.
     */
    if (
        typeof mobileMediaQuery.addEventListener ===
        'function'
    ) {
        mobileMediaQuery.addEventListener(
            'change',
            () => {
                if (
                    widget.classList.contains(
                        'is-open'
                    )
                ) {
                    updateMobileChatViewport();
                } else {
                    resetMobileChatViewport();
                }
            }
        );

    /*
     * Older Safari compatibility.
     */
    } else if (
        typeof mobileMediaQuery.addListener ===
        'function'
    ) {
        mobileMediaQuery.addListener(
            () => {
                if (
                    widget.classList.contains(
                        'is-open'
                    )
                ) {
                    updateMobileChatViewport();
                } else {
                    resetMobileChatViewport();
                }
            }
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Orientation changes
    |--------------------------------------------------------------------------
    */

    window.addEventListener(
        'orientationchange',
        () => {
            window.setTimeout(
                () => {
                    if (
                        widget.classList.contains(
                            'is-open'
                        )
                    ) {
                        updateMobileChatViewport();
                    }
                },
                200
            );
        }
    );


    /*
    |--------------------------------------------------------------------------
    | Browser resize
    |--------------------------------------------------------------------------
    */

    window.addEventListener(
        'resize',
        () => {
            if (
                widget.classList.contains(
                    'is-open'
                )
            ) {
                updateMobileChatViewport();
            }
        }
    );

    if (DEBUG) {
        console.log(
            'Mirnes AI initialized successfully.'
        );
    }
}


/*
|--------------------------------------------------------------------------
| Initialize
|--------------------------------------------------------------------------
*/

if (document.readyState === 'loading') {
    document.addEventListener(
        'DOMContentLoaded',
        initMirnesAIChat
    );
} else {
    initMirnesAIChat();
}