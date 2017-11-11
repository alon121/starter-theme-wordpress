<?php get_header(); ?>
<main id="main-content">
<div class="container-fluid">
<div class="row" style="">
    <div class="col-md-12">

        <?php

 if ( have_posts() ) : while ( have_posts() ) : // לולאת וורדפרס
 
 the_post();

        ?> 

<!--  הוספת כותרת הפוסט -->



<!--  הוספת תוכן הפוסט -->

<p id="background"></p>

<?php the_content(); ?>




<?php

 endwhile;;
endif;

 ?>

 <?php get_footer(); ?>