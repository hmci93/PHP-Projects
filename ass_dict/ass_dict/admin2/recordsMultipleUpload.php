<?php
if (session_id() == "") session_start(); // Init session data
ob_start(); // Turn on output buffering
?>
<?php include_once "ewcfg14.php" ?>
<?php $EW_ROOT_RELATIVE_PATH = ""; ?>
<?php include_once ((EW_USE_ADODB) ? "adodb5/adodb.inc.php" : "ewmysql14.php") ?>
<?php include_once "phpfn14.php" ?>
<?php include_once "roleinfo.php" ?>
<?php include_once "userfn14.php" ?>
<?php

//
// Page class
//

$recordsMultipleUpload_php = NULL; // Initialize page object first

class crecordsMultipleUpload_php {

	// Page ID
	var $PageID = 'custom';

	// Project ID
	var $ProjectID = '{D0DA1526-8691-4077-AB0F-4906FF8D16B3}';

	// Table name
	var $TableName = 'recordsMultipleUpload.php';

	// Page object name
	var $PageObjName = 'recordsMultipleUpload_php';

	// Page headings
	var $Heading = '';
	var $Subheading = '';

	// Page heading
	function PageHeading() {
		global $Language;
		if ($this->Heading <> "")
			return $this->Heading;
		if (method_exists($this, "TableCaption"))
			return $this->TableCaption();
		return "";
	}

	// Page subheading
	function PageSubheading() {
		global $Language;
		if ($this->Subheading <> "")
			return $this->Subheading;
		return "";
	}

	// Page name
	function PageName() {
		return ew_CurrentPage();
	}

	// Page URL
	function PageUrl() {
		$PageUrl = ew_CurrentPage() . "?";
		return $PageUrl;
	}

	// Message
	function getMessage() {
		return @$_SESSION[EW_SESSION_MESSAGE];
	}

	function setMessage($v) {
		ew_AddMessage($_SESSION[EW_SESSION_MESSAGE], $v);
	}

	function getFailureMessage() {
		return @$_SESSION[EW_SESSION_FAILURE_MESSAGE];
	}

	function setFailureMessage($v) {
		ew_AddMessage($_SESSION[EW_SESSION_FAILURE_MESSAGE], $v);
	}

	function getSuccessMessage() {
		return @$_SESSION[EW_SESSION_SUCCESS_MESSAGE];
	}

	function setSuccessMessage($v) {
		ew_AddMessage($_SESSION[EW_SESSION_SUCCESS_MESSAGE], $v);
	}

	function getWarningMessage() {
		return @$_SESSION[EW_SESSION_WARNING_MESSAGE];
	}

	function setWarningMessage($v) {
		ew_AddMessage($_SESSION[EW_SESSION_WARNING_MESSAGE], $v);
	}

	// Methods to clear message
	function ClearMessage() {
		$_SESSION[EW_SESSION_MESSAGE] = "";
	}

	function ClearFailureMessage() {
		$_SESSION[EW_SESSION_FAILURE_MESSAGE] = "";
	}

	function ClearSuccessMessage() {
		$_SESSION[EW_SESSION_SUCCESS_MESSAGE] = "";
	}

	function ClearWarningMessage() {
		$_SESSION[EW_SESSION_WARNING_MESSAGE] = "";
	}

	function ClearMessages() {
		$_SESSION[EW_SESSION_MESSAGE] = "";
		$_SESSION[EW_SESSION_FAILURE_MESSAGE] = "";
		$_SESSION[EW_SESSION_SUCCESS_MESSAGE] = "";
		$_SESSION[EW_SESSION_WARNING_MESSAGE] = "";
	}

	// Show message
	function ShowMessage() {
		$hidden = FALSE;
		$html = "";

		// Message
		$sMessage = $this->getMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($sMessage, "");
		if ($sMessage <> "") { // Message in Session, display
			if (!$hidden)
				$sMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sMessage;
			$html .= "<div class=\"alert alert-info ewInfo\">" . $sMessage . "</div>";
			$_SESSION[EW_SESSION_MESSAGE] = ""; // Clear message in Session
		}

		// Warning message
		$sWarningMessage = $this->getWarningMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($sWarningMessage, "warning");
		if ($sWarningMessage <> "") { // Message in Session, display
			if (!$hidden)
				$sWarningMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sWarningMessage;
			$html .= "<div class=\"alert alert-warning ewWarning\">" . $sWarningMessage . "</div>";
			$_SESSION[EW_SESSION_WARNING_MESSAGE] = ""; // Clear message in Session
		}

		// Success message
		$sSuccessMessage = $this->getSuccessMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($sSuccessMessage, "success");
		if ($sSuccessMessage <> "") { // Message in Session, display
			if (!$hidden)
				$sSuccessMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sSuccessMessage;
			$html .= "<div class=\"alert alert-success ewSuccess\">" . $sSuccessMessage . "</div>";
			$_SESSION[EW_SESSION_SUCCESS_MESSAGE] = ""; // Clear message in Session
		}

		// Failure message
		$sErrorMessage = $this->getFailureMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($sErrorMessage, "failure");
		if ($sErrorMessage <> "") { // Message in Session, display
			if (!$hidden)
				$sErrorMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sErrorMessage;
			$html .= "<div class=\"alert alert-danger ewError\">" . $sErrorMessage . "</div>";
			$_SESSION[EW_SESSION_FAILURE_MESSAGE] = ""; // Clear message in Session
		}
		echo "<div class=\"ewMessageDialog\"" . (($hidden) ? " style=\"display: none;\"" : "") . ">" . $html . "</div>";
	}
	var $Token = "";
	var $TokenTimeout = 0;
	var $CheckToken = EW_CHECK_TOKEN;
	var $CheckTokenFn = "ew_CheckToken";
	var $CreateTokenFn = "ew_CreateToken";

