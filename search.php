<?php get_header(); ?>
<main>
    <section id="bn-cate">
        <div class="avarta"><img src="<?php bloginfo('template_directory'); ?>/images/slide12.jpg" class="img-fluid" width="100%" alt=""></div>
        <div class="container">
            <div class="title-cate">
                <span>Kết quả tìm kiếm: <?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?></span>
            </div>
        </div>
    </section>
    <section id="news-cate">
        <div class="content">
            <div class="container">
                <div class="row">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <div class="item">
                                <div class="avarta">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="img-fluid" src='<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>' alt='<?php the_title(); ?>' />
                                    </a>
                                </div>
                                <div class="info">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="time"><span><?php echo get_the_date('d.m.Y'); ?></span></div>
                                </div>
                            </div>
                        </div>         
                    <?php endwhile; else : ?>
                     <p>Không có bài viết nào trong chuyên mục!</p>
                    <?php endif; ?>
                </div>
                <?php if(paginate_links()!='') { ?>
                  <div class="pagination">
                    <?php
                      global $wp_query;
                      $big = 999999999;
                      echo paginate_links( 
                        array(
                          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                          'format' => '?paged=%#%',
                          'prev_text'    => __('«'),
                          'next_text'    => __('»'),
                          'current' => max( 1, get_query_var('paged') ),
                          'total' => $wp_query->max_num_pages
                        ) 
                      );
                    ?>
                  </div>
                <?php } ?>
            </div>
        </div>
    </section>
	<?php get_template_part("template_part/before", "footer" ); ?>
</main>
<?php get_footer(); ?>