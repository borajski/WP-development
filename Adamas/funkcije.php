//Funkcije za implementaciju u functions.php ili u plugine
function wc_refresh_mini_cart_count($fragments)
{
    ob_start();
    $items_count = count( WC()->cart->get_cart() );

	if ($items_count > 0)
	{	
        echo '<div id="mini-cart-count"><span class="badge bg-danger rounded-circle" style="position: absolute; right: 6%; top:15%"> <small>'.$items_count.'</small></span>';
        echo '<ul class="dropdown-menu dropdown-menu-end dropcart" aria-labelledby="kartica">';
        foreach ( WC()->cart->get_cart() as $cart_item )
   {
   $item_name = $cart_item['data']->get_title();
   $quantity = $cart_item['quantity'];
   $price = $cart_item['data']->get_price();
   $product = $cart_item['data']->get_id();
   $image_id  = $product->get_image_id();
   $image_url = wp_get_attachment_image_url( $image_id, 'full' );
   echo '<li class="dropdown-item"><div class="row" style="border-bottom: 1px solid grey;"><div class="col-lg-4 col-sm-4 col-4"><img class="img-fluid" src="'.$image_url.'"></div><div class="col-lg-8 col-sm-8 col-8"><h5>'.$item_name.'</h5><p>'.$price.'kn x '.$quantity.'</p></div></li>';
   }
   echo '<div class="row"><div class="col-lg-6 col-sm-6 col-6">Ukupno:  '.WC()->cart->get_cart_total().'</div><div class="col-lg-6 col-sm-6 col-6"><a class="btn btn-primary btn-sm" href="/placanje" role="button">Plati</a></div></div>';
   echo '</ul></div>';
    }
	else 
	{
        echo '<div id="mini-cart-count">';
        echo '<ul class="dropdown-menu dropdown-menu-end dropcart" aria-labelledby="kartica">';
        echo '<div class="row"><div class="col-lg-6 col-sm-6 col-6">Vaša košarica je prazna</div><div class="col-lg-6 col-sm-6 col-6"><a class="btn btn-primary btn-sm" href="/trgovina" role="button">Kupnja</a></div></div>';
   echo '</ul></div>';

    
    }   
    $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}

// prikaz najnovijih blog objava na pojedinačnoj blog objavi

function lc_get_posts_mentis_post($the_posts,$get_posts_shortcode_atts) {
	
	extract($get_posts_shortcode_atts);
	$out=''; // INIT
    $i = 0;
    $j = 0;
 
	foreach ( $the_posts as $the_post ):   
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
    $out.='<p class="card-title text-start"><i><small>'.get_post_meta($the_post->ID, 'podnaslov', true).'</small></i></p>';
		// $out.='<p class="card-text text-start" editable="inline">'.get_post_meta($the_post->ID, 'sazetak', true).'</p>';
   	$out.='</div></div></div>';
        if ($j == 3)
        {$out.= '</div>';}
      }
   endforeach;
   if (($i < 3) || ($i <= 6))
   {$out.= '</div>';}
   return  $out;
}

// funkcija za ispis breadcrumbsa
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_home())
    {
      echo ' &nbsp;&nbsp;&#187;&nbsp;&nbsp;Objave ';
    }
    elseif (is_category() || is_single() || is_tag()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        // the_category(' &bull; ');
        echo '<a href="'.get_post_type_archive_link( 'post' ).'"> Objave </a>';
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}
