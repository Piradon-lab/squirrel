<!DOCTYPE html>
<?php
?>
<html>
<head>
	<title>ITF lab</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#303030;">
    <h2 style='text-align:center; color:white;'>Add form</h2>
    <div class="container">
	<form class="form-horizontal" action = "insert.php" method = "post" id="CommentForm" >
		<div class="form-group form-group-sm">
			<label class="col-sm-2 control-label" for="name"><h3 style='color:white;'>Name:</h3></label>
		    <div class="col-sm-10">
		      <br><input type="text" class="form-control" name = "name" id="name" placeholder="Enter Name">
		    </div>
		 </div>
		 <div class="form-group form-group-lg">
		    <label class="col-sm-2 control-label" for="comment"><h3 style='color:white;'>Comment:</h3></label>
		    <div class="col-sm-10">
		      <textarea rows="10" col="20" class="form-control" name = "comment" id="comment" placeholder="Enter Comment"></textarea>
		    </div>
		  </div>
		<div class="form-group form-group-sm">
		    <label class="col-sm-2 control-label" for="link"><h3 style='color:white;'>Link:</h3></label>
		    <div class="col-sm-10">
		      <br><input type="text" class="form-control" name = "link" id="link" placeholder="Enter Link">
		    </div>
		</div>
		<center><button type="submit" class="btn btn-success">Submit</button>   <a href="index.php" class="btn btn-danger">Cancel</a></center>
	</form>
	</div>
</body>
</html>