add_filter( 'the_content', 'artabr_remove_alight_class_img', 5 );
function artabr_remove_alight_class_img( $content ) {
	$alightimg = "
	<script type='text/javascript'>
	jQuery(document).ready(function ($){
    $('.entry p img').removeClass('alignleft');
    $('.entry p img').removeClass('alignnone');
    $('.entry p img').addClass('aligncenter');
});
	</script>
	";
	$content   = $alightimg . $content;
	
	return $content;
}
