<?php

function up_rest_api_signin_handler($request) {
	$response = ['status' => 1];
	$params = $request->get_json_params();

	$response['status'] = 2;
	return $response;
}