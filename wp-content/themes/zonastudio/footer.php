<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zonastudio
 */

?>

<footer id="footer" class="footer site-footer">
	<div class="footer-wrap">
		<div class="container-xl container-fluid">
			<div class="row">

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
					<a class="link-footer-logo" href="<?php echo site_url();?>">
						<img class="footer-logo" width="146" height="60" src="data:image/png;base64,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" alt="">

					</a>
					<p class="text-under-logo">
						<?php if(!empty(get_field('text_under_logo', 'options'))) { ?> 
							<?php the_field('text_under_logo', 'options');?>
						<?php } else { ?>
							Jesteśmy studiem, które stawia na kompleksowość usług. Angażujemy się w każdą fazę projektu,zaczynając od aranżacji poprzez projekt wykonawczy, aż po nadzór realizacji.
						<?php } ?>
					</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 offset-xl-1 offset-lg-1">
					<div class="footer-menu">
						<h5 class="title">Menu</h5>
						<?php 
							wp_nav_menu(array( 'theme_location' => 'header-menu', 'menu_id' => 'footer-menu',));
						?>
					</div><!-- /.about-us-wrap -->
				</div>
				<div class="col-xl-4 col-lg-4 col-md-5 col-sm-6">
						<h5 class="title">Skontaktuj się z nami</h5>
						<ul class="footer-contact">
							<?php $rows = get_field('emails', 'option');?>
							<li class="contact-item">
								<svg class="contact-icon" width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20 0.5H2C1.60218 0.5 1.22064 0.658035 0.93934 0.93934C0.658035 1.22064 0.5 1.60218 0.5 2V14C0.5 14.3978 0.658035 14.7794 0.93934 15.0607C1.22064 15.342 1.60218 15.5 2 15.5H20C20.3978 15.5 20.7794 15.342 21.0607 15.0607C21.342 14.7794 21.5 14.3978 21.5 14V2C21.5 1.60218 21.342 1.22064 21.0607 0.93934C20.7794 0.658035 20.3978 0.5 20 0.5ZM18.35 2L11 7.085L3.65 2H18.35ZM2 14V2.6825L10.5725 8.615C10.698 8.7021 10.8472 8.74877 11 8.74877C11.1528 8.74877 11.302 8.7021 11.4275 8.615L20 2.6825V14H2Z"/>
								</svg>
								<div class="emails-wrap">
									<?php if ($rows) { foreach ($rows as $row) { ?>
										<?php if(!empty($row['email'])) { ?>
											<a class="contact-link email" href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a><span class="coma">,</span><br>
										<?php }else{ ?> Nie określono adresu e-mail <?php } ?>
									<?php } } else{ ?> Nie określono adresu e-mail <?php } ?>
								</div>
							</li>

							<?php $rows = get_field('phones', 'option');?>
							<li class="contact-item">
								<svg class="contact-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M19.4998 21.75H19.3723C4.63482 20.9025 2.54232 8.4675 2.24982 4.6725C2.22625 4.37744 2.26114 4.08062 2.35248 3.79906C2.44382 3.5175 2.58981 3.25673 2.78211 3.03169C2.9744 2.80665 3.20921 2.62177 3.47308 2.48763C3.73695 2.35349 4.02469 2.27274 4.31982 2.25H8.45232C8.75274 2.24971 9.04632 2.33963 9.29504 2.50812C9.54377 2.67661 9.73616 2.9159 9.84732 3.195L10.9873 6C11.0971 6.27266 11.1243 6.57156 11.0657 6.85957C11.007 7.14758 10.865 7.412 10.6573 7.62L9.05982 9.2325C9.30936 10.6506 9.98846 11.9578 11.0052 12.9772C12.022 13.9967 13.3274 14.6792 14.7448 14.9325L16.3723 13.32C16.5834 13.1146 16.8504 12.9759 17.1398 12.9213C17.4292 12.8666 17.7283 12.8983 17.9998 13.0125L20.8273 14.145C21.1022 14.2597 21.3367 14.4536 21.501 14.702C21.6653 14.9504 21.7519 15.2422 21.7498 15.54V19.5C21.7498 20.0967 21.5128 20.669 21.0908 21.091C20.6689 21.5129 20.0966 21.75 19.4998 21.75ZM4.49982 3.75C4.30091 3.75 4.11014 3.82902 3.96949 3.96967C3.82884 4.11032 3.74982 4.30109 3.74982 4.5V4.56C4.09482 9 6.30732 19.5 19.4548 20.25C19.5533 20.2561 19.6521 20.2427 19.7454 20.2105C19.8388 20.1783 19.9248 20.1281 19.9987 20.0626C20.0726 19.9971 20.1328 19.9176 20.1759 19.8288C20.2189 19.74 20.2441 19.6436 20.2498 19.545V15.54L17.4223 14.4075L15.2698 16.545L14.9098 16.5C8.38482 15.6825 7.49982 9.1575 7.49982 9.09L7.45482 8.73L9.58482 6.5775L8.45982 3.75H4.49982Z"/>
								</svg>
								<div class="phones-wrap">
									<?php if ($rows) { foreach ($rows as $row) { ?>
										<?php if(!empty($row['phone'])) { ?>
											<a class="contact-link phone" href="tel:<?php echo preg_replace('/[^0-9+]/', '', $row['phone']);?>"><?php echo $row['phone'];?></a><span class="coma">,</span><br>
										<?php }else{ ?> Nie podano numeru telefonu. <?php } ?>
									<?php } } else{ ?> Nie podano numeru telefonu. <?php } ?>
								</div>
							</li>
							<!-- <li class="contact-item">
								<svg class="contact-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 0C7.34756 0 3.5625 3.78506 3.5625 8.4375C3.5625 10.0094 3.99792 11.5434 4.82198 12.8743L11.5197 23.6676C11.648 23.8744 11.874 24 12.1171 24C12.119 24 12.1208 24 12.1227 24C12.3679 23.9981 12.5944 23.8686 12.7204 23.6582L19.2474 12.7603C20.026 11.4576 20.4375 9.96277 20.4375 8.4375C20.4375 3.78506 16.6524 0 12 0ZM18.0406 12.0383L12.1065 21.9462L6.0172 12.1334C5.33128 11.0257 4.95938 9.74766 4.95938 8.4375C4.95938 4.56047 8.12297 1.39687 12 1.39687C15.877 1.39687 19.0359 4.56047 19.0359 8.4375C19.0359 9.7088 18.6885 10.9541 18.0406 12.0383Z"/>
									<path d="M12 4.21875C9.67378 4.21875 7.78125 6.11128 7.78125 8.4375C7.78125 10.7489 9.64298 12.6562 12 12.6562C14.3861 12.6562 16.2188 10.7235 16.2188 8.4375C16.2188 6.11128 14.3262 4.21875 12 4.21875ZM12 11.2594C10.4411 11.2594 9.17813 9.9922 9.17813 8.4375C9.17813 6.88669 10.4492 5.61563 12 5.61563C13.5508 5.61563 14.8172 6.88669 14.8172 8.4375C14.8172 9.96952 13.5836 11.2594 12 11.2594Z"/>
								</svg>
								<a class="contact-link" href="<?php the_field('map', 'options');?>" target="_blank" rel="noopener noreferrer">
									<?php if(get_field('address', 'options') || get_field('map', 'options')){ ?>
										<?php the_field('address', 'options');?>
									<?php }else{ ?>
										Nie podano adresu.
									<?php } ?>
								</a>
							</li> -->
							<li class="contact-item">
								Znajdź nas na:
								<a class="contact-link social" href="<?php the_field('facebook', 'options');?>" target="_blank" rel="noopener noreferrer">fb</a>
								<svg width="20" height="2" viewBox="0 0 20 2" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="20" height="1" fill="white"/></svg>
								<a class="contact-link social" href="<?php the_field('insatgram', 'options');?>" target="_blank" rel="noopener noreferrer">in</a>
							</li>
						</ul>
				</div><!-- /.col-xl-2 -->
				<div class="col-12 pt-xl-5">
					<div class="footer-copyright-text d-flex justify-content-center">
						<span>
							<?php the_field('copyright', 'options');?>
							© <?php echo date("Y") ?>
							<?php the_field('about_company', 'options');?>
						</span>
					</div><!-- /.footer-text -->
				</div><!-- /.col-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
</div><!-- /.footer-wrap -->
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
