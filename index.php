
<?php get_header(); ?>
<main id="main-content"style="margin-top:3%" >
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">

        <?php

 if ( have_posts() ) : while ( have_posts() ) : // לולאת וורדפרס
 
 the_post();

        ?> 

<!--  הוספת כותרת הפוסט -->


 </p>
<!--  הוספת תוכן הפוסט -->

<p>

<?php the_content(); ?>

</p>


<?php

 endwhile;;
endif;

 ?>
 <?php get_footer(); ?>
