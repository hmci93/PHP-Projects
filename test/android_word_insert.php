<?php

include 'android_conn.php';

function assoundex($str)
{
	$asword=$str;
	$letter='';
	$soundex='';
	$AssameseWordLength = mb_strlen($asword, 'utf8');
	$i = 0;

while($i <= $AssameseWordLength - 1)
{
			$letter = mb_substr($asword,$i,1);

				if ($letter == 'প')
                {
                    $soundex = $soundex.'P';
                }
                else if ($letter == 'ফ')
                {
                    $soundex = $soundex.'F';
                }
                else if ($letter == 'ব' || $letter == 'ৱ')
                {
                    $soundex = $soundex.'B';
                }
                else if ($letter == 'ভ')
                {
                    $soundex = $soundex.'V';
                }
                else if ($letter == 'ত' || $letter == 'ট' || $letter == 'ৎ')
                {
                    $soundex = $soundex.'T';
                }
                else if ($letter == 'থ' || $letter == 'ঠ')
                {
                    $soundex = $soundex.'1';
                }
                else if ($letter == 'দ' || $letter == 'ড')
                {
                    $soundex = $soundex.'D';
                }
                else if ($letter == 'ধ' || $letter == 'ঢ')
                {
                    $soundex = $soundex.'2';
                }
                else if ($letter == 'ক')
                {
                    $soundex = $soundex.'K';
                }
                else if ($letter == 'খ')
                {
                    $soundex = $soundex.'3';
                }
                else if ($letter == 'গ')
                {
                    $soundex = $soundex.'G';
                }
                else if ($letter == 'ঘ')
                {
                    $soundex = $soundex.'4';
                }
                else if ($letter == 'চ' || $letter == 'ছ')
                {
                    $soundex = $soundex.'C';
                }
                else if ($letter == 'য' || $letter == 'জ')
                {
                    $soundex = $soundex.'J';
                }
                else if ($letter == 'ঝ')
                {
                    $soundex = $soundex.'5';
                }
                else if ($letter == 'শ' || $letter == 'ষ' || $letter == 'স')
                {
                    $soundex = $soundex.'S';
                }
                else if ($letter == 'হ' || $letter == 'ঃ' || $letter == ':')
                {
                    $soundex = $soundex.'H';
                }
                else if ($letter == 'ম')
                {
                    $soundex = $soundex.'M';
                }
                else if ($letter == 'ন' || $letter == 'ণ')
                {
                    $soundex = $soundex.'N';
                }
                else if ($letter == 'ঙ' || $letter == 'ং')
                {
                    $soundex = $soundex.'6';
                }
                else if ($letter == 'ৰ' || $letter == 'ড়' || $letter == 'ঢ়')
                {
                    $soundex = $soundex.'R';
                }
                else if ($letter == 'ল')
                {
                    $soundex = $soundex.'L';
                }
                else if ($letter == 'য়' || $letter == 'ঞ')
                {
                    $soundex = $soundex.'Y';
                }
                else if ($letter == '্' || $letter == '্‌')
                {
                    $soundex = $soundex.'X';
                }
                else if ($letter == 'অ')
                {
                    $soundex = $soundex.'A';
                }
                else if ($letter == 'ঋ' || $letter == 'ৃ')
                {
                    $soundex = $soundex.'W';
                }
                else if ($letter == 'া')
                {
                    $soundex = $soundex.'7';
                }
                else if ($letter == 'আ')
                {
                    $soundex = $soundex.'7';
                }
                else if ($letter == 'ই' || $letter == 'ি' || $letter == 'ঈ' || $letter == 'ী')
                {
                    $soundex = $soundex.'I';
                }
                else if ($letter == 'উ' || $letter == 'ু' || $letter == 'ঊ' || $letter == 'ূ' || $letter == 'ও' || $letter == 'ো')
                {
                    $soundex = $soundex.'U';
                }
                else if ($letter == 'এ' || $letter == 'ে')
                {
                    $soundex = $soundex.'E';
                }
                else if ($letter == 'ঐ' || $letter == 'ৈ')
                {
                    $soundex = $soundex.'8';
                }
                else if ($letter == 'ঔ' || $letter == 'ৌ')
                {
                    $soundex = $soundex.'9';
                }
                else
                {
                    $soundex = $soundex.'0';
                }
                $i++;
 }

	 $soundex1 = str_replace('XX', 'X', $soundex);
	 $soundex2 = str_replace('0', '', $soundex1);
     //zukta
     $soundex3 = str_replace('HXJ', 'Q', $soundex2);
     $soundex4 = str_replace('JXJ', 'Q', $soundex3);
     $soundex5 = str_replace('KXS', '3', $soundex4);
     $soundex6 = str_replace('JXY', 'Z', $soundex5);
     $soundex7 = str_replace('GXJ', 'Z', $soundex6);
     $soundex8 = str_replace('YXC', 'NC', $soundex7);
     $soundex9 = str_replace('YXJ', 'NJ', $soundex8);

return $soundex9;
}

$word = $_POST['word'];
$transliterate = $_POST['transliterate'];
$english_desc = $_POST['english_desc'];
$ass_desc = $_POST['ass_desc'];
$image_path = $_POST['image_path'];

$soundx = assoundex($word);

$sql = "SELECT word from word where word='$word'";
$res = mysqli_query($conn,$sql);
if (mysqli_num_rows($res)>0) {
  echo "Already Exists";
}
elseif (mysqli_num_rows($res) == 0) {
  if(empty($image_path)){
    $sql1 = "INSERT INTO word VALUES ('','$word','','$soundx','','$ass_desc','$english_desc','$transliterate')";
    $res1 = mysqli_query($conn,$sql1);
    if ($res1) {
      echo "Data Inserted";
    }
  }
  else {
    $target_dir_img = "image/";
    $target_dir_img1 = $target_dir_img.$transliterate.".jpeg";
    if (file_put_contents($target_dir_img1, base64_decode($image_path))) {
      $sql2 = "INSERT INTO word VALUES ('','$word','','$soundx','$target_dir_img1','$ass_desc','$english_desc','$transliterate')";
      $res2 = mysqli_query($conn,$sql2);
      if ($res2) {
        echo "Data Inserted";
      }
    }
  }
}

?>
