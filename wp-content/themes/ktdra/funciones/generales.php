<?php
    if(!function_exists('comprimir_HTML')){
        function comprimir($HTML, $ECHO = true){
            $HTML = str_replace("\t", "", $HTML);
            $HTML = str_replace("      ", " ", $HTML);
            $HTML = str_replace("     ", " ", $HTML);
            $HTML = str_replace("    ", " ", $HTML);
            $HTML = str_replace("   ", " ", $HTML);
            $HTML = str_replace("  ", " ", $HTML);
            if( $ECHO ){
                echo str_replace("\n", " ", $HTML);
            }else{
                return $HTML = str_replace("\n", " ", $HTML);
            }
        }
    }

    function getTema(){
        return get_template_directory_uri();
    }

    function getHome(){
        global $wpdb;
        return $wpdb->get_var("SELECT option_value FROM wp_options WHERE option_name = 'siteurl'");
    }
?>