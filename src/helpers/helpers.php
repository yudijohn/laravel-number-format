<?php

if( ! function_exists( 'parseToInteger' ) ) {
    function parseToInteger( $value = 0 ) {
        return (int)( preg_replace( "/([,])/", "", $value ) );
    }
}

if( ! function_exists( 'parseToCurrency' ) ) {
    function parseToCurrency( $value = 0 ) {
        return number_format( (int)$value, 0, ',', '.' );
    }
}