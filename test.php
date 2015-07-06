<?php if (have_posts()) :
	$i=0; // counter
	while(have_posts()) : the_post();
		if($i%3==0) { // if counter is multiple of 3, put an opening div ?>
		<!-- <?php echo ($i+1).'-'; echo ($i+3); ?> -->
		<div>
		<?php } ?>
	<div class="single_item">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	</div>
		<?php $i++;
		if($i%3==0) { // if counter is multiple of 3, put an closing div ?>
		</div>
		<?php } ?>

	<?php endwhile; ?>
		<?php
		if($i%3!=0) { // put closing div here if loop is not exactly a multiple of 3 ?>
		</div>
		<?php } ?>

<?php endif; ?>