<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Needed to say it</title>

	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' rel='stylesheet' type='text/css'>

	<style>
		body {
			background-color: #5E2971;
			font-family: 'Lato';
			color: #EEDDDD;
		}
		#content {
			margin-top: 3em;
		}
		#password {
			margin: 1em 0;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4" id="content">
				<form method="POST" action="./">
					<h1>Some things I've needed to say but haven't yet</h1>
					<h3>The password is the last thing you said to me when we were first forced to stop talking.</h3>
					<input class="form-control" type="text" placeholder="password" id="password" name="password">
					<input class="form-control" type="submit" value="Show Me">
				</form>
				<script>
					document.getElementById('password').focus();
				</script>
			</div>
		<!-- <div class="col-md-6 col-md-offset-3" id="content">
			<p>
				I keep your number in my favorites list on my phone.
				I still go out of my way to keep our facebook chat window opened at home because seeing your name calms me.
				The only reason I've kept my last phone alive is because it has our text message history.
				I've kept our entire chat history intact so that I can revisit every moment that you made me feel like the most important person in history.
			</p>
			<p>
				I notice you. When I first told you how important you make me feel, you told me that I made you feel seen, and heard.
				Well that's never stopped. I noticed the way you moved your hair from one side to the other, I heard you when you told me about
				your fears during our 'cube' discussion. 
			</p>
			<p>
				<h1>I am <i>still</i> completely and hopelessly in <b>love</b> with you, and I miss you more than you can possibly imagine.</h1>
			</p>
		</div> -->
	</div>

</body>
</html>