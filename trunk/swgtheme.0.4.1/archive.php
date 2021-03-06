<?php get_header();?>
<section class="page-wrap"><div class="container">
	<div id="swgimage"></div>
	<section class="row">
		<div id="slide" class="slide">
<?php if( is_active_sidebar('galary-sidebar')):?>
				<?php dynamic_sidebar('galary-sidebar');?>
		<?php endif;?>
	</div>
	</section>
	<section class="row">
		<div class="col-lg-3"><div class="side-menu"> <?php
			wp_nav_menu(
				array(
					'theme_location' => 'side-menu'
				)
			);?>
			<?php if( is_active_sidebar('page-sidebar')):?>
			<?php dynamic_sidebar('page-sidebar');?>
			<?php endif;?>
		
			</div>
		</div>
		<div class="col-lg-9">
			<h1 class="head1"><?php the_title();?></h1>
			<?php if(has_post_thumbnail()):?>
				<img src="<?php the_post_thumbnail_url('blog-small');?>" class= "img-fliud mb-3 img-thumbnail mr-4">
				<?php endif?>
			<?php get_template_part('includes/section','archive');?>
<?php
			global $wp_query;
			$big = 99999999;
			echo paginate_links( array(
				'base' => str_replace($big, '%#%', esc_url( get_pagenum_link( $big))),
				'format' => '?paged=%#%',
				'currant' => max( 1, get_query_var('paged')),
				'total' => $wp_query->max_num_pages
			));
		 ?>
		</div>
</section>
<section class="row">	
		<div id="footer2" class="footer2">
<?php if( is_active_sidebar('footer-sidebar')):?>
				<?php dynamic_sidebar('footer-sidebar');?>
		<?php endif;?>
	</div>
</section>
</div></section>

<?php get_footer();?>

<?php get_footer();?>