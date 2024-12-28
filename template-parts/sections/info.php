<section class="info" id="info">
    <div class="info-overlay-left">
        <img
            src="<?php echo esc_url( get_template_directory_uri() . '/img/goods/bg-left.svg' ); ?>"
            width="1000"
            height="1000"
            alt="<?php esc_attr_e( 'Векторные соты', 'honeykeeper' ); ?>"
        >
    </div>
    <div class="info-overlay-right">
        <img
            src="<?php echo esc_url( get_template_directory_uri() . '/img/goods/bg-left.svg' ); ?>"
            width="1000"
            height="1000"
            alt="<?php esc_attr_e( 'Векторные соты', 'honeykeeper' ); ?>"
        >
    </div>
    <div class="info-bg">
        <img
            src="<?php echo esc_url( get_template_directory_uri() . '/img/info/info.png' ); ?>"
            width="700"
            height="700"
            alt="<?php esc_attr_e( 'Мёд', 'honeykeeper' ); ?>"
        >
    </div>
    <div class="container">
        <div class="info-wrapper">

        <div class="h2-wrapper lsmg">
				<h2><?php esc_html($about_honey_title = the_field('about_honey_title')); ?></h2>
				<p><?php esc_html(the_content()); ?></p>
		</div>

            <div class="info-cards">
            <?php
                if ( have_rows('about_honey_repeater') ) :
                    while ( have_rows('about_honey_repeater') ) : the_row();
                        $card_data = [
                            'name' => get_sub_field('about_honey_repeater_title'),
                            'text' => get_sub_field('about_honey_repeater_description')
                        ];

                        get_template_part( 'template-parts/sections/info-card', null, $card_data );
                    endwhile;
                endif;
            ?>
            </div>
        </div>
    </div>
</section>
