<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>

	<?php jeo_map(); ?>

	<?php // Comente esta parte para que no salga el mapa que se repite (by josego)
              //jeo_featured(); 
        ?>

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
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" title="Compartir esta noticia en Facebook" target="_blank" class=“fb”>
                                                <i class="fa fa-circle fa-stack-2x icon-background2"></i>
                                                <i class="fa fa-facebook fa-stack-1x"></i>
                                        </a>
                                </div>


				<div class="fa-stack fa-lg">
					<a href="https://twitter.com/home?status=<?php the_title() ?>&nbsp;<?php echo wp_get_shortlink(); ?> v&iacute;a @cartochaco" class="tw" title="Twitter" target="_blank">
						<i class="fa fa-circle fa-stack-2x icon-background2"></i>
						<i class="fa fa-twitter fa-stack-1x"></i>
					</a>
				</div>

				<div class="fa-stack fa-lg">
					<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>"onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false; "title="Share on Google +!">
						<i class="fa fa-circle fa-stack-2x icon-background2"></i>
						<i class="fa fa-google-plus fa-stack-1x"></i>
					</a>
				</div>


                        </span>
		</div>

		<section class="posts-section">
                <div class="container">    
                    <?php
	                $orig_post = $post;
	                global $post;
	                $tags = wp_get_post_tags($post->ID);

	                if($tags){
                    ?>
                            <h2><?php _e('Related posts', 'jeo'); ?></a></h2>
                            <ul class="posts-list">
                       <?php    
	                    $tag_ids = array();
	                    foreach($tags as $individual_tag) 
                                $tag_ids[] = $individual_tag->term_id;
	                        $args = array(
	                            'tag__in' => $tag_ids,
	                            'post__not_in' => array($post->ID),
	                            'posts_per_page' => 3, // Number of related posts to display.
	                            'caller_get_posts' => 1
	                        );
	
	                        $my_query = new wp_query($args);

	                        while($my_query->have_posts()) {
	                            $my_query->the_post();
	             ?>
	                            <li id="post-<?php the_ID(); ?>" <?php post_class('four columns'); ?>>
		                        <article id="post-<?php the_ID(); ?>">
			                    
			                    <section class="post-content">
			                    <?php
			                        // La funcion Post Thumbnail.
			                        if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(300,200), array("class" => "post_thumbnail")); } 
			     
                                                // Post Thumbnail Fin
			                    ?>
			                    </section>
			                    <header class="post-header">
			                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			                    </header>
			                </article>
		                   </li>
	                     <? } 
                             ?>
                             </ul>
                             <?
	                 } 
	                 $post = $orig_post;
	                 wp_reset_query();
	             ?>             
                     <div class="twelve columns">
		         <div class="navigation">
			     <?php posts_nav_link(); ?>
			 </div>
		     </div>
                 </div>
	</section>

	</article>

<?php endif; ?>

<?php get_footer(); ?>
