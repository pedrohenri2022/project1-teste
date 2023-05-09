<?php

    if( have_posts() ) ://executado caso tenha postagens
        while ( have_posts() ) : the_post(); //recupera as postagens?>

            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php the_content() ?>

        <?php endwhile;

        else :
            echo'<p>There are no posts!</p>';
    endif;
?>