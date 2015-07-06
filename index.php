<?php get_header();?>
<div class="row" id="middle_header">
 <?php
          $args = array (
            'cat' => '37',
            'showposts' => '1'
            );
        ?>
         <?php 
    
        $query = new WP_Query($args);

          if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
                 <h2><?php the_content();?></h2>
                  <?php endwhile; else: ?>
             <p>Sorry, no posts matched your criteria.</p>
         <?php endif; ?>
  </div>
  
  <hr>
    <div class="row" id="middle">
    	 <?php
          $args = array (
            'cat' => '18',
            'showposts' => '3'
            );
        ?>
        <?php 
    
        $query = new WP_Query($args);
      
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
		$custom_fields = get_post_custom();
		$pic_url  = $custom_fields['pic'][0];
		$pic 	  = '<img src="'.$pic_url.'" id="pic">';
		$page_url = $custom_fields['page_id'][0];
		?>	
		<div class="span4">
      		<h3>
        		<div class="post_logo">
        			<?php echo $pic;?>
        		</div>
        		<p>
        		<?php the_title();?>
        		</p>
        	</h3>
        <p><br>
            <br>
        	<?php the_content();?>
	        <br>
	        <br>
        </p>
        <p id="meti"><a class="btn" href="?page_id=<?php echo $page_url;?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/search.png"></a></p>
        
    	</div>
    <?php endwhile;?>
        <?php endif; ?>
</div>
<?php get_footer();?>