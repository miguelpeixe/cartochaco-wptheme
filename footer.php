<footer id="colophon">
	<div class="container">
		<div class="six columns">
			<p><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_chico.gif" alt="" style="border-bottom: 1px solid #EFD7CB;"></p>
			<nav id="footer-nav">
				<?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
			</nav>
		</div>
		<div class="six columns partners">
			<p><span><?php _e('Colaboradores', 'jeo'); ?></span><a href="http://www.guyra.org.py/index.php?lang=es" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners1.png" alt="Guyra Paraguay" title="Guyra Paraguay"></a><a href="http://infoamazonia.org/es/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners2.png" alt="Infoamazonia" title="Infoamazonia"></a><a href="http://www.terra-i.org/terra-i.html" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners3.png" alt="terra-i" title="terra-i"></a></p>
			<p><span><?php _e('Apoyado por', 'jeo'); ?></span><a href="http://earthjournalism.net/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/project1.png" alt="Earth Journalism Network" title="Earth Journalism Network"></a><a href="https://internews.org/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/project2.png" alt="Internews" title="Internews"></a>
                        <p>
                            <a href="http://ciat.cgiar.org/es/" class="cia" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/CIAT_EN-2D_white_p.png" alt="CIAT" title="CIAT"/></a>
                            <a href="http://foreststreesagroforestry.org/"class="cgiar" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/2_FTA_c_b.png" alt="CIAT" title="CGIAR"/></a>
                        </p>
		</div>
	</div>
	<div class="social">
							<span class="fa-stack fa-lg">
								<a href="https://www.facebook.com/cartochaco" class="fb" title="Facebook" target="_blank">
									<i class="fa fa-circle fa-stack-2x icon-background1"></i>
									<i class="fab fa-facebook-f fa-stack-1x"></i>
								</a>
							</span>

							<span class="fa-stack fa-lg">
								<a href="https://twitter.com/cartochaco" class="tw" title="Twitter" target="_blank">
									<i class="fa fa-circle fa-stack-2x icon-background1"></i>
									<i class="fab fa-twitter fa-stack-1x"></i>
								</a>
							</span>

							<span class="fa-stack fa-lg" title="Email" target="_blank">
								<a href="mailto:contact@infoamazonia.org">
									<i class="fa fa-circle fa-stack-2x icon-background1"></i>
									<i class="fa fa-envelope fa-stack-1x"></i>
								</a>
							</span>
	</div>
	<div class="container">
		<div class="six columns">
			<div class="credits">
				<p><?php echo 'Copyright &reg;'; ?></p>
			</div>
		</div>
		<div class="six columns desarrollo">
		    <span class="text_desarrollo"><?php _e('Site desenvolvido por:', 'jeo-blank'); ?></span>
                    <a href="http://www.simgia.com/ESP/index.php" style="margin-left:10px;" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/simgia_C.png" alt="simgia" title="simgia"/>
                    </a>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/mas.png"/>
                    <a href="http://www.jeowp.org/" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/jeo_banner_c.png" alt="JEO" title="JEO"/>
                    </a>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<!-- Google Analytics //-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
