<?php

function up_header_tools($atts) {
	ob_start(); ?>

	<div class="wp-block-udemy-plus-header-tools">
        <a class="signin-link open-modal" href="#">
            <div class="signin-icon">
                <i class="bi bi-person-circle"></i>
            </div>
            <div class="signin-text">
                <small>Hello, Sign in</small>
                My Account
             </div>
        </a>
    </div>

	<?php
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}