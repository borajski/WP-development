//kartica blogova
<div class="card mb-4 shadow-none">
					    <div class="slika-box">
					        <div class="blog-kartica-slika" style="background-image: url('<?php the_post_thumbnail_url('small'); ?>');">
					        </div>
					        <p class="rfs-8 blog-kartica-naslov">
                            <?php 
			                $category_detail=get_the_category($post->ID);
                            $author_id = get_post_field ('post_author', $cause_id);
                            $author_name = get_the_author_meta( 'nickname' , $author_id ); 
                            $vrijeme = display_read_time();
                            $ikona = get_avatar_url($author_id);
                        foreach($category_detail as $cd){
                             echo $cd->cat_name;
                                 }			  
			                    ?>
                            </p>

					    </div>
					    <div class="card-body">
					        <div class="lc-block">
					            <div editable="rich">
					                <p><small>  <?php
                       echo '<img class="img-fluid ikonautor" src="'.$ikona.'"> '.$author_name.' | '.get_the_date().' | '.$vrijeme;
                       ?></small></p>
					            </div>
					        </div><!-- /lc-block -->
					        <div class="lc-block" style="margin-left: -4%;">
					           
                                <?php
   echo get_the_tag_list('<ul class="tagovi mali-tagovi"><li><span>', '</span></li><li><span>', '</span></li></ul>',get_the_ID());       
?>
					          
					        </div><!-- /lc-block -->
					        <div class="lc-block">
					            <div editable="rich">
					                <h3 class="card-title"><?php the_title() ?></h3>
					                <!-- <h4 class="card-subtitle" editable="inline">Card subtitle</h4> -->
					                <p class="card-text"><em><?php echo get_post_meta(get_the_ID(), 'podnaslov', true); ?></em></p>
					                <hr class="text-center" style="width: 60%;">				

					                <p class="card-text">
									<?php 
                                     if (get_post_meta(get_the_ID(), 'sazetak', true)) {
                                         echo get_post_meta(get_the_ID(), 'sazetak', true);
                                     }
									else {
										the_excerpt();
									}?>
					                </p>
<hr class="text-center" style="width: 60%;">

					            </div>
					        </div>
					        <div class="lc-block text-end pe-2">
					            <a class="btn btn-sm btn-success" href="<?php the_permalink() ?>" role="button">Pročitaj više</a>
					        </div><!-- /lc-block -->
					    </div>
					</div>
