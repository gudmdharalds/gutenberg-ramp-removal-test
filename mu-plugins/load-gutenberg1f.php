<?php

if ( defined ( 'IS_PRODUCTION') ) {
	gutenberg_ramp_load_gutenberg( [ 'load' => 1 ] ); 

	gutenberg_ramp_load_gutenberg( [ 'load' => 1, ] ); 

	gutenberg_ramp_load_gutenberg( [ 'load' => true ] ); 

	gutenberg_ramp_load_gutenberg( [ 'load' => true, ] ); 

	gutenberg_ramp_load_gutenberg(
		[ 'load' => true, ]
	); 
}

else {
	gutenberg_ramp_load_gutenberg( [ 'load' => 0 ] ); 

	gutenberg_ramp_load_gutenberg( [ 'load' => 0, ] ); 

	gutenberg_ramp_load_gutenberg( [ 'load' => false ] ); 

	gutenberg_ramp_load_gutenberg( [ 'load' => false, ] ); 

	gutenberg_ramp_load_gutenberg( [
		'load' => false,
	] ); 

}

