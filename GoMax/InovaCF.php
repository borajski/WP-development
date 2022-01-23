<?php
/*
Plugin Name: Inova Contact Form
Plugin URI: https://legacy.hr
Description: Simple contact form for sending emails
Version: 3.0
Author: Legacy
Author URI: https://legacy.hr
*/
    //
    function html_form_code()
    {
        echo '<form id="inova-cf" action="' . esc_url($_SERVER['REQUEST_URI']) . '" method="post">';
        echo '<br><div class="form-group">
   		 <label for="ime" class="oznaka mb-2"><small class="text-muted">Ime/Naziv:</small></label>';
        echo '<input type="text" class="form-control unos" name="cf-name" value="' . (isset($_POST["cf-name"]) ? esc_attr($_POST["cf-name"]) : '') . '" id="inlineFormInput" placeholder="Unesite ime ili naziv" required>
    <br></div>';
        echo '<div class="form-group">
   		 <label for="email" class="oznaka mb-2"><small class="text-muted">Email adresa:</small></label>';
        echo '<input type="email" class="form-control unos" name="cf-email" value="' . (isset($_POST["cf-email"]) ? esc_attr($_POST["cf-email"]) : '') . '" id="inlineFormInput"  placeholder="Unesite email adresu" required>
         <br></div>';
        echo '<br><div class="form-group">
   		   <label for="poruka" class="oznaka mb-2"><small class="text-muted">Poruka:</small></label>';
        echo '<textarea class="form-control poruka unos" rows="6" name="cf-message" value="' . (isset($_POST["cf-message"]) ? esc_attr($_POST["cf-name"]) : '') . '" id="inlineFormInput">
    </textarea></div>';
         echo '<br><div class="form-group">';
        generate_captcha();
        echo '<input type="text" class="form-control unos" name="cf-res" value="' . (isset($_POST["cf-res"]) ? esc_attr($_POST["cf-res"]) : '') . '" id="inlineFormInput" placeholder="Unesite rezultat" required>
        <br></div>';
        echo '<div class="text-end"><button type="submit" class="btn gumb" name="cf-submitted">Pošalji</button><br></div>';
        echo '</form>';
    }
    function generate_captcha()
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
    function deliver_mail()
    {

    // if the submit button is clicked, send the email
        if (isset($_POST['cf-submitted'])) {

        // sanitize form values
            $name    = sanitize_text_field($_POST["cf-name"]);
            $email   = sanitize_email($_POST["cf-email"]);
            $res   = sanitize_text_field($_POST["cf-res"]);
            $reza   = sanitize_text_field($_POST["skrito"]);
            // $subject = sanitize_text_field( $_POST["cf-subject"] );
            $subject = "Poruka s web stranice";
            // $message = esc_textarea( $_POST["cf-message"] );
            $message = $_POST["cf-message"];

            // get the blog administrator's email address
            // $to = get_option( 'admin_email' );
            // get_opzion ne radi??
            $to = 'borajski@gmail.com';

            $headers = "From: $name <$email>" . "\r\n". "Reply-To: <$email>" . "\r\n";

            if ($res == $reza) {
                // If email has been process for sending, display a success message
                if (wp_mail($to, $subject, $message, $headers)) {
                    if (isset($_POST["cf-name"])) {
                        unset($_POST["cf-name"]);
                    }
                    if (isset($_POST["cf-email"])) {
                        unset($_POST["cf-email"]);
                    }
                    if (isset($_POST["cf-message"])) {
                        unset($_POST["cf-message"]);
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
                    echo '<p class="text2">Neoèekivana greška</p>';
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
function cf_shortcode()
{
    ob_start();
    deliver_mail();
    html_form_code();

    return ob_get_clean();
}
?>


