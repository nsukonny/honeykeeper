<div class="goods-item">
	<div class="goods-item-bg">
	<svg class="pentagon" width="585" height="507" viewBox="0 0 585 507" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M0.576824 252.653L146.115 0.5H438.885L584.423 252.653L438.884 506.5H146.116L0.576824 252.653Z"
		fill="#191E24" stroke="#3A424D" />
</svg>
	</div>
	<div class="goods-item-inner">
		<div class="goods-item-title">
			<h3>
				<?php esc_html_e( 'Мёд натуральный', 'honeykeeper' ); ?>
				<span>
					<?php echo esc_html( $args['name'] ); ?>
				</span>
			</h3>
		</div>
		<div class="goods-item-img">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/' . $args['src'] ); ?>" alt="<?php esc_attr_e( 'Изображение мёда', 'honeykeeper' ); ?>">
		</div>

		<div class="choices-wrapper">
			<div class="choices-wrapper-title"><?php esc_html_e( 'Варианты фасовки:', 'honeykeeper' ); ?></div>
			<div class="choices">
				<?php 
					// Масив варіантів фасування
					$choices = [ '1,5л', '700мл', '500мл', '300мл', '125мл', '50мл' ];
					
					// Генерація елементів вибору
					foreach ( $choices as $choice ) : 
				?>
					<div class="choices-item">
						<span><?php echo esc_html( $choice ); ?></span>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<?php 
			// Підключення кнопки через компонент button-gradient
			get_template_part( 'template-parts/components/buttons/button-gradient/button-gradient', null, [
				'class' => 'open-modal',
				'text'  => 'Заказать оптом'
			]);
		?>
	</div>
</div>
