<?php get_header(); ?>

	<main>

		<section id="banner">

			<div class="swiper-container slide-bner">

			    <div class="swiper-wrapper">
				<?php $slide_show = get_field('slide_show', 'option'); ?>
				<?php foreach ($slide_show as $key => $value) { ?>
					<div class="swiper-slide">
			      	<div class="avarta">
						<a href=""><img src="<?php echo $value['url'] ?>" width="100%" class="img-fluid" alt="<?php echo $value['alt'] ?>"></a>
					</div>
					<div class="caption-slide">
						<div class="left">
							<div class="info-slide">
								<div class="container">
									<div class="content-left">
										<h3><?php echo $value['caption'] ?></h3>
										<h1><?php echo $value['title'] ?></h1>
										<div class="btn-form">
											<a href="<?php bloginfo('url'); ?>#regist">ĐẶT LỊCH KHÁM</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="place">
							<div class="container">
								<p><?php echo $value['description']; ?></p>
							</div>
						</div>
					</div>
			      </div>
				<?php } ?>
			      


			    </div>

			    <!-- Add Arrows -->

			    <div class="swiper-button-next" style="background: none;"><img src="<?php bloginfo('template_directory'); ?>/images/right.png" class="img-fluid" alt=""></div>

			    <div class="swiper-button-prev" style="background: none;"><img src="<?php bloginfo('template_directory'); ?>/images/left.png" class="img-fluid" alt=""></div>

			</div>		

		</section>



		<section id="service">

			<div class="container-fluid">

				<div class="row">
					<?php $args = array( 
						'post_type' => 'dich-vu', 
						'posts_per_page' => 6, 
						'post_status' => 'publish');
					?>
					<?php $getposts = new WP_query( $args);?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<div class="col-md-2">
						<div class="item">
							<div class="avarta">
								<img src='<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>' class="img-fluid" alt='<?php the_title(); ?>' />
							</div>
							<div class="caption">
								<div class="info">
									<div class="icon"><img src="<?php the_field('icon'); ?>" class="img-fluid img-hid" alt="<?php the_title() ?>"></div>
									<div class="icon img-hov"><img src="<?php the_field('icon'); ?>" class="img-fluid class-w" alt="<?php the_title(); ?>"></div>
									<div class="title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>


				</div>

			</div>

		</section>



		<section id="news">

			<div class="container">

				<div class="title">Tin tức nổi bật</div>

				<div class="slide-news-home">
					<div class="swiper-container slide-news">
					    <div class="swiper-wrapper">
							<?php $args = array( 
								'post_type' => 'post', 
								'posts_per_page' => 10, 
								'post_status' => 'publish');
								?>
							<?php $getposts = new WP_query( $args);?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							<?php global $product; ?>
								<div class="swiper-slide">
									<div class="item">
										<div class="avarta">
											<a href="<?php the_permalink(); ?>">
												<img src='<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>' class="img-fluid" alt='<?php the_title(); ?>' />
											</a>
										</div>
										<div class="info">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<div class="date-time">
												<span><?php echo get_the_date('d.m.Y'); ?></span>
											</div>
										</div>
									</div>
								</div>
							<?php endwhile; wp_reset_postdata(); ?>
					    </div>

					    <!-- Add Pagination -->

					    <div class="swiper-pagination"></div>

					</div>

				</div>

			</div>

		</section>



		<section id="infomation">

			<div class="content">

				<div class="container">

					<div class="content-doct">

						<div class="row">

							<div class="col-md-4">

								<div class="left pull-left">
									<?php $info_home = get_field('info_home', 'option') ?>
									<?php foreach ($info_home as $key => $value) { ?>
										<?php if($key < 3) { ?>
											<div class="item">
												<div class="heart">
													<div class="avarta"><img src="<?php bloginfo('template_directory'); ?>/images/heart.png" class="img-fluid" alt=""></div>
												</div>
												<div class="info">
													<h3><?php echo $value['title']; ?></h3>
													<p><?php echo $value['content'] ?></p>
												</div>
											</div>
										<?php } ?>
									<?php } ?>
								</div>

							</div>

							<div class="col-md-4">
								<div class="cent">
									<div class="item">
										<div class="avarta">
											<img src="<?php bloginfo('template_directory'); ?>/images/doctor.png" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="right pull-right">
									<?php foreach ($info_home as $key => $value) { ?>
										<?php if($key >= 3) { ?>
											<div class="item">
												<div class="heart">
													<div class="avarta"><img src="<?php bloginfo('template_directory'); ?>/images/heart.png" class="img-fluid" alt=""></div>
												</div>
												<div class="info">
													<h3><?php echo $value['title']; ?></h3>
													<p><?php echo $value['content']; ?></p>
												</div>
											</div>
										<?php } ?>
									<?php } ?>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section>



		<section id="regist">

			<div class="bg-bott"></div>

			<div class="content">

				<div class="container">

					<div>

						<div class="row">

							<div class="col-md-6">

								<div class="left">

									<div class="avarta"><img src="<?php bloginfo('template_directory'); ?>/images/form1.png" class="img-fluid" alt=""></div>

								</div>

							</div>

							<div class="col-md-6">

								<div class="right">

									<div class="title">

										<img src="<?php bloginfo('template_directory'); ?>/images/earth.png" class="img-fluid" alt=""><span>đặt lịch khám và tư vấn</span>

									</div>

									<div class="list-item">
										<?php echo do_shortcode( '[contact-form-7 id="2efd0c0" title="Form đặt lịch"]'); ?>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section>



	<?php get_template_part("template_part/section", "doctor" ); ?>


	<?php get_template_part("template_part/before", "footer" ); ?>

	</main>
<?php get_footer(); ?>