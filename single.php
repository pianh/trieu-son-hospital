<?php get_header(); ?>
<main>
		<section id="bn-cate">
			<div class="avarta"><img src="<?php bloginfo('template_directory'); ?>/images/bn-dt.jpg" class="img-fluid" width="100%" alt=""></div>
		</section>
		<section id="detail-new">
			<div class="content">
				<div class="container">
					<div class="left">
						<div class="title-hot">
							<h1><?php the_title(); ?></h1>
							<div class="date"><span><?php echo get_the_date('d.m.Y'); ?></span></div>
						</div>
						<div class="details">
							<div class="left-detail">
								<div class="share">
									<ul>
										<li><a target="_blank" href="/"><img src="<?php bloginfo('template_directory'); ?>/images/sotical1.png" class="img-fluid" alt=""></a></li>
										<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/sotical2.png" class="img-fluid" alt=""></a></li>
									</ul>
								</div>
							</div>
							<div class="right-detail">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
					<div class="right">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
		<section id="news-cate">
			<div class="content">
				<div class="title">Bài viết liên quan</div>
				<div class="container">
					<div class="row">
						<?php
							$categories = get_the_category(get_the_ID());
							if ($categories) 
							{
								$category_ids = array();
								foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
						
								$args=array(
									'category__in' => $category_ids,
									'post__not_in' => array(get_the_ID()),
									'post_per_page'=> 3,
								);
								$my_query = new wp_query($args);
								if( $my_query->have_posts() ) {
									while ($my_query->have_posts()) { $my_query->the_post(); ?>
										<div class="col-md-4">
											<?php get_template_part('template_part/item') ?>
										</div>
									<?php }
								}
							}
						?>
					</div>
				</div>
			</div>
		</section>
	<?php get_template_part("template_part/before", "footer" ); ?>
</main>
<?php get_footer(); ?>