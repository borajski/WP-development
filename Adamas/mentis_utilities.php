//razni mini pluginovi za Livecanvas
<?php
/*
Plugin Name: Mentis Utilities
Plugin URI: https://legacy.hr
Description: Mentis site utilities
Version: 1.0
Author: Legacy
Author URI: https://legacy.hr
*/
    //
    function get_three_latest_post() {
	
        $out=''; // INIT
        $i = 0;
        $j = 0;
        $the_query = new WP_Query( 'posts_per_page=3' );
     
        while ($the_query -> have_posts()) : $the_query -> the_post();   
            //print_r($the_post);
            $i = $i+1;
            if ($i <= 6)
            {
              $j++;
              if (($j == 1) || ($j == 4))
              {$out.= '<div class="row pb-4">';}
            $out.='<div class="col-sm-4"><div class="card"><a href="'.get_the_permalink($the_post).'"><div class="kartica-vrh" style="background-image: url('.get_the_post_thumbnail_url($the_post,'medium').');"></div></a>';
        $out.='<div class="card-body">';
            $out.='<p class="card-text text-start text-muted"><small>'.get_the_date( '',$the_post ).'</small></p>';
            $out.='<h5 class="card-title text-start"> <a class="blog-link" href="'.get_the_permalink($the_post).'"><b>'.get_the_title($the_post).'</b></a></h5>';
        $out.='<p class="card-title text-start"><i><small>'.get_post_meta(get_the_ID($the_post), 'podnaslov', true).'</small></i></p>';
            // $out.='<p class="card-text text-start" editable="inline">'.get_post_meta(get_the_ID($the_post), 'sazetak', true).'</p>';
           $out.='</div></div></div>';
            if ($j == 3)
            {$out.= '</div>';}
          }
        endwhile;
       if (($i < 3) || ($i <= 6))
       {$out.= '</div>';}
      echo  $out;
    }
    function threepostcart_shortcode()
    {
        ob_start();
        get_three_latest_post();
        return ob_get_clean();
    }
?>
