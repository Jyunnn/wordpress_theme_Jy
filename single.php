<?php
    get_header();
    ?>
    <div class="container mx-auto mt-5">
    <?php
    while(have_posts()) {
        the_post(); ?>
        <div class="p-48">
            <h2 class="text-3xl"><?php the_title();?></h2>
        </div>

        <?php the_content();?>
    </div>
    <?php
    };
    get_footer();