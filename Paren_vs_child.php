$cat_product_wer = get_the_terms ($product->get_id(), 'product_cat');
	
	if ( $cat_product_wer ) {
		$res = '';
		$child_id = '';
		
		$author = '';
		$authorLink = '#';
		$series = [];
		foreach ( $cat_product_wer as $term ) {
			if ($term->parent == 0) {
				$author = $term->name;
				$authorLink = $term->name;
			} else {
				$series[] = array(
					'name' => $term->name,
					'link' => get_term_link($term->term_id,'product_cat' ),
				);
			}
			?>
		
		<?php } ?>
		<?php if ($author) { ?>
			<div class="posted_in">
				<span>Автор: </span>
				<a href="<?php echo $authorLink; ?>">
					<?php echo $author; ?>
				</a>
			</div>
		<?php } ?>
		
		<?php if ($series) {?>
			<div class="posted_in">
				<span>Серия: </span>
				<?php foreach ($series as $seriesOne) {?>
					<a href="<?php echo $seriesOne['link']; ?>">
						<?php echo $seriesOne['name']; ?>
					</a>
				<?php }?>
			</div>
		<?php }?>
	
	<?php } ?>
