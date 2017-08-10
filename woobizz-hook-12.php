<?php
/*
Plugin Name: Woobizz Hook 12 
Plugin URI: http://woobizz.com
Description: Change text of any translatable strings available
Author: Woobizz
Author URI: http://woobizz.com
Version: 1.0.0
Text Domain: woobizzhook12
Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
add_action( 'plugins_loaded', 'woobizzhook12_load_textdomain' );
function woobizzhook12_load_textdomain() {
  load_plugin_textdomain( 'woobizzhook12', false, basename( dirname( __FILE__ ) ) . '/lang' ); 
}
//Hook
add_filter(  'gettext',  'woobizzhook12_translate_any_text'  );
add_filter(  'ngettext',  'woobizzhook12_translate_any_text'  );
function woobizzhook12_translate_any_text( $translated ) {
     $words = array(
	 
          //Replace here the words you want to change, just add a new line to add more texts
		  
		 'word to change' => 'new text',
		 'word to change' => 'new text',
		 'word to change' => 'new text',
		 'word to change' => 'new text',                        						
						
                    );
     $translated = str_ireplace(  array_keys($words),  $words,  $translated );
     return $translated;
}