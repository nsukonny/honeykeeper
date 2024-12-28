<section class="goods" id="goods">
	<div class="container">
		<div class="goods-wrapper">
			<div class="goods-bg left">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/goods/bg-left.svg' ); ?>" alt="<?php esc_attr_e( 'Векторные соты', 'honeykeeper' ); ?>">
			</div>
			<div class="goods-bg right">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/goods/bg-left.svg' ); ?>" alt="<?php esc_attr_e( 'Векторные соты', 'honeykeeper' ); ?>">
			</div>

			<div class="h2-wrapper lg">
				<h2><?php esc_html($top_text_title = the_field('top_text_title')); ?></h2>
				<p><?php esc_html($top_content_field = the_field('top_content_field')); ?></p>
			</div>
			
			<div class="goods-items">
				<div class="goods-items-col">
					<?php 
						// Масив для першої колонки товарів
						$goods_items_col_1 = [
							[ 'name' => '«Экспарцет»', 'src' => 'img/goods/g1.png' ],
							[ 'name' => '«Гречка»', 'src' => 'img/goods/g2.png' ],
						];

						// Виведення першої колонки
						foreach ( $goods_items_col_1 as $item ) :
							get_template_part( 'template-parts/sections/goods-item', null, [
								'name' => $item['name'],
								'src'  => $item['src']
							]);
						endforeach;
					?>
				</div>

				<div class="goods-items-col">
					<?php 
						// Масив для другої колонки товарів
						$goods_items_col_2 = [
							[ 'name' => '«Подсолнух»', 'src' => 'img/goods/g3.png' ],
							[ 'name' => '«Разнотравье»', 'src' => 'img/goods/g4.png' ],
						];

						// Виведення другої колонки
						foreach ( $goods_items_col_2 as $item ) :
							get_template_part( 'template-parts/sections/goods-item', null, [
								'name' => $item['name'],
								'src'  => $item['src']
							]);
						endforeach;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
