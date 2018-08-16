<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */
$address1 = get_field('address_line_1', 'option');
$address2 = get_field('address_line_2', 'option');
$phone = get_field('phone_number', 'option');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
			<section class="footer-nav">
				<?php 
				if( have_rows('links', 'option') ) : while( have_rows('links', 'option') ) : the_row(); 
					$section_title = get_sub_field('section_title');
				?>
					<div class="item">
						<h3><?php echo $section_title; ?></h3>
						<ul>
						<?php if( have_rows('page_links', 'option') ) : 
						while( have_rows('page_links', 'option') ) : the_row(); 

						$link = get_sub_field('link');

						?>
						<li>
							<a href="<?php echo get_permalink( $link ); ?>">
								<?php echo get_the_title( $link );?>
							</a>
						</li>
					<?php endwhile; endif; ?>
						</ul>
					</div>
					<?php endwhile; ?>
						
				<?php endif; ?>
				
						
			
			</section>

			<section class="bottom-footer">
				&copy; <?php echo date('Y') . ' &#8226; '.get_bloginfo('name').' All Rights Reserved. | '.$address1.' &#8226; '.$address2. ' &#8226; '.$phone.' &#8226; <a href="'.get_bloginfo('url').'/sitemap">Sitemap</a> &#8226; site by <a href="https://bellaworksweb.com">BW</a>'; ?>
			</section>
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
