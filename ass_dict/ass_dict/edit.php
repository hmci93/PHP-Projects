<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css">
<head>
<title>Edit</title>
<!-- load jquery ui css-->
<link href="script/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<!-- load jquery library -->
<script src="script/jquery-1.11.3.min.js"></script>
<!-- load jquery ui js file -->
<script src="script/jquery-ui.min.js"></script>

<link rel="stylesheet" type="text/css" href="keyboard1_css/keyboard.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="javascript/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
    <!-- Offline Scripts Start-->
  <script src="offlineScript/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="offlineScript/html5shiv.min.js"></script>
<script src="offlineScript/respond.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="offlineScript/jquery-ui.css" />
<script src="offlineScript/jquery-ui.js"></script>
<!--  <script src="offlineScript/jquery-1.10.2.js"></script>  -->
   <!-- Offline Scripts End -->
   
  <style>
  ul {
	  position:relative;
      list-style-type: none;
	  background-color: #F7F7F7;
      margin: 0;
      padding: 0;
      overflow: hidden;
}

li
{
    float: left;
}

li a {
	text-decoration:none;
    display: block;
    text-align: center;
    padding: 10px 12px;
    text-decoration: none;
}

li a:hover
    {
	text-decoration:none;
    background-color: #CCC;
	}

li a:active {
	text-decoration:none;
    background-color: #CCC;
	
}
  </style>
<script>
$(function() {
    	$("#word").autocomplete({
        source: "search.php",
        minLength: 1,
		open: function(event, ui)
		{
   		$("#word").autocomplete ("widget").css("width","500px");  
		} 
    });                
});
$(function() {
       $("#word").autocomplete({
            source: "search.php",
            minLength: 1
        }).focus(function(){     
            //Use the below line instead of triggering keydown
           $(this).autocomplete("search");
        });
    });
</script>
<script>
$(document).ready(function(){
        $("#divkeyboard").hide();
	 $("#conjugate").hide();
    });
