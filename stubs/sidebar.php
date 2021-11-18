<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Padma
 */

    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
        return;
    }

    $content = file_get_contents('./wp-content/themes/gogogo/quotes.json');
    $quotes = json_decode($content, true);
    $rQuote = mt_rand(0, count($quotes)-1);
?>

<div class="position-sticky" style="top: 2rem;">
    <div class="p-3 mb-3 bg-light rounded wp-block-group">
        <h2 class="">Quote of the day:</h2>
        <div class="mb-0 fw-light"><?php echo $quotes[$rQuote]['text']; ?></div>
        <div class="blockquote-footer mt-3 fw-lighter text-end small"><cite title="Source Title"><?php echo $quotes[$rQuote]['author']; ?></cite></div>
    </div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>