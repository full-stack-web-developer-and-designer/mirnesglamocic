<h2>Contact</h2>
    <p id="contact_offer">Let's work together! I'm ready for new projects.</p>
<form  spellcheck="false" autocomplete="on" id='contact_me' class='form ajax' name='contact_me' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='POST'> 
<p id="response" class="success"><!-- This will hold response from the server --></p>
            <div class="form-control InputIconBg">
                <input type='text' value="<?php echo Input::get('name'); ?>" class='input username' name='name' id='name' placeholder="name" aria-label="Your name"><label class="valid" for="name">Name</label><svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 448 512"><path id="user" fill="#FFF" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                <span class="error"><?=$name_error; ?></span>
            </div><!-- end .form-control -->
            <div class="form-control InputIconBg">
                <input type="text" placeholder=" " class="input mail" name="email" id="email" value="<?php echo Input::get('email'); ?>" autocomplete="off" aria-label="Your e-mail"><label class="valid" for="email">E-mail</label><svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 512 512"><path fill="#FFF" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                <span class="error"><?= $email_error; ?></span>
            </div><!-- end .form-control -->

            <div class="form-control InputIconBg">
                <textarea maxlength="1000" name="message" class="textinput message" id="message" aria-label="Your message" placeholder=" "></textarea>
                <label id="floated_textarea" for="message">Message</label>
                <svg id="textarea" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 512 512"><path fill="#FFF" d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg>
                <span class="error"><?= $message_error; ?></span>
            </div><!-- end .form-control -->
            <input type="submit" id="submit" class="btn_submit" name="submit" aria-label="send email" value="SUBMIT QUERY">
</form>

<script src="/JS/form_color.min.js"></script>
<script src="/JS/validate_me.min.js"></script>