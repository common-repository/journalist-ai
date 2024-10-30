<?php
    if (!defined('ABSPATH')) exit; // Exit if accessed directly
?>
<div class="wrap">
    <h1>Journalist AI Settings</h1>
    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" id="journalistai-settings-form" target="_blank">
        <?php wp_nonce_field('journalistai_settings_action', 'journalistai_settings_nonce'); ?>
        <input type="hidden" name="action" value="journalistai_handle_form">
        <p>You can create the integration on Journalist AI platform, by clicking the button below</p>
        <button type="submit" id="journalistai-connection-button" class="button button-primary">
           Create Integration
        </button>
    </form>
</div>