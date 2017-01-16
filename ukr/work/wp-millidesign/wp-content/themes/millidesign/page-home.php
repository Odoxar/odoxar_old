<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package millidesign
 */

get_header(); ?>

<main class="main">
	<div class="header-main" id="home">
		<div class="header-main-content">
			<?php
				$idObj = get_category_by_slug('header-main');
				$id = $idObj->term_id;
				if ( have_posts() ) : query_posts('cat=' . $id);
				while (have_posts()) : the_post(); ?>
					<h1 class="header-main-title wow bounceInDown"><?php the_title(); ?></h1>
					<p class="header-main-text wow bounceInLeft"><?php the_content(); ?></p>
					<p class="header-main-price wow bounceInRight"><?php echo get_post_meta($post->ID, 'header-main-price-begin', true); ?> <i class="fa <?php echo get_post_meta($post->ID, 'header-main-rub', true); ?>" aria-hidden="true"></i> <?php echo get_post_meta($post->ID, 'header-main-price-end', true); ?></p>
					<a href="#form" class=" btn header-main-btn wow zoomIn" >отправить заявку</a>
			<? endwhile; endif; wp_reset_query(); ?>
		</div>
	</div>
	<section class="why_we"  id="about_us">
		<div class="container">
			<div class="row wow slideInUp">
				<?php
					$idObj = get_category_by_slug('why_we');
					$id = $idObj->term_id;
				?>
					<h2 class="why_we-title"><?php echo $idObj->name; ?></h2>
				<?php
					if ( have_posts() ) : query_posts('cat=' . $id);
					while (have_posts()) : the_post(); ?>
					<div class="why_we-item col-lg-3 col-md-3 col-sm-6 wow zoomIn" data-wow-delay="0.5s"><a href="#" class="why_we-link">
						<?php the_content(); ?>
						</a>
						<p class="why_we-item-text"><?php the_title(); ?></p>
					</div>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="why_we-slider">
						<?php
						$idObj = get_category_by_slug('slider');
						$id = $idObj->term_id;
						if ( have_posts() ) : query_posts('cat=' . $id);
						while (have_posts()) : the_post(); ?>
					<div class="why_we-slider-item">
						<img alt="" class="why_we-slider-item-image" src=" <?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?> ">
						<div class="why_we-slider-item-content">
							<h2 class="slider-item-content-title"><?php the_title(); ?></h2>
							<p class="slider-item-content-text"><?php the_content(); ?>
							</p>
							<a href="#" class="slider-item-content-btn">подробнее<i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
						<? endwhile; endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio-wrap"  id="portfolio">
        <div class="container-fluid">
            <div class="row">
                <div class="portfolio wow slideInUp">
					<?php
					$idObj = get_category_by_slug('portfolio');
					$id = $idObj->term_id;
					?>
                    <div class="portfolio-title">
                        <h2 class="portfolio-title-header"><?php echo $idObj->name; ?></h2>
                        <p class="portfolio-title-text"><?php echo $idObj->category_description; ?></p>
                    </div>
                    <div class="portfolio-project">
						<?php
						if ( have_posts() ) : query_posts('cat=' . $id);
						while (have_posts()) : the_post(); ?>
                        <div class="portfolio-project-item">
                           <img class="project-item-image-small" src=" <?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?> " alt="" />
                            <div class="fancybox-hover">
								<div class="fancybox-hover-bg"></div>
                                <!--<a href="  " rel="simple" class="fancybox fancybox-hover-link">-->
                                    <!--<img src="<?php bloginfo( template_url ); ?>/images/link.png" alt="" class="fancybox-hover-link-image">-->
                                <!--</a>-->
								<?php the_content(); ?>
                                <div class="fancybox-hover-title">
                                    <h3 class="fancybox-hover-header"><?php the_title(); ?></h3>
                                    <p class="fancybox-hover-text"><?php echo get_post_meta($post->ID, 'portfolio-hover-text', true); ?></p>
                                </div>
                            </div>
                        </div>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
                </div>
            </div>
        </div>
    </section>

	<section class="price wow slideInUp"  id="price">
		<div class="container">
			<div class="row">
				<div class="price-header">
					<?php
					$idObj = get_category_by_slug('price');
					$id = $idObj->term_id;
					?>
					<h2 class="price-header-title"><?php echo $idObj->name; ?></h2>
					<p class="price-header-text"><?php echo $idObj->category_description; ?></p>
				</div>
				<?php
						if ( have_posts() ) : query_posts('cat=' . $id);
						while (have_posts()) : the_post(); ?>
				<div class="price-item <?php echo get_post_meta($post->ID, 'price-main-class', true); ?> col-lg-4 col-md-4 col-sm-4 wow zoomIn" data-wow-delay="1s">
					<div class="price-item-wrap">
						<div class="price-item-header">
							<h3 class="price-item-header-title"><?php the_title(); ?></h3>
						</div>
						<div class="price-item-cash">
							<p class="price-item-cash-text"><?php echo get_post_meta($post->ID, 'price', true); ?>
								<span class="cash-text-sup"><?php echo get_post_meta($post->ID, 'price-zero', true); ?> <i class="fa <?php echo get_post_meta($post->ID, 'fa-rub', true); ?>" aria-hidden="true"></i></span>
								<span class="cash-text-sub"><?php echo get_post_meta($post->ID, 'price-sale', true); ?></span>
							</p>
							<div class="price-item-design"></div>
						</div>
						<?php the_content(); ?>
						<button class="price-item-btn <?php echo get_post_meta($post->ID, 'price-main-btn-class', true); ?>">отправить заявку</button>
					</div>
				</div>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
	</section>
	<section class="contacts"  id="contacts">
		<div class="container-fluid">
			<div class="row">
				<div class="contacts-form-wrap wow bounceInRight" data-wow-duration="1.5s" id="form">
					<form class="contacts-form" action="" method="POST">
						<label class="contacts-form-label">оформить заявку</label><br>
						<input type="text" placeholder="Имя"><br>
						<input type="text" placeholder="Номер телефона"><br>
						<input type="text" placeholder="Эл. почта"><br>
						<button class="contacts-form-btn btn" type="submit">отправить заявку</button>
					</form>
				</div>
				<div id="map" class="map">
					<?php
					$idObj = get_category_by_slug('map');
					$id = $idObj->term_id;
					?>
					<iframe width="100%" height="530" frameborder="0" style="border:0"
							src="<?php echo $idObj->category_description; ?>" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
