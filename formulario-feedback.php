<?php
/*
Plugin Name: Formulário de Feedback
Description: Um plugin simples para coletar feedbacks via formulário usando shortcode.
Version: 1.0
Author: Wallan
*/

function ff_formulario_shortcode() {
    ob_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ff_feedback'])) {
        global $wpdb;
        $tabela = $wpdb->prefix . 'feedbacks';
        $mensagem = sanitize_text_field($_POST['ff_feedback']);
        $wpdb->insert($tabela, ['mensagem' => $mensagem]);
        echo "<p>✅ Feedback enviado com sucesso!</p>";
    }
    ?>
    <form method="post">
        <label for="ff_feedback">Seu feedback:</label><br>
        <textarea name="ff_feedback" required></textarea><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
    return ob_get_clean();
}

function ff_criar_tabela() {
    global $wpdb;
    $tabela = $wpdb->prefix . 'feedbacks';
    $charset = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $tabela (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        mensagem text NOT NULL,
        PRIMARY KEY  (id)
    ) $charset;";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'ff_criar_tabela');
add_shortcode('form_feedback', 'ff_formulario_shortcode');
