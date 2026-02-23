<?php

/**
 * Plugin Name: Hola Potrillo
 * Description: Another plugin that tries to emulate Hello Dolly. However, it takes different lyrics from Aleajandro Fernandez
 * Author: Jose M
 * version: 1.4.0
 * Text-Domain: hola-potrillo
 */

if (!defined('ABSPATH')) {
    exit(1);
}

function get_phrase() {
    $phrases = array(
        "Me dediqué a perderte",
        "me ausenté en momentos que se han ido para siempre...",
        "me dediqué a no verte",
        "Como quien pierde una estrella",
        "que se va y no volverá, así se fue mi esperanza",
        "Mátalas con una sobredosis de ternura...", 
        "Mátalas con flores, con canciones",
        "Y si un día glorioso en tus brazos acabo, qué felicidad... eso y más",
        "Si tú supieras, que tu recuerdo me acaricia como el viento...",
        "¡Ay amor! No cabe duda que sigo siendo sentimental...",
        "Que seas muy feliz, mucho muy feliz, pero muy feliz",
        "Pa' que no regreses",
        "Fuiste ave de paso", 
        "No sé por qué razón me fui acostumbrando cada día más a ti"
    );
    // returns a random phrase
    return $phrases[random_int(0, count($phrases)-1)];
}

function sacar_potrillo() {
    $phrase = get_phrase();
    echo '<p id="potrillo">'.$phrase.'</p>';
}

function potrillo_css() {
    echo "
	<style type='text/css'>
	#potrillo {
		float: right;
		padding-right: 15px;
		padding-top: 5px;
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_notices', 'sacar_potrillo');
add_action('admin_head','potrillo_css');