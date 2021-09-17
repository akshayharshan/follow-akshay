<?php get_header();   ?>
    
    <main>
        <a href="<?php echo site_url('/projects'); ?>">
            <h2 class="page-heading">All Projects</h2>
        </a>
        <section>
        <?php 
        
           

            while(have_posts()){

                the_post();
            
        
        ?>

        
            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink();?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title();?></h3>
                    </a>
                    <div class="card-meta">
                        posted by <?php the_author() ?> on <?php the_time('F j, Y') ?> in 
                    <?php

                            $terms = get_the_terms( $post->ID , 'project_badges' );
                            if (!empty($terms)) 
                            foreach ( $terms as $term ) {
                                $term_link = get_term_link( $term, 'project_badges' );
                                // if( is_wp_error( $term_link ) )
                                //  continue;
                                echo '<a href="' . $term_link . '"> ' . $term->name . '</a>';
                                  
                            } 




                    // $terms = get_the_terms( $post->ID , 'project_badges' );
                    //     $random = array();
                    //     foreach ( $terms as $term ) {

                    //         $random[] = $term->name;

                    //     }

                        ?>
                  
                             

                     
                    </div>
                    <p>
                       <?php echo wp_trim_words(get_the_excerpt(),30); ?>
                    </p>
                    <a href="<?php the_permalink();?>" class="btn-readmore">Read more</a>
                </div>
            </div>

            <?php } ?>
        </section>
         
        <div class="pagination">
            <?php echo paginate_links() ?>
        </div>

<?php get_footer(); ?>       