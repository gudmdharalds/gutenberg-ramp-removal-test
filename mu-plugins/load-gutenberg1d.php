<?php

if ( defined ( 'IS_PRODUCTION') ) {
	ramp_for_gutenberg_load_gutenberg( array( 'load' => 1 ) ); 
}

else {
	wpcom_vip_load_gutenberg( array( 'load' => 0 ) ); 
}

