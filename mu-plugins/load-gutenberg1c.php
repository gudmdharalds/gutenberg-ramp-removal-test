<?php

if ( defined ( 'IS_PRODUCTION') ) {
	add_filter( 'use_block_editor_for_post', '__return_true' ); 

	add_filter( 'use_block_editor_for_post', '__return_true' ); 

	add_filter( 'use_block_editor_for_post', '__return_true' ); 

	add_filter( 'use_block_editor_for_post', '__return_true' ); 

}

else {
	add_filter( 'use_block_editor_for_post', '__return_false' ); 

	add_filter( 'use_block_editor_for_post', '__return_false' ); 

	add_filter( 'use_block_editor_for_post', '__return_false' ); 

	add_filter( 'use_block_editor_for_post', '__return_false' ); 

}

