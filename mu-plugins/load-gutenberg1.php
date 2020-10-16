<?php

if ( defined ( 'IS_PRODUCTION') ) {
	gutenberg_ramp_load_gutenberg( true ); 
}

else {
	gutenberg_ramp_load_gutenberg( false ); 
}

