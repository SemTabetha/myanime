<div class="container">
    <h1>User profiles</h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h3>All the current user profiles</h3>
        <div>
            <table class="overview-table">
                <?php foreach ($this->users as $user) { ?>
                    <tr class="<?= ($user->user_active == 0 ? 'inactive' : 'active'); ?>">
                        <td class="avatar">
                            <?php if (isset($user->user_avatar_link)) { ?>
                                <img src="<?= $user->user_avatar_link; ?>" />
                            <?php } ?>
                        </td>
                        <td>
                            <a href="<?= Config::get('URL') . 'profile/showProfile/' . $user->user_id; ?>"><?= $user->user_name; ?></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
