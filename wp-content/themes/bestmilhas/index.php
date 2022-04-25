<?php

require_once 'header.php';

if(have_posts()):
 ?>
 <?php if ( has_post_thumbnail() ) : ?>
<main class="main-sobre-nos">
        <?php
        while (have_posts()): the_post();
            the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);
            
        endwhile;
        ?>
    </main>
    <?php
    endif;
    echo '<div class="Discount">';
    the_title('<h4>','</h4>');
    the_content();
    echo'</div>';

endif;
require_once 'footer.php';