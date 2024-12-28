<section class="delivery" id="delivery">
	<div class="container">
		<div class="delivery-wrapper">
				<div class="h2-wrapper lg">
				<h2><?php esc_html($delivery_title = the_field('delivery_title')); ?></h2>
				<p><?php esc_html($delivery_description = the_field('delivery_description')); ?></p>
			</div>
			<div class="delivery-cards">
				<div class="delivery-map">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/img/delivery/map.svg' ); ?>" width="1000" height="1000" alt="<?php esc_attr_e( 'Карта России с наложенными векторными сотами', 'honeykeeper' ); ?>">
				</div>

				<div class="delivery-card">
					<div class="delivery-card-inner">
						<div class="delivery-card-title"><?php esc_html_e( 'Доставка', 'honeykeeper' ); ?></div>
						<ul>
							<?php if ( have_rows('delivery_items') ) : ?>
								<?php while ( have_rows('delivery_items') ) : the_row(); ?>
									<li><?php echo esc_html( get_sub_field('delivery_items_text') ); ?></li>
								<?php endwhile;
							endif; ?>
						</ul>
					</div>
				</div>

				<div class="delivery-card">
					<div class="delivery-card-inner">
						<div class="delivery-card-title"><?php esc_html_e( 'Оплата', 'honeykeeper' ); ?></div>
						<ul>
							<?php if ( have_rows('how_to_pay_items') ) : ?>
								<?php while ( have_rows('how_to_pay_items') ) : the_row(); ?>
									<li><?php echo esc_html( get_sub_field('how_to_pay_items_text') ); ?></li>
								<?php endwhile;
							endif; ?>
						</ul>
						<button class="button-gradient open-modal"><span>Сделать заказ продукции</span></button>
					</div>
				</div>
			</div> <!-- .delivery-cards -->
		</div> <!-- .delivery-wrapper -->
	</div> <!-- .container -->
</section>
