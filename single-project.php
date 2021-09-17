<?php  get_header() ?>
<main>
<?php while(have_posts()){

      the_post();

   ?>
    <h2 class="page-heading"><?php the_title() ?></h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <div class="card-meta-blogpost">
            Posted by <?php the_author() ?> on <?php the_time('m/d/Y') ?> in  <a href="<?php echo site_url('../category')  ?>"> <?php echo get_the_category_list(', ')  ?></a> 
            <?php } ?>
          </div>
          <div class="card-image">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
          </div>
          <div class="card-description">
            <h3>The Introduction</h3>
            <p><?php the_content()  ?></p>
          </div>
        </div>
         
        <div id="comments-section">
          <?php comments_template(); ?>
        </div>
      </section>

      <aside id="sidebar">
        <?php dynamic_sidebar('main_sidebar')  ?>
      </aside>
    </div>
</main>

<?php get_footer() ?>