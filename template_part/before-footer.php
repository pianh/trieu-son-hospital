<section id="maps">

    <div class="maps-iframe">
        <?php the_field('map','option'); ?>
    </div>

</section>

<section id="apss">

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <div class="title">Chăm sóc sức khỏ bản thân hơn với Triệu Sơn Hospital App</div>

            </div>

            <div class="col-md-5">

                <div class="list-app">

                    <ul class="list-inline">

                        <li class="list-inline-item">
                            <a target="_blank" href="<?php the_field('link_app_android', 'option'); ?>">
                                <img
                                    src="<?php bloginfo('template_directory'); ?>/images/app1.png" alt="">
                                </a></li>
                        <li class="list-inline-item"> 
                            <a target="_blank" href="<?php the_field('link_app_ios', 'option'); ?>">
                                <img
                                    src="<?php bloginfo('template_directory'); ?>/images/app2.png" alt="">
                                </a></li>

                    </ul>

                </div>

            </div>

            <div class="col-md-3">

                <div class="right">

                    <img src="<?php bloginfo('template_directory'); ?>/images/app3.png" class="img-fluid" alt="">

                </div>

            </div>

        </div>

    </div>

</section>