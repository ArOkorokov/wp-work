<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bakery
 */

?>

<div id="popup" aria-hidden="true" class="popup">
			<div class="popup__wrapper">
				<div class="popup__content">
					<button data-close type="button" class="popup__close">Close</button>
					<div class="popup__text">
						<form action="files/sendmail/sendmail.php" method="POST" class="popup-form">
							<input type="text" name="form[email]" data-error="Error" placeholder="E-mail" class="input">
							<input type="tel" name="tel" data-error="Error" placeholder="phone" class="input">
							<button type="submit" class="button">Send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
<footer class="footer">
			<div class="footer-container">
				<?
				
					wp_nav_menu( [
						'theme_location'  => '',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'footer-menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => new FooterWalker,
					] );
				
				?>
				<!-- <ul class="footer-menu">
					<li><a href="#" class="footer-menu__link">about</a></li>
					<li><a href="#" class="footer-menu__link">How we works</a></li>
					<li><a href="#" class="footer-menu__link">desserts</a></li>
					<li><a href="#" class="footer-menu__link">team</a></li>
					<li><a href="tel:+12123533355" class="footer-menu__link">+1 212 343 33 55
						</a></li>
				</ul> -->
				<div class="footer-contacts-wrapper">
					<div class="footer-constacts">
						<div class="footer-social_wrapper">
							<div class="footer-address">
								You can find us in New York, located at 101 Avenue 11-88
							</div>
							<div class="footer-social_link">
								<a href="#" class="social_link-item icon-email"></a>
								<a href="#" class="social_link-item icon-twitter"></a>
								<a href="#" class="social_link-item icon-facebook"></a>
								<a href="#" class="social_link-item icon-inst"></a>
							</div>
						</div>
					</div>
					<div class="footer-map-wrapper">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37488.04095010735!2d-74.03339005895386!3d40.72609212563965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25981aa6687d9%3A0x9eb69d066954b5a0!2s11-88%20WORLD!5e0!3m2!1sen!2sru!4v1685781757300!5m2!1sen!2sru" width="406" height="284" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="js/app.min.js?_v=20230604165416"></script>

<?php wp_footer(); ?>

</body>
</html>
