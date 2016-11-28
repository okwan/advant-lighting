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
         <!-- Tab panes -->

         <div class="row masonry-grid-fitrows grid-space-10">
					<?php
					if( have_posts() ) : while( have_posts() ): the_post(); ?>

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
          <?php endwhile; else: ?>
				<div class = "row">
					<div class = "col-md-12">
						<h3>No search results found.</h3>
						<hr>
						<p>Unable to find any search results based on your keyword searched.</p>
					</div>
				</div>
				<?php endif; ?>
        <?php wp_reset_postdata(); ?>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- main-container end -->

 <?php get_footer(); ?>
