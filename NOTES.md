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