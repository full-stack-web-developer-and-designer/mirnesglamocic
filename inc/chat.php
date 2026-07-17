<?php
/**
 * chat.php
 *
 * Mirnes AI chat widget.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */
?>

<button
    id="mirnes-ai-toggle"
    class="mirnes-ai-toggle"
    type="button"
    aria-label="Open Mirnes AI chat"
    aria-controls="mirnes-ai-widget"
    aria-expanded="false">

    <span class="mirnes-ai-toggle-icon" aria-hidden="true">
        💬
    </span>

    <span class="mirnes-ai-toggle-label">
        Ask Mirnes AI
    </span>

</button>


<section
    id="mirnes-ai-widget"
    class="mirnes-ai-widget"
    aria-label="Mirnes AI chat"
    aria-hidden="true">

    <header class="mirnes-ai-header">

        <div class="mirnes-ai-avatar" aria-hidden="true">
            🤖
        </div>

        <div class="mirnes-ai-header-content">

            <h3 class="mirnes-ai-title">
                Mirnes AI
            </h3>

            <p class="mirnes-ai-status">
                <span class="mirnes-ai-online-dot" aria-hidden="true"></span>
                Online assistant
            </p>

        </div>

        <button
            id="mirnes-ai-close"
            class="mirnes-ai-close"
            type="button"
            aria-label="Close Mirnes AI chat">

            &times;

        </button>

    </header>


    <div
        id="mirnes-ai-messages"
        class="mirnes-ai-messages"
        aria-live="polite"
        aria-relevant="additions">

        <article class="mirnes-ai-message mirnes-ai-message-assistant">

            <strong class="mirnes-ai-welcome-title">
                Hello! 👋
            </strong>

            <p>
                I’m Mirnes AI. Ask me about Mirnes’s services,
                skills, portfolio projects or web development.
            </p>

            <div class="mirnes-ai-quick-actions">

                <button class="quick-action"
                    type="button"
                    data-question="Briefly list Mirnes's main services. Use service names only, with one service per bullet point.">
                    🌐 Services
                </button>

                <button class="quick-action"
                    type="button"
                    data-question="Briefly show up to five representative projects or project categories from Mirnes's portfolio, with one item per bullet point.">
                    💼 Projects
                </button>

                <button class="quick-action"
                    type="button"
                    data-question="Briefly describe Mirnes's WordPress development service using no more than four short bullet points.">
                    ⚙️ WordPress
                </button>

                <button class="quick-action"
                    type="button"
                    data-question="Briefly list the available ways to contact Mirnes, with one contact method per bullet point.">
                    📩 Contact
                </button>

            </div>

        </article>

    </div>


    <div
        id="mirnes-ai-typing"
        class="mirnes-ai-typing"
        hidden
        aria-label="Mirnes AI is typing">

        <span></span>
        <span></span>
        <span></span>

    </div>


    <footer class="mirnes-ai-footer">

        <label class="mirnes-ai-input-wrapper">

            <span class="mirnes-ai-visually-hidden">
                Your message
            </span>

            <textarea
                id="mirnes-ai-input"
                class="mirnes-ai-input"
                rows="1"
                maxlength="2000"
                placeholder="Type your message..."
                autocomplete="off"></textarea>

        </label>

        <button
            id="mirnes-ai-send"
            class="mirnes-ai-send"
            type="button">

            Send

        </button>

    </footer>

</section>