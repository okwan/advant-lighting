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
               $args = array(
                   'post_type' => 'products',
                   'orderby' => 'post_id',
                   'order' => 'ASC',
                   'category_name' => 'displaylights'
               );
              ?>
              <?php $query = new WP_Query( $args ); ?>
              <?php while ( $query->have_posts() ) : $query->the_post(); ?>

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

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
             </div>
           </div>
           <div class="tab-pane" id="pill-2">
             <div class="row masonry-grid-fitrows grid-space-10">
               <?php
               $args = array(
                   'post_type' => 'products',
                   'orderby' => 'post_id',
                   'order' => 'ASC',
                   'category_name' => 'decorativelights'
               );
              ?>
              <?php $query = new WP_Query( $args ); ?>
              <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
               <?php endwhile; ?>
               <?php wp_reset_postdata(); ?>
             </div>
           </div>
           <div class="tab-pane" id="pill-3">
             <div class="row masonry-grid-fitrows grid-space-10">
               <?php
               $args = array(
                   'post_type' => 'products',
                   'orderby' => 'post_id',
                   'order' => 'ASC',
                   'category_name' => 'striplights'
               );
              ?>
              <?php $query = new WP_Query( $args ); ?>
              <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
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
