<?php
/*
Plugin Name: DinoSalto
Plugin URI: http://exemplo.com/dinosalto
Description: Um plugin básico para WordPress, chamado DinoSalto, que servirá como ponto de partida.
Version: 1.0
Author: Seu Nome
Author URI: http://exemplo.com
License: GPL2
*/

// Evita acesso direto ao arquivo
if (!defined('ABSPATH')) {
    exit;
}

// Função de inicialização do plugin
function dinosalto_inicializar() {
    // Aqui você pode adicionar código de inicialização do plugin
    error_log('DinoSalto foi ativado!');
}
register_activation_hook(__FILE__, 'dinosalto_inicializar');

// Função de desativação do plugin
function dinosalto_desativar() {
    // Aqui você pode adicionar código para a desativação do plugin
    error_log('DinoSalto foi desativado!');
}
register_deactivation_hook(__FILE__, 'dinosalto_desativar');

// Função principal do plugin
function dinosalto_funcao_principal() {
    echo "<p>DinoSalto está ativo e funcionando!</p>";
}
add_action('wp_footer', 'dinosalto_funcao_principal');


//Explicação do Código
//Cabeçalho do Plugin: Informa ao WordPress sobre o nome, descrição e versão do plugin.
//Proteção de Acesso Direto: O defined('ABSPATH') impede o acesso direto ao arquivo.
//Funções de Ativação e Desativação:
//register_activation_hook e register_deactivation_hook executam funções específicas quando o plugin é ativado e desativado.
//Função Principal: A função dinosalto_funcao_principal() exibe uma mensagem simples no rodapé de cada página do site (é só para demonstrar que o plugin está ativo).