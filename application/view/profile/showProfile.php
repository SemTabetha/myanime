<div class="container">
    <h1><?= $this->user->user_name; ?></h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h3>Welcome!</h3>
        <div>you are now on the profile page of <?= $this->user->user_name; ?></div>

        <?php if ($this->user) { ?>
            <div>
                <table class="overview-table">
                    <tbody>
                        <tr class="<?= ($this->user->user_active == 0 ? 'inactive' : 'active'); ?>">
                            <td class="avatar">
                                <?php if (isset($this->user->user_avatar_link)) { ?>
                                    <img src="<?= $this->user->user_avatar_link; ?>" />
                                <?php } ?>
                            </td>
                            <td><?= $this->user->user_name; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php } ?>

    </div>
</div>
