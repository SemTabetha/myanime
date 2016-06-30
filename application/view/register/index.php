

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <!-- login box on left side -->
<div class="wrapper">
    <div class="register-logo"><a href="<?php echo Config::get('URL'); ?>index/index"><img src="http://www.semzee.dvc-icta.nl/pic/myanimelogo.png" alt=""></a></div>

    <div class="create-box">

    <div class="kirito-right">
        
    </div>
        <h2>Create a new account for free!</h2>

        <!-- register form -->
        <form method="post" action="<?php echo Config::get('URL'); ?>register/register_action">
            <!-- the user name input field uses a HTML5 pattern check -->
           <div class="names">
                <input class="left" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Username (letters/numbers, 2-64 chars)" required />
                <input class="left" type="text" name="user_email" placeholder="email address (a real address)" required />
                <input class="left" type="text" name="user_email_repeat" placeholder="repeat email address (to prevent typos)" required />
            </div>
            <div class="security">
                <input class="right" type="password" name="user_password_new" pattern=".{6,}" placeholder="Password (6+ characters)" required autocomplete="off" />
                <input class="right" type="password" name="user_password_repeat" pattern=".{6,}" required placeholder="Repeat your password" autocomplete="off" />
            </div>
            <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
            <a href="#" onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>register/showCaptcha?' + Math.random(); return false">Reload Captcha</a>
            <div class="captcha">
                <img class="captcha-img" id="captcha" src="<?php echo Config::get('URL'); ?>register/showCaptcha" />
            </div>
            <input class="captcha-input" type="text" name="captcha" placeholder="Please enter above characters" required />
            <input type="submit" value="Sign Up" />
        </form>
    </div>
</div>
<!-- close wrapper -->
</div>