	// Valid Post
	function ValidPost() {
		if (!$this->CheckToken || !ew_IsPost())
			return TRUE;
		if (!isset($_POST[EW_TOKEN_NAME]))
			return FALSE;
		$fn = $this->CheckTokenFn;
		if (is_callable($fn))
			return $fn($_POST[EW_TOKEN_NAME], $this->TokenTimeout);
		return FALSE;
	}

	// Create Token
	function CreateToken() {
		global $gsToken;
		if ($this->CheckToken) {
			$fn = $this->CreateTokenFn;
			if ($this->Token == "" && is_callable($fn)) // Create token
				$this->Token = $fn();
			$gsToken = $this->Token; // Save to global variable
		}
	}

	//
	// Page class constructor
	//
	function __construct() {
		global $conn, $Language;
		global $UserTable, $UserTableConn;
		$GLOBALS["Page"] = &$this;
		$this->TokenTimeout = ew_SessionTimeoutTime();

		// Language object
		if (!isset($Language)) $Language = new cLanguage();

		// Page ID
		if (!defined("EW_PAGE_ID"))
			define("EW_PAGE_ID", 'custom', TRUE);

		// Table name (for backward compatibility)
		if (!defined("EW_TABLE_NAME"))
			define("EW_TABLE_NAME", 'recordsMultipleUpload.php', TRUE);

		// Start timer
		if (!isset($GLOBALS["gTimer"]))
			$GLOBALS["gTimer"] = new cTimer();

		// Debug message
		ew_LoadDebugMsg();

		// Open connection
		if (!isset($conn))
			$conn = ew_Connect();

		// User table object (role)
		if (!isset($UserTable)) {
			$UserTable = new crole();
			$UserTableConn = Conn($UserTable->DBID);
		}
	}

	//
	//  Page_Init
	//
	function Page_Init() {
		global $gsExport, $gsCustomExport, $gsExportFile, $UserProfile, $Language, $Security, $objForm;

		// User profile
		$UserProfile = new cUserProfile();

		// Security
		$Security = new cAdvancedSecurity();
		if (!$Security->IsLoggedIn()) $Security->AutoLogin();
		if ($Security->IsLoggedIn()) $Security->TablePermission_Loading();
		$Security->LoadCurrentUserLevel($this->ProjectID . $this->TableName);
		if ($Security->IsLoggedIn()) $Security->TablePermission_Loaded();
		if (!$Security->CanReport()) {
			$Security->SaveLastUrl();
			$this->setFailureMessage(ew_DeniedMsg()); // Set no permission
			$this->Page_Terminate(ew_GetUrl("index.php"));
		}

		// NOTE: Security object may be needed in other part of the script, skip set to Nothing
		// 
		// Security = null;
		// 

		if (@$_GET["export"] <> "")
			$gsExport = $_GET["export"]; // Get export parameter, used in header

		// Global Page Loading event (in userfn*.php)
		Page_Loading();

		// Check token
		if (!$this->ValidPost()) {
			echo $Language->Phrase("InvalidPostRequest");
			$this->Page_Terminate();
			exit();
		}

		// Create Token
		$this->CreateToken();
	}

	//
	// Page_Terminate
	//
	function Page_Terminate($url = "") {
		global $gsExportFile, $gTmpImages;

		// Global Page Unloaded event (in userfn*.php)
		Page_Unloaded();

		// Export
		// Close connection

		ew_CloseConn();

		// Go to URL if specified
		if ($url <> "") {
			if (!EW_DEBUG_ENABLED && ob_get_length())
				ob_end_clean();
			ew_SaveDebugMsg();
			header("Location: " . $url);
		}
		exit();
	}

	//
	// Page main
	//
	function Page_Main() {

		// Set up Breadcrumb
		$this->SetupBreadcrumb();
	}

