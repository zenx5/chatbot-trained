<?php
/**
 * Chatbot ChatGPT for WordPress - Shortcode Registration
 *
 * This file contains the code for registering the shortcode used
 * to display the Chatbot ChatGPT on the website.
 *
 * @package chatbot-chatgpt
 */

function chatbot_chatgpt_shortcode() {
    // Retrieve the bot name - Ver 1.1.0
    // Add styling to the bot to ensure that it is not shown before it is needed Ver 1.2.0
    $bot_name = get_option('chatgpt_bot_name', 'Chatbot ChatGPT');
    $info = get_option('chatgpt_bot_info','');
    $logo_html = get_custom_logo();
    ob_start();
    ?>
    <div id="chatbot-chatgpt" style="display: none;">
        <div id="chatbot-chatgpt-header">
            <div id="chatbot-chatgpt-mark">
                <div id="chatbot-image-container">
                    <?=$logo_html?>
                </div>
                <div id="chatgptTitle" class="title"><?php echo $bot_name; ?></div>
            </div>
            <div><?=$info?></div>
        </div>
        <div id="chatbot-chatgpt-conversation"></div>
        <div id="chatbot-chatgpt-input">
            <input type="text" id="chatbot-chatgpt-message" placeholder="<?php echo esc_attr( 'Escribe tu mensaje...' ); ?>">
            <button id="chatbot-chatgpt-submit">Enviar</button>
        </div>
    </div>
    <button id="chatgpt-open-btn" style="display: none;">
    <i class="dashicons dashicons-format-chat"></i>
    </button>
    <?php
    return ob_get_clean();
}
add_shortcode('chatbot_chatgpt', 'chatbot_chatgpt_shortcode');
