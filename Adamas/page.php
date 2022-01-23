//template stranice za wp
<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="lc-block pt-6">
					<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
				<h2 class="display-4 text-center mt-3 mb-0" editable="inline"> <?php the_title(); ?></h2>
				<p class="text-muted h4 text-center mb-5" editable="inline"><?php echo get_post_meta(get_the_ID(), 'podnaslov', true); ?></p>
			</div><!-- /lc-block -->
			<!-- /lc-block -->
			<!-- /lc-block -->
			<div class="lc-block" id="naslovna-slika" style="height: 40vh; background-image:url('<?php the_post_thumbnail_url('large'); ?>');">
				
			</div><!-- /lc-block -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<!-- /lc-block -->
		</div><!-- /col -->
	</div>
</div>
<div class="container py-5 text-center">
	<div class="row">
		<div class="col-md-8 offset-md-2 px-4 bg-light">
			<div class="lc-block mb-4">
				<div editable="rich">
					<h2><?php echo get_post_meta(get_the_ID(), 'sazetak', true); ?>.</h2>
				</div>
			</div>
			<div class="lc-block mb-4">
				<div editable="rich">
 <?php 

            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
            ?>
				</div>
			</div>

			<!-- /lc-block -->
		</div><!-- /col -->
	</div>
</div>
<?php get_footer();
