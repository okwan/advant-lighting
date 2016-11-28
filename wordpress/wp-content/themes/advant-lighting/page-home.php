<?php
/* Template Name: Home Page */

$product_header_description = get_field('product_header_description');
$picture = get_field('picture');
$picture_1_title = get_field('picture_1_title');
$picture_1_desc = get_field('picture_1_desc');
$picture_2 = get_field('picture_2');
$picture_2_title = get_field('picture_2_title');
$picture_2_desc = get_field('picture_2_desc');

 get_header(); ?>


 <!-- banner start -->
 <!-- ================ -->
 <div class="banner clearfix">

 	<!-- slideshow start -->
 	<!-- ================ -->
 	<div class="slideshow">

 		<!-- slider revolution start -->
 		<!-- ================ -->
 		<div class="slider-banner-container">
 			<div class="slider-banner-fullscreen">
 				<ul class="slides">
 					<!-- slide 1 start -->
 					<!-- ================ -->
 					<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="<?php echo $picture_1_title; ?>">

 					<!-- main image -->
 					<img src="<?php echo $picture ?>" alt="<?php echo $picture['alt']; ?>" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

 					<!-- Transparent Background -->
 					<div class="tp-caption dark-translucent-bg"
 						data-x="center"
 						data-y="bottom"
 						data-speed="500"
 						data-easing="easeOutQuad"
 						data-start="0">
 					</div>
          <!-- LAYER NR. 8 -->
          <div class="tp-caption ZoomIn fadeout text-center tp-resizeme large_white"
            data-x="center"
            data-y="100"
            data-speed="500"
            data-easing="easeOutQuad"
            data-start="250"
            data-end="10000"><?php echo $picture_1_title; ?>
          </div>

 					<!-- LAYER NR. 8 -->
 					<div class="tp-caption ZoomIn fadeout text-center tp-resizeme large_white"
 						data-x="center"
 						data-y="170"
 						data-speed="500"
 						data-easing="easeOutQuad"
 						data-start="250"
 						data-end="10000"><div class="separator light"></div>
 					</div>

 					<!-- LAYER NR. 9 -->
 					<div class="tp-caption sft fadeout medium_white text-center"
 						data-x="center"
 						data-y="210"
 						data-speed="500"
 						data-easing="easeOutQuad"
 						data-start="250"
 						data-end="10000"
 						data-endspeed="600"><?php echo $picture_1_desc; ?>
 					</div>

 					<!-- LAYER NR. 10 -->
 					<div class="tp-caption fade fadeout"
 						data-x="center"
 						data-y="bottom"
 						data-voffset="100"
 						data-speed="500"
 						data-easing="easeOutQuad"
 						data-start="2000"
 						data-end="10000"
 						data-endspeed="200">
 						<a href="#page-start" class="btn btn-lg moving smooth-scroll"><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i></a>
 					</div>
 					</li>
 					<!-- slide 1 end -->

 					<!-- slide 2 start -->
 					<!-- ================ -->
 					<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="<?php echo $picture_2_title; ?>">

 					<!-- main image -->
          <img src="<?php echo $picture_2 ?>" alt="<?php echo $picture_2['alt']; ?>" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

 					<!-- Transparent Background -->
 					<div class="tp-caption dark-translucent-bg"
 						data-x="center"
 						data-y="bottom"
 						data-speed="500"
 						data-easing="easeOutQuad"
 						data-start="0">
 					</div>

 					<!-- LAYER NR. 1 -->
 					<div class="tp-caption sfb fadeout large_white text-center"
 						data-x="center"
 						data-y="120"
 						data-speed="500"
 						data-start="1000"
 						data-easing="easeOutQuad"
 						data-end="10000"><span class="logo-font"><?php echo $picture_2_title; ?>
 					</div>

          <!-- LAYER NR. 8 -->
 					<div class="tp-caption ZoomIn fadeout text-center tp-resizeme large_white"
 						data-x="center"
 						data-y="170"
 						data-speed="500"
 						data-easing="easeOutQuad"
 						data-start="250"
 						data-end="10000"><div class="separator light"></div>
 					</div>

 					<!-- LAYER NR. 2 -->
 					<div class="tp-caption sfb fadeout text-center medium_white"
 						data-x="center"
 						data-y="200"
 						data-speed="500"
 						data-start="1300"
 						data-easing="easeOutQuad"
 						data-endspeed="10000"><?php echo $picture_2_desc; ?>
 					</div>

          <!-- LAYER NR. 10 -->
          <div class="tp-caption fade fadeout"
            data-x="center"
            data-y="bottom"
            data-voffset="100"
            data-speed="500"
            data-easing="easeOutQuad"
            data-start="2000"
            data-end="10000"
            data-endspeed="200">
            <a href="#page-start" class="btn btn-lg moving smooth-scroll"><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i></a>
          </div>
 					</li>
 					<!-- slide 2 end -->
 				</ul>
 				<div class="tp-bannertimer"></div>
 			</div>
 		</div>
 		<!-- slider revolution end -->

 	</div>
 	<!-- slideshow end -->

 </div>
 <!-- banner end -->

 <div id="page-start"></div>

 <!-- section start -->
 <section class="section light-gray-bg clearfix">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-8 col-md-offset-2">
 				<h1 class="text-center">Our products</h1>
 				<div class="separator"></div>
 				<p class="text-center"><?php echo $product_header_description; ?></p>
 				<br>
 				<br>
 			</div>
 		</div>
 		<div class="row">
      <?php $loop = new WP_Query( array ( 'post_type' => 'categories_product', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

 			<div class="col-sm-4">
 				<div class="image-box text-center style-2 mb-20">
 					<div class="overlay-container overlay-visible">
 						<img src= <?php the_post_thumbnail(); ?>
 						<a href="advant-lighting/wordpress/shop" class="overlay-link"></a>
 						<div class="overlay-bottom hidden-xs">
 							<div class="text">
 								<p class="lead margin-clear"><?php the_title(); ?></p>
 							</div>
 						</div>
 					</div>
 					<div class="body padding-horizontal-clear">
 					</div>
 				</div>
 			</div>

      <?php endwhile; ?>
 	</div>
 </section>
 <!-- section end -->

 <!-- section start -->
 <!-- ================ -->
 <section class="section default-bg clearfix">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="call-to-action text-center">
 					<div class="row">
 						<div class="col-sm-8">
 							<h1 class="title">Don't Miss Out Our Offers</h1>
 							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quasi explicabo consequatur consectetur, a atque voluptate officiis eligendi nostrum.</p>
 						</div>
 						<div class="col-sm-4">
 							<br>
 							<p><a href="#" class="btn btn-lg btn-gray-transparent btn-animated">Learn More<i class="fa fa-arrow-right pl-20"></i></a></p>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
 <!-- section end -->


<?php get_footer(); ?>
