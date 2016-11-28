<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package advant_lighting
 */

$price = get_field("price_product");
$spec_title_1 = get_field("spec_title_1");
$spec_title_2 = get_field("spec_title_2");
$spec_title_3 = get_field("spec_title_3");
$spec_title_4 = get_field("spec_title_4");
$spec_title_5 = get_field("spec_title_5");
$spec_title_6 = get_field("spec_title_6");
$spec_title_7 = get_field("spec_title_7");
$spec_title_8 = get_field("spec_title_8");
$spec_title_9 = get_field("spec_title_9");
$spec_title_10 = get_field("spec_title_10");
$spec_desc_1 = get_field("spec_desc_1");
$spec_desc_2 = get_field("spec_desc_2");
$spec_desc_3 = get_field("spec_desc_3");
$spec_desc_4 = get_field("spec_desc_4");
$spec_desc_5 = get_field("spec_desc_5");
$spec_desc_6 = get_field("spec_desc_6");
$spec_desc_7 = get_field("spec_desc_7");
$spec_desc_8 = get_field("spec_desc_8");
$spec_desc_9 = get_field("spec_desc_9");
$spec_desc_10 = get_field("spec_desc_10");

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
								<img src=<?php the_post_thumbnail(); ?>
								<a class="" title=""></a>
						</div>
						<div class="col-md-8">
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
