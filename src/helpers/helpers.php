<?php

if( ! function_exists( 'parseToInteger' ) ) {
    function parseToInteger( $value = 0 ) {
        return (int)( preg_replace( "/([,])/", "", $value ) );
    }
}

if( ! function_exists( 'parseToNumber' ) ) {
    function parseToNumber( $value = 0, $decimal = null ) {
    	if( $decimal === null ) {
        	return preg_replace( "/([,])/", "", $value );
        }
    	return round( preg_replace( "/([,])/", "", $value ), $decimal );
    }
}

if( ! function_exists( 'parseToCurrency' ) ) {
    function parseToCurrency( $value = 0, $decimal = null ) {
    	if( $decimal === null ) {
    		$decimal = 0;
	    	$exploded = explode( '.', $value );
	    	if( count( $exploded ) > 1 ) {
	    		$decimal = strlen( end( $exploded ) );
	    	}
	    }
        return number_format( $value, $decimal );
    }
}