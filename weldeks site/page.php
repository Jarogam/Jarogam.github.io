
<?php get_header(); ?>

<main>
   
    <section class="hero-banner sm:absolute md:static sm:left-12 sm:bottom-12">
        <div class="container mx-auto">
            <div class="hero-banner__wrapper md:mt-52">
                <h1 class="main-color md:text-6xl text-4xl font-bold sm:absolute md:static sm:left-12 sm:bottom-12"><?php the_title(); ?></h1>
                <p></p>
            </div>
        </div>
    </section>

    <section class="wdks_anim_on_visible"> 
        <div class="container mx-auto">
            <?php the_content(); ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>