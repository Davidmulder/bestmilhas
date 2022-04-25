<?php

function bestmilhas_adicionando_recursos_ao_tema(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'bestmilhas_adicionando_recursos_ao_tema');





function bestmilhas_registrando_menu(){
    register_nav_menu(   // habilitar o menu
        'menu-navegacao',
        'Menu navegação'
    );
}
add_action('init', 'bestmilhas_registrando_menu');