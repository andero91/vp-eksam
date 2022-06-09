<!DOCTYPE html>
<html lang="et">
<?php wp_head(); ?>
<body>
  <div class="pagecontainer">
    <div class="headercontainer">

      <?php get_header(); ?>
    </div>
    <main>
      <div class="headingcontainer">
        <h2>Meie töötajad</h2><br>
      </div>
      <div class="maincontainer">
        <?php
        if (have_posts()) {
          while (have_posts()) { ?>

            <div class="sisuelement">

              <?php the_post(); ?>
              <?php the_post_thumbnail(); ?>
              <h3><?php the_title(); ?></h3>
              <h4><?php echo get_post_meta(get_the_ID(), $key = 'Amet', $single = true); ?></h4>
              <?php the_content(); ?><p>
              <i><?php echo get_post_meta(get_the_ID(), $key = 'E-post', $single = true); ?></i>
              </div><br>
          <?php
          }
        } ?>
      </div>
    </main>
    <?php get_footer(); ?>
  </div>
</body>