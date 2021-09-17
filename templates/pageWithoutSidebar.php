<?php /* Template Name: CustomPage*/
/*Template Post Type: post, page, project*/

 ?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <?php wp_head() ?>
    <title>documents</title>
    
</head>
<body>
   
    <div class="section">
        <div class="container">
            <div class="content-section">
            <div class="title">
                <h1><?php the_title()  ?></h1>

            </div>
            
            <div class="content">
                <?php  the_content();?>
                
    
                
                <div class="button">
                    <a href="<?php echo site_url('') ?>">Home Here..</a>
            
                </div>
            </div>
            
            </div>
        </div>
        <div class="image-section">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?> " alt="image-2">
        </div>

    </div>
  
    
            
<?php wp_footer() ?>
</body>
</html>

?