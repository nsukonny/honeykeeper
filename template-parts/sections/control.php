<section class="control" id="control">
	<div class="container">
		<div class="control-wrapper">
			<div class='h2-wrapper sm'>

				<h2><?php echo esc_html($control_title = get_field('control_title')); ?></h2>
				<p><?php echo esc_html($control_description = get_field('control_description')); ?></p>
			</div>

			<div class="control-cards">

				<?php if ( have_rows('control_repeater') ) : ?>
					<?php while ( have_rows('control_repeater') ) : the_row(); ?>
						<div class="control-card">
							<div class="control-card-img">
								<img src="<?php echo esc_url(get_sub_field('control_repeater_img')['url']); ?>"
									 alt="<?php echo esc_attr(get_sub_field('name')); ?>">
							</div>
							<div class="control-card-inner">
								<div class="control-card-name"><?php echo esc_html(get_sub_field('control_repeater_title')); ?></div>
								<div class="control-card-text"><?php echo esc_html(get_sub_field('control_repeater_description')); ?></div>
								<a href="<?php echo esc_url(get_sub_field('control_repeater_link')); ?>" class="control-card-link">
									<?php echo esc_html(get_sub_field('control_repeater_link_name')); ?>
								</a>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
