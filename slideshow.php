<div id="postCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        $args = array(
            'cat' => '17',
            'showposts' => '3'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        $i = 0; ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php
            $i++;
            $custom_fields = get_post_custom(get_the_ID());
            $pic = $custom_fields['pic'];
	        $page_url = $custom_fields['page_id'][0];

            ?>

            <div class="item <?php print ($i == 1) ? "active" : ""; ?>">
                <a href="<?php echo '?page_id='.$page_url;?>"><img src="<?php print $pic[0]; ?>" alt="" id="slidepic"></a>

                
            </div>
        <?php endwhile; ?>

    </div>

    <!-- Controls -->
     <a class="left carousel-control" href="#postCarousel" data-slide="prev"><img
            src="<?php echo get_bloginfo('template_directory'); ?>/img/arrow.png" alt=""></a>
    <a class="right carousel-control" href="#postCarousel" data-slide="next"><img
            src="<?php echo get_bloginfo('template_directory'); ?>/img/arrow2.png" alt=""></a>
</div>
<?php endif; ?>