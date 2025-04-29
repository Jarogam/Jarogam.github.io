
<?php get_header(); ?>


<main>
    <section class="main-hero-banner">
        <div class="container mx-auto">
            <div class="columns-1 md:columns-2 xl:columns-2 flex md:flex-row flex-col items-center">
                <div class="column-left z-10 md:order-1 order-2 w-full md:w-1/2  flex  flex-col">
                    <div class="logo">
                        <a href="/">
                            <img src="/wp-content/themes/weldeks/assets/img/logo.svg" alt="logo" id="wdks_logo_img">
                        </a>
                    </div>
                    <h1 id="wdks_hb_description" class=" text-2xl md:mt-20 mt-4"><?php echo esc_html( get_theme_mod( 'homepage_settings_text_1' ) ); ?></h1>
                    
                </div>
                <div class="column-right md:order-2 order-1 w-full md:w-1/2 flex items-center justify-center">
                    <div class="wdks_rocket_wrapper">                    
                        <img src="/wp-content/themes/weldeks/assets/img/rocket.png" id="wdks_rocket_img" alt="rocket">
                    </div>
                </div>
            </div>
            <div class="after-hero flex justify-between items-end md:flex-row flex-col">
                <p class="md:mt-48 mt-8  md:text-xl text-base main-color">
                    <?php echo esc_html( get_theme_mod( 'homepage_settings_text_2' ) ); ?>
                </p>
                <div class="button-container mt-12 md:mt-0 z-10">
                    <a href="#" class="bg-btn">Look to hire?</a>
                    <a href="#" class="transparent-btn md:ml-7 ml-0 mt-4 md:mt-0">Register your interest</a>
                </div>
                
            </div>
        </div>
    </section>
    <section class="welcome px-5 md:px-0 py-14 md:py-40">
        <div class="container mx-auto">
            <h2 class="mb-8 md:text-4xl text-2xl  font-semibold main-color">
                <?php echo esc_html( get_theme_mod( 'homepage_settings_text_3' ) ); ?>
            </h2>
            <p class="mb-16 md:text-lg text-base">
                <?php echo esc_html( get_theme_mod( 'homepage_settings_text_4' ) ); ?>
            </p>

            <p class="mb-8 md:mb-16 md:text-lg text-base">
                <?php echo esc_html( get_theme_mod( 'homepage_settings_text_5' ) ); ?>    
            </p>

            <a href="<?php echo get_site_url() . '/index.php/about-us'; ?>" class="transparent-btn mt-8 md:mt-12">More about us</a>
        </div>
    </section>

    <section class="wdks_anim_on_visible services"> 
        <div class="container mx-auto">
            <div class="services-wrapper">
                <div class="services-wrapper__left">
                    <div class="services-wrapper__left--block order-1" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/1block_img.png'; ?>) no-repeat center / cover;">
                        <h2><a href="<?php echo get_site_url() . '/index.php/services/'; ?>" class="text-xl">Recruitment services</a></h2>
                        <a href="<?php echo get_site_url() . '/index.php/services/'; ?>" class="absolute bottom-8 right-8 text-lg">See more <img src="/wp-content/themes/weldeks/assets/img/arrowr.svg" alt="arrow"> </a>
                    </div>
                    <div class="services-wrapper__left--block order-2" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/2block_img.png'; ?>) no-repeat center / cover;">
                        <h2><a href="<?php echo get_site_url() . '/index.php/services/'; ?>" class="text-xl">Process Services</a></h2>
                        <a href="<?php echo get_site_url() . '/index.php/services/'; ?>" class="absolute bottom-8 right-8 text-lg">See more <img src="/wp-content/themes/weldeks/assets/img/arrowr.svg" alt="arrow"> </a>
                    </div>
                    <div class="services-wrapper__left--block order-4" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/3block_img.png'; ?>) no-repeat center / cover;">
                        <h2><a href="<?php echo get_site_url() . '/index.php/services/'; ?>" class="text-xl">Welding Services</a></h2>
                        <a href="<?php echo get_site_url() . '/index.php/services/'; ?>" class="absolute bottom-8 right-8 text-lg">See more <img src="/wp-content/themes/weldeks/assets/img/arrowr.svg" alt="arrow"> </a>
                    </div>
                    <div class="services-wrapper__left--block order-3" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/4block_img.png'; ?>) no-repeat center / cover;">
                        <h2><a href="<?php echo get_site_url() . '/index.php/services/'; ?>" class="text-xl">Electrical and Mechanical Engineering Services</a></h2>
                        <a href="<?php echo get_site_url() . '/index.php/services/'; ?>" class="absolute bottom-8 right-8 text-lg">See more <img src="/wp-content/themes/weldeks/assets/img/arrowr.svg" alt="arrow"> </a>
                    </div>
                </div>
                <div class="services-wrapper__right">
                    <div class="services-wrapper__right-text ">
                        <h2 class="text-4xl"><?php echo esc_html( get_theme_mod( 'homepage_settings_text_6' ) ); ?> </h2>
                        <p class="mt-16"><?php echo esc_html( get_theme_mod( 'homepage_settings_text_7' ) ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wdks_anim_on_visible values py-14 md:py-28">
        <div class="container mx-auto">
            <div class="values__wrapper grid items-center mx-8 md:mx-0 gap-x-8 gap-y-8 md:grid-cols-3 grid-cols-1">
                <div class="values-item no-shadow md:py-20 py-8 md:px-20 px-8">
                    <h2 class="main-color md:text-4xl text-2xl font-bold my-8"><?php echo esc_html( get_theme_mod( 'homepage_settings_text_8' ) ); ?></h2>
                    <p class="">
                        <?php echo esc_html( get_theme_mod( 'homepage_settings_text_9' ) ); ?>
                    </p>
                </div>
                <div class="values-item shadow-lg md:py-14 py-8 md:px-16 px-8">
                    <img src="/wp-content/themes/weldeks/assets/img/iconv1.svg" alt="icon">                    
                    <h3 class="main-color text-xl md:my-7 my-4"><?php echo esc_html( get_theme_mod( 'homepage_settings_text_11' ) ); ?></h3>
                    <p>
                    <?php echo esc_html( get_theme_mod( 'homepage_settings_text_12' ) ); ?>
                    </p>
                </div>
                <div class="values-item shadow-lg md:py-14 py-8 md:px-16 px-8">
                    <img src="/wp-content/themes/weldeks/assets/img/iconv1.svg" alt="icon">                    
                    <h3 class="main-color text-xl md:my-7 my-4"><?php echo esc_html( get_theme_mod( 'homepage_settings_text_13' ) ); ?></h3>
                    <p>
                        <?php echo esc_html( get_theme_mod( 'homepage_settings_text_14' ) ); ?>
                    </p>
                </div>
                <div class="values-item shadow-lg md:py-14 py-8 md:px-16 px-8">
                    <img src="/wp-content/themes/weldeks/assets/img/iconv1.svg" alt="icon">                    
                    <h3 class="main-color text-xl md:my-7 my-4"><?php echo esc_html( get_theme_mod( 'homepage_settings_text_15' ) ); ?></h3>
                    <p>
                    <?php echo esc_html( get_theme_mod( 'homepage_settings_text_16' ) ); ?>
                    </p>
                </div>
                <div class="values-item shadow-lg md:py-14 py-8 md:px-16 px-8">
                    <img src="/wp-content/themes/weldeks/assets/img/iconv1.svg" alt="icon">                    
                    <h3 class="main-color text-xl md:my-7 my-4"><?php echo esc_html( get_theme_mod( 'homepage_settings_text_17' ) ); ?></h3>
                    <p>
                    <?php echo esc_html( get_theme_mod( 'homepage_settings_text_18' ) ); ?>
                    </p>
                </div>
                <div class="values-item shadow-lg md:py-14 py-8 md:px-16 px-8">
                    <img src="/wp-content/themes/weldeks/assets/img/iconv1.svg" alt="icon">
                    <h3 class="main-color text-xl md:my-7 my-4"><?php echo esc_html( get_theme_mod( 'homepage_settings_text_19' ) ); ?></h3>
                    <p>
                    <?php echo esc_html( get_theme_mod( 'homepage_settings_text_20' ) ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="wdks_anim_on_visible opportuninies my-4">
        <div class="container mx-auto">
            <h2 class="text-center mb-8 md:text-4xl text-2xl  font-semibold main-color">
                <?php echo esc_html( get_theme_mod( 'homepage_settings_text_21' ) ); ?>
            </h2>
            <p class="text-center my-10 mx-4 md:mx-0">
                <?php echo esc_html( get_theme_mod( 'homepage_settings_text_22' ) ); ?>
            </p> 
            <p class="text-center my-10 mx-4 md:mx-0">
                <?php echo esc_html( get_theme_mod( 'homepage_settings_text_23' ) ); ?>
            </p> 
            <div class="opportuninies__wrapper md:my-32 my-8 flex md:flex-row flex-col gap-x-8">
                <div class="opportuninies__wrapper--item opportuninies--item__companies md:w-1/2 w-full text-center py-32 md:py-56">
                    <a href="<?php echo get_site_url() . '/index.php/for-candidates/'; ?>" class="white-transparent-btn">For companies</a>
                </div>
                <div class="opportuninies__wrapper--item opportuninies--item__candidates md:w-1/2 w-full text-center py-32 md:py-56">
                    <a href="<?php echo get_site_url() . '/index.php/for-companies/'; ?>" class="white-transparent-btn">For candidates</a>
                </div>
            </div>
        </div>
    </section>
    <section class="wdks_anim_on_visible newsletter md:pt-8 pt-4 md:pb-16 pb-4">
        <div class="container mx-auto">
            <div class="newsletter__wrapper flex mx-4 md:mx-0 md:flex-row flex-col justify-between my-20">
                <div class="newsletter__wrapper--left  w-full md:w-3/5">
                    <h2 class="mb-8 md:text-4xl text-2xl  font-semibold main-color">
                        Newsletter
                    </h2>
                    <p>
                        Don't see the perfect role right now? Fill out the form to be notified of any upcoming positions that match your criteria. Receive an email upon registration and another when a relevant job opens up.
                    </p>
                </div>
                <div class="newsletter__wrapper--right md:mt-0 mt-4 w-full md:w-2/5 flex justify-center md:justify-end items-center">
                    <a href="#" class="transparent-btn">Register your interest</a>
                </div>
            </div>
        </div>
    </section>
    <section class="form-contact relative md:py-12 py-8" id="form-contact">
        <div class="container mx-auto">
            <div class="form-contact__wrapper md:columns-2 columns-1 columns-2xl md:flex-row flex-col flex">
                <div class="form-contact__wrapper--left md:px-0 px-4 md:w-1/2 w-full  flex  flex-col">
                    <h2 class="mb-8 md:text-4xl text-2xl  font-semibold color-text__white">
                        Contact us
                    </h2>

                    <?php echo do_shortcode('[contact-form-7 id="6751ccc" title="Untitled"]'); ?>

                </div>
                <div class="form-contact__wrapper--right md:w-1/2 w-full  flex  flex-col">

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>