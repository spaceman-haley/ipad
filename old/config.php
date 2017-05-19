<?php

	ini_set( "display_errors", true );
	define( "DAWSON", "dawson" );
	define( "CHAPMAN", "chapman" );
	define( "MORRIS", "morris" );
	 
	function handleException( $exception ) {
	  echo "Sorry, a problem occurred. Please try later.";
	  error_log( $exception->getMessage() );
	}
	 
	set_exception_handler( 'handleException' );
?>