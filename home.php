

<?php get_header(); ?>
<main id="main-content"style="margin-top:3%" >
<div class="container-fluid">
<div class="row">

    <div class="col-md-8">
<h1><?php wp_title(''); ?></h1>
        <?php

 if ( have_posts() ) : while ( have_posts() ) : // לולאת וורדפרס
 
 the_post();

        ?> 

<!--  הוספת כותרת הפוסט -->

        <h2> 

<?php the_title();  ?>  

        </h2>
       <p> written by <?php the_author(); ?>
        published at <?php the_time('l, F js, Y'); ?>
        </p>
<p>
category : <?php the_category(','); ?>
</p> <p>
comments : <?php comments_number(); ?>
<!--  הוספת תוכן הפוסט -->
</p>
<p>

<?php the_excerpt(); ?>

</p>



<?php

 endwhile;;
endif;

 ?>
 </div>
 <aside class="col-md-3 col-md-offset-1 sidebar"  > 
 <?php get_sidebar('blog'); ?>
 </aside>
 </div>
 <?php get_footer(); ?>
