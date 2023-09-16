<?php
/**
 * Block template file: header-1.php
 *
 * Header 1 Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'header-1-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-header-1';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
    <?php echo '#' . $id; ?> {
    /* Add styles that use ACF values here */
    }
</style>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <?php the_field( 'header' ); ?>
    <?php the_field( 'sub_header' ); ?>
    <?php the_field( 'content' ); ?>
    <?php the_field( 'button_label' ); ?>
    <?php $button_link = get_field( 'button_link' ); ?>
    <?php if ( $button_link ) : ?>
        <a href="<?php echo esc_url( $button_link); ?>"><?php echo esc_html( $button_link ); ?></a>
    <?php endif; ?>
    <?php the_field( 'button_two_label' ); ?>
    <?php $button_two_link = get_field( 'button_two_link' ); ?>
    <?php if ( $button_two_link ) : ?>
        <a href="<?php echo esc_url( $button_two_link); ?>"><?php echo esc_html( $button_two_link ); ?></a>
    <?php endif; ?>
    <?php $image = get_field( 'image' ); ?>
    <?php if ( $image ) : ?>
        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
    <?php endif; ?>
</div>