// Code to slide down or up the keyboard---
$(document).ready(function(){
    $("#virtualkeyboard").click(function(){
	$("#conjugate").hide("slow");
        $("#divkeyboard").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#show").click(function(){
        $("#conjugate").slideToggle("slow");
		$("#divkeyboard").hide("slow");
    });
});
$(document).ready(function(){
    $("#keyboard").click(function(){
	$("#conjugate").hide("slow");
        $("#divkeyboard").slideToggle("slow");
    });
});
</script>
<script>
function writeword()
{
	var lang=document.getElementById("lang").value;
	if(lang=='axom')
	{
		document.getElementById("word").onkeyup=function(){writeassamese()};
		//alert('axom');
	}
	else
	{
		document.getElementById("word").onkeyup=function(){};
	}
	
}
function conjugatehide()
{
	//document.getElementById("conjugate").style.display="none";
	$("#conjugate").hide("slow");
}
</script>
<script>
//FUNCTION TO CONVERT KEYBOARD QWERTY INTO ASSAMESE LETTER----
var letter;
function writeassamese() {
letter = document.keyboard.word.value; 
// vowel and symbol
letter = letter.replace(/a/g, "অ");
letter = letter.replace(/A/g, "আ"); 
letter = letter.replace(/i/g, "ই");
letter = letter.replace(/I/g, "ঈ");
letter = letter.replace(/u/g, "উ");
letter = letter.replace(/U/g, "ঊ");
letter = letter.replace(/অঅ/g, "আ");
letter = letter.replace(/ইই/g, "ঈ");
letter = letter.replace(/উউ/g, "ঊ");
letter = letter.replace(/e/g, "এ");
letter = letter.replace(/o/g, "ও");
letter = letter.replace(/ওই/g, "ঐ");
letter = letter.replace(/ওউ/g, "ঔ");


// vowel pronounciation symbol
letter = letter.replace(/িই/g, "ী");
letter = letter.replace(/ুউ/g, "ূ");
letter = letter.replace(/্অ/g, "");
letter = letter.replace(/োই/g, "ৈ");
letter = letter.replace(/োউ/g, "ৌ");
letter = letter.replace(/্আ/g, "া");
letter = letter.replace(/্ই/g, "ি");
letter = letter.replace(/্ঈ/g, "ী");
letter = letter.replace(/্উ/g, "ু");
letter = letter.replace(/্ঊ/g, "ূ");
letter = letter.replace(/্ঋ/g, "ৃ");
letter = letter.replace(/্এ/g, "ে");
letter = letter.replace(/্ও/g, "ো");

//consonants
letter = letter.replace(/n/g, "ন্");
letter = letter.replace(/k/g, "ক্");
letter = letter.replace(/g/g, "গ্");
letter = letter.replace(/c/g, "চ্");
letter = letter.replace(/j/g, "জ্");
letter = letter.replace(/T/g, "ট্");
letter = letter.replace(/D/g, "ড্");
letter = letter.replace(/N/g, "ণ্");
letter = letter.replace(/t/g, "ত্");
letter = letter.replace(/d/g, "দ্");
letter = letter.replace(/p/g, "প্");
letter = letter.replace(/b/g, "ব্");
letter = letter.replace(/m/g, "ম্");
letter = letter.replace(/Y/g, "য়্");
letter = letter.replace(/R/g, "ড়্");
letter = letter.replace(/y/g, "য্");
letter = letter.replace(/r/g, "ৰ্");
letter = letter.replace(/l/g, "ল্");
letter = letter.replace(/v/g,"ৱ্");
letter = letter.replace(/h/g, "হ্");
letter = letter.replace(/S/g, "ষ্");
letter = letter.replace(/s/g, "স্");
letter = letter.replace(/G/g, "ঙ্");
letter = letter.replace(/J/g, "ঞ্");
letter = letter.replace(/ন্গ্/g, "ঙ্");
letter = letter.replace(/ন্জ্/g, "ঞ্");
letter = letter.replace(/ক্হ্/g, "খ্");
letter = letter.replace(/গ্হ্/g, "ঘ্");
letter = letter.replace(/চ্হ্/g, "ছ্");
letter = letter.replace(/জ্হ্/g, "ঝ্");
letter = letter.replace(/ট্হ্/g, "ঠ্");
letter = letter.replace(/ড্হ্/g, "ঢ্");
letter = letter.replace(/ত্হ্/g, "থ্");
letter = letter.replace(/দ্হ্/g, "ধ্");
letter = letter.replace(/প্হ্/g, "ফ্");
letter = letter.replace(/ব্হ্/g, "ভ্");
letter = letter.replace(/ড়্হ্/g, "ঢ়্");
letter = letter.replace(/স্হ্/g, "শ্");
letter = letter.replace(/ৰ্ৰি/g, "ঋ");
letter = letter.replace(/X/g, "ক্ষ");
// ponctuation mark
letter = letter.replace(/\|/g, "।");
letter = letter.replace(/\//g, "।");
letter = letter.replace(/।।/g, "॥");    

//CONSONANTS WITH VOWEL

letter = letter.replace(/ক্‌অ/g, "ক");
letter = letter.replace(/খ্‌অ/g, "খ");
letter = letter.replace(/গ্‌অ/g, "গ");
letter = letter.replace(/ঘ্‌অ/g, "ঘ");
letter = letter.replace(/ঙ্‌অ/g, "ঙ");
letter = letter.replace(/চ্‌অ/g, "চ");
letter = letter.replace(/ছ্‌অ/g, "ছ");
letter = letter.replace(/জ্‌অ/g, "জ");
letter = letter.replace(/ঝ্‌অ/g, "ঝ");
letter = letter.replace(/ঞ্অ/g, "ঞ");
letter = letter.replace(/ট্‌অ/g, "ট");
letter = letter.replace(/ঠ্‌অ/g, "ঠ");
letter = letter.replace(/ড্‌অ/g, "ড");
letter = letter.replace(/ঢ্‌অ/g, "ঢ");
letter = letter.replace(/ণ্‌অ/g, "ণ");
letter = letter.replace(/ত্‌অ/g, "ত");
letter = letter.replace(/থ্‌অ/g, "থ");
letter = letter.replace(/দ্‌অ/g, "দ");
letter = letter.replace(/ধ্‌অ/g, "ধ");
letter = letter.replace(/ন্‌অ/g, "ন");
letter = letter.replace(/প্‌অ/g, "প");
letter = letter.replace(/ফ্‌অ/g, "ফ");
letter = letter.replace(/ব্‌অ/g, "ব");
letter = letter.replace(/ভ্‌অ/g, "ভ");
letter = letter.replace(/ম্‌অ/g, "ম");
letter = letter.replace(/য্‌অ/g, "য");
letter = letter.replace(/ৰ্‌অ/g, "ৰ");
letter = letter.replace(/ল্‌অ/g, "ল");
letter = letter.replace(/ৱ্‌অ/g, "ৱ");
letter = letter.replace(/শ্‌অ/g, "শ");
letter = letter.replace(/ষ্‌অ/g, "ষ");
letter = letter.replace(/স্‌অ/g, "স");
letter = letter.replace(/হ্‌অ/g, "হ");
letter = letter.replace(/ক্ষআ/g, "ক্ষা");
//letter = letter.replace(/্‌ /g, " ");
letter = letter.replace(/`/g,"্");

// anusvara and khandatta
letter = letter.replace(/ত্~/g, "ৎ");
letter = letter.replace(/্ৎ/g, "ৎ");
letter = letter.replace(/M/g, "ং");
letter = letter.replace(/্ং/g, "ং");
// candrabindu 
letter = letter.replace(/ংং/g, "ঁ");
// visarga
letter = letter.replace(/H/g, "ঃ");
letter = letter.replace(/্ঃ/g, "ঃ");

// assamese number system
letter = letter.replace(/0/g, "০");
letter = letter.replace(/1/g, "১");
letter = letter.replace(/2/g, "২");
letter = letter.replace(/3/g, "৩");
letter = letter.replace(/4/g, "৪");
letter = letter.replace(/5/g, "৫");
letter = letter.replace(/6/g, "৬");
letter = letter.replace(/7/g, "৭");
letter = letter.replace(/8/g, "৮");
letter = letter.replace(/9/g, "৯");
document.keyboard.word.value=letter;
var obj=document.keyboard.word;
obj.focus();
obj.scrollTop=obj.scrollHeight;
}


//FUNCTION TO INSERT CHARACTER----------------------
  function keyvalue(item) { 
	var input = document.keyboard.word;
		 if (document.selection) { 
            input.focus();
			range = document.selection.createRange() ;
			range.text = item ;
            range.select(); 
		}
		else if (input.selectionStart || input.selectionStart == '0') {
		var startPos = input.selectionStart;
		var endPos = input.selectionEnd;
		var cursorPos = startPos;
		var scrollTop = input.scrollTop;
		var baselength = 0;
		input.value = input.value.substring(0, startPos)+ item+ input.value.substring(endPos, input.value.length);
		cursorPos += item.length;
		input.focus();
		input.selectionStart = cursorPos;
		input.selectionEnd = cursorPos;
		input.scrollTop = scrollTop;
		}
	else {
		input.value += item;
		input.focus();
	}
}
</script>
<script>
function alerthide()
{
	document.getElementById("alert").style.display="none";
}
function divhide()
{
	document.getElementById("wrd").style.display="none";
	document.getElementById("alert").style.display="none";
}
</script>
<script>
$(function() {
setTimeout(function() {
  $('#alert').fadeOut('slow');
}, 3000);
});
</script>
</head>
<body onload="document.keyboard.word.focus()" style="background-image:url(icon/back4.jpg);background-size:cover;background-repeat:no-repeat;">              
<div id="body">
<center>
<div id="conjugate" style="position:fixed; z-index:1;" >
<input type="button" class="bt" value="ল্গ"  onclick="keyvalue('ল্গ')">
<input type="button" class="bt" onclick="keyvalue('ক্স')" value="ক্স">
<input type="button" class="bt" onclick="keyvalue('ল্ল')" value="ল্ল">
<input type="button" class="bt" onclick="keyvalue('ঞ্জ')" value="ঞ্জ">
<input type="button" class="bt" onclick="keyvalue('হ্ন')" value="হ্ন">
<input type="button" class="bt" onclick="keyvalue('ল্প')" value="ল্প">
<input type="button" class="bt" onclick="keyvalue('ক্ক')" value="ক্ক">
<input type="button" class="bt" onclick="keyvalue('ক্ত')" value="ক্ত">
<input type="button" class="bt" onclick="keyvalue('ত্ত')" value="ত্ত">
<input type="button" class="bt" onclick="keyvalue('দ্দ')" value="দ্দ">
<input type="button" class="bt" onclick="keyvalue('ত্ব')" value="ত্ব">
<input type="button" class="bt" onclick="keyvalue('ঞ্চ')" value="ঞ্চ">
<input type="button" class="bt" onclick="keyvalue('চ্চ')" value="চ্চ">
<input type="button" class="bt" onclick="keyvalue('ণ্ঠ')" value="ণ্ঠ">
<input type="button" class="bt" onclick="keyvalue('ণ্ঢ')" value="ণ্ঢ">
<input type="button" class="bt" onclick="keyvalue('দ্ব')" value="দ্ব">
<input type="button" class="bt" onclick="keyvalue('ব্দ')" value="ব্দ">
<input type="button" class="bt" onclick="keyvalue('ষ্ট')" value="ষ্ট">
<input type="button" class="bt" onclick="keyvalue('শ্র​')" value="শ্র​">
<input type="button" class="bt" onclick="keyvalue('স্র​')" value="স্র​">
<input type="button" value="স্ব" onclick="keyvalue('স্ব')" class="bt">
<input type="button" value="দ্ধ" onclick="keyvalue('দ্ধ')" class="bt">
<input type="button" value="ম্ভ" onclick="keyvalue('ম্ভ')" class="bt">
<input type="button" value="ন্দ" onclick="keyvalue('ন্দ')" class="bt">
<input type="button" value="ণ্ড" onclick="keyvalue('ণ্ড')" class="bt">
<input type="button" class="bt" onclick="keyvalue('শ্ব')" value="শ্ব">
<input type="button" class="bt" onclick="keyvalue('ন্স')" value="ন্স">
<input type="button" class="bt" onclick="keyvalue('স্ন')" value="স্ন">
<input type="button" class="bt" onclick="keyvalue('গ্ধ')" value="গ্ধ">
<input type="button" class="bt" onclick="keyvalue('গ্ন')" value="গ্ন">
<input type="button" class="bt" onclick="keyvalue('ঙ্ক')" value="ঙ্ক">
<input type="button" class="bt" onclick="keyvalue('ঙ্গ')" value="ঙ্গ">
<input type="button" class="bt" onclick="keyvalue('জ্জ')" value="জ্জ">
<input type="button" class="bt" onclick="keyvalue('ঞ্ছ')" value="ঞ্ছ">
<input type="button" class="bt" onclick="keyvalue('ট্ট')" value="ট্ট">
<input type="button" class="bt" onclick="keyvalue('দ্ভ')" value="দ্ভ">
<input type="button" class="bt" onclick="keyvalue('ত্ব')" value="ত্ব">
<input type="button" class="bt" onclick="keyvalue('ত্থ​')" value="ত্থ​">
<input type="button" class="bt" onclick="keyvalue('ত্ম​')" value="ত্ম​">
<input type="button" value="ত্ৰু" onclick="keyvalue('ত্ৰু')" class="bt">
<input type="button" value="ধ্ব" onclick="keyvalue('ধ্ব')" class="bt">
<input type="button" value="ন্ম" onclick="keyvalue('ন্ম')" class="bt">
<input type="button" value="ন্থ" onclick="keyvalue('ন্থ')" class="bt">
<input type="button" value="ন্ধ" onclick="keyvalue('ন্ধ')" class="bt">
<input type="button" class="bt" onclick="keyvalue('প্ত')" value="প্ত">
<input type="button" class="bt" onclick="keyvalue('প্ল')" value="প্ল">
<input type="button" class="bt" onclick="keyvalue('ব্ধ')" value="ব্ধ">
<input type="button" class="bt" onclick="keyvalue('ম্ন')" value="ম্ন">
<input type="button" class="bt" onclick="keyvalue('ম্ব')" value="ম্ব">
<input type="button" class="bt" onclick="keyvalue('শ্ন​')" value="শ্ন​">
<input type="button" class="bt" onclick="keyvalue('শ্ব​')" value="শ্ব​">
<input type="button" value="শ্ম" onclick="keyvalue('শ্ম')" class="bt">
<input type="button" value="ষ্ক" onclick="keyvalue('ষ্ক')" class="bt">
<input type="button" value="ষ্ণ" onclick="keyvalue('ষ্ণ')" class="bt">
<input type="button" value="ষ্প" onclick="keyvalue('ষ্প')" class="bt">
<input type="button" value="হৃ" onclick="keyvalue('হৃ')" class="bt">
<input type="button" class="bt" onclick="keyvalue('ষ্ম')" value="ষ্ম">
<input type="button" class="bt" onclick="keyvalue('হ্ম')" value="হ্ম">
<input type="button" class="bt" onclick="keyvalue('ধ্ৰ')" value="ধ্ৰ">
<input type="button" class="bt" onclick="keyvalue('ড°')" value="ড°">
<input type="button" class="bt" style="width:100px;" id="keyboard" value="মূল কিবৰ্ড">
<input type="button" class="bt" style="width:100px;" onclick="conjugatehide()" value="বন্ধ কৰক">
</div>
</center>
<center>
<!--    KEYBOARD KEY ARRANGE OK -->
<div id="divkeyboard" name="divkeyboard" align="left" style="position:fixed; z-index:1;">
<div id="divconsonants">
<input type="button" class="bt" value="ক"  onclick="keyvalue('ক')">
<input type="button" class="bt" onclick="keyvalue('খ')" value="খ">
<input type="button" class="bt" onclick="keyvalue('গ')" value="গ">
<input type="button" class="bt" onclick="keyvalue('ঘ')" value="ঘ">
<input type="button" class="bt" onclick="keyvalue('ঙ')" value="ঙ">
<input type="button" class="bt" onclick="keyvalue('চ')" value="চ">
<input type="button" class="bt" onclick="keyvalue('ছ')" value="ছ">
<input type="button" class="bt" onclick="keyvalue('জ')" value="জ">
<input type="button" class="bt" onclick="keyvalue('ঝ')" value="ঝ">
<input type="button" class="bt" onclick="keyvalue('ঞ')" value="ঞ">
<input type="button" class="bt" onclick="keyvalue('ট')" value="ট">
<input type="button" class="bt" onclick="keyvalue('ঠ')" value="ঠ">
<input type="button" class="bt" onclick="keyvalue('ড')" value="ড">
<input type="button" class="bt" onclick="keyvalue('ঢ')" value="ঢ">
<input type="button" class="bt" onclick="keyvalue('ণ')" value="ণ">
<input type="button" class="bt" onclick="keyvalue('ত')" value="ত">
<input type="button" class="bt" onclick="keyvalue('থ')" value="থ">
<input type="button" class="bt" onclick="keyvalue('দ')" value="দ">
<input type="button" class="bt" onclick="keyvalue('ধ')" value="ধ">
<input type="button" class="bt" onclick="keyvalue('ন')" value="ন">
<input type="button" value="প" onclick="keyvalue('প')" class="bt">
<input type="button" value="ফ" onclick="keyvalue('ফ')" class="bt">
<input type="button" value="ব" onclick="keyvalue('ব')" class="bt">
<input type="button" value="ভ" onclick="keyvalue('ভ')" class="bt">
<input type="button" value="ম" onclick="keyvalue('ম')" class="bt">
<input type="button" class="bt" onclick="keyvalue('য')" value="য">
<input type="button" class="bt" onclick="keyvalue('ৰ')" value="ৰ">
<input type="button" class="bt" onclick="keyvalue('ল')" value="ল">
<input type="button" value="ৱ" onclick="keyvalue('ৱ')" class="bt">
<input type="button" value="শ" onclick="keyvalue('শ')" class="bt">
<input type="button" value="ষ" onclick="keyvalue('ষ')" class="bt">
<input type="button" value="স" onclick="keyvalue('স')" class="bt">
<input type="button" class="bt" onclick="keyvalue('হ')" value="হ">
<input type="button" value="ক্ষ" onclick="keyvalue('ক্ষ')" class="bt">
<input type="button" class="bt" onclick="keyvalue('য়')" value="য়">
<input type="button" class="bt" onclick="keyvalue('ড়')" value="ড়">
<input type="button" class="bt" onclick="keyvalue('ঢ়')" value="ঢ়">
<input type="button" class="bt" onclick="keyvalue('অ')" value="অ">
<input type="button" class="bt" onclick="keyvalue('আ')" value="আ">
<input type="button" class="bt" onclick="keyvalue('ই')" value="ই">
<input type="button" class="bt" onclick="keyvalue('ঈ')" value="ঈ">
<input type="button" class="bt" onclick="keyvalue('উ')" value="উ">
<input type="button" class="bt" onclick="keyvalue('ঊ')" value="ঊ">
<input type="button" class="bt" onclick="keyvalue('ঋ')" value="ঋ">
<input type="button" class="bt" onclick="keyvalue('এ')" value="এ">
<input type="button" class="bt" onclick="keyvalue('ঐ')" value="ঐ">
<input type="button" class="bt" onclick="keyvalue('ও')" value="ও">
<input type="button" class="bt" onclick="keyvalue('ঔ')" value="ঔ">
<input type="button" class="bt" onclick="keyvalue('া')" value="া">
<input type="button" class="bt" value="ি"  onclick="keyvalue('ি')" >
<input type="button" class="bt" onclick="keyvalue('ী')" value="ী">
<input type="button" class="bt" onclick="keyvalue('ু')" value="ু">
<input type="button" class="bt" onclick="keyvalue('ূ')" value="ূ">
<input type="button" class="bt" onclick="keyvalue('ে')" value="ে">
<input type="button" class="bt" onclick="keyvalue('ৈ')" value="ৈ">
<input type="button" class="bt" onclick="keyvalue('ো')" value="ো">
<input type="button" class="bt" onclick="keyvalue('ৌ')" value="ৌ">
<input type="button" class="bt" onclick="keyvalue('্য')" value="্য">
</div>
<div id="divsymbols" width="1000px" height="40px">
<input type="button" class="bt" onclick="keyvalue('ৃ')" value="ৃ">
<input type="button" class="bt" title="virama" onclick="keyvalue('্')" value="্">
<input type="button" class="bt" title="khandata" onclick="keyvalue('ৎ')" value="ৎ">
<input type="button" class="bt" title="candra bindu" onclick="keyvalue('ঁ')" value="ঁ">
<input type="button" class="bt" title="anusvara" onclick="keyvalue('ং')" value="ং">
<input type="button" class="bt" title="visarga" onclick="keyvalue('ঃ')" value="ঃ">
<input type="button" class="bt1" value="যুক্তাক্ষৰ"  id="show">
</div>
<div id="divnumber">
<input type="button" class="bt" onclick="keyvalue('০')" value="০">
<input type="button" class="bt" onclick="keyvalue('১')" value="১">
<input type="button" class="bt" onclick="keyvalue('২')" value="২">
<input type="button" class="bt" onclick="keyvalue('৩')" value="৩">  
<input type="button" class="bt" onclick="keyvalue('৪')" value="৪">
<input type="button" class="bt" onclick="keyvalue('৫')" value="৫">
<input type="button" class="bt" onclick="keyvalue('৬')" value="৬">
<input type="button" class="bt" onclick="keyvalue('৭')" value="৭">
<input type="button" class="bt" onclick="keyvalue('৮')" value="৮">
<input type="button" class="bt" onclick="keyvalue('৯')" value="৯">
</div>
</div>
</center>
<center>
<!-------------------------------------HOME PAGE---------------------------------->
<div style="position:relative;border:2px;border-top-style:solid;border-bottom-style:solid; width:1050px; min-height:98%; border-color: #069; border-radius:0px; box-shadow:3px 3px 10px #999999; background-color:#FFF;">
<!------------------------------------LOGO------------------------------->
<div align="left"  style="position:relative; height:128px;top:2px;">
<table style="border-collapse:separate; width:65%;">
<tr>
<td align="left">
<img style="position:relative;left:40px;" src="icon/logo.jpg" height="125px;" width="auto"/>
</td>
<td align="right">
</td>
<td align="center">
<img style="position:relative;left:40px;" src="icon/logo1.jpg" height="110px;" width="auto" />
</td>
</tr>
</table>
</div>
<div style="position:relative;background-color: #069;height:1px; width:95%;">
</div>
<br />
<!----------------------------LOGO CLOSED------------------------------->
<!-------------------------------NAV BAR--------------------------->
<div style="position:relative;">
<center>
<div style="position:relative;background-color: #069;height:5px;">
	</div>
	<div>
	<center>
		<ul>          
			<li><a href="insert.php"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="edit.php"><b>EDIT</b></a></li>
			<li><a href="admin.php"><b>ADMIN</b></a></li>
			<li><a href="changepass.php"><b>CHANGE PASSWORD</b></a></li>
            <li style="position:absolute;right:10px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span><b>LOGOUT</b></a></li>
		</ul>
	</center>
	</div>
	<div style="position:relative;background-color: #069;height:5px;">
	</div>
</center>
</div>
<br />
<!-----------------------------NAV BAR CLOSED--------------------------------------->
<!----------------FORM--------------------->
<center>
<font style="font: 'Asomiya_Rohini'; font-family:Asomiya_Rohini; color: #111; font-style:normal; font-size: 16px;">
<div class="container" style="width:1000px;" >
  <div class="panel panel-default">
    <div class="panel-body" style="box-shadow:3px 3px 3px #CCCCCC;">
<center>
<form name="keyboard" method="post" action="edit.php" enctype="multipart/form-data">
<select name="lang" id="lang" onchange="writeword()" style="height:40px; width:80px; border:thin; border-style:solid; border-color: #69C;border-top-left-radius: 4px; border-bottom-left-radius:4px; border-right:none;">
<option value="english">ইংৰাজী</option>
<option value="axom">অসমীয়া</option>
<span>
<input type="text" maxlength="50" style="border:thin; border-style:solid;width:500px; border-color: #69C; height:40px; padding-left:5px; padding-top:1px; padding-bottom:1px; padding-right:5px;border-top-right-radius: 4px; border-bottom-right-radius:4px; border-left:none;" name="word" id="word" onclick="writeword()" autocomplete="off" required >
</span>
</select>
<button type="submit" class="btn btn-primary" style="height:38px; width:120px;" name="search" id="search">
         <span class="glyphicon glyphicon-search"></span>সন্ধান কৰক
</button>
<input type="button" name="virtualkeyboard" id="virtualkeyboard" class="btn btn-primary" style="height:38px; width:100px;" value="কিবর্ড">
</form>
</center>
<br />
<?php
include "connect.php";
if(isset($_GET["str"]))
{
$word=trim($_GET["str"]);
$word=mysqli_real_escape_string($con,$word);
mysqli_set_charset($con,"utf8");
}
if(isset($_POST["word"]))
{
$word=trim($_POST["word"]);
$word=mysqli_real_escape_string($con,$word);
mysqli_set_charset($con,"utf8");
}
if(isset($word))
{
$extract=mysqli_query($con,"SELECT sound,word from word where word='$word' or transliterate='$word'");
if(mysqli_num_rows($extract)==0)
{
		?>
		<div id="alert" onclick="alerthide()" style="position:absolute;top:0px;left:0px;right:0px;bottom:0px;margin:auto;z-index:5;width:402px;height:52px;border:thin; border-style:solid;border-color:#CCC;border-radius:4px; box-shadow:5px 5px 10px #666666;">
        <center>
        <div class="alert alert-warning" style="position:relative;width:400px;height:50px;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	<strong>আপুনি বিচৰা শব্দটো পোৱা নগল !</strong>
    	</div>
        </center>
        </div>
        <?php
}
}
?>

<div align="center">
<?php
if(isset($_POST["word"]))
{
$word=trim($_POST["word"]);
$word=mysqli_real_escape_string($con,$word);
mysqli_set_charset($con,"utf8");
}
if(isset($word))
{
	if(mysqli_num_rows($extract)!==0)
	{
		?>
		<table style="position:relative; border:thin; border-style:solid; border-spacing:5px; border-collapse:separate; width:600px; border-radius:4px; border-color: #999; box-shadow:3px 3px 8px grey;">
		<col width="100" />
		<col width="400" />
		<col width="100" />
		<?php
		$extract=mysqli_query($con,"SELECT * from word where word='$word' or transliterate='$word'");
		while($row=mysqli_fetch_assoc($extract))
		{
			$wrd=$row["word"];
			$file=$row["sound"];
		?>
		<tr>
		<th align="right"><b><a href="update.php?str=<?php echo $wrd ; ?>" target="_blank"><?php echo $wrd ; ?></a></b>
        <img id="speaker" src="icon/index.png" style="background-repeat:no-repeat;" onclick="document.getElementById('sound').play()" title="Listen"></img>
        </th>
		<th>
		<audio id="sound">
		<source src="<?php echo $file ;?>" type="audio/mp3">
		</audio>
		</th>
		<th align="left">
		</th>
		</tr>
		<tr><td><b>বিৱৰণ:</b></td><td><?php echo $row["explanation"];?></td><td></td></tr>
		<tr><td><b>ইংৰাজী অৰ্থ:</b></td><td><?php echo $row["english"];?></td><td></td></tr>
        <?php
		if(!empty($row['image']))
		{
		?>
		<tr><td></td><td><img width="400px;" src="<?php echo $row['image']; ?>"></img></td></tr>				
		<?php
		}
		$extract=mysqli_query($con,"SELECT * FROM word,synonym WHERE word.word_id=synonym.word_id and (word='$word' or transliterate='$word')");	
		if(mysqli_num_rows($extract)>0)
		{
			?>
            <tr><td><b>সমাৰ্থক শব্দ:</b></td><td>
            <?php
			while($row=mysqli_fetch_assoc($extract))
			{	
		?>
 				<?php echo $row["synonym"].",";?>
		<?php
			}
			?>
            </td><td></td></tr>
            <?php
		}
		?>
		
		<?php
		}
	}
	else
	{
		if(isset($_POST['word']))
		{
//assames soundex code
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
//Assamese soundex complete		
		$word=trim($_POST['word']);
		$word=mysqli_real_escape_string($con,$word);
mysqli_set_charset($con,"utf8");
		$soundex=assoundex($word);
		$soundex=mysqli_real_escape_string($con,$soundex);
mysqli_set_charset($con,"utf8");
		if(empty($soundex))
		{
		$extract=mysqli_query($con,"SELECT word FROM word WHERE transliterate LIKE '$word%' order by word");
		}
		else
		{
			$extract=mysqli_query($con,"SELECT word FROM word WHERE as_soundex LIKE '$soundex%' order by LOCATE('$soundex', word)");
		}
		if(mysqli_num_rows($extract)>0)
		{
	?>
    <center>
    	<div id="wrd" style="position:relative;border:thin; border-style:solid; border-color:#CCC; width:550px;height:250px; border-radius:4px;">
            <div style="position:relative;border:thin; border-bottom-style:solid; width:100% border-color:#CCC; border-color:#CCC; height:50px;">
        	<label style="position:relative;top:8px; text-align:center; color: #EA5A57;"><b>আপুনি তলত দিয়া শব্দবোৰৰ যিকোনো এটা বুজাব বিচাৰিছিল নেকি !</b></label><button style="position:relative;float:right;top:10px; bottom:5px; right:20px;" type="button" class="close" onclick="divhide()">&times;</button>
            </div>
            <div style="position:relative;overflow:auto;height:145px;">
            	<div style="position:relative;top:10px; bottom:10px; padding:10px 10px 10px 10px;">
        		<?php
				while($row=mysqli_fetch_assoc($extract))
				{
				?>
            	<a style="position:relative;display:inline-block;" href="edit.php?str=<?php echo $row['word'];?>" target="_blank"><b><?php echo $row['word'];?></b></a>&nbsp;
            	<?php
				}
				?>
            	</div>
            </div>
            <div style="position:absolute;bottom:0px;border:thin; border-top-style:solid; width:100%; border-color:#CCC; height:50px;">
        	<center><button style="position:relative;top:5px; bottom:5px;" type="button" class="btn btn-danger" onclick="divhide()">Close</button></center>
            </div>
        </div>
    </center>
    <?php
		}
		}
	}
?>
</table>
<?php
}
?>
</div>
<br />
<!----------------KEYBOARD INSTRUCTION--------------------->
<center>
<div class="container"  style="width:900px;">
  <div class="panel panel-default">
    <div class="panel-body">
    <p style="text-align:justify;"><font style="font: 'Asomiya_Rohini'; font-family:Asomiya_Rohini; color: #333; font-style:normal; font-size: 16px;">
    অসমীয়া কিবর্ড খন সক্ৰিয় বা নিষ্ক্ৰীয় কৰিবলৈ "কিবর্ড" বুটামটো ক্লিক কৰক। লগতে আপোনাৰ কম্পিউটাৰৰ লগত থকা ইংৰাজী কিবর্ডৰ সহায়ত অসমীয়া লিখিবলৈ ইয়াত উল্লেখ থকা ধৰনে কিবোৰ টিপক। উদাহৰণস্বৰূপে 'অ' লিখিবলৈ 'a' টিপক, 'ক' লিখিবলৈ "ka" টিপক। a(অ), A বা aa (আ), i(ই),ii বা I (ঈ), u(উ), uu বা U (ঊ), rri(ঋ), e(এ), oi(ঐ), o(ও), ou(ঔ), ka(ক), kha(খ),ga(গ), gha(ঘ), nga(ঙ), ca(চ), cha(ছ), ja(জ), jha(ঝ), nja(ঞ), Ta(ট), Tha(ঠ), D(ড), Dh(ঢ), Na(ণ),ta(ত), th(থ), da(দ), dh(ধ), na(ন), pa(প), ph(ফ), ba(ব), bha(ভ), ma(ম), ya(য), ra(ৰ), la(ল), va(ৱ), sha(শ), Sa(ষ), sa(স), ha(হ), X(ক্ষ), Ra(ড়), Rha(ঢ়), Ya(য়), t~(ৎ), M(ং), H(ঃ), MM(ঁ)। যুক্তাক্ষৰৰ বাবে 'a' টিপিব নালাগে-যেনে 'ক্ল' ৰ বাবে 'kl'।
    </font>
    </p>
    </div>
  </div>
</div>
</center>
<!----------------KEYBOARD INSTRUCTION CLOSED--------------------->
</div>
</div>
</div>
<!----------------FORM CLOSED--------------------->
<!----------------FOOTER--------------------->
<div style="position:realtive; bottom:0px;width:95%;height:100px;">
<div style="position:relative;background-color: #069;height:1px;">
</div>
<center>
<div style="position:relative;top:30px;">
<font style="font: 'Asomiya_Rohini'; font-family:Asomiya_Rohini;font-size: 15px;">
<p><font color="#003399" ><a href="http://www.astec.gov.in" target="_blank">অসম বিজ্ঞান প্ৰযুক্তিবিদ্যা আৰু পৰিৱেশ পৰিষদৰ সহযোগত</a>,<a href="http://www.jecassam.ac.in" target="_blank"> যোৰহাট অভিযান্ত্ৰিক মহাবিদ্যালয়ৰ </a><a href="http://www.jecmca.org" target="_blank">কম্পিউটাৰ প্ৰয়োগ বিভাগৰ দ্বাৰা বিকশিত</a>,<br />&copy;ASTEC(২০১৬-১৭)</font></p>
</font>
</div>
</center>
</div>
<!-----------------------------FOOTER CLOSED--------------------------------->
</div>
</font>
</center>
<!-----------------------------HOME CLOSED--------------------------------->
</br>
</body>
</html>
