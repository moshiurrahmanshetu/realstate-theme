=== Nextoolify Real Estate ===

Contributors: nextoolify
Tags: real-estate, property, estate, agency, broker, listing, custom-background, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, right-sidebar, theme-options, translation-ready, accessibility-ready, blog, e-commerce
Requires at least: 6.9
Tested up to: 6.9
Stable tag: 1.0.0
Requires PHP: 8.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A premium real estate WordPress theme with modern design, advanced property search, agent profiles, and full customization options.

== Description ==

Nextoolify Real Estate is a premium WordPress theme designed specifically for real estate agencies, property listings, and luxury real estate websites. Built with modern design principles and the latest web technologies, this theme provides everything you need to create a stunning and functional real estate website.

== Requirements ==

- WordPress 6.9 or higher
- PHP 8.2 or higher (8.3 recommended)
- MySQL 5.6 or higher / MariaDB 10.0 or higher
- Memory limit: 128MB or higher
- Max execution time: 30 seconds or higher

== Installation ==

1. Download the theme zip file from ThemeForest or the official source.
2. Go to WordPress Admin > Appearance > Themes > Add New.
3. Click "Upload Theme" and select the theme zip file.
4. Install and activate the theme.
5. Follow the on-screen prompts to install recommended plugins (if any).
6. Configure settings through the 'Appearance > Customize' screen.

== Theme Setup ==

After activation, follow these steps to set up your theme:

1. **Import Demo Content (Optional)**: If demo content is available, use the One-Click Demo Import plugin to import sample pages, posts, and settings.

2. **Configure Menus**: Go to Appearance > Menus to create and assign menus to the Primary Menu, Footer Menu, and Top Bar Menu locations.

3. **Set Up Widgets**: Go to Appearance > Widgets to add content to the Main Sidebar and Footer Widget areas.

4. **Customize Appearance**: Go to Appearance > Customize to configure colors, fonts, header, footer, and other theme options.

5. **Create Pages**: Create your Home, About, Contact, and other necessary pages using the WordPress editor or page builder.

6. **Configure Homepage**: Go to Settings > Reading to set your static homepage if desired.

== Menus ==

The theme supports three menu locations:

- **Primary Menu**: Main navigation menu displayed in the header.
- **Footer Menu**: Secondary navigation menu displayed in the footer.
- **Top Bar Menu**: Additional menu for quick links in the top bar.

To configure menus:
1. Go to Appearance > Menus.
2. Create a new menu or edit an existing one.
3. Add menu items (pages, posts, custom links, categories).
4. Check the desired menu location checkbox.
5. Save the menu.

== Widgets ==

The theme includes the following widget areas:

- **Main Sidebar**: Displayed on blog and archive pages (if sidebar layout is enabled).
- **Footer Widget 1**: First column in the footer.
- **Footer Widget 2**: Second column in the footer.
- **Footer Widget 3**: Third column in the footer.
- **Footer Widget 4**: Fourth column in the footer.

To configure widgets:
1. Go to Appearance > Widgets.
2. Drag and drop widgets into the desired widget areas.
3. Configure widget settings.
4. Save changes.

== Customizer ==

The theme includes extensive customization options in the WordPress Customizer (Appearance > Customize):

- **Site Identity**: Logo, site title, tagline, and site icon.
- **Colors**: Primary, secondary, and accent colors.
- **Typography**: Font families, sizes, and weights.
- **Header**: Header layout, top bar settings, and navigation options.
- **Footer**: Footer layout, columns, and copyright text.
- **Blog**: Blog layout, post display options, and sidebar position.
- **Homepage**: Hero section settings and featured content.
- **Social Media**: Social media links and icons.
- **Additional CSS**: Add custom CSS code.

== Gutenberg ==

The theme is fully compatible with the Gutenberg block editor:

- Full-width and wide alignment support.
- Custom block styles and colors.
- Editor styles that match the frontend.
- Responsive block previews.
- Support for all core WordPress blocks.
- Custom block patterns (if available).

To use Gutenberg:
1. Create or edit a page/post.
2. Use the block editor to add and arrange blocks.
3. Customize block settings in the sidebar.
4. Preview changes in real-time.

== Homepage ==

Setting up your homepage:

1. **Static Homepage**: Go to Settings > Reading. Select "A static page" and choose your homepage from the dropdown.

2. **Blog Posts Page**: Select a page to display your blog posts if desired.

3. **Custom Homepage**: Use the block editor or page builder to create a custom homepage with hero sections, featured properties, testimonials, and more.

4. **Homepage Options**: Configure homepage settings in Appearance > Customize > Homepage.

== Blog ==

The theme includes multiple blog layouts and options:

- **Blog Layouts**: Grid, list, and masonry layouts available.
- **Sidebar Position**: Left, right, or no sidebar options.
- **Post Meta**: Display author, date, categories, and tags.
- **Featured Images**: Support for post thumbnails with various sizes.
- **Excerpt Length**: Customize excerpt length in Customizer.
- **Pagination**: Numeric or next/previous pagination.

To configure blog settings:
1. Go to Appearance > Customize > Blog.
2. Select your preferred layout and options.
3. Save changes.

== Translation ==

The theme is translation-ready and follows WordPress internationalization standards:

- Text domain: `nextoolify-real-estate`
- .pot file included in the `/languages/` directory.
- Supports RTL (Right-to-Left) languages.
- Compatible with translation plugins like WPML, Polylang, and Loco Translate.

