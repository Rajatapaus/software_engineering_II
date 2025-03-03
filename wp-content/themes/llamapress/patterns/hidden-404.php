<?php
/**
 * Title: Hidden 404
 * Slug: llamapress/hidden-404
 * Inserter: no
 */
?>
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><?php echo esc_html_x( 'No Content Found!', 'Message to convey that a webpage could not be found', 'llamapress' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Try searching this site by using the form below', 'Prompt to use the search form', 'llamapress' ); ?>:</p>
<!-- /wp:paragraph -->
<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'llamapress' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search this website...', 'placeholder for search field', 'llamapress' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'llamapress' ); ?>"} /-->
