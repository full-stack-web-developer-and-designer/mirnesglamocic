<h2>Contact</h2>
    <p id="contact_offer">Let's work together! I'm ready for new projects.</p>
<form  spellcheck="false" autocomplete="off" id='contact_me' class='form ajax' name='contact_me' action='' method='POST'> 
<h3 id="response" class="success"><!-- This will hold response from the server --></h3>
            <div class="form-control InputIconBg">
                <input type='text' value="<?php echo Input::get('name'); ?>" class='input username' name='name' id='name' placeholder="name"><label alt='name' class="valid" for="name">Name</label><i class="fas fa-user" aria-hidden="true"></i>
                <span class="error"><?=$name_error; ?></span>
            </div><!-- end .form-control -->
            <div class="form-control InputIconBg">
                <input type="text" placeholder=" " class="input mail" name="email" id="email" value="<?php echo Input::get('email'); ?>" autocomplete="off"><label class="valid" for="email">E-mail</label><i class="fas fa-envelope" aria-hidden="true"></i>
                <span class="error"><?= $email_error; ?></span>
            </div><!-- end .form-control -->

            <div class="form-control InputIconBg">
                <textarea maxlength="1000" name="message" class="textinput message" cols="46" rows="8" id="message" placeholder=" "></textarea>
                <label id="floated_textarea" for="message">Message</label>
                <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                <span class="error"><?= $message_error; ?></span>
            </div><!-- end .form-control -->
            <input type="submit" id="submit" class="btn_submit" name="submit" value="SUBMIT QUERY"/>
</form>

<script src="./JS/form_color.min.js"></script>
<script src="./JS/validate_me.min.js"></script>