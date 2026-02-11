<?php
/**
 * form.php
 *
 * Generates the contact form used throughout the portfolio website.
 * Features:
 * - Name, Email, and Message fields with validation placeholders
 * - AJAX-ready form with response placeholder
 * - Input icons using SVGs
 * - Accessibility-friendly (ARIA labels, live region for server responses)
 * - Max-length enforcement on textarea
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-02-09
 *
 * Usage:
 * Include this file where a contact form is needed:
 * <?php include_once __DIR__ . '/form.php'; ?>
 */
$name_error = $email_error = $message_error = '';
?>
<form spellcheck="false" autocomplete="on" id="contact_me" class="form ajax" name="contact_me" method="POST">

    <p id="response" class="success" role="status" aria-live="polite">
        <!-- This will hold response from the server -->
    </p>

    <div class="form-control InputIconBg">
        <input type="text" placeholder=" " value="<?php echo Input::get('name'); ?>" class="input name" name="name" id="name" aria-label="Your name">
        <label class="valid" for="name">Name</label>
        <div class="form-icon">
            <svg class="icon">
                <use href="#icon-user"></use>
            </svg>
        </div>
        <span class="error"><?= $name_error; ?></span>
    </div><!-- end .form-control .InputIconBg -->

    <div class="form-control InputIconBg">
        <input type="text" placeholder=" " class="input mail" name="email" id="email" value="<?php echo Input::get('email'); ?>" autocomplete="off" aria-label="Your e-mail">
        <label class="valid" for="email">E-mail</label>
        <div class="form-icon">
            <svg class="icon">
                <use href="#icon-mail"></use>
            </svg>
        </div>
        <span class="error"><?= $email_error; ?></span>
    </div><!-- end .form-control .InputIconBg -->

    <div class="form-control InputIconBg textarea-icon-wrapper">
        <textarea maxlength="1000" name="message" class="textinput message" id="message" aria-label="Your message" placeholder=" "></textarea>
        <label id="floated_textarea" for="message">Message</label>
        <div class="textarea-icon">
            <svg class="icon">
                <use href="#icon-message"></use>
            </svg>
        </div>
        <span class="error"><?= $message_error; ?></span>
    </div><!-- end .form-control .InputIconBg .textarea-icon-wrapper -->

    <input type="submit" id="submit" class="btn_submit" name="submit" aria-label="send email" value="SUBMIT QUERY">

</form>
