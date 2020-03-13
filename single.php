<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>

	<?php jeo_map(); ?>

	<article id="content" class="single-post bblanco">
		<header class="single-post-header" class="clearfix">
			<div class="container">
				<div class="twelve columns">
				     <h1><?php the_title(); ?></h1>
				</div>
			</div>
		</header>
		<blockquote class="content">
			<div class="container">
			    <?php the_excerpt(); ?>
			</div>
		</blockquote>
		<section class="content">
			<div class="container">
				<div class="twelve columns">
					<div class="autor">
						<span>
                                                    <?php
                                                        $v_editores = get_the_term_list($post->ID, 'publisher', '', ', ', '');
                                                        $v_editores_sin_formateo = strip_tags($v_editores);
                                                        if($v_editores_sin_formateo){
                                                            echo $v_editores_sin_formateo;
                                                        }else{
                                                             the_author();
                                                        }
                                                    ?>
                                                    |
                                                    <?php
                                                        the_date();
                                                    ?>
                                                </span>
					</div>
					<?php the_content(); ?>
					<?php
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'jeo' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
					?>

					<?php
					$v_url = get_post_meta($post->ID, 'url', true);
					if($v_url != ''){
					?>
					   <p><a class="button" href="<?php echo $v_url; ?>" target="_blank"><?php _e('Read more', 'jeo'); ?></a></p>
					<?php
					}
					?>

				</div>
			</div>
		</section>

		<div class="share">
			<span>Share:

                                <div class="fa-stack fa-lg">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" title="Compartir esta noticia en Facebook" target="_blank"  class="fb">
                                                <i class="fa fa-circle fa-stack-2x icon-background2"></i>
                                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                                        </a>
                                </div>


				<div class="fa-stack fa-lg">
					<a href="https://twitter.com/home?status=<?php the_title() ?>&nbsp;<?php echo wp_get_shortlink(); ?> v&iacute;a @cartochaco" class="tw" title="Twitter" target="_blank">
						<i class="fa fa-circle fa-stack-2x icon-background2"></i>
						<i class="fab fa-twitter fa-stack-1x"></i>
					</a>
				</div>


                        </span>
		</div>
	</article>


<?php endif; ?>

<?php get_footer(); ?>
