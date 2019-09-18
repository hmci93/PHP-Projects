<?php
if (session_id() == "") session_start(); // Init session data
ob_start(); // Turn on output buffering
?>
<?php include_once "ewcfg14.php" ?>
<?php include_once ((EW_USE_ADODB) ? "adodb5/adodb.inc.php" : "ewmysql14.php") ?>
<?php include_once "phpfn14.php" ?>
<?php include_once "wordinfo.php" ?>
<?php include_once "roleinfo.php" ?>
<?php include_once "userfn14.php" ?>
<?php

//
// Page class
//

$word_delete = NULL; // Initialize page object first

class cword_delete extends cword {

	// Page ID
	var $PageID = 'delete';

	// Project ID
	var $ProjectID = '{D0DA1526-8691-4077-AB0F-4906FF8D16B3}';

	// Table name
	var $TableName = 'word';

	// Page object name
	var $PageObjName = 'word_delete';

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
		if ($this->TableName)
			return $Language->Phrase($this->PageID);
		return "";
	}

	// Page name
	function PageName() {
		return ew_CurrentPage();
	}

	// Page URL
	function PageUrl() {
		$PageUrl = ew_CurrentPage() . "?";
		if ($this->UseTokenInUrl) $PageUrl .= "t=" . $this->TableVar . "&"; // Add page token
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
	var $PageHeader;
	var $PageFooter;

	// Show Page Header
	function ShowPageHeader() {
		$sHeader = $this->PageHeader;
		$this->Page_DataRendering($sHeader);
		if ($sHeader <> "") { // Header exists, display
			echo "<p>" . $sHeader . "</p>";
		}
	}

	// Show Page Footer
	function ShowPageFooter() {
		$sFooter = $this->PageFooter;
		$this->Page_DataRendered($sFooter);
		if ($sFooter <> "") { // Footer exists, display
			echo "<p>" . $sFooter . "</p>";
		}
	}

	// Validate page request
	function IsPageRequest() {
		global $objForm;
		if ($this->UseTokenInUrl) {
			if ($objForm)
				return ($this->TableVar == $objForm->GetValue("t"));
			if (@$_GET["t"] <> "")
				return ($this->TableVar == $_GET["t"]);
		} else {
			return TRUE;
		}
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

		// Parent constuctor
		parent::__construct();

		// Table object (word)
		if (!isset($GLOBALS["word"]) || get_class($GLOBALS["word"]) == "cword") {
			$GLOBALS["word"] = &$this;
			$GLOBALS["Table"] = &$GLOBALS["word"];
		}

		// Table object (role)
		if (!isset($GLOBALS['role'])) $GLOBALS['role'] = new crole();

		// Page ID
		if (!defined("EW_PAGE_ID"))
			define("EW_PAGE_ID", 'delete', TRUE);

		// Table name (for backward compatibility)
		if (!defined("EW_TABLE_NAME"))
			define("EW_TABLE_NAME", 'word', TRUE);

		// Start timer
		if (!isset($GLOBALS["gTimer"]))
			$GLOBALS["gTimer"] = new cTimer();

		// Debug message
		ew_LoadDebugMsg();

		// Open connection
		if (!isset($conn))
			$conn = ew_Connect($this->DBID);

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
		if (!$Security->CanDelete()) {
			$Security->SaveLastUrl();
			$this->setFailureMessage(ew_DeniedMsg()); // Set no permission
			if ($Security->CanList())
				$this->Page_Terminate(ew_GetUrl("wordlist.php"));
			else
				$this->Page_Terminate(ew_GetUrl("login.php"));
		}

		// NOTE: Security object may be needed in other part of the script, skip set to Nothing
		// 
		// Security = null;
		// 

		$this->CurrentAction = (@$_GET["a"] <> "") ? $_GET["a"] : @$_POST["a_list"]; // Set up current action
		$this->word_id->SetVisibility();
		if ($this->IsAdd() || $this->IsCopy() || $this->IsGridAdd())
			$this->word_id->Visible = FALSE;
		$this->word->SetVisibility();
		$this->sound->SetVisibility();
		$this->as_soundex->SetVisibility();
		$this->image->SetVisibility();
		$this->explanation->SetVisibility();
		$this->english->SetVisibility();
		$this->transliterate->SetVisibility();

		// Global Page Loading event (in userfn*.php)
		Page_Loading();

		// Page Load event
		$this->Page_Load();

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

		// Page Unload event
		$this->Page_Unload();

		// Global Page Unloaded event (in userfn*.php)
		Page_Unloaded();

		// Export
		global $EW_EXPORT, $word;
		if ($this->CustomExport <> "" && $this->CustomExport == $this->Export && array_key_exists($this->CustomExport, $EW_EXPORT)) {
				$sContent = ob_get_contents();
			if ($gsExportFile == "") $gsExportFile = $this->TableVar;
			$class = $EW_EXPORT[$this->CustomExport];
			if (class_exists($class)) {
				$doc = new $class($word);
				$doc->Text = $sContent;
				if ($this->Export == "email")
					echo $this->ExportEmail($doc->Text);
				else
					$doc->Export();
				ew_DeleteTmpImages(); // Delete temp images
				exit();
			}
		}
		$this->Page_Redirecting($url);

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
	var $DbMasterFilter = "";
	var $DbDetailFilter = "";
	var $StartRec;
	var $TotalRecs = 0;
	var $RecCnt;
	var $RecKeys = array();
	var $Recordset;
	var $StartRowCnt = 1;
	var $RowCnt = 0;

	//
	// Page main
	//
	function Page_Main() {
		global $Language;

		// Set up Breadcrumb
		$this->SetupBreadcrumb();

		// Load key parameters
		$this->RecKeys = $this->GetRecordKeys(); // Load record keys
		$sFilter = $this->GetKeyFilter();
		if ($sFilter == "")
			$this->Page_Terminate("wordlist.php"); // Prevent SQL injection, return to list

		// Set up filter (SQL WHHERE clause) and get return SQL
		// SQL constructor in word class, wordinfo.php

		$this->CurrentFilter = $sFilter;

		// Get action
		if (@$_POST["a_delete"] <> "") {
			$this->CurrentAction = $_POST["a_delete"];
		} elseif (@$_GET["a_delete"] == "1") {
			$this->CurrentAction = "D"; // Delete record directly
		} else {
			$this->CurrentAction = "I"; // Display record
		}
		if ($this->CurrentAction == "D") {
			$this->SendEmail = TRUE; // Send email on delete success
			if ($this->DeleteRows()) { // Delete rows
				if ($this->getSuccessMessage() == "")
					$this->setSuccessMessage($Language->Phrase("DeleteSuccess")); // Set up success message
				$this->Page_Terminate($this->getReturnUrl()); // Return to caller
			} else { // Delete failed
				$this->CurrentAction = "I"; // Display record
			}
		}
		if ($this->CurrentAction == "I") { // Load records for display
			if ($this->Recordset = $this->LoadRecordset())
				$this->TotalRecs = $this->Recordset->RecordCount(); // Get record count
			if ($this->TotalRecs <= 0) { // No record found, exit
				if ($this->Recordset)
					$this->Recordset->Close();
				$this->Page_Terminate("wordlist.php"); // Return to list
			}
		}
	}

	// Load recordset
	function LoadRecordset($offset = -1, $rowcnt = -1) {

		// Load List page SQL
		$sSql = $this->ListSQL();
		$conn = &$this->Connection();

		// Load recordset
		$dbtype = ew_GetConnectionType($this->DBID);
		if ($this->UseSelectLimit) {
			$conn->raiseErrorFn = $GLOBALS["EW_ERROR_FN"];
			if ($dbtype == "MSSQL") {
				$rs = $conn->SelectLimit($sSql, $rowcnt, $offset, array("_hasOrderBy" => trim($this->getOrderBy()) || trim($this->getSessionOrderBy())));
			} else {
				$rs = $conn->SelectLimit($sSql, $rowcnt, $offset);
			}
			$conn->raiseErrorFn = '';
		} else {
			$rs = ew_LoadRecordset($sSql, $conn);
		}

		// Call Recordset Selected event
		$this->Recordset_Selected($rs);
		return $rs;
	}

	// Load row based on key values
	function LoadRow() {
		global $Security, $Language;
		$sFilter = $this->KeyFilter();

		// Call Row Selecting event
		$this->Row_Selecting($sFilter);

		// Load SQL based on filter
		$this->CurrentFilter = $sFilter;
		$sSql = $this->SQL();
		$conn = &$this->Connection();
		$res = FALSE;
		$rs = ew_LoadRecordset($sSql, $conn);
		if ($rs && !$rs->EOF) {
			$res = TRUE;
			$this->LoadRowValues($rs); // Load row values
			$rs->Close();
		}
		return $res;
	}

	// Load row values from recordset
	function LoadRowValues($rs = NULL) {
		if ($rs && !$rs->EOF)
			$row = $rs->fields;
		else
			$row = $this->NewRow(); 

		// Call Row Selected event
		$this->Row_Selected($row);
		if (!$rs || $rs->EOF)
			return;
		$this->word_id->setDbValue($row['word_id']);
		$this->word->setDbValue($row['word']);
		$this->sound->setDbValue($row['sound']);
		$this->as_soundex->setDbValue($row['as_soundex']);
		$this->image->setDbValue($row['image']);
		$this->explanation->setDbValue($row['explanation']);
		$this->english->setDbValue($row['english']);
		$this->transliterate->setDbValue($row['transliterate']);
	}

	// Return a row with default values
	function NewRow() {
		$row = array();
		$row['word_id'] = NULL;
		$row['word'] = NULL;
		$row['sound'] = NULL;
		$row['as_soundex'] = NULL;
		$row['image'] = NULL;
		$row['explanation'] = NULL;
		$row['english'] = NULL;
		$row['transliterate'] = NULL;
		return $row;
	}

	// Load DbValue from recordset
	function LoadDbValues(&$rs) {
		if (!$rs || !is_array($rs) && $rs->EOF)
			return;
		$row = is_array($rs) ? $rs : $rs->fields;
		$this->word_id->DbValue = $row['word_id'];
		$this->word->DbValue = $row['word'];
		$this->sound->DbValue = $row['sound'];
		$this->as_soundex->DbValue = $row['as_soundex'];
		$this->image->DbValue = $row['image'];
		$this->explanation->DbValue = $row['explanation'];
		$this->english->DbValue = $row['english'];
		$this->transliterate->DbValue = $row['transliterate'];
	}

	// Render row values based on field settings
	function RenderRow() {
		global $Security, $Language, $gsLanguage;

		// Initialize URLs
		// Call Row_Rendering event

		$this->Row_Rendering();

		// Common render codes for all row types
		// word_id
		// word
		// sound
		// as_soundex
		// image
		// explanation
		// english
		// transliterate

		if ($this->RowType == EW_ROWTYPE_VIEW) { // View row

		// word_id
		$this->word_id->ViewValue = $this->word_id->CurrentValue;
		$this->word_id->ViewCustomAttributes = "";

		// word
		$this->word->ViewValue = $this->word->CurrentValue;
		$this->word->ViewCustomAttributes = "";

		// sound
		$this->sound->ViewValue = $this->sound->CurrentValue;
		$this->sound->ViewCustomAttributes = "";

		// as_soundex
		$this->as_soundex->ViewValue = $this->as_soundex->CurrentValue;
		$this->as_soundex->ViewCustomAttributes = "";

		// image
		$this->image->ViewValue = $this->image->CurrentValue;
		$this->image->ViewCustomAttributes = "";

		// explanation
		$this->explanation->ViewValue = $this->explanation->CurrentValue;
		$this->explanation->ViewCustomAttributes = "";

		// english
		$this->english->ViewValue = $this->english->CurrentValue;
		$this->english->ViewCustomAttributes = "";

		// transliterate
		$this->transliterate->ViewValue = $this->transliterate->CurrentValue;
		$this->transliterate->ViewCustomAttributes = "";

			// word_id
			$this->word_id->LinkCustomAttributes = "";
			$this->word_id->HrefValue = "";
			$this->word_id->TooltipValue = "";

			// word
			$this->word->LinkCustomAttributes = "";
			$this->word->HrefValue = "";
			$this->word->TooltipValue = "";

			// sound
			$this->sound->LinkCustomAttributes = "";
			$this->sound->HrefValue = "";
			$this->sound->TooltipValue = "";

			// as_soundex
			$this->as_soundex->LinkCustomAttributes = "";
			$this->as_soundex->HrefValue = "";
			$this->as_soundex->TooltipValue = "";

			// image
			$this->image->LinkCustomAttributes = "";
			$this->image->HrefValue = "";
			$this->image->TooltipValue = "";

			// explanation
			$this->explanation->LinkCustomAttributes = "";
			$this->explanation->HrefValue = "";
			$this->explanation->TooltipValue = "";

			// english
			$this->english->LinkCustomAttributes = "";
			$this->english->HrefValue = "";
			$this->english->TooltipValue = "";

			// transliterate
			$this->transliterate->LinkCustomAttributes = "";
			$this->transliterate->HrefValue = "";
			$this->transliterate->TooltipValue = "";
		}

		// Call Row Rendered event
		if ($this->RowType <> EW_ROWTYPE_AGGREGATEINIT)
			$this->Row_Rendered();
	}

	//
	// Delete records based on current filter
	//
	function DeleteRows() {
		global $Language, $Security;
		if (!$Security->CanDelete()) {
			$this->setFailureMessage($Language->Phrase("NoDeletePermission")); // No delete permission
			return FALSE;
		}
		$DeleteRows = TRUE;
		$sSql = $this->SQL();
		$conn = &$this->Connection();
		$conn->raiseErrorFn = $GLOBALS["EW_ERROR_FN"];
		$rs = $conn->Execute($sSql);
		$conn->raiseErrorFn = '';
		if ($rs === FALSE) {
			return FALSE;
		} elseif ($rs->EOF) {
			$this->setFailureMessage($Language->Phrase("NoRecord")); // No record found
			$rs->Close();
			return FALSE;
		}
		$rows = ($rs) ? $rs->GetRows() : array();
		$conn->BeginTrans();

		// Clone old rows
		$rsold = $rows;
		if ($rs)
			$rs->Close();

		// Call row deleting event
		if ($DeleteRows) {
			foreach ($rsold as $row) {
				$DeleteRows = $this->Row_Deleting($row);
				if (!$DeleteRows) break;
			}
		}
		if ($DeleteRows) {
			$sKey = "";
			foreach ($rsold as $row) {
				$sThisKey = "";
				if ($sThisKey <> "") $sThisKey .= $GLOBALS["EW_COMPOSITE_KEY_SEPARATOR"];
				$sThisKey .= $row['word_id'];
				$conn->raiseErrorFn = $GLOBALS["EW_ERROR_FN"];
				$DeleteRows = $this->Delete($row); // Delete
				$conn->raiseErrorFn = '';
				if ($DeleteRows === FALSE)
					break;
				if ($sKey <> "") $sKey .= ", ";
				$sKey .= $sThisKey;
			}
		}
		if (!$DeleteRows) {

			// Set up error message
			if ($this->getSuccessMessage() <> "" || $this->getFailureMessage() <> "") {

				// Use the message, do nothing
			} elseif ($this->CancelMessage <> "") {
				$this->setFailureMessage($this->CancelMessage);
				$this->CancelMessage = "";
			} else {
				$this->setFailureMessage($Language->Phrase("DeleteCancelled"));
			}
		}
		if ($DeleteRows) {
			$conn->CommitTrans(); // Commit the changes
		} else {
			$conn->RollbackTrans(); // Rollback changes
		}

		// Call Row Deleted event
		if ($DeleteRows) {
			foreach ($rsold as $row) {
				$this->Row_Deleted($row);
			}
		}
		return $DeleteRows;
	}

	// Set up Breadcrumb
	function SetupBreadcrumb() {
		global $Breadcrumb, $Language;
		$Breadcrumb = new cBreadcrumb();
		$url = substr(ew_CurrentUrl(), strrpos(ew_CurrentUrl(), "/")+1);
		$Breadcrumb->Add("list", $this->TableVar, $this->AddMasterUrl("wordlist.php"), "", $this->TableVar, TRUE);
		$PageId = "delete";
		$Breadcrumb->Add("delete", $PageId, $url);
	}

	// Setup lookup filters of a field
	function SetupLookupFilters($fld, $pageId = null) {
		global $gsLanguage;
		$pageId = $pageId ?: $this->PageID;
		switch ($fld->FldVar) {
		}
	}

	// Setup AutoSuggest filters of a field
	function SetupAutoSuggestFilters($fld, $pageId = null) {
		global $gsLanguage;
		$pageId = $pageId ?: $this->PageID;
		switch ($fld->FldVar) {
		}
	}

	// Page Load event
	function Page_Load() {

		//echo "Page Load";
	}

	// Page Unload event
	function Page_Unload() {

		//echo "Page Unload";
	}

	// Page Redirecting event
	function Page_Redirecting(&$url) {

		// Example:
		//$url = "your URL";

	}

	// Message Showing event
	// $type = ''|'success'|'failure'|'warning'
	function Message_Showing(&$msg, $type) {
		if ($type == 'success') {

			//$msg = "your success message";
		} elseif ($type == 'failure') {

			//$msg = "your failure message";
		} elseif ($type == 'warning') {

			//$msg = "your warning message";
		} else {

			//$msg = "your message";
		}
	}

	// Page Render event
	function Page_Render() {

		//echo "Page Render";
	}

	// Page Data Rendering event
	function Page_DataRendering(&$header) {

		// Example:
		//$header = "your header";

	}

	// Page Data Rendered event
	function Page_DataRendered(&$footer) {

		// Example:
		//$footer = "your footer";

	}
}
?>
<?php ew_Header(FALSE) ?>
<?php

// Create page object
if (!isset($word_delete)) $word_delete = new cword_delete();

// Page init
$word_delete->Page_Init();

// Page main
$word_delete->Page_Main();

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$word_delete->Page_Render();
?>
<?php include_once "header.php" ?>
<script type="text/javascript">

// Form object
var CurrentPageID = EW_PAGE_ID = "delete";
var CurrentForm = fworddelete = new ew_Form("fworddelete", "delete");

// Form_CustomValidate event
fworddelete.Form_CustomValidate = 
 function(fobj) { // DO NOT CHANGE THIS LINE!

 	// Your custom validation code here, return false if invalid.
 	return true;
 }

// Use JavaScript validation or not
fworddelete.ValidateRequired = <?php echo json_encode(EW_CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

</script>
<script type="text/javascript">

// Write your client script here, no need to add script tags.
</script>
<?php $word_delete->ShowPageHeader(); ?>
<?php
$word_delete->ShowMessage();
?>
<form name="fworddelete" id="fworddelete" class="form-inline ewForm ewDeleteForm" action="<?php echo ew_CurrentPage() ?>" method="post">
<?php if ($word_delete->CheckToken) { ?>
<input type="hidden" name="<?php echo EW_TOKEN_NAME ?>" value="<?php echo $word_delete->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="word">
<input type="hidden" name="a_delete" id="a_delete" value="D">
<?php foreach ($word_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode($EW_COMPOSITE_KEY_SEPARATOR, $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo ew_HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="box ewBox ewGrid">
<div class="<?php if (ew_IsResponsiveLayout()) { ?>table-responsive <?php } ?>ewGridMiddlePanel">
<table class="table ewTable">
	<thead>
	<tr class="ewTableHeader">
<?php if ($word->word_id->Visible) { // word_id ?>
		<th class="<?php echo $word->word_id->HeaderCellClass() ?>"><span id="elh_word_word_id" class="word_word_id"><?php echo $word->word_id->FldCaption() ?></span></th>
<?php } ?>
<?php if ($word->word->Visible) { // word ?>
		<th class="<?php echo $word->word->HeaderCellClass() ?>"><span id="elh_word_word" class="word_word"><?php echo $word->word->FldCaption() ?></span></th>
<?php } ?>
<?php if ($word->sound->Visible) { // sound ?>
		<th class="<?php echo $word->sound->HeaderCellClass() ?>"><span id="elh_word_sound" class="word_sound"><?php echo $word->sound->FldCaption() ?></span></th>
<?php } ?>
<?php if ($word->as_soundex->Visible) { // as_soundex ?>
		<th class="<?php echo $word->as_soundex->HeaderCellClass() ?>"><span id="elh_word_as_soundex" class="word_as_soundex"><?php echo $word->as_soundex->FldCaption() ?></span></th>
<?php } ?>
<?php if ($word->image->Visible) { // image ?>
		<th class="<?php echo $word->image->HeaderCellClass() ?>"><span id="elh_word_image" class="word_image"><?php echo $word->image->FldCaption() ?></span></th>
<?php } ?>
<?php if ($word->explanation->Visible) { // explanation ?>
		<th class="<?php echo $word->explanation->HeaderCellClass() ?>"><span id="elh_word_explanation" class="word_explanation"><?php echo $word->explanation->FldCaption() ?></span></th>
<?php } ?>
<?php if ($word->english->Visible) { // english ?>
		<th class="<?php echo $word->english->HeaderCellClass() ?>"><span id="elh_word_english" class="word_english"><?php echo $word->english->FldCaption() ?></span></th>
<?php } ?>
<?php if ($word->transliterate->Visible) { // transliterate ?>
		<th class="<?php echo $word->transliterate->HeaderCellClass() ?>"><span id="elh_word_transliterate" class="word_transliterate"><?php echo $word->transliterate->FldCaption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$word_delete->RecCnt = 0;
$i = 0;
while (!$word_delete->Recordset->EOF) {
	$word_delete->RecCnt++;
	$word_delete->RowCnt++;

	// Set row properties
	$word->ResetAttrs();
	$word->RowType = EW_ROWTYPE_VIEW; // View

	// Get the field contents
	$word_delete->LoadRowValues($word_delete->Recordset);

	// Render row
	$word_delete->RenderRow();
?>
	<tr<?php echo $word->RowAttributes() ?>>
<?php if ($word->word_id->Visible) { // word_id ?>
		<td<?php echo $word->word_id->CellAttributes() ?>>
<span id="el<?php echo $word_delete->RowCnt ?>_word_word_id" class="word_word_id">
<span<?php echo $word->word_id->ViewAttributes() ?>>
<?php echo $word->word_id->ListViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($word->word->Visible) { // word ?>
		<td<?php echo $word->word->CellAttributes() ?>>
<span id="el<?php echo $word_delete->RowCnt ?>_word_word" class="word_word">
<span<?php echo $word->word->ViewAttributes() ?>>
<?php echo $word->word->ListViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($word->sound->Visible) { // sound ?>
		<td<?php echo $word->sound->CellAttributes() ?>>
<span id="el<?php echo $word_delete->RowCnt ?>_word_sound" class="word_sound">
<span<?php echo $word->sound->ViewAttributes() ?>>
<?php echo $word->sound->ListViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($word->as_soundex->Visible) { // as_soundex ?>
		<td<?php echo $word->as_soundex->CellAttributes() ?>>
<span id="el<?php echo $word_delete->RowCnt ?>_word_as_soundex" class="word_as_soundex">
<span<?php echo $word->as_soundex->ViewAttributes() ?>>
<?php echo $word->as_soundex->ListViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($word->image->Visible) { // image ?>
		<td<?php echo $word->image->CellAttributes() ?>>
<span id="el<?php echo $word_delete->RowCnt ?>_word_image" class="word_image">
<span<?php echo $word->image->ViewAttributes() ?>>
<?php echo $word->image->ListViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($word->explanation->Visible) { // explanation ?>
		<td<?php echo $word->explanation->CellAttributes() ?>>
<span id="el<?php echo $word_delete->RowCnt ?>_word_explanation" class="word_explanation">
<span<?php echo $word->explanation->ViewAttributes() ?>>
<?php echo $word->explanation->ListViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($word->english->Visible) { // english ?>
		<td<?php echo $word->english->CellAttributes() ?>>
<span id="el<?php echo $word_delete->RowCnt ?>_word_english" class="word_english">
<span<?php echo $word->english->ViewAttributes() ?>>
<?php echo $word->english->ListViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($word->transliterate->Visible) { // transliterate ?>
		<td<?php echo $word->transliterate->CellAttributes() ?>>
<span id="el<?php echo $word_delete->RowCnt ?>_word_transliterate" class="word_transliterate">
<span<?php echo $word->transliterate->ViewAttributes() ?>>
<?php echo $word->transliterate->ListViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$word_delete->Recordset->MoveNext();
}
$word_delete->Recordset->Close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ewButton" name="btnAction" id="btnAction" type="submit"><?php echo $Language->Phrase("DeleteBtn") ?></button>
<button class="btn btn-default ewButton" name="btnCancel" id="btnCancel" type="button" data-href="<?php echo $word_delete->getReturnUrl() ?>"><?php echo $Language->Phrase("CancelBtn") ?></button>
</div>
</form>
<script type="text/javascript">
fworddelete.Init();
</script>
<?php
$word_delete->ShowPageFooter();
if (EW_DEBUG_ENABLED)
	echo ew_DebugMsg();
?>
<script type="text/javascript">

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$word_delete->Page_Terminate();
?>
