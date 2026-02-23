<?php

/**
 * Plugin Name: Hola Potrillo
 * Description: Another plugin that tries to emulate Hello Dolly. However, it takes different lyrics from Aleajandro Fernandez
 * Author: Jose M
 * version: 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(1);
}

function get_phrase() {
    $phrases = array(
        "Las mujeres ya no lloran, las mujeres facturan",
        "Bebé, yo te quiero, pero es que yo me quiero más a mí",
        "Creíste que me heriste y me volviste más dura" ,
        "Una loba no ataca, se defiende" ,
        "La gente de dos caras no la soporto",
        "Verte con la nueva me dolió, pero ya estoy puesta pa' lo mío"
    );
    // returns a random phrase
    return $phrases[random_int(0, count($phrases)-1)];
}

function sacar_potrillo() {
    $phrase = get_phrase();
    echo '<p id="potrillo">'.$phrase.'</p>';
}

add_action( 'admin_notices', 'sacar_potrillo');