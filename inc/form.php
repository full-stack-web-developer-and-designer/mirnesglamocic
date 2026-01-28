<form  spellcheck="false" autocomplete="on" id='contact_me' class='form ajax' name='contact_me' method='POST'> 
<p id="response" class="success" role="status" aria-live="polite"></p>
<!-- This will hold response from the server --></p>
            <div class="form-control InputIconBg">
                <input type="text" placeholder=" " value="<?php echo Input::get('name'); ?>" class="input name" name='name' id='name' aria-label="Your name"><label class="valid" for="name">Name</label><div class="form-icon"><svg class="icon" viewBox="0 0 24 24">
                            <use href="#icon-user"></use>
                        </svg></div>
                <span class="error"><?=$name_error; ?></span>
            </div><!-- end .form-control -->
            <div class="form-control InputIconBg">
                <input type="text" placeholder=" " class="input mail" name="email" id="email" value="<?php echo Input::get('email'); ?>" autocomplete="off" aria-label="Your e-mail"><label class="valid" for="email">E-mail</label>
                <div class="form-icon">
                <svg class="icon" viewBox="0 0 24 24">
      <use href="#icon-email"></use>
      
    </svg></div><span class="error"><?= $email_error; ?></span>
            </div><!-- end .form-control -->

            <div class="form-control InputIconBg textarea-icon-wrapper">
                <textarea maxlength="1000" name="message" class="textinput message" id="message" aria-label="Your message" placeholder=" "></textarea>
                <label id="floated_textarea" for="message">Message</label>
                    <div class="textarea-icon">
                        <svg class="icon" viewBox="0 0 24 24">
                            <use href="#icon-message"></use>
                        </svg>
                    </div>
                <span class="error"><?= $message_error; ?></span>
            </div><!-- end .form-control -->
        



            <input type="submit" id="submit" class="btn_submit" name="submit" aria-label="send email" value="SUBMIT QUERY">
</form>

<script src="/JS/form_color.min.js"></script>
<script src="/JS/validate_me.min.js"></script>