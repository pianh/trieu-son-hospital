<?php 
    /*
Template name: Giới thiệu
*/
?>

<?php get_header(); ?>
	<main>
			<section id="bn-cate">

				<div class="avarta"><img src="<?php bloginfo('template_directory'); ?>/images/slide12.jpg" class="img-fluid" width="100%" alt=""></div>

				<div class="container">

					<div class="title-cate">

						<span><?php the_title(); ?></span>

					</div>

				</div>

			</section>

			<section id="details-content">

				<div class="container">
					<?php the_content(); ?>
				</div>

			</section>

			<section id="check-calendar">

				<div class="avarta-banner">

					<img src="<?php bloginfo('template_directory'); ?>/images/banner3.jpg" class="img-fluid" width="100%" alt="">

				</div>

				<div class="info-caption">

					<div class="container">

						<div class="item">

							<h3><?php the_field('title_1'); ?></h3>

							<div class="title-hot"><?php the_field('title_2'); ?></div>

							<div class="link-carl">

								<a href="<?php the_field('link'); ?>">đặt lịch khám</a>

							</div>

						</div>

					</div>

				</div>

			</section>

		<?php get_template_part("template_part/section", "doctor" ); ?>
		<?php get_template_part("template_part/before", "footer" ); ?>
	</main>

<?php get_footer(); ?>