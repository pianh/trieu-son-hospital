<div class="item">
    <div class="avarta">
        <a href="<?php the_permalink(); ?>">
            <img class="img-fluid" src='<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>'
                alt='<?php the_title(); ?>' />
        </a>
    </div>
    <div class="info">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="time"><span><?php echo get_the_date('d.m.Y'); ?></span></div>
    </div>
</div>