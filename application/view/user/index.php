<div class="container">
                <img class="img-avatar" src='<?= $this->user_avatar_file; ?>' />
        </div>
            <form action="<?php echo Config::get('URL'); ?>user/uploadAvatar_action" method="post" enctype="multipart/form-data">
            <label for="avatar_file">upload avatar</label>
            <input type="file" name="avatar_file" required />
            <!-- max size 5 MB (as many people directly upload high res pictures from their digital cameras) -->
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
            <input type="submit" value="Upload image" />
        </form>
</div>