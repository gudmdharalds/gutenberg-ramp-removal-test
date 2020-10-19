<?php

if ( defined ( 'IS_PRODUCTION') ) {
	gutenberg_ramp_load_gutenberg( array( 'load' => 1, ) ); 

	gutenberg_ramp_load_gutenberg( array( 'load' => 1 ) ); 

	gutenberg_ramp_load_gutenberg( array( 'load' => true, ) ); 

	gutenberg_ramp_load_gutenberg( array( 'load' => true ) ); 

	gutenberg_ramp_load_gutenberg( array(
		'load' => true
	) ); 
}

else {
	gutenberg_ramp_load_gutenberg( array( 'load' => 0, ) ); 

	gutenberg_ramp_load_gutenberg( array( 'load' => 0 ) ); 

	gutenberg_ramp_load_gutenberg( array( 'load' => false, ) ); 

	gutenberg_ramp_load_gutenberg( array( 'load' => false ) ); 

	gutenberg_ramp_load_gutenberg( array(
		'load' => false
	) ); 

}