	// Set up Breadcrumb
	function SetupBreadcrumb() {
		global $Breadcrumb, $Language;
		$Breadcrumb = new cBreadcrumb();
		$url = substr(ew_CurrentUrl(), strrpos(ew_CurrentUrl(), "/")+1);
		$Breadcrumb->Add("custom", "recordsMultipleUpload_php", $url, "", "recordsMultipleUpload_php", TRUE);
		$this->Heading = $Language->TablePhrase("recordsMultipleUpload_php", "TblCaption"); 
	}
}
?>
<?php ew_Header(FALSE) ?>
<?php

// Create page object
if (!isset($recordsMultipleUpload_php)) $recordsMultipleUpload_php = new crecordsMultipleUpload_php();

// Page init
$recordsMultipleUpload_php->Page_Init();

// Page main
$recordsMultipleUpload_php->Page_Main();

// Global Page Rendering event (in userfn*.php)
Page_Rendering();
?>
<?php include_once "header.php" ?>
<?php
$connect = mysqli_connect("localhost", "assam1pw_astec", "jecmca", "assam1pw_dictionary");
mysqli_set_charset($connect,"utf8");
$output = '';
$count1=0;
$duplicateWordList='';
if(isset($_POST["import"]))
{
 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file
  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
	$output .= "<tr>";
	$output .= '<th>Word</th>';
	$output .= '<th>Sound Path</th>';
	$output .= '<th>Soundex Code</th>';
	$output .= '<th>Image Path</th>';
	$output .= '<th>Explanation</th>';
	$output .= '<th>English</th>';
	$output .= '<th>Transliterate</th>';
	$output .= "</tr>";

  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
	$output .= "<tr>";
	$word = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
	$transliterate = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
	$sound = "Uploaded/".$transliterate.".mp3";
	$as_soundex=assoundex($word);
	$explanation = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
	$english = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
	$image = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
	$extract=mysqli_query($connect,"select word from word where word='$word'");
	if(mysqli_num_rows($extract)>0)
	{
			$count1=$count1+1;
			$duplicateWordList=$duplicateWordList.$word;
			$duplicateWordList=$duplicateWordList.' &nbsp;'.'<font color="red">|&nbsp;&nbsp</font>';
	}
	else
	{
	
	$query = "INSERT INTO word(word, sound, as_soundex, image, explanation, english, transliterate) VALUES ('".$word."', '".$sound."', '".$as_soundex."', '".$image."', '".$explanation."', '".$english."', '".$transliterate."')";
	mysqli_query($connect, $query);
	$output .= '<td>'.$word.'</td>';
	$output .= '<td>'.$sound.'</td>';
	$output .= '<td>'.$as_soundex.'</td>';
	$output .= '<td>'.$image.'</td>';
	$output .= '<td>'.$explanation.'</td>';
	$output .= '<td>'.$english.'</td>';
	$output .= '<td>'.$transliterate.'</td>';

	$output .= '</tr>';
   }
   }
  } 
  $output .= '</table>';
 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>
   <div class="container box">
   <h3 align="center">Import Multiple Records Into
   <b>সাঁচিপাত</b></h3><br />
   <center><a href="UploadFiles/wordTemplate.xlsx"><font size="3" color="#0404B4">Click here for download Template</font></a></center>
   <h4 align="center">File Format Support - <font size="5" color="RED">.xls, .xlsx and .csv</font></h4><br />
   <br>
   <form method="post" enctype="multipart/form-data">
	<label>Select  File</label>
	<input type="file" name="excel"/>
	<br/>
	<input type="submit" name="import" class="btn btn-info" value="Import" />
   </form>
  
   <br/>
   <br/>
   <?php
   echo $output;
   ?>
   <br>
	 </div>
  <div class="panel panel-default">
  <div class="panel-heading"><font size="3" color="#F54545"><strong>Information About Duplicate Word</strong></font></div>
  <div class="panel-body"><font size="3">Total numbers of duplicates words found : &nbsp;&nbsp;&nbsp;</font><font size="4" color="#F54545"><?php echo $count1;?> </font></div>
   <div class="panel-body"><font size="3">Duplicates words are : </font>&nbsp;&nbsp;&nbsp;<br><br><font size="3" color="#3757E8"><strong><?php echo $duplicateWordList;?> </strong></font></div>
</div>
<?php
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
	 //$soundex8 = str_replace('YXC', 'NC', $soundex7);
	 //$soundex9 = str_replace('YXJ', 'NJ', $soundex8);
	 
return $soundex7;
}
//Assamese soundex complete
?>
<?php if (EW_DEBUG_ENABLED) echo ew_DebugMsg(); ?>
<?php include_once "footer.php" ?>
<?php
$recordsMultipleUpload_php->Page_Terminate();
?>
