<?php
?>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="logo">
				<a href="#" class="logo-link">
					<?php
						$idObj = get_category_by_slug('logo');
						$id = $idObj->term_id;
						if ( have_posts() ) : query_posts('cat=' . $id);
						while (have_posts()) : the_post(); ?>
						<p class="logo-big"><span class="logo-milli"><?php echo get_post_meta($post->ID, 'logo-milli', true); ?></span><?php echo get_post_meta($post->ID, 'logo-big', true); ?></p>
						<p class="logo-small"><?php echo get_post_meta($post->ID, 'logo-small', true); ?></p>
						<? endwhile; endif; wp_reset_query();
					?>
				</a>
			</div>
			<p class="footer-text">
				<?php
					$idObj = get_category_by_slug('footer');
					$id = $idObj->term_id;
				?>
				<?php echo $idObj->category_description; ?>
			</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>