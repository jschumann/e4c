<?php

if (!defined('ABSPATH')) {
	exit;
}
/***** Theme Info Page *****/

if (!function_exists('maisha_lite_theme_info_page')) {
	function maisha_lite_theme_info_page() {
		add_theme_page(esc_html__('Welcome to Maisha Lite', 'maisha-lite'), esc_html__('Theme Info', 'maisha-lite'), 'edit_theme_options', 'blog', 'maisha_lite_display_theme_page');
	}
}
add_action('admin_menu', 'maisha_lite_theme_info_page');

if (!function_exists('maisha_lite_display_theme_page')) {
	function maisha_lite_display_theme_page() {
		global $maisha_lite_data; ?>
		<div class="theme-info-wrap">
			<h1>
				<?php printf(esc_html__('Welcome to Maisha Lite', 'maisha-lite')); ?>
			</h1>
			<div class="maisha-row theme-intro clearfix">
				<div class="maisha-col-1-4">
					<img class="theme-screenshot" src="<?php echo esc_url(get_template_directory_uri() ); ?>/screenshot.png" alt="<?php esc_attr_e('Theme Screenshot', 'maisha-lite'); ?>" />
				</div>
				<div class="maisha-col-3-4 theme-description">
					<p class="about">
						<?php printf(esc_html__('Maisha Lite is modern, responsive and accessibility ready theme. It is perfectly suited for charity and non-profit websites. 
It is such a great feeling to be inspired by someone or something. Inspiration makes you wanna spend your time creating, making this world a better place. Some time ago we watched "Virunga" documentary and that story inspired us to develop beautiful WordPress theme we named "Maisha". This is a lite free version of the "Maisha" theme. Hope you will enjoy it! ', 'maisha-lite')); ?>
					</p>
				</div>
			</div>

			<hr>
			<div class="theme-links clearfix">
				<p>
					<strong><?php esc_html_e('Important Links:', 'maisha-lite'); ?></strong>
					<a href="<?php echo esc_url('http://www.anarieldesign.com/free-charity-wordpress-theme/'); ?>">
						<?php esc_html_e('Theme Info Page', 'maisha-lite'); ?>
					</a>
					<a href="<?php echo esc_url('https://wordpress.org/support/theme/maisha-lite'); ?>">
						<?php esc_html_e('Free Support Forum', 'maisha-lite'); ?>
					</a>
					<a href="<?php echo esc_url('http://www.anarieldesign.com/support/'); ?>">
						<?php esc_html_e('Membership Support Center', 'maisha-lite'); ?>
					</a>
					<a href="<?php echo esc_url('http://www.anarieldesign.com/showcase/'); ?>">
						<?php esc_html_e('Anariel Design Themes Showcase', 'maisha-lite'); ?>
					</a>
				</p>
			</div>
			<hr>
			<div id="getting-started" class="bg">
				<h3>
					<?php esc_html__('Get Started with %s', 'maisha-lite'); ?>
				</h3>
				<div class="maisha-row clearfix">
					<div class="maisha-col-1-2">
						<div class="section">
							<h4>
								<span class="dashicons dashicons-welcome-learn-more"></span>
								<?php esc_html_e('Theme Documentation', 'maisha-lite'); ?>
							</h4>
							<p class="about">
								<?php esc_html__('Please check the documentation to get better overview of how the theme is structured.', 'maisha-lite'); ?>
							</p>
							<p>
								<a href="<?php echo esc_url('http://www.anarieldesign.com/documentation/maishalite/'); ?>" class="button button-secondary">
									<?php esc_html_e('Theme Documentation', 'maisha-lite'); ?>
								</a>
								<a href="<?php echo esc_url('https://wordpress.org/support/theme/maisha-lite'); ?>" class="button button-secondary">
									<?php esc_html_e('Support Forum', 'maisha-lite'); ?>
								</a>
							</p>
						</div>
						<div class="section">
							<h4>
								<span class="dashicons dashicons-admin-appearance"></span>
								<?php esc_html_e('Theme Options', 'maisha-lite'); ?>
							</h4>
							<p class="about">
								<?php esc_html__('Click "Customize" to open the Customizer.',  'maisha-lite'); ?>
							</p>
							<p>
								<a href="<?php echo admin_url('customize.php'); ?>" class="button button-secondary">
									<?php esc_html_e('Customize Theme', 'maisha-lite'); ?>
								</a>
							</p>
						</div>
					</div>
					<div class="maisha-col-1-2">
						<div class="section">
							<h4>
								<span class="dashicons dashicons-cart"></span>
								<?php esc_html_e('Maisha Pro', 'maisha-lite'); ?>
							</h4>
							<p class="about">
								<?php esc_html_e('Full version of this theme includes additional features; additional page templates, custom widgets, additional front page options, different blog options, different theme options, WooCommerce support, color options & premium theme support.', 'maisha-lite'); ?>
							</p>
							<p>
								<a href="<?php echo esc_url('http://www.anarieldesign.com/themes/non-profit-wordpress-theme/'); ?>" class="button button-primary">
									<?php esc_html_e('Upgrade to Maisha Pro', 'maisha-lite'); ?>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="theme-comparison">
				<h3 class="theme-comparison-intro">
					<?php esc_html_e('Upgrade to Maisha for more awesome features:', 'maisha-lite'); ?>
				</h3>
				<table>
					<thead class="theme-comparison-header">
						<tr>
							<th class="table-feature-title"><h3><?php esc_html_e('Features', 'maisha-lite'); ?></h3></th>
							<th><h3><?php esc_html_e('Maisha Lite', 'maisha-lite'); ?></h3></th>
							<th><h3><?php esc_html_e('Maisha', 'maisha-lite'); ?></h3></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><h3><?php esc_html_e('Theme Price', 'maisha-lite'); ?></h3></td>
							<td><?php esc_html_e('Free', 'maisha-lite'); ?></td>
							<td>
								<a href="<?php echo esc_url('http://www.anarieldesign.com/pricing/'); ?>">
									<?php esc_html_e('View Pricing', 'maisha-lite'); ?>
								</a>
							</td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Responsive Layout', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Page Templates', 'maisha-lite'); ?></h3></td>
							<td><?php esc_html_e('3', 'maisha-lite'); ?></td>
							<td><?php esc_html_e('16', 'maisha-lite'); ?></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Custom Menus', 'maisha-lite'); ?></h3></td>
							<td><?php esc_html_e('2', 'maisha-lite'); ?></td>
							<td><?php esc_html_e('2', 'maisha-lite'); ?></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Header Options', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Custom Widgets', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Different Blog Layouts', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Different Theme Options', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Different Blog Options', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Premium Slider', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('WooCommerce, BuddyPress, Give, bbPress, The Events Calendar Support', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Custom Plugins', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Color Options', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Extended Features', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Support', 'maisha-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><?php esc_html_e('Help Desk Ticketing System', 'maisha-lite'); ?></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<a href="<?php echo esc_url('http://www.anarieldesign.com/themes/non-profit-wordpress-theme/'); ?>" class="upgrade-button">
									<?php esc_html_e('Upgrade to Maisha Pro', 'maisha-lite'); ?>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<hr>
			<div class="section bg1">
				<h3>
					<?php esc_html_e('More Themes by Anariel Design', 'maisha-lite'); ?>
				</h3>
				<p class="about">
					<?php printf(esc_html__('Build Your Dream WordPress Site with Premium Niche Themes for Bloggers & Charities',  'maisha-lite'), $maisha_lite_data['Name']); ?>
				</p>
				<a href="<?php echo esc_url('http://www.anarieldesign.com/themes/'); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/anarieldesign-themes.jpg" alt="<?php esc_attr_e('Theme Screenshot', 'maisha-lite'); ?>" /></a>
				<p>
					<a href="<?php echo esc_url('http://www.anarieldesign.com/themes/'); ?>" class="button button-primary advertising">
						<?php esc_html_e('More Themes', 'maisha-lite'); ?>
					</a>
				</p>
			</div>
		</div><?php
	}
}

?>