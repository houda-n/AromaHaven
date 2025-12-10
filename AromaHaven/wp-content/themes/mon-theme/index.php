<?php
get_header();
?>
<main>
  <h1><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>
</main>
<?php
bloginfo();
the_title();
the_content();
get_footer();