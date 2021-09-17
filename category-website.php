<?php  get_header() ?>
<main>
    
            <h2 class="page-heading"><?php the_archive_title() ?></h2>
            
        
        <section>
        <?php 
        
        // $args = array(
        //     'post_type' => 'project',
        //     'tax_query' => array(
        //         array(
        //             'taxonomy' => 'category',
        //             'field'    => 'slug',
        //             'terms' =>array( 'website'),
        //         ),
        //     ),
        // );
        // $query = new WP_Query( $args );



while ( have_posts() ){

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

                        posted by <?php the_author() ?> on <?php the_time('F j, Y') ?>

                    </div>
                    <p>
                       <?php echo wp_trim_words(get_the_excerpt(),30); ?>
                    </p>
                    <a href="<?php the_permalink();?>" class="btn-readmore">Read more</a>
                </div>
            </div>

        <?php }?>
        </section>
         
        <div class="pagination">
            <?php echo paginate_links() ?>
        </div>

<?php get_footer() ?>