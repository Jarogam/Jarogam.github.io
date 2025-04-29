<?php get_header(); ?>
<main>
    <section class="hero-banner">
        <div class="container mx-auto">
            <div class="hero-banner__wrapper md:mt-52">
                <h1 class="main-color md:text-6xl text-4xl font-bold">For candidates</h1>
                <p></p>
            </div>
        </div>
    </section>
    <section class="work-in py-36 pb-20">
        <div class="container mx-auto">
                <h2 class="text-center wdks_title">
                    <?php echo esc_html( get_theme_mod( 'candidates_settings_text_1' ) ); ?>
                </h2>
                <p class="text-center mt-6 color-text__grey text-lg">
                    <?php echo esc_html( get_theme_mod( 'candidates_settings_text_2' ) ); ?>
                </p>
            <div class="work-in__wrapper flex flex-wrap md:flex-nowrap justify-between mt-16 gap-x-4">
                <div class="work-in__item md:w-3/12 w-full mb-4 bg-gray-200 text-center py-10">
                    <img class="mx-auto" src="/wp-content/themes/weldeks/assets/img/forcandidates/Vector.svg" alt="icon">
                    <p class="main-color mt-7 text-xl">Flexible working hours</p>
                </div>
                <div class="work-in__item md:w-3/12 w-full mb-4 bg-gray-200 text-center py-10">
                    <img class="mx-auto" src="/wp-content/themes/weldeks/assets/img/forcandidates/Vector.svg" alt="icon">
                    <p class="main-color mt-7 text-xl">Flexible working hours</p>
                </div>
                <div class="work-in__item md:w-3/12 w-full mb-4 bg-gray-200 text-center py-10">
                    <img class="mx-auto" src="/wp-content/themes/weldeks/assets/img/forcandidates/Vector.svg" alt="icon">
                    <p class="main-color mt-7 text-xl">Flexible working hours</p>
                </div>
                <div class="work-in__item md:w-3/12 w-full mb-4 bg-gray-200 text-center py-10">
                    <img class="mx-auto" src="/wp-content/themes/weldeks/assets/img/forcandidates/Vector.svg" alt="icon">
                    <p class="main-color mt-7 text-xl">Flexible working hours</p>
                </div>
            </div>
        </div>
    </section>
    <section class="job-accordeon py-24 pb-32">
        <div class="container mx-auto">
            <h2 class="text-center wdks_title">Current job openings</h2>
            <div class="grid divide-y divide-neutral-200 mx-auto mt-16">
                <?php 
                    // "vacancies"
                    $post_type = 'vacancies';
                    $args = array(
                        'post_type' => $post_type,
                        'posts_per_page' => -1, // All Posts
                    );

                    // Get All Post
                    $vacancies = get_posts( $args );

                    foreach ($vacancies as $key => $vacancy) : 
                        $fields = get_post_custom( $vacancy->ID );
                    ?>

                <div class="py-5 px-10 shadow-lg mb-4">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span class="main-color text-3xl font-normal"><?php echo $vacancy->post_title; ?></span>
                            <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                        </summary>
                        <div class="text-neutral-600 job-accordeon__opened group-open:animate-fadeIn mt-12">
                            <p class="mb-6"><img class="inline-block pr-3" src="/wp-content/themes/weldeks/assets/img/forcandidates/loc.svg" alt="icon"><strong class="main-color">Location:</strong> <?php echo $fields['location'][0]; ?></p>
                            <p class="mb-6"><img class="inline-block pr-3" src="/wp-content/themes/weldeks/assets/img/forcandidates/loc.svg" alt="icon"><strong class="main-color">Your tasks will include:</strong></p>
                                
                                <?php echo $fields['your_tasks_will_include'][0];?>
                                <br><br>

                            <p class="mb-6"><img class="inline-block pr-3" src="/wp-content/themes/weldeks/assets/img/forcandidates/loc.svg" alt="icon"><strong class="main-color">Skills and experience that are important to us:</strong></p>
                                
                                <?php echo $fields['skills_and_experience_that_are_important_to_us'][0]; ?>
                                <br><br>

                            <p class="mb-6"><img class="inline-block pr-3" src="/wp-content/themes/weldeks/assets/img/forcandidates/loc.svg" alt="icon"><strong class="main-color">Information:</strong></p>
                            <p class="mb-16">
                                <?php echo $fields['information'][0]; ?>
                                <br><br>
                            </p>
                            <a href="/" class="transparent-btn">Button</a>
                        </div>
                    </details>
                </div>

                <?php endforeach; ?>


                
                
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