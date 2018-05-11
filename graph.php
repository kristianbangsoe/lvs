<?php

function facebookGraph($facebookName, $type, $count, $requetsFields, $buttonText){


  /* Check values */
  if (!isset($facebookName)) {$facebookName = 'nytimes'; }
  if (!isset($type)) {$type = 'posts?'; }
  if (!isset($count)) {$count = '100'; }
  if (!isset($buttonText)) {$buttonText = 'Læs mere'; }
  if (!isset($requetsFields)) {$requetsFields = 'created_time,description,message,link,permalink_url,full_picture'; }

  /* Create Connection*/

  $akhrnvsfjjhfjs = 'https://graph.facebook.com/oauth/access_token?client_id=175168453051896&client_secret=e1d13ad77af480859b8583e8e9ddc9ab&grant_type=client_credentials';
  $afjsdlkfrehrepdoo  = file_get_contents($akhrnvsfjjhfjs); // returns 'accesstoken=APP_TOKEN|APP_SECRET'

  $afjsdlkfrehrepdoo = "175168453051896|iOwpTHPQwh7ZeUPyX5D7dxrL3l8";

  //Get the JSON

  $json_object = @file_get_contents('https://graph.facebook.com/v2.12/' . $facebookName .
  '/' . $type . 'access_token=' . $afjsdlkfrehrepdoo . '&limit=' . $count . '&fields=' . $requetsFields);

  // $json_object = @file_get_contents('https://graph.facebook.com/' . $ovndhfhshooosjfsr .
  // '/posts?access_token=' . $afjsdlkfrehrepdoo . '&limit=100&fields=description,picture,attachments,full_picture,message,story,created_time,link,permalink_url,child_attachments&type=normal');
  //Interpret data
  $fbdata = json_decode($json_object);
  /* Build loop */


    foreach ($fbdata->data as $post ){
      setlocale(LC_TIME, 'da_DK.UTF-8');
      date_default_timezone_set('Europe/Copenhagen');
      $date = strftime("%A d.%e %B", strtotime($post->created_time));

       $pm = $post->message;
       if (!isset($pm)) {
         $pm = $post->description;
       }
       $pm = (strlen($pm) > 1) ? substr($pm,0,150) : $pm;

       if ($post->message || $post->description != ''):

       if (isset($post->full_picture)) { ?>

        <figure class="event-item col-md-4">
          <a target="_blank" href="<?php echo $post->link;?>">
            <div class="event-image" style="background-image:url('<?php echo $post->full_picture; ?>');">
            </div>
            <div class="event-info px-3 py-4">
              <div class="btn-green-round float-right">
                <i class="read-more-btn fas fa-arrow-right"></i>
              </div>
              <p class="date color-gray"><?php echo $date; ?></p>
              <p class="color-dark text-box"><?php echo $pm; ?>...</p>
            </div>
          </a>
        </figure>

        <?php } else { ?>

        <figure class="event-item col-md-4 col-sm-12">
          <div class="textboks p-4">
            <p class="greyfontfacebookmockup">1 dag siden  |  34 synes godt om</p>
            <p>Har du altid drømt at komme på den røde løber til en film premiere? - så skal du være med i vores konkurrence. <br>
            I samarbejde med DOXBiO udlover vi 2X2 billetter til premieren på filmen “I fars hænder”, som handler om instruktørens egen opvækst og forholdet til sin alkoholiseret far.
            Hvis du vinder billetterne får du også…</p>
            <div class="containerbuttonmid">
              <div class="btn-green-round-middle">
                <i class="read-more-btn fas fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </figure>

        <?php
        }
        endif;
      }
      // End loop
}
