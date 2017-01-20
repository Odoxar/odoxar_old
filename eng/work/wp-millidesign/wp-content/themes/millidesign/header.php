<?php
?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<div class="callback-popup-form-wrap mfp-hide">
			<form class="contacts-form" action="" method="POST">
				<label class="contacts-form-label">заказать звонок</label><br>
				<input type="text" placeholder="ФИО"><br>
				<input type="text" placeholder="Телефон"><br>
				<textarea placeholder="Сообщение"></textarea>
				<button class="contacts-form-btn btn" type="submit">отправить заявку</button>
			</form>
			<button title="%title%" type="button" class="mfp-close">&#215;</button>
		</div>
		<div class="header-wrap">
			<div class="container">
				<div class="row">
					<div class="logo">
						<a href="<?php echo home_url(); ?>" class="logo-link">
							<?php
								$idObj = get_category_by_slug('logo');
								$id = $idObj->term_id;
								if ( have_posts() ) : query_posts('cat=' . $id);
								while (have_posts()) : the_post(); ?>
									<p class="logo-big"><span class="logo-milli"><?php echo get_post_meta($post->ID, 'logo-milli', true); ?></span><?php echo get_post_meta($post->ID, 'logo-big', true); ?></p>
									<p class="logo-small"><?php echo get_post_meta($post->ID, 'logo-small', true); ?></p>
							<? endwhile; endif; wp_reset_query(); ?>
						</a>
					</div>
						<? wp_nav_menu(array('menu' => 'main-menu', 'menu_class' => 'header-menu')); ?>
					<div class="header-info">
					<?php
						$idObj = get_category_by_slug('info-contacts');
						$id = $idObj->term_id;
						if ( have_posts() ) : query_posts('cat=' . $id);
						while (have_posts()) : the_post();
						$do_not_duplicate[] = $post->ID ?>
							<a href="tel:<?php the_title(); ?>" class="header-info-phone"><i class="fa  <?php echo get_post_meta($post->ID, 'fa-phone', true); ?>" aria-hidden="true"></i> <span class="header-info-text"><?php the_title(); ?></span></a>
							<p class="header-info-time"><i class="fa <?php echo get_post_meta($post->ID, 'fa-clock-o', true); ?>" aria-hidden="true"></i> <span class="header-info-text"><?php the_content(); ?></span></p>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>

					<button class="btn header-callback-btn">заказать обратный звонок</button>
				</div>
			</div>
		</div>
	</header>