<?php

get_header();

?>
  <main>

    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <div class="card-meta-blogpost">
           
          </div>
          <div class="card-image">
            
          </div>
          <div class="card-description">
            <h3>Page not found</h3>
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
       
    	   
 
	

         

<?php

get_footer();

?>


	   
	   

