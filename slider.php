<section class="slider" id="slider">
    <div class="container-fluid">
        <div class="slider-wrapper">
            <?php 
            // Вставляємо компонент заголовка з параметрами
            get_template_part('components/h2-wrapper/h2-wrapper', null, [
                'class' => 'sm',
                'h2'    => 'Подарочные наборы и аксессуары',
                'text'  => 'lorem ipsum dollar lorem lorem ipusm'
            ]); 
            ?>
            <div class="swiper-box">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php 
                        // Масив зображень для слайдера
                        $slider_images = [
                            's1.png', 's2.png', 's3.png', 's4.png', 's5.png', 's6.png'
                        ];

                        // Генеруємо слайди
                        foreach ($slider_images as $image) : ?>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/slider/<?php echo esc_attr($image); ?>" 
                               class="swiper-slide" 
                               data-fancybox="gallery">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/slider/<?php echo esc_attr($image); ?>" 
                                     alt="Подарочные наборы и аксессуары">
                            </a>
                        <?php endforeach; ?>
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
