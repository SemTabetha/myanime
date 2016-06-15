<div class="container">
    <h1>Your Posts</h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h3>Create a post</h3>
        <p>
            <form method="post" action="<?php echo Config::get('URL');?>note/create">
                <label>Text of new note: </label><input type="text" name="note_text" />
                <label>Title: </label><input type="text" name="note_text" />
                <input type="submit" value='Create this note' autocomplete="off" />
            </form>
        </p>

        <?php if ($this->notes) { ?>
                    <?php foreach($this->notes as $key => $value) { ?>
                       
                            <p><?= htmlentities($value->note_text); ?></p>
                            <p><a href="<?= Config::get('URL') . 'note/edit/' . $value->note_id; ?>">Edit</a></p>
                            <p><a href="<?= Config::get('URL') . 'note/delete/' . $value->note_id; ?>">Delete</a></p>
                       
                    <?php } ?>
            <?php } else { ?>
                <div>No notes yet. Create some !</div>
        <?php } ?>
    </div>
</div>
