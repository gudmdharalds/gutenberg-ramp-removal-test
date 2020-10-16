<?php

if ( defined ( 'IS_PRODUCTION') ) {
	ramp_for_gutenberg_load_gutenberg( true ); 
}

else {
	wpcom_vip_load_gutenberg( false ); 
}

