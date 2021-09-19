<?php
    get_header();
?>

<div class="container mx-auto">
<?php
    while(have_posts()) {
        the_post(); ?>
        <h2><?php the_title();?></h2>
        <p> <?php the_time();?></p>
        <?php the_content();?>
    <?php
    };
    ?>
</div>