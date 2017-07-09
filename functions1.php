add_filter( 'mime_types', 'add_mime_type' );
function add_mime_type( $mimes ) {
	//$mimes['rar'] = 'application/x-rar-compressed';
	$mimes['fb2'] = 'application/fb2';
	
	return $mimes;
}

add_filter( 'upload_mimes', 'additional_mime_types' );
function additional_mime_types( $mimes ) {
	$mimes['rar'] = 'application/x-rar-compressed';
	$mimes['fb2'] = 'application/fb2';
	
	return $mimes;
}
