<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="myStyle.css" />
		<title>Dynamic Website</title>
	</head>
	<body>
		<h1>This is a Dynamic website!</h1>
		<p id="myNum">0</p>
		<button type="button" id="myBtn">Click Me!</button>
		<h2>Please select which query you want to run.</h2>
		<form id="form" method="post" action="result.php">
			<select name="selectedPlaylist">
				<option value="">Select...</option>
				<option value="playlist1">Playlist_1</option>
				<option value="playlist2">Playlist_2</option>
			</select>
			<input type="submit" value="Submit" />
		</form>

		<script src="myScript.js"></script>
	</body>
</html>
