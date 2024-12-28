<section class="hero">
    <div class="hero-bg">
        <picture>
            <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/hero/hero-bg-m.png' ); ?>" media="(max-width: 768px)">
            <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/hero/hero-bg-d.png' ); ?>" media="(min-width: 769px)">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/hero/hero-bg-d.png' ); ?>" alt="<?php esc_attr_e( 'Векторные соты', 'honeykeeper' ); ?>">
        </picture>
    </div>
    <div class="container">
        <div class="hero-wrapper">
            <div class="hero-heading">
                <h1>
                    <?php esc_html($h1_title = the_field('h1_title')); ?>
                </h1>
                <p>
                    <strong><?php esc_html($h1_disclaimer = the_field('h1_disclaimer')); ?></strong>
                </p>
                <button class="button-gradient open-modal">
                    <a href="<?php esc_url($h1_button_link = the_field('h1_button_link')); ?>">
                        <span><?php esc_html($h1_button_name = the_field('h1_button_name')); ?></span>
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>
