<html>
<head>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</head>
<body>
	<form method="POST">
		<div>
			<div>
				<label>Target</label>
				<input type="text" name="target">
			</div>
			<div>
				<label>Number</label>
				<input type="text" name="number">
			</div>
			<div>
				<div>
				<label>Addition</label>
				<input type="radio" name="inputMethod" value="add">
				</div>
				<div>
				<label>Subtraction</label>
				<input type="radio" name="inputMethod" value="subtract">
				</div>
				<div>
				<label>Multiplication</label>
				<input type="radio" name="inputMethod" value="multiple">
				</div>
				<div>
				<label>Division</label>
				<input type="radio" name="inputMethod" value="divide">
				</div>
			</div>
				<input type="submit" name="submit" value="Submit">
		</div>
	</form>
</body>

</html>

<?php
include 'Practice.php';

if(isset($_POST['submit'])){
	$method = $_POST['inputMethod'];
	$cal = new Practice($_POST['target']);
	echo $cal->$method($_POST['number']);
}