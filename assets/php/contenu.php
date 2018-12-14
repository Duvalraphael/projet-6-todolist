<?php
$html1 ="";
$html2 ="";
$document = file_get_contents("assets/json/todo.json");
$parsed_json = json_decode($document);
if ($parsed_json) {
    foreach ($parsed_json as $tache) {
        foreach ($tache as $tacheinput) {
            if (!empty(trim($tacheinput))) {
                $html1 .= ' <label><input type=checkbox class="filled-in" name="checkbox"/> <span class="afaire">'. $tacheinput . '</span></label><br>';
            }
        }
    }
} else {
    echo "Plus rien a faire sur le planning";
}
if(isset($_POST['fin'])){
  if (isset($_POST['checkbox'] ) && $_POST['checkbox'] == true) {
  $document = file_get_contents("assets/json/todo.json");
  $parsed_json = json_decode($document);
  if ($parsed_json) {
      foreach ($parsed_json as $tache) {
          foreach ($tache as $tacheinput) {
              if (!empty(trim($tacheinput))) {
                  $html2 .= ' <label><input type=checkbox class="filled-in" name="checkbox"/> <span class="archive">'. $tacheinput . '</span></label><br>';
                  
                }
                
              }
            }
          }
        } else {
          echo "Plus rien a faire sur le planning";
        }
      }else{
      }
/*
reste a verifier le statut du json et de lui dire si tu es false tu le met dans a faire(html1) 
change le statut avec enregistrer 
si tu es true tu le met dans archive(html2)
et ensuite le drag and drop et le ajax si le temps 
*/

$honeypot = FALSE;
if (!empty($_REQUEST['contact_me_by_fax_only']) && (bool) $_REQUEST['contact_me_by_fax_only'] == TRUE) {
$honeypot = TRUE;
log_spambot($_REQUEST);
} else {

}
    ?>