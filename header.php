<!DOCTYPE html>

<html <?php language_attributes(); ?>><head>

	<title> <?php wp_title(); ?> </title>

	<meta charset="<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">


	<?php wp_head(); ?>

</head>

<body <?php if(!is_tag()) { body_class(); } ?> >

	<header>

		<div class="header-top">

			<div class="container">

				<div class="row">

					<div class="col-md-9">

						<div class="left">

							<ul>

								<li>

									<div class="sotical">

										<ul class="list-inline">
											<?php 
												$social = get_field('social', 'option');
											?>
											<?php foreach ($social as $key => $value) { ?>
												<li class="list-inline-item">
													<a target="_blank" rel="nofollow" href="<?php echo $value['link'] ?>"><?php echo $value['icon'] ?></a>
												</li>
											<?php } ?>

										</ul>

									</div>

								</li>

							<li><span>Hotline: <?php the_field('phone', 'option') ?></span></li>

							<li><span>Email: <?php the_field('email', 'option') ?></span></li>

							</ul>

						</div>

					</div>

					<div class="col-md-3">

						<div class="right pull-right">

							<a href="<?php bloginfo('url'); ?>#regist">Đặt lịch khám</a>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="header-menu">

			<div class="container">

				<div class="menu-mobile" style="display: none;">

					<div class="row">

						<div class="col-md-9 col-sm-9 col-xs-9">

							<div class="logo">

								<a href="<?php bloginfo('url'); ?>"><img src="<?php the_field('logo', 'option') ?>" class="img-fluid" alt="<?php bloginfo('name') ?>"></a>

							</div>

						</div>

						<div class="col-md-3 col-sm-3 col-xs-3">

							<div class="btn-menu">

								<a href="javascript:0"><i class="fa fa-times fa-bars"></i></a>

							</div>

						</div>

					</div>

				</div>

				<ul class="list-inline fix-logo">

					<li class="list-inline-item">

						<div class="logo">

							<a href="<?php bloginfo('url'); ?>"><img src="<?php the_field('logo', 'option') ?>" class="img-fluid" alt="<?php bloginfo('name') ?>"></a>

						</div>

					</li>
				</ul>

				<?php wp_nav_menu( 
					array( 
						'theme_location' => 'main_nav', 
						'container' => 'false', 
						'menu_id' => 'main-nav', 
						'menu_class' => 'list-inline fix-menu') ); 
				?>

				<ul class="list-inline-fix fix-search">
					<li class="list-inline-item">
						<a href="javascript:0" class="search-menu"><img src="<?php bloginfo('template_directory'); ?>/images/search.png" class="img-fluid" alt=""></a>
						<div class="form-seaarch">
							<form action="<?php bloginfo('url'); ?>">
								<input type="text" name="s" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
							</form>
						</div>
					</li>
				</ul>
			</div>

		</div>

	</header>