//template blog objave
<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
$author_id = get_post_field ('post_author', $cause_id);
$author_name = get_the_author_meta( 'nickname' , $author_id ); 
$vrijeme = display_read_time();
$ikona = get_avatar_url($author_id);
$prev = get_previous_post();
$next = get_next_post();
?>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="border mb-5 col-md-10 offset-md-1 bg-light border-0">
                <div class="lc-block pt-3">
					<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
                    <div>
                       <?php
                       echo '<img class="img-fluid ikonautor" src="'.$ikona.'"> '.$author_name.' | '.get_the_date().' | '.$vrijeme;
                       ?>
                    </div>
                </div>
                <!-- /lc-block -->
                <div class="lc-block pt-4">
                    <div>
                       <?php
if ( is_singular() ) :
    echo get_the_tag_list( '<ul class="tagovi"><li><span>', '</span></li><li><span>', '</span></li></ul>');     
    
endif;
?>
                    </div>
                </div>
                <!-- /lc-block -->
                <div class="lc-block">
                    <div>
                        <h1 class="display-4 text-start mt-3 mb-2"><?php the_title(); ?></h1>
						<p class="text-muted h4 text-start  mb-5"><?php echo get_post_meta(get_the_ID(), 'podnaslov', true); ?></p>
						

                    </div>
                </div>
                <!-- /lc-block -->
                <div class="lc-block">
					
                    <div class="img-head-wrapper"
                        style="background-image: url('<?php the_post_thumbnail_url('large'); ?>');"></div>
                </div>
                <!-- /lc-block -->
                <!-- /lc-block -->
                <div class="lc-block text-center mt-2 mb-2 me-1 ms-1 pt-3 pb-3">
                    <div>
                        <p class="text-muted h4"><?php echo get_post_meta(get_the_ID(), 'sazetak', true); ?></p>

                    </div>
                </div>
                <!-- /lc-block -->

                <div class="lc-block sadrzaj p-3">
                    <h3 class="m-3">Sadržaj</h3>
                    <div class="m-3" id="sadrzaj"></div>
                </div>
                <div class="lc-block me-3 ms-3 text-justify pt-4">
                    <div id="objava">
                    <?php 
                
                the_content();
                
                if( get_theme_mod("enable_sharing_buttons")) picostrap_the_sharing_buttons();
                
                edit_post_link( __( 'Edit this post', 'picostrap' ), '<p class="text-right">', '</p>' );
                
                // If comments are open or we have at least one comment, load up the comment template.
              /*  if (!get_theme_mod("singlepost_disable_comments")) if ( comments_open() || get_comments_number() ) {
                    comments_template();
                } */
                
                ?>
                    </div>
                </div>
                <!-- /lc-block -->

                <!-- /lc-block -->
            </div>
            <!-- /col -->

        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 pb-5">
                <!-- /lc-block -->
                <div class="lc-block">
                    <div class="row">
                        <div class="col-6" editable="rich">
                            <p class="rfs-9">
                                <span class="text-muted" style="font-size: 0.9rem; font-weight:600;">PRETHODNA
                                    OBJAVA</span>
                                <br><a class="post-link-prev" href="<?php echo get_permalink( $prev->ID ); ?>"><?php echo apply_filters( 'the_title', $prev->post_title ); ?></a>
                            </p>
                        </div>
                        <div class="col-6" editable="rich">
                            <p class="rfs-9 text-end">
                                <span class="text-muted" style="font-size: 0.9rem; font-weight:600;">SLIJEDEĆA
                                    OBJAVA</span>
                                <br><a class="post-link-next" href="<?php echo get_permalink( $next->ID ); ?>"><?php echo apply_filters( 'the_title', $next->post_title ); ?></a>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <!-- /lc-block -->
                    <div class="lc-block" style="position: absolute;
display: inline;
width: 50%;">
                        <div editable="rich">
                            <p class="rfs-9"> Najnovije objave</p>
                        </div>
                    </div><!-- /lc-block -->
                    <div class="lc-block me-2" style="position: relative;
display: inline;
width: 50%;">
                        <div editable="rich">
                            <p class="rfs-9 text-end"><a class="post-link-next" href="/objave">Sve objave</a></p>
                        </div>
                    </div><!-- /lc-block -->
                    <div class="lc-block">
                        
					  <?php
                        echo do_shortcode('[tri_objave]');
                        ?>
					
                    </div><!-- /lc-block -->
                </div>
            </div><!-- /col -->
        </div>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var id_atribut;
    var ispis;
    var x = document.getElementById("objava");
    var naslovi = x.querySelectorAll("h3");
    var sadrzaj = document.getElementById("sadrzaj");
    if (naslovi.length > 0) {
        for (var i = 0; i < naslovi.length; i++) {
            id_atribut = "naslov" + i;
            naslovi[i].setAttribute("id", id_atribut);
            ispis = '<a class="pb-4" href="#' + id_atribut + '">' + naslovi[i].innerHTML + '</a>';
            sadrzaj.innerHTML = sadrzaj.innerHTML + "<br>" + ispis;
        }
    } else {
        document.getElementsByClassName("sadrzaj")[0].style.display = 'none';
    }
});
</script>
<?php get_footer();
