//Index stranica za objave
<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<section class="align-self-center">
    <div class="container-fluid">
        <div class="row align-items-center naslov-header">
            <div class="col-md-12">
                <div class="naslov">
                    <h2 class="display-4 text-dark">OBJAVE</h2>
				<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
                </div>
            </div><!-- /col -->
        </div>
    </div>
</section>
<section class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php 
                     if ( have_posts() ) : 
                       while ( have_posts() ) : the_post();                
                          get_template_part('loops/cards');                
                      endwhile;
                  else :
                  _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;
                 ?>
            </div><!-- /col -->
            <div class="col-md-3">
            <?php if(is_active_sidebar('main-sidebar')) :
                      dynamic_sidebar('main-sidebar');
                      endif;
            ?>
        </div><!-- /col -->
			      <div class="row">
      <div class="col-12   text-center">
        <div class="d-inline-block"><?php // picostrap_pagination()
			paginacija(); ?></div>
      </div><!-- /col -->
    </div> <!-- /row -->
    </div>
    </div>
</section>
<?php get_footer();
