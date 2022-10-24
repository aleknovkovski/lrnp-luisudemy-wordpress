<?php

function up_register_blocks() {
	$blocks = [
		['name' => 'fancy-header'],
		['name' => 'search-form'] // <~ NEW BLOCK
	];
	foreach($blocks as $block) {
		register_block_type(
			UP_PLUGIN_DIR . 'build/blocks/' . $block['name']
		);
	}
}
