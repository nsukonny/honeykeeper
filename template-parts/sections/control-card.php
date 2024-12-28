<?php
$src  = isset( $args['src'] ) ? esc_url( $args['src'] ) : '';
$name = isset( $args['name'] ) ? esc_html( $args['name'] ) : '';
$text = isset( $args['text'] ) ? esc_html( $args['text'] ) : '';
$href = isset( $args['href'] ) ? esc_url( $args['href'] ) : '#';
$link = isset( $args['link'] ) ? esc_html( $args['link'] ) : 'Подробнее';
?>

<div class="control-card">
	<div class="control-card-img">
		<img src="<?php echo $src; ?>" width="420" height="250" alt="<?php echo esc_attr( $name ); ?>">
	</div>
	<div class="control-card-inner">
		<div class="control-card-name">
			<?php echo $name; ?>
		</div>
		<div class="control-card-text">
			<?php echo $text; ?>
		</div>
		<a href="<?php echo $href; ?>"><?php echo $link; ?></a>
	</div>
</div>
