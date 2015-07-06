<?php get_header();?>
<div class="row" id="middle_header">
  <?php while(have_posts()): the_post();?>
    <h2><?php the_title();?></h2>
  </div>
  <div class="stat">
     <a href="statements/statement-auto-geo.php">შეავსე online განაცხადი</a>
  </div>
  <hr>
    <div class="row" id="middle">
        <p><?php the_content();?></p>
    </div>

    <?php endwhile;?>
<?php get_footer();?>