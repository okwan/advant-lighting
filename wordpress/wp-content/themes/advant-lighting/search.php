<?php
/* Template Name: Shop Page */
$brief_description_product = get_field( "brief_description_product" );

 get_header(); ?>

 <!-- main-container start -->
 <!-- ================ -->
 <section class="main-container">

   <div class="container">
     <div class="row">

       <!-- main start -->
       <!-- ================ -->
       <div class="main col-md-12">
         <!-- pills start -->
         <!-- ================ -->
         <!-- Nav tabs -->
         <ul class="nav nav-pills" role="tablist">
           <li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="Latest Arrivals">Display Lights</a></li>
           <li><a href="#pill-2" role="tab" data-toggle="tab" title="Featured">Decorative Lights</a></li>
           <li><a href="#pill-3" role="tab" data-toggle="tab" title="Top Sellers">Strip Lights</a></li>
         </ul>

         <!-- Tab panes -->
         <div class="tab-content clear-style">
           <div class="tab-pane active" id="pill-1">
             <div class="row masonry-grid-fitrows grid-space-10">
							 <?php
						    global $query_string;
						    $query_args = explode("&", $query_string);
						    $search_query = array();

						    foreach($query_args as $key => $string) {
						      $query_split = explode("=", $string);
						      $search_query[$query_split[0]] = urldecode($query_split[1]);
						    } // foreach

						    $the_query = new WP_Query($search_query);
						    if ( $the_query->have_posts() ) :
						    ?>
						    <!-- the loop -->

						    <ul>
						    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						        <li>
						            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						        </li>
						    <?php endwhile; ?>
						    </ul>
						    <!-- end of the loop -->

						    <?php wp_reset_postdata(); ?>

						<?php else : ?>
						    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>

               <div class="col-md-4 masonry-grid-item">
                 <div class="listing-item white-bg bordered mb-20">
                   <div class="overlay-container">
                     <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                      ?>
                     <div class="overlay-to-top links">
                       <span class="small">
                         <a href="<?php echo get_permalink(); ?>" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
                       </span>
                     </div>
                   </div>
                   <div class="body">
                     <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                     <p class="small"><?php the_field('brief_description_product') ?></p>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="tab-pane" id="pill-2">
             <div class="row masonry-grid-fitrows grid-space-10">
               <div class="col-md-4 masonry-grid-item">
                 <div class="listing-item white-bg bordered mb-20">
                   <div class="overlay-container">
                     <img src="images/product-7.jpg" alt="">
                     <a class="overlay-link popup-img-single" href="<?php bloginfo('stylesheet_directory');?>/images/product-7.jpg"><i class="fa fa-search-plus"></i></a>
                     <div class="overlay-to-top links">
                       <span class="small">
                         <a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                         <a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
                       </span>
                     </div>
                   </div>
                   <div class="body">
                     <h3><a href="shop-product.html">Cumque sequi repellat</a></h3>
                     <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                     <div class="elements-list clearfix">
                       <span class="price">$29.99</span>
                       <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="tab-pane" id="pill-3">
             <div class="row masonry-grid-fitrows grid-space-10">
               <div class="col-md-4 masonry-grid-item">
                 <div class="listing-item white-bg bordered mb-20">
                   <div class="overlay-container">
                     <img src="images/product-5.jpg" alt="">
                     <a class="overlay-link popup-img-single" href="<?php bloginfo('stylesheet_directory');?>/images/product-5.jpg"><i class="fa fa-search-plus"></i></a>
                     <div class="overlay-to-top links">
                       <span class="small">
                         <a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                         <a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
                       </span>
                     </div>
                   </div>
                   <div class="body">
                     <h3><a href="shop-product.html">Velit Suscipit consequatur</a></h3>
                     <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                     <div class="elements-list clearfix">
                       <span class="price">$12.99</span>
                       <a href="#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <!-- pills end -->
       </div>
       <!-- main end -->

     </div>
   </div>
 </section>
 <!-- main-container end -->

 <?php get_footer(); ?>
