add_shortcode( 'art_related_posts', 'related_posts_function' );
function related_posts_function ($atts){
	$atts = shortcode_atts( array(
		'id' => '',
		'count' => 3
		), $atts );

	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => $atts['count'],
		'include' => $atts['id']
		);
	$out_posts = get_posts( $args );
	$out = '<style>
		.art-rp{
		    background: #ddd;
		    padding: 20px 20px;
		}
	</style>';
	$out .= '<ul class="art-rp">';
	foreach ($out_posts as $post) {
		setup_postdata( $post );
		$out .= '<li><a href="'. get_the_permalink($post->ID) .'">'. get_the_title( $post->ID ) . '</a></li>';
	}
	$out .= '</ul>';
	wp_reset_postdata();

	return $out;
}
 @elsr
  
            
 
Write 
