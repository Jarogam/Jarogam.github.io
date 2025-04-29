<?php get_header(); ?>
<main>
    <section class="hero-banner">
        <div class="container mx-auto">
            <div class="hero-banner__wrapper md:mt-52">
                <h1 class="main-color text-6xl font-bold">Contact us</h1>
                <p></p>
            </div>
        </div>
    </section>

    <section class="md:my-32 my-16">
        <div class="container mx-auto flex md:flex-nowrap flex-wrap">
            <div class="wdks_contact_columns flex md:w-1/2 w-full flex-wrap px-5 items-center">
                <div class="wdks_contact_column md:w-1/2 w-full mb-4">
                    <img src="/wp-content/themes/weldeks/assets/img/logo.svg" alt="logo" class="w-full">
                </div>
                <div class="wdks_contact_column w-1/2 flex h-32 items-center justify-items-center justify-center bg-white drop-shadow-md m-5 rounded-md" style="width: calc(50% - 2.5rem);">
                    <a href="tel:+353830219132">+353830219132</a></div> 
                <div class="wdks_contact_column w-1/2 flex h-32 items-center justify-items-center justify-center bg-white drop-shadow-md m-5 rounded-md" style="width: calc(50% - 2.5rem);">
                    <a href="mailto:info@weldeks.com">info@weldeks.com</a>
                </div>
                <div class="wdks_contact_column w-1/2 flex h-32 items-center justify-items-center justify-center bg-white drop-shadow-md m-5 rounded-md" style="width: calc(50% - 2.5rem);"><a href="mailto:victoria@weldeks.com">victoria@weldeks.com</a></div>
            </div>

            <div class="md:w-1/2 w-full px-8 md:px-0">
                <h2 class="wdks_title pb-10"><?php echo esc_html( get_theme_mod( 'contact_settings_text_1' ) ); ?></h2>
                <p>
                    <?php echo esc_html( get_theme_mod( 'contact_settings_text_2' ) ); ?>
                </p>
            </div>
            
        </div>
    </section>
    <section class="form-contact relative md:py-12 py-8">
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