<?php

if ( defined ( 'IS_PRODUCTION') ) {
	wpcom_vip_load_gutenberg( [ 'post_types' => [ 'post' ] ] );
}


