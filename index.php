<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" text="css">
	<link href="css/style.css" rel="stylesheet">
	</head>
<body>



<br>

<div class="container">
<header><h1>Form Test</h1> </header>
<h3>Quick Questionaire</h3>
<form action ="generate.php" method="post">
	<div class="form-group">
		<label>Name:</label>
		<input type="text" name="name" class="form-control"/></br>

		<label>Favorite color:</label>
		<input type="text" name="color" class="form-control"/></br>

		<label>Favorite movie?:</label>
		<input type="text" name="favMovie" class="form-control"/></br>
	</div>

<div class="form-group">
<label>Why are you here?</label>
<select name ="reason"  class="form-control">
<option></option>
<option>to check out portfolio</option>
<option>to look around</option>
<option>to criticize</option>
<option>because there is nothing else to do</option>
</select><br />
</div>

<div class= "form-group">
<label>What's your favorite framework language?</label>
<div class="checkbox">
<label class="checkbox-inline"><input type="checkbox" name="frameLang" value="Angular">Angular</label>
<label class="checkbox-inline"><input type="checkbox" name="frameLang" value="PHP">PHP</label>
<label class="checkbox-inline"><input type="checkbox" name="frameLang" value="Python">Python</label>
</div>


<div class="form-group">
<label>Enter a comment</label>
<textarea class="form-control" name="comment"></textarea>
</div>



		<button type="submit" class="btn btn-success"/>Submit</button>
		<button type="reset" class="btn btn-warning">Reset</button>
 		</div>
	</div>

</form>
<footer>
<div class="footer">
	Copyright &copy; 2020 SuburbanStyle Media. 
</div>
</footer>
</div>
</body>
</html>

