 <section class="movies">
        <div class="container">
            <?php 
                $the_query = new WP_Query( array(
                      'post_type' => 'books_items',
                      'posts_per_page'   => 4,
                      'orderby' => 'rand',
                      'order'=> 'asc',
                  ) );

              ?>
            <div class="category-title">
                <h2 class="section-title">Books</h2>
                <a href="<?php echo get_site_url(); ?>/books/" class="yellow-btn d-none d-sm-block">View All</a>
            </div>
            <div class="row">
            <?php $i=1; ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
           <?php  $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $the_query->ID ), "post-image" ); ?>
                <div class="col-6 col-md-3 <?php if($i == 3 || $i == 4 ){ ?> d-none d-sm-block <?php } ?>">
                    <div class="category-box">
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_src[0]; ?>" class="img-fluid"></a>
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <h4><i class="fa fa-star" aria-hidden="true"></i> 8.5</h4>
                    </div>
                </div>
                <?php $i++; ?>
             <?php endwhile;  wp_reset_postdata(); ?>
            </div>
            <div class="category-view d-block d-sm-none">
                <a href="<?php echo get_site_url(); ?>/books/" class="yellow-btn">View All</a>
            </div>
        </div>
    </section>