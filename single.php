<?php get_header(); ?>

<div class="container">

    <main role="main" class="two-thirds">
        <?php
        while (have_posts()) : the_post();
            the_post();
            the_content();
        endwhile;
        ?>
    </main>

    <aside role="complementary" class="widgets one-third" >
        <?php get_sidebar(); ?>
    </aside>

</div>

<?php get_footer(); ?>
