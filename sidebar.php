<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?><?php endif; ?>
<div class="new-news">
    <div class="title"><span>Tin mới</span></div>
    <ul>
        <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'post_status' => 'publish'); ?>
        <?php $getposts = new WP_query( $args);?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <li>
            <div class="item">
                <div class="avarta">
                    <a href="<?php the_permalink(); ?>">
                        <img class="img-fluid"
                            src='<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>'
                            alt='<?php the_title(); ?>' />
                    </a>
                </div>
                <div class="info">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
            </div>
        </li>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
</div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_2') ) : ?><?php endif; ?>
