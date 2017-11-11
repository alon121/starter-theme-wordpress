<?php
/*
    Template Name: right sidebar page

*/
?>

<?php get_header(); ?>
<main id="main-content"style="margin-top:3%; background-color:aqua"  >
<div class="container-fluid">
<div class="row">


 <aside class="col-md-3 sidebar" > 
<?php get_sidebar(); ?>
 </aside>


    <div class="col-md-8 col-md-offset-1 ">

        <?php

 if ( have_posts() ) : while ( have_posts() ) : // לולאת וורדפרס
 
 the_post();

        ?> 

<!--  הוספת כותרת הפוסט -->


<!--  הוספת תוכן הפוסט -->

<p>

<?php the_content(); ?>

</p>


<?php

 endwhile;;
endif;

 ?>
 </div>

 </div>
 </div>
 </main>
 <?php get_footer(); ?>
