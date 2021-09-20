<?php get_header();   

// echo '<pre>';
// // print_r(get_field('button'));
// $button = get_field('button');

// echo $button['title'];
// echo $button['url'];
// echo '</pre>';
// die();

?>
    <div id="banner" style="background:url('<?php echo get_field('background_image')['url'] ?>')">
        <h1>&lt;<?php the_field('title')?>&gt;</h1>
        <h3><?php the_field('subtitle') ?></h3>
    </div>

    <main>
        <a href="<?php echo site_url('/blog'); ?>">
            <h2 class="section-heading"><?php the_field('blog title') ?></h2>
        </a>
        <section>
        <?php 
        
            $args = array(
                
                'post_type' => 'post',
                'posts_per_page' => 2
            );
            
            $blogposts = new WP_Query($args);

            while($blogposts -> have_posts()){

                $blogposts -> the_post();
            
        
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
                    <p>
                       <?php echo wp_trim_words(get_the_excerpt(),30); ?>
                    </p>
                    
                    <a  
                    <?php 
                        $button = get_field('button') 
                    ?>
                    class="btn-readmore"
                    href="<?php permalink_link() ?>">
                    Read more
                    </a>
                </div>
            </div>

            <?php }
            
            wp_reset_query(); ?>
        </section>
         
        <a href="/projects">
        	<h2 class="section-heading"><?php the_field('project title') ?></h2>
    	</a>
        
        <section>
        <?php 
        
            $arg = array(
                
                'post_type' => 'project',
                'posts_per_page' => 2,
            );
            
            $projects = new WP_Query($arg);

            while($projects -> have_posts()){

                $projects -> the_post();
            
        
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
                    <p>
                       <?php echo wp_trim_words(get_the_excerpt(),30); ?>
                    </p>
                    <a href="<?php the_permalink();?>" class="btn-readmore">Read more</a>
                </div>
            </div>

            <?php }
            
            wp_reset_query(); ?>
        </section>

        <h2 class="section-heading"><?php the_field('bottom title') ?></h2>

        <section id="section-source">
            <p>
               <?php the_field('bottom text') ?>
            </p>
            <a href="#" class="btn-readmore">GitHub Profile</a>
        </section>

<?php get_footer(); ?>       