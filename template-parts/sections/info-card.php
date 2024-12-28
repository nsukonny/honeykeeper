<div class="info-card">
    <div class="info-card-inner">
        <div class="info-card-icon">
            <img 
                src="<?php echo esc_url( get_template_directory_uri() . '/img/info/check.svg' ); ?>" 
                width="60" 
                height="60" 
                alt="<?php esc_attr_e( 'Черная галочка в оранжевом пятиугольнике', 'honeykeeper' ); ?>"
            >
        </div>
        <div class="info-card-name">
            <?php echo esc_html( $args['name'] ); ?>
        </div>
        <p>
            <?php echo esc_html( $args['text'] ); ?>
        </p>
    </div>
</div>
