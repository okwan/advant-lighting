<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package advant_lighting
 */

$price = get_field("price_product");

get_header(); ?>
	<!-- main-container start -->
	<!-- ================ -->
	<section class="main-container">

		<div class="container">
			<div class="row">
        <?php
        while ( have_posts() ) : the_post(); ?>
				<!-- main start -->
				<!-- ================ -->
				<div class="main col-md-12">

					<a href = ""
					<!-- page-title start -->
					<!-- ================ -->
					<h1 class="page-title"><?php the_title(); ?></h1>
					<div class="separator-2"></div>
					<!-- page-title end -->

					<div class="row">
						<div class="col-md-4">
							<!-- pills start -->
							<!-- ================ -->
							<!-- Nav tabs -->
							<ul class="nav nav-pills" role="tablist">
								<li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-5"></i> Photo</a></li>
								<li><a href="#pill-2" role="tab" data-toggle="tab" title="video"><i class="fa fa-video-camera pr-5"></i> Video</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content clear-style">
								<div class="tab-pane active" id="pill-1">
									<div class="owl-carousel content-slider-with-large-controls">
										<div class="overlay-container overlay-visible">
											<img src=<?php the_post_thumbnail(); ?>>
											<a href="images/product-1.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
										</div>
										<div class="overlay-container overlay-visible">
											<img src="images/product-1-2.jpg" alt="">
											<a href="images/product-1-2.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="pill-2">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
										<p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
									</div>
								</div>
							</div>
							<!-- pills end -->
						</div>
						<div class="col-md-8 pv-30">
							<h2>Description</h2>
							<?php the_content(); ?>
							<hr class="mb-10">

							<div class="light-gray-bg p-20 bordered clearfix">
								<span class="product price"><i class="icon-tag pr-10"></i><?php echo $price; ?></span>
								<div class="product elements-list pull-right clearfix">
									<input type="submit" value="Add to Cart" class="margin-clear btn btn-default">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main end -->

			</div>
		</div>
	</section>
	<!-- main-container end -->

	<!-- section start -->
	<!-- ================ -->
	<section class="pv-30 light-gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs style-4" role="tablist">
						<li class="active"><a href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-files-o pr-5"></i>Specifications</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content padding-top-clear padding-bottom-clear">
						<div class="tab-pane fade in active" id="h2tab2">
							<h4 class="space-top">Specifications</h4>
							<hr>
							<dl class="dl-horizontal">
								<dt>Model</dt>
								<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>
								<dt>Lumen Output</dt>
								<dd>Adipisci autem illo hic itaque nulla velit quod laboriosam ipsum in illum!</dd>
								<dt>CRI</dt>
								<dd>Velit mollitia vel nemo, repudiandae quas nisi consectetur maiores beatae.</dd>
								<dt>Output</dt>
								<dd>Dolor, architecto, accusamus. Explicabo, culpa hic sapiente amet libero, recusandae laudantium consequatur velit possimus ratione quo. Ipsum maxime officia quasi quos magni!</dd>
								<dt>Voltage</dt>
								<dd>Odio cum deleniti mollitia, quisquam dignissimos voluptatem, unde rem alias.</dd>
								<dt>Colour Temperature</dt>
								<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>
								<dt>Dimensions</dt>
								<dd>Rem nostrum sit magnam debitis quidem perspiciatis fuga fugit.</dd>
								<dt>Beam Angle</dt>
								<dd>Rem nostrum sit magnam debitis quidem perspiciatis fuga fugit.</dd>
								<dt>Certification</dt>
								<dd>Rem nostrum sit magnam debitis quidem perspiciatis fuga fugit.</dd>
								<dt>Warranty</dt>
								<dd>Rem nostrum sit magnam debitis quidem perspiciatis fuga fugit.</dd>
							</dl>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section end -->
<?php endwhile; ?>
<?php get_footer(); ?>