To translate the theme:

1. **Using Loco Translate**:
   - Install and activate the Loco Translate plugin.
   - Go to Loco Translate > Themes > Nextoolify Real Estate.
   - Create a new translation for your language.
   - Translate strings and save.

2. **Manual Translation**:
   - Use the .pot file in `/languages/` as a template.
   - Create a .po and .mo file for your language (e.g., `fr_FR.po` and `fr_FR.mo`).
   - Upload the files to the `/languages/` directory.

== Child Theme ==

Using a child theme is recommended for making customizations to preserve your changes when the parent theme is updated.

A child theme is included in the `nextoolify-child/` folder.

To use the child theme:

1. Upload the `nextoolify-child` folder to `/wp-content/themes/`.
2. Activate the child theme in Appearance > Themes.
3. Add custom CSS and PHP functions to the child theme files.

The child theme includes:
- `style.css`: For custom CSS.
- `functions.php`: For custom PHP functions.
- `readme.txt`: Child theme documentation.

== Troubleshooting ==

**Common Issues and Solutions:**

= Theme not displaying correctly =

- Clear your browser cache and WordPress cache plugins.
- Check that all required plugins are installed and activated.
- Verify that your PHP version meets the requirements (8.2+).
- Disable other plugins to check for conflicts.

= Images not uploading =

- Check your WordPress upload limits in php.ini.
- Verify folder permissions (755 for directories, 644 for files).
- Ensure the `uploads` folder is writable.

= Customizer not saving changes =

- Clear browser cache and cookies.
- Disable browser extensions that may interfere.
- Check for JavaScript errors in the browser console.
- Verify that your WordPress installation is up to date.

= Menu not appearing =

- Go to Appearance > Menus and verify the menu is assigned to the correct location.
- Check that menu items are published (not in draft).
- Ensure the theme supports the menu location.

= Widgets not displaying =

- Go to Appearance > Widgets and verify widgets are added to the correct area.
- Check that the page template supports the sidebar.
- Clear cache if using a caching plugin.

= Performance issues =

- Optimize images before uploading.
- Use a caching plugin like WP Rocket or W3 Total Cache.
- Enable lazy loading for images.
- Minify CSS and JavaScript files.

== FAQ ==

= Does this theme support page builders? =

Yes, the theme is compatible with popular page builders like Elementor, Beaver Builder, Divi, and Visual Composer.

= Is this theme translation ready? =

Yes, the theme follows WordPress internationalization standards and includes a .pot file for translations. It also supports RTL languages.

= Does this theme support WooCommerce? =

Yes, the theme includes full WooCommerce support for selling properties or services online. It includes custom styling for WooCommerce pages.

= Can I use this theme for multiple sites? =

Yes, under the GPL license, you can use this theme on unlimited websites.

= Is the theme mobile responsive? =

Yes, the theme is fully responsive and works perfectly on all devices including desktop, tablet, and mobile.

= Does the theme include demo content? =

Demo content may be available depending on the distribution. Check the theme documentation for demo import instructions.

= How do I update the theme? =

Updates are available through the WordPress themes screen or ThemeForest. Always backup your site before updating. Using a child theme is recommended to preserve customizations.

= Is the theme accessible? =

Yes, the theme follows WCAG 2.1 accessibility guidelines and includes ARIA labels, keyboard navigation support, and screen reader compatibility.

= What browsers are supported? =

The theme supports all modern browsers including Chrome, Firefox, Safari, Edge, and Opera.

= Can I change the colors and fonts? =

Yes, you can customize colors and fonts through the WordPress Customizer (Appearance > Customize).

= Does the theme support RTL languages? =

Yes, the theme has full RTL support for right-to-left languages like Arabic, Hebrew, and Persian.

== Credits ==

- **Bootstrap 5** - https://getbootstrap.com/ (MIT License)
- **Swiper** - https://swiperjs.com/ (MIT License)
- **AOS** - https://michalsnik.github.io/aos/ (MIT License)
- **Font Awesome** - https://fontawesome.com/ (SIL OFL 1.1 / MIT License)
- **WordPress** - https://wordpress.org/ (GPLv2 or later)

== License ==

This theme is licensed under the GNU General Public License version 2 or later.
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This license allows you to use the theme on unlimited websites, modify it, and distribute it. However, you must keep the copyright notice and license information.

== Support ==

For support, documentation, and updates:

- **Documentation**: Visit the official theme documentation at https://nextoolify.com/docs/
- **Support Forum**: Get help at https://nextoolify.com/support/
- **Email**: Contact support@nextoolify.com
- **ThemeForest**: If purchased from ThemeForest, use the support tab on the product page.

When requesting support, please include:
- Your WordPress version
- Your PHP version
- A description of the issue
- Steps to reproduce the issue
- Screenshots if applicable

== Changelog ==

= 1.0.0 =
* Initial release
* Full WordPress 6.9+ compatibility
* PHP 8.2+ compatibility
* Bootstrap 5 integration
* Gutenberg block editor support
* Accessibility ready (WCAG 2.1)
* Translation ready with .pot file
* RTL support
* Customizer integration
* Responsive design
* SEO optimized
* Performance optimized

== Upgrade Notice ==

= 1.0.0 =
Initial release of Nextoolify Real Estate theme.
