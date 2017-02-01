<?php
    include 'header.php';
?>
            
<section>
<?php query_posts("showposts=1&paged=$paged"); ?> <!--puxou a publicação do blog-->
<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>

    <?php the_post(); ?>    
            
    <div class="col-md-6 metadetexto1">
        <h2><?php the_title();?></h2>
        <p class="date1">3 days ago by <a href="#">Jane Doe</a></p>
        <p class="content1"><?php echo the_content(); ?></p>
        <a href="#" class="readmore1">Read More</a>
    </div>

    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>

    <?php if ($image):?>
    <div class="col-md-6 metadefoto1" style="background-image: url(<?php echo $image[0]; ?>)"></div>
    
                <?php else: ?>
                <div class="minhaImagemfundo" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/imagemCritica.png)"></div>
            <?php endif ?>
        </div>
        <?php endwhile ?>
    <?php endif ?> 
    <div class="clear"></div>    

</section>


<section>

    <div class="col-md-6 metadefoto2"></div>

    <div class="col-md-6 metadetexto2">
        <h2>Donec ex risus mollis</h2>
        <p class="date2">3 days ago by <a href="#">Jane Doe</a></p>
        <p class="content2">Nullam posuere erat vel placerat rutrum. Praesent ac consectetur dui, et congue quam. Donec aliquam lacinia condimentum. Integer porta massa sapien, commodo sodales diam suscipit vitae. Aliquam quis felis sed urna semper semper. Phasellus eu scelerisque mi. Vivamus aliquam nisl libero, sit amet scelerisque ligula laoreet vel.</p>
        <a href="#" class="readmore2">Read More</a>
    </div>
    <div class="clear"></div>   

</section>

<section>

    <div class="col-md-6 metadetexto3">
        <h2>Interdum et rutrum</h2>
        <p class="date3">3 days ago by <a href="#">Jane Doe</a></p>
        <p class="content3">Nullam posuere erat vel placerat rutrum. Praesent ac consectetur dui, et congue quam. Donec aliquam lacinia condimentum. Integer porta massa sapien, commodo sodales diam suscipit vitae. Aliquam quis felis sed urna semper semper. Phasellus eu scelerisque mi. Vivamus aliquam nisl libero, sit amet scelerisque ligula laoreet vel.</p>
        <a href="#" class="readmore3">Read More</a>
    </div>

    <div class="col-md-6 metadefoto3"></div>
    <div class="clear"></div>    

</section>


<section>

    <div class="col-md-6 metadefoto4"></div>

    <div class="col-md-6 metadetexto4">
        <h2>Magna porta aliquam</h2>
        <p class="date4">3 days ago by <a href="#">Jane Doe</a></p>
        <p class="content4">Nullam posuere erat vel placerat rutrum. Praesent ac consectetur dui, et congue quam. Donec aliquam lacinia condimentum. Integer porta massa sapien, commodo sodales diam suscipit vitae. Aliquam quis felis sed urna semper semper. Phasellus eu scelerisque mi. Vivamus aliquam nisl libero, sit amet scelerisque ligula laoreet vel.</p>
        <a href="#" class="readmore4">Read More</a>
    </div>
    <div class="clear"></div>   

</section>

<?php
    include 'footer.php';
?>