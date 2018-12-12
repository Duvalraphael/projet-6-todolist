<?php
$document = file_get_contents("assets/json/todo.json");
$parsed_json = json_decode($document);
if ($parsed_json) {
    foreach ($parsed_json as $value) {
        foreach ($value as $value2) {
            if (!empty(trim($value2))) {
                echo ' <label><input type=checkbox class="filled-in"/> <span class="afaire">'. $value2 . '</span></label><br>';
            }
        }
    }
} else {
    echo "Plus rien a faire sur le planning";
}
    $honeypot = FALSE;
if (!empty($_REQUEST['contact_me_by_fax_only']) && (bool) $_REQUEST['contact_me_by_fax_only'] == TRUE) {
    $honeypot = TRUE;
    log_spambot($_REQUEST);
} else {

}
    ?>