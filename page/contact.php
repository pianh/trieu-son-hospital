<?php
/*
Template name: Liên Hệ
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
		<section id="contact">
			<div class="content">
				<div class="container">
					<div class="content-contact">
						<div class="row">
							<div class="col-md-5">
								<div class="left">
									<div class="logo"><a href="/"><img src="<?php the_field('logo', 'option'); ?>" class="img-fluid" alt=""></a></div>
									<p><i class="fa fa-home"></i>Giờ mở cửa: <?php the_field('open_time'); ?></p>
									<p><i class="fa fa-map-marker"></i>Địa chỉ: <?php the_field('address'); ?></p>
									<p><i class="fa fa-phone"></i>Điện thoại</p>
									<p class="number-phone"><?php the_field('phone'); ?></p>
								</div>
							</div>
							<div class="col-md-7">
								<div class="right">
									<?php echo do_shortcode( '[contact-form-7 id="686ca27" title="Form liên hệ"]' ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php get_template_part("template_part/before", "footer" ); ?>
</main>
<?php get_footer(); ?>