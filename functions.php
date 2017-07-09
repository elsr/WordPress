function die_p( $var ) {
 echo '<pre>';
 print_r( $var );

 die();
}

function die_v( $var ) {
 echo '<pre>';
 var_dump( $var );

 die();
}
