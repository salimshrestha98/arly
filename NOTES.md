# All Notes of the Course:  

### Required Theme Files:  

- **style.css**
  Your theme's main stylesheet. It will also include information about your theme.
- **index.php**
  The main template file. It will be the template for the homepage on your site.

- **comments.php**
  The comment template that is included whenever comments are allowed in post.

- **screenshot.png**
  The image that is displayed in the theme preview in the theme marketplace.


### Other Theme Files:
  
- page.php
- header.php
- footer.php
- functions.php

### Getting the path to your theme:
For the stylesheets and javascript to load, you need to provide complete path to the file. To get your theme path, use the following functions:
- get_template_directory_uri()
- bloginfo( 'template_directory' )

### Separating Headers and Footers:
- get_header() -> Calls header.php file.
- get_footer() -> Calls footer.php file.

If you have multiple header templates for different pages, you can create another file with name header-<slug>.php.
To call that specific header template, you can call get_header( '<slug>' ). It is similar for footer.

### Registering a Nav Menu in WordPress:
- register_nav_menus()
  You can determine how many menus you wish to display.
- wp_nav_menu()
  Call menu to be displayed in frontend.

### How to call default page template in WordPress:
- page.php is the default page template.
- index.php is the fallback template if page.php or other template are not defined.


### Displaying Page contents:
- the_title()
- the_content()

### Enabling Featured Image Support:
- When developing theme, you should manually add theme supports and features as needed.
- We need to enable Featured Image ( thumbnail ) option in admin page editor manually.
- Whatever we want to bring to the admin page settings, we add to functions.php file.
- Use add_theme_support( 'post-thumbnails' ) to add support for featured image option.

### Displaying thumbnail image:
- the_post_thumbnail([thumbnail, medium, large, full, array(custom_height, custom_width )])
  Prints the thumbnail image on the post.
- wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')
  Returns the complete url of the image. Useful if you want to add the <img> tag manually.

### How to add Custom Header Image (Logo):
- add_theme_support('custom-header' )
  Enable support to choose custom header from Customizer.
- get_header_image()
  Returns the url. So, add an <img> tag where you want to insert brand logo and call the function in src attribute.

### Creating Custom Page Template:
- If we need custom design for a page different from the default page.php, we create custom page template for that page.
- Create a php file in theme root dir and add this comment with template name.
  /**Template Name: Template 1 */
- Choose the template in page/post edit settings and it will be applied for that specific page/post.

### Make current page menu item active:
- WordPress adds a .current-menu-item class to the navigation menu item that is currently displayed.
- We can use that class to style the currently active nav menu item.


## Displaying Post List:
- while( have_posts() ) : the_post() -> Loops for all the available posts
- the_title() -> Prints the current loop item title
- get_the_excerpt() -> Returns the loop item excerpt
- the_date() -> Returns the loop item created date
- the_post_thumbnail_url() -> Prints the loop item thumbnail url if available