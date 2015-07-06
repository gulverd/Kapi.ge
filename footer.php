
</div>
<footer class="row" id="foot">
    <div class="social">
        <div class="soc_box">
          <a href="https://www.facebook.com/kapimicrolending" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/fb.ico"></a>
        </div>
        <div class="soc_box">
          <a href="https://plus.google.com/u/0/109256472847299403059/posts" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/google.ico"></a>
        </div>
        <div class="soc_box">
          <a href="https://www.youtube.com/channel/UCXRpq2cLcAWjSir-0BKw-kg" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/youtube.ico"></a>
        </div>
    </div>  
    <p>
      <?php
          $args = array (
            'cat' => '1',
            'showposts' => '1'
            );
        ?>
         <?php 
    
        $query = new WP_Query($args);

          if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
                 <?php the_content();?>
                  <?php endwhile; else: ?>
             <p>Sorry, no posts matched your criteria.</p>
         <?php endif; ?>
    </p>
</footer>
<!-- /container -->
<script src="<?php echo get_bloginfo('template_directory');?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-transition.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-carousel.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-alert.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-modal.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-dropdown.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-tab.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-tooltip.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-popover.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-button.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-collapse.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap-typeahead.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/jquery.smooth-scroll.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory');?>/js/lightbox.js"></script>
<script>
$('.carousel').carousel({
  interval: 5000
})
</script>
</body>
</html>
