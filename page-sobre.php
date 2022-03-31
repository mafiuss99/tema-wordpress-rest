<?php
//Template Name: Sobre
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field('imagem_sobre'); ?>" alt="<?php the_field('texto_imagem_sobre') ?>">
			</div>

			<div class="grid-8">
				<h2>História</h2>
				<?php the_field('historia'); ?>
				<h2>Visão</h2>
				<?php the_field('visao'); ?>
				<h2>Valores</h2>	
				<?php the_field('valores'); ?>
			</div>
		</section>
	<?php endwhile; endif;?>
<?php get_footer(); ?>
