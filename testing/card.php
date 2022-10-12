<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="multi.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

</head>

<body>
	<div class="container">
		<div class="row">
		<h4>checkbox</h4>
		  <select class="js-select2" name="file[]" multiple="multiple">
			<option value="O1" data-badge="">Option1</option>
			<option value="O2" data-badge="">Option2</option>
			<option value="O3" data-badge="">Option3</option>
			<option value="O4" data-badge="">Option4</option>
			<option value="O5" data-badge="">Option5</option>
			<option value="O6" data-badge="">Option6</option>
			<option value="O7" data-badge="">Option7</option>
		  </select>
		</div>
	  </div>
	  <script>
		  $(".js-select2").select2({
      closeOnSelect : false,
      placeholder : "Placeholder",
      // allowHtml: true,
      allowClear: true,
      tags: true // создает новые опции на лету
    });
	  </script>
</body>
</html>