<?php
//Template Name: Contato
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<section class="container contato">
				<h2 class="subtitulo"><?php the_title(); ?></h2>

				<div class="grid-16">
					<?php the_field('embed_mapa') ?>
				</div>

				<div class="grid-1-3 contato-item">
					<h2>Dados</h2>
					<p><?php the_field('telefone') ?></p>
					<p><?php the_field('email') ?></p>
					<p><?php the_field('facebook') ?></p>
				</div>
				<div class="grid-1-3 contato-item">
					<h2>Horários</h2>
					<?php the_field('horarios') ?>
				</div>
				<div class="grid-1-3 contato-item">
					<h2>Endereço</h2>
					<p><?php the_field('endereco_1') ?></p>
					<p><?php the_field('endereco_2') ?></p>
					<p><?php the_field('pais') ?></p>
				</div>
			</section>

	<?php endwhile; endif;?>
<?php get_footer(); ?>
