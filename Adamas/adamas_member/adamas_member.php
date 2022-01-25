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
     add_filter( 'wp_mail', 'posalji_mail' );
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

            $to = 'borajski@gmail.com';
            $subject = "Učlanjenje u PLK Adamas";
            $headers1 = "From: $ime <$email>" . "\r\n". "Reply-To: <$email>" . "\r\n";
            $headers2 = "From: 'PLK Adamas' <$to>" . "\r\n". "Reply-To: <$to>" . "\r\n";
            // $headers = array('Content-Type: text/html; charset=UTF-8');
            $content_type = function() { return 'text/html'; };
            add_filter( 'wp_mail_content_type', $content_type );
            ob_start();
            include('email_template.php');
            $poruka = ob_get_contents();
            //$poruka = "netko se prijavio";
            include('email_to_sender.html');
            $poruka_sender = ob_get_contents();
             ob_end_clean();
            $attachments = array( WP_CONTENT_DIR  .'/uploads/2022/01/uclanjenje.pdf' );
            if ($res == $reza) {
                unset($_POST["cf-submitted"]);
               wp_mail($to, $subject, $poruka, $headers1);
              // If email has been process for sending, display a success message
                if (wp_mail($email, $subject, $poruka_sender, $headers2,$attachments))
                {
                   
                    if (isset($_POST["ime"])) {
                        unset($_POST["ime"]);
                     }
                     if (isset($_POST["ime_rod"])) {
                        unset($_POST["ime_rod"]);
                     }
                     if (isset($_POST["prezime"])) {
                        unset($_POST["prezime"]);
                     }
                     if (isset($_POST["mjesto"])) {
                        unset($_POST["mjesto"]);
                     }
                     if (isset($_POST["datum"])) {
                        unset($_POST["datum"]);
                     }
                     if (isset($_POST["mob"])) {
                        unset($_POST["mob"]);
                     }
                     if (isset($_POST["cf-res"])) {
                        unset($_POST["cf-res"]);
                     }
                     if (isset($_POST["skrito"])) {
                        unset($_POST["skrito"]);
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
                    echo $ispis;
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
          
          remove_filter( 'wp_mail_content_type', $content_type );
    
    }
function am_shortcode()
{
   ob_start();
   posalji_mail(); 
   html_forma();   
 return ob_get_clean();
}


