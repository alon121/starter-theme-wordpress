<?php
/*
    Template Name: right sidebar page

*/
?>

<?php get_header(); ?>
<main id="main-content"style="margin-top:3%; background-color:aqua"  >
<div class="container-fluid">
<div class="row">




    <div class="col-md-8 ">


        <?php

 if ( have_posts() ) : while ( have_posts() ) : // לולאת וורדפרס
 
 the_post();

        ?> 

<!--  הוספת כותרת הפוסט -->

        <h1> 

<?php the_title();  ?>  

        </h1>

<!--  הוספת תוכן הפוסט -->

<p>

<?php the_content(); ?>

</p>


<?php

 endwhile;;
endif;

 ?>
 </div>


 <aside class="col-md-3 col-md-offset-1 sidebar"  > 
<?php get_sidebar(); ?>
 </aside>
 </div>
 </div>
 </main>
 <?php get_footer(); ?>
