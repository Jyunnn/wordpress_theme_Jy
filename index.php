<?php
    while(have_posts()) {
        the_post(); ?>
        <a href="<?php the_permalink(); ?>"> <?php the_title();?></a>
        <p> <?php the_time();?></p>
        <?php the_content();?>
    <?php
    };