		<section id="doctor">

			<div class="content">

				<div class="title">ĐỘI NGŨ Y - BÁC SỸ BỆNH VIỆN</div>

				<div class="container-fluid">

					<div class="slide-list-doctor">

						<div class="swiper-container slide-doctor">

						    <div class="swiper-wrapper">
								<?php $args = array( 
									'post_type' => 'bac-sy', 
									'posts_per_page' => -1, 
									'post_status' => 'publish'); 
								?>
								<?php $getposts = new WP_query( $args);?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="swiper-slide">
										<div class="item">
											<div class="avarta">
												<img src='<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>' class="img-fluid" alt='<?php the_title(); ?>' />
											</div>
											<div class="info">
												<div class="name">Bác sĩ <?php the_title(); ?></div>
												<div class="room"><?php the_field('position'); ?></div>
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

			</div>

		</section>