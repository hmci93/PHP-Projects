<?php

// Menu
$RootMenu = new cMenu("RootMenu", TRUE);

$RootMenu->AddMenuItem(4, "mi_word", $Language->MenuPhrase("4", "MenuText"), "wordlist.php", -1, "", IsLoggedIn() || AllowListMenu('{D0DA1526-8691-4077-AB0F-4906FF8D16B3}word'), FALSE, FALSE, "");
$RootMenu->AddMenuItem(5, "mi_recordsMultipleUpload_php", $Language->MenuPhrase("5", "MenuText"), "recordsMultipleUpload.php", -1, "", IsLoggedIn() || AllowListMenu('{D0DA1526-8691-4077-AB0F-4906FF8D16B3}recordsMultipleUpload.php'), FALSE, TRUE, "");
$RootMenu->AddMenuItem(6, "mi_soundsMultipleUpload_php", $Language->MenuPhrase("6", "MenuText"), "soundsMultipleUpload.php", -1, "", IsLoggedIn() || AllowListMenu('{D0DA1526-8691-4077-AB0F-4906FF8D16B3}soundsMultipleUpload.php'), FALSE, TRUE, "");
$RootMenu->AddMenuItem(1, "mi_contact", $Language->MenuPhrase("1", "MenuText"), "contactlist.php", -1, "", IsLoggedIn() || AllowListMenu('{D0DA1526-8691-4077-AB0F-4906FF8D16B3}contact'), FALSE, FALSE, "");
$RootMenu->AddMenuItem(8, "mi_wordCounter_php", $Language->MenuPhrase("8", "MenuText"), "wordCounter.php", -1, "", IsLoggedIn() || AllowListMenu('{D0DA1526-8691-4077-AB0F-4906FF8D16B3}wordCounter.php'), FALSE, TRUE, "");
$RootMenu->AddMenuItem(7, "mi_Report", $Language->MenuPhrase("7", "MenuText"), "Reportreport.php", -1, "", IsLoggedIn() || AllowListMenu('{D0DA1526-8691-4077-AB0F-4906FF8D16B3}Report'), FALSE, FALSE, "");
echo $RootMenu->ToScript();
?>
<div class="ewVertical" id="ewMenu"></div>
