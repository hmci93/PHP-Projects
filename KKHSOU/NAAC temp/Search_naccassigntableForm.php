<html><head>
	<title>naccassigntableForm</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	</head>
	<body>

		<br><br>
    <div id="main" class="container border">
      <div id="form_input" class="col-lg-12" >
        <form name="src_frm" action="Search_naccassigntableForm_process.php" method="post">

          <div class="row text-left">
						<div class="form-group col-md-8">
							<label for="sl_no" class="col-form-label">Search By NAAC Serial No. :</label>
            </div>
						<div class="col-md-4"></div>
					</div>
					<div class="row">
						<div class="form-group col-md-8">
              <input type="text" id="naac_slno_key" class="form-control" name="naac_slno_key" placeholder="Enter NAAC Serial No." aria-describedby="basic-addon2" required>
            </div>

            <div class="form-group col-md-4">
              <input type="submit" class="btn btn-primary btn-md btn-block" name="submit" value="SEARCH">
            </div>
          </div>

        </form>
			</div>
		</div>

</body>
</html>
