<?php get_header(); ?>
<main>
        <section id="error">
			<div class="container">

				<div class="content-error">

					<div class="left">

						<div class="item">

							<h1>page not found</h1>

							<p>Trang bạn tìm kiếm không tồn tại. Vui lòng quay lại <a href="index.html">trang chủ</a> hoặc tìm hiểu qua <a href="">chính sách của chúng tôi</a></p>

							<form action="">

								<input type="text" class="form-control" placeholder="Search ...">

							</form>

						</div>

					</div>

					<div class="right">

						<img src="images/girl.png" class="img-fluid" alt="">

					</div> 

				</div>

			</div>
		</section>


	<?php get_template_part("template_part/before", "footer-2" ); ?>
</main>
<?php get_footer(); ?>