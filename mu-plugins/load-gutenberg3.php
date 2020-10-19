<?php

if ( defined ( 'IS_PRODUCTION') ) {
	gutenberg_ramp_load_gutenberg( [ 'post_types' => [ 'post' ] ] );
}


