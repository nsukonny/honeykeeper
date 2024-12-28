<section class="slider" id="slider">
	<div class="container-fluid">
		<div class="slider-wrapper">

			<div class="h2-wrapper sm">
				<h2><?php esc_html($gift_pack_title = the_field('gift_pack_title')); ?></h2>
				<p><?php esc_html($gift_pack_content = the_field('gift_pack_content')); ?></p>
			</div>

			<div class="swiper-box">
			<?php
				$slider_image1 = get_field('slider_image1');
				$slider_image2 = get_field('slider_image2');
				$slider_image3 = get_field('slider_image3');
				$slider_image4 = get_field('slider_image4');
				$slider_image5 = get_field('slider_image5');
				$slider_image6 = get_field('slider_image6');
				?>
				<div class="swiper">
					<div class="swiper-wrapper">
						<a href="<?php echo $slider_image1 ? esc_url($slider_image1['url']) : get_template_directory_uri() . '/img/slider/s1.png'; ?>" class="swiper-slide" data-fancybox="gallery">
						<img
    						src="<?php echo $slider_image1 ? esc_url($slider_image1['url']) : get_template_directory_uri() . '/img/slider/s1.png'; ?>"
   							 alt="<?php echo $slider_image1 ? esc_attr($slider_image1['alt']) : 'Подарочные наборы и аксессуары';
						?>">

						<a href="<?php echo $slider_image2 ? esc_url($slider_image2['url']) : get_template_directory_uri() . '/img/slider/s2.png'; ?>" class="swiper-slide" data-fancybox="gallery">
						<img
    						src="<?php echo $slider_image2 ? esc_url($slider_image2['url']) : get_template_directory_uri() . '/img/slider/s2.png'; ?>"
   							 alt="<?php echo $slider_image2 ? esc_attr($slider_image2['alt']) : 'Подарочные наборы и аксессуары';
						?>">

						<a href="<?php echo $slider_image3 ? esc_url($slider_image3['url']) : get_template_directory_uri() . '/img/slider/s3.png'; ?>" class="swiper-slide" data-fancybox="gallery">
						<img
    						src="<?php echo $slider_image3 ? esc_url($slider_image3['url']) : get_template_directory_uri() . '/img/slider/s3.png'; ?>"
   							 alt="<?php echo $slider_image3 ? esc_attr($slider_image3['alt']) : 'Подарочные наборы и аксессуары';
						?>">

						<a href="<?php echo $slider_image4 ? esc_url($slider_image4['url']) : get_template_directory_uri() . '/img/slider/s4.png'; ?>" class="swiper-slide" data-fancybox="gallery">
						<img
    						src="<?php echo $slider_image4 ? esc_url($slider_image4['url']) : get_template_directory_uri() . '/img/slider/s4.png'; ?>"
   							 alt="<?php echo $slider_image4 ? esc_attr($slider_image4['alt']) : 'Подарочные наборы и аксессуары';
						?>">

						<a href="<?php echo $slider_image5 ? esc_url($slider_image5['url']) : get_template_directory_uri() . '/img/slider/s5.png'; ?>" class="swiper-slide" data-fancybox="gallery">
						<img
    						src="<?php echo $slider_image5 ? esc_url($slider_image5['url']) : get_template_directory_uri() . '/img/slider/s5.png'; ?>"
   							 alt="<?php echo $slider_image5 ? esc_attr($slider_image5['alt']) : 'Подарочные наборы и аксессуары';
						?>">

						<a href="<?php echo $slider_image6 ? esc_url($slider_image6['url']) : get_template_directory_uri() . '/img/slider/s6.png'; ?>" class="swiper-slide" data-fancybox="gallery">
						<img
    						src="<?php echo $slider_image6 ? esc_url($slider_image6['url']) : get_template_directory_uri() . '/img/slider/s6.png'; ?>"
   							 alt="<?php echo $slider_image6 ? esc_attr($slider_image6['alt']) : 'Подарочные наборы и аксессуары';
						?>">
					</div>
				</div>
				<div class="swiper-nav">
					<button class="button-prev" type="button">
						<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M0.21967 6.21967C-0.073223 6.51256 -0.073223 6.98744 0.21967 7.28033L6.21967 13.2803C6.51256 13.5732 6.98744 13.5732 7.28033 13.2803C7.57322 12.9874 7.57322 12.5126 7.28033 12.2197L1.81066 6.75L7.28033 1.28033C7.57322 0.987437 7.57322 0.512563 7.28033 0.21967C6.98744 -0.0732236 6.51256 -0.0732236 6.21967 0.21967L0.21967 6.21967Z"
								fill="#889099" />
						</svg>
					</button>
					<div class="pagination"></div>
					<button class="button-next" type="button">
						<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M7.78033 6.21967C8.07322 6.51256 8.07322 6.98744 7.78033 7.28033L1.78033 13.2803C1.48744 13.5732 1.01256 13.5732 0.719669 13.2803C0.426776 12.9874 0.426776 12.5126 0.719669 12.2197L6.18934 6.75L0.71967 1.28033C0.426777 0.987437 0.426777 0.512563 0.71967 0.21967C1.01256 -0.0732236 1.48744 -0.0732236 1.78033 0.21967L7.78033 6.21967Z"
								fill="#889099" />
						</svg>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>