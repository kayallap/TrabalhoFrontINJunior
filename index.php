<?php
    include 'header.php';
?>

<?php query_posts("showposts=4&paged=$paged"); ?>
<?php if(have_posts()): ?>
	<?php $counter = 1; ?>
	<?php while(have_posts()): ?>
		<?php the_post(); ?>
		<section>
		<?php if (($counter % 2) == 1 ): ?>
			<div class="container-fluid">
                
                <div class="col-md-6 metadetexto<?php echo $counter; ?>">
					<h2><?php the_title(); ?></h2>
                    <p class="date<?php echo $counter; ?>">3 days ago by <a href="#">Jane Doe</a></p>
                    <p class="content<?php echo $counter; ?>"><?php echo the_content(); ?></p><br><br>
                    <a href="#" class="readmore<?php echo $counter; ?>">Read More</a>
				</div>
                
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'single-post-thumbnail'); ?>
				<?php if($image): ?>
					<div class="col-md-6 metadefoto<?php echo $counter; ?>" style="background-image: url(<?php echo $image[0]; ?>">
					</div>
				<?php else: ?>
					<div class="col-md-6 metadefoto<?php echo $counter; ?>" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/imagemdeerro.png)">
					</div>
				<?php endif ?>
			</div>

		<?php else: ?>
			<div class="container-fluid">

				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'single-post-thumbnail'); ?>
				<?php if($image): ?>
					<div class="col-md-6 metadefoto<?php echo $counter; ?>" style="background-image: url(<?php echo $image[0]; ?>">
					</div>
				<?php else: ?>
					<div class="col-md-6 <?php echo $counter; ?>" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/imagemdeerro.png)">
					</div>
				<?php endif ?>
                
                <div class="col-md-6 metadetexto<?php echo $counter; ?>">
                    <h2><?php the_title(); ?></h2>
                    <p class="date<?php echo $counter; ?>">3 days ago by <a href="#">Jane Doe</a></p>
                    <p class="content<?php echo $counter; ?>"><?php echo the_content(); ?></p><br><br>
                    <a href="#" class="readmore<?php echo $counter; ?>">Read More</a>
                </div>
                
			</div>
		<?php endif ?>			
		</section>
		<?php $counter++  ?>
	<?php endwhile ?>
<?php endif ?>

<?php
    include 'footer.php';
?>