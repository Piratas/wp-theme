
## Cabeçalho
<?php get_header(); ?>

## Loop
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Nenhuma publicação ainda.', 'piratas' ); ?></p>
<?php endif; ?>

## Barra lateral
<?php get_sidebar(); ?>

## Rodapé
<?php get_footer(); ?>
