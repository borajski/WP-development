<?php
/*
Plugin Name: Adamas memberships
Plugin URI: https://legacy.hr
Description: Sending memberships request contact form 
Version: 1.0
Author: Legacy
Author URI: https://legacy.hr
*/
    //
    function html_forma()
    { 
        echo '<form id="inova-cf" action="' . esc_url($_SERVER['REQUEST_URI']) . '" method="post">';
        echo '
        <div class="mb-3">
            <label for="ime" class="form-label">Ime</label>
            <input type="text" class="form-control" name="ime" value="' . (isset($_POST["ime"]) ? esc_attr($_POST["ime"]) : '') . '" required="Polje je obavezno ispuniti">
        </div>
        <div class="mb-3">
            <label for="ime_roditelja" class="form-label">Ime jednog roditelja</label>
            <input type="text" class="form-control" name="ime_rod" value="' . (isset($_POST["ime_rod"]) ? esc_attr($_POST["ime_rod"]) : '') . '" required="Polje je obavezno ispuniti">
        </div>
        <div class="mb-3">
            <label for="prezime" class="form-label">Prezime</label>
            <input type="text" class="form-control" name="prezime" value="' . (isset($_POST["prezime"]) ? esc_attr($_POST["prezime"]) : '') . '" required="Polje je obavezno ispuniti">
        </div>
        <div class="mb-3">
            <label for="datum" class="form-label">Datum rođenja</label>
            <input type="text" class="form-control" name="datum" value="' . (isset($_POST["datum"]) ? esc_attr($_POST["datum"]) : '') . '" required="Polje je obavezno ispuniti">
        </div>
        <div class="mb-3">
            <label for="mjesto" class="form-label">Mjesto rođenja</label>
            <input type="text" class="form-control" name="mjesto" value="' . (isset($_POST["mjesto"]) ? esc_attr($_POST["mjesto"]) : '') . '" required="Polje je obavezno ispuniti">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email adresa</label>
            <input type="email" class="form-control" name="email" value="' . (isset($_POST["email"]) ? esc_attr($_POST["email"]) : '') . '" required="Polje je obavezno ispuniti">
        </div>

        <div class="mb-3">
            <label for="mob" class="form-label">Kontakt broj</label>
            <input type="text" class="form-control" name="mob" value="' . (isset($_POST["mob"]) ? esc_attr($_POST["mob"]) : '') . '" required="Polje je obavezno ispuniti">
        </div>
        <div editable="rich">
            <input class="form-check-input" type="checkbox" value="" name="izjava" required="Polje je obavezno ispuniti">
            <label class="form-check-label" for="izjava">
                <p><em> Izjavljujem da prihvaćam <a href="/statut" target="_blank" rel="noopener">Statut kluba</a> i dajem suglasnost da se moje fotografije i snimke s treninga i natjecanja mogu objavljivati i koristiti za promociju PLK Adamasa i sporta powerliftinga, te da sudjelujem na natjecanjima na vlastitu odgovornost i slobodnom voljom.&nbsp;</em></p>
            </label>
        </div>
        <br><div class="form-group">';
        zastita();
        echo '<input type="text" class="form-control unos" name="cf-res" value="' . (isset($_POST["cf-res"]) ? esc_attr($_POST["cf-res"]) : '') . '" id="inlineFormInput" placeholder="Unesite rezultat" required>
        <br></div>
        <div class="text-end">
            <button type="submit" class="btn btn-primary" style="color: white;" name="cf-submitted">Pošalji</button>
        </div>
    </form>';
    }
    function zastita()
    {
        $izbor=rand(1,9);
        $reza=$izbor;
        switch ($izbor) {
            case 1:
                echo '<svg height="24" width="24">
                    <text x="0" y="15" fill="blue">1</text>
                     Sorry, your browser does not support inline SVG.
                    </svg>';
                 break;
            case 2:
                 echo '<svg height="24" width="24">
                     <text x="0" y="15" fill="blue">2</text>
                      Sorry, your browser does not support inline SVG.
                     </svg>';
                  break;
            case 3:
                  echo '<svg height="24" width="24">
                      <text x="0" y="15" fill="blue">3</text>
                       Sorry, your browser does not support inline SVG.
                      </svg>';
                   break;
            case 4:
                   echo '<svg height="24" width="24">
                       <text x="0" y="15" fill="blue">4</text>
                        Sorry, your browser does not support inline SVG.
                       </svg>';
                    break;
            case 5:
                    echo '<svg height="24" width="24">
                        <text x="0" y="15" fill="blue">5</text>
                         Sorry, your browser does not support inline SVG.
                        </svg>';
                     break;
            case 6:
                     echo '<svg height="24" width="24">
                         <text x="0" y="15" fill="blue">6</text>
                          Sorry, your browser does not support inline SVG.
                         </svg>';
                      break;
            case 7:
                      echo '<svg height="24" width="24">
                          <text x="0" y="15" fill="blue">7</text>
                           Sorry, your browser does not support inline SVG.
                          </svg>';
                       break;
            case 8:
                       echo '<svg height="24" width="24">
                           <text x="0" y="15" fill="blue">8</text>
                            Sorry, your browser does not support inline SVG.
                           </svg>';
                        break;
            case 9:
                        echo '<svg height="24" width="24">
                            <text x="0" y="15" fill="blue">9</text>
                             Sorry, your browser does not support inline SVG.
                            </svg>';
                         break;
        }
        echo '<svg height="24" width="24">
        <text x="0" y="15" fill="blue">x</text>
         Sorry, your browser does not support inline SVG.
        </svg>';
        $izbor=rand(1,9);
        $reza=$reza*$izbor;
        switch ($izbor) {
            case 1:
                echo '<svg height="24" width="24">
                    <text x="0" y="15" fill="blue">1</text>
                     Sorry, your browser does not support inline SVG.
                    </svg>';
                 break;
            case 2:
                 echo '<svg height="24" width="24">
                     <text x="0" y="15" fill="blue">2</text>
                      Sorry, your browser does not support inline SVG.
                     </svg>';
                  break;
            case 3:
                  echo '<svg height="24" width="24">
                      <text x="0" y="15" fill="blue">3</text>
                       Sorry, your browser does not support inline SVG.
                      </svg>';
                   break;
            case 4:
                   echo '<svg height="24" width="24">
                       <text x="0" y="15" fill="blue">4</text>
                        Sorry, your browser does not support inline SVG.
                       </svg>';
                    break;
            case 5:
                    echo '<svg height="24" width="24">
                        <text x="0" y="15" fill="blue">5</text>
                         Sorry, your browser does not support inline SVG.
                        </svg>';
                     break;
            case 6:
                     echo '<svg height="24" width="24">
                         <text x="0" y="15" fill="blue">6</text>
                          Sorry, your browser does not support inline SVG.
                         </svg>';
                      break;
            case 7:
                      echo '<svg height="24" width="24">
                          <text x="0" y="15" fill="blue">7</text>
                           Sorry, your browser does not support inline SVG.
                          </svg>';
                       break;
            case 8:
                       echo '<svg height="24" width="24">
                           <text x="0" y="15" fill="blue">8</text>
                            Sorry, your browser does not support inline SVG.
                           </svg>';
                        break;
            case 9:
                        echo '<svg height="24" width="24">
                            <text x="0" y="15" fill="blue">9</text>
                             Sorry, your browser does not support inline SVG.
                            </svg>';
                         break;
        }
        echo '<input type="hidden" name="skrito" value="'.$reza.'">';
    }
     //
    function posalji_mail()
    {

    // if the submit button is clicked, send the email
        if (isset($_POST['cf-submitted'])) {
             // sanitize form values
         $ime    = sanitize_text_field($_POST["ime"]);
         $ime_rod    = sanitize_text_field($_POST["ime_rod"]); 
         $prezime   = sanitize_text_field($_POST["prezime"]);
         $datum    = sanitize_text_field($_POST["datum"]);
         $mjesto    = sanitize_text_field($_POST["mjesto"]);
         $email    = sanitize_email($_POST["email"]);
         $mob    = sanitize_text_field($_POST["mob"]);  
         $res   = sanitize_text_field($_POST["cf-res"]);
         $reza   = sanitize_text_field($_POST["skrito"]); 

         $before = '<html>
<head>
<meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  <title>ÄŚlanstvo</title> <link href="https://fonts.googleapis.com/css?family=Nunito:400|Arimo:400&amp;display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 <section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="lc-block text-center pt-4"> <img class="img-fluid" src="https://gmax.hr/wp-content/uploads/2022/01/logo.svg" srcset="" sizes="" alt="PLK Adamas Vukovar" style="height: 10rem;"></div><!-- /lc-block -->
				<div class="lc-block text-center">
					<div editable="rich">
					<p class="rfs-7"><strong class="rfs-7"> POWERLIFTING KLUB â€łADAMASâ€ł</strong><br>Eugena Kvaternika 58, VUKOVAR<br><small> MB: 4267184 OIB: 25041251600 <br>IBAN: HR8824020061100800034</small> <br>Web: <a href="https://www.powerlifting-adamas.hr">https://www.powerlifting-adamas.hr</a><br>e-mail: <a href="mailto:powerliftingadamas@gmail.com">powerliftingadamas@gmail.com</a>
						</p>
					</div>
				</div><!-- /lc-block -->
				<div class="lc-block text-center mt-5 mb-4">
					<div editable="rich">
						<h1 class="rfs-12"><strong class="">UÄŤlanjenje u Powerlifting klub â€śAdamasâ€ť, Vukovar</strong></h1>
					</div>
				</div><!-- /lc-block -->
				<!-- /lc-block -->
			</div><!-- /col -->
		</div>
	</div>
</section><body>';
$after = '<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 offset-md-1 mb-5 mt-5">
			<div class="lc-block">
							<div editable="rich">
								<p><em> Izjavljujem da prihvaÄ‡am <a href="/statut" target="_blank">Statut kluba</a> i dajem suglasnost da se moje fotografije i snimke s treninga i natjecanja mogu objavljivati i koristiti za promociju PLK â€žAdamasâ€ś i sporta powerliftinga, te da sudjelujem na natjecanjima na vlastitu odgovornost i slobodnom voljom.&nbsp;</em></p>
							</div>
						</div><!-- /lc-block -->
						<div class="lc-block pt-5">
						<table border=0 width=900>
						<tr>
							<td width=150>Mjesto i datum:</td>
							<td width=250>_________________________</td>
							<td width=100></td>
							<td width=100>Potpis:</td>
							<td width=300>_________________________</td>
						</tr>
					</table>
					<br><br>
					<table border=0 width=900>
						<tr>
							<td width=400>
								Potpis (za maloljetne roditelj/skrbnik):<br><br>____________________________________________
							</td>
							<td width=300>
							</td>
								<td width=100></td>
							<td width=100></td>
							<td width=300></td>
						</tr>
					</table>
					</div><!-- /lc-block -->
			</div><!-- /col -->
		</div>
	</div>
</section> <script src="https://cdn.jsdelivr.net/npm/bootstrap.native@3.0.0/dist/bootstrap-native.min.js"></script> </body></html>';


            $to = 'borajski@gmail.com';
            $subject = "Poruka s web stranice";
            $body = $before.'<table border=0 align=left width=800>
            <tr><td>Ime : </td><td>'.$ime.'</td></tr>
            <tr><td>Ime jednog roditelja : </td><td>'.$ime_rod.'</td></tr>
            <tr><td>Prezime : </td><td>'.$prezime.'</td></tr>
            <tr><td>Datum roÄ‘enja : </td><td>'.$datum.'</td></tr>
            <tr><td>Mjesto roÄ‘enja : </td><td>'.$mjesto.'</td></tr>
            <tr><td>Email : </td><td>'.$email.'</td></tr>
            <tr><td>Kontakt broj : </td><td>'.$mob.'</td></tr>
            </table>'.$after;

            //$headers = "From: $ime <$email>" . "\r\n". "Reply-To: <$email>" . "\r\n";
            $headers = array('Content-Type: text/html; charset=UTF-8');
            if ($res == $reza) {
                // If email has been process for sending, display a success message
                if (wp_mail($to, $subject, $body, $headers)) {
                    if (isset($_POST["ime"])) {
                        unset($_POST["ime"]);
                    }
                    if (isset($_POST["email"])) {
                        unset($_POST["email"]);
                    }
                   
                    echo '<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>';
                    echo '<div>';
                    echo '<p class="text2">Hvala na javljanju!</p>';
                    echo '</div>';
                } else {
                    echo '<div>';
                    echo '<p class="text2">Neočekivana greška</p>';
                    echo '</div>';
                }
            }
            else {
                echo '<div>';
                    echo '<p class="text2">Provjerite rezultat!</p>';
                    echo '</div>';
            }
		  }
          
          
    
    }
function am_shortcode()
{
   ob_start();
   posalji_mail(); 
   html_forma();   
 return ob_get_clean();
}


