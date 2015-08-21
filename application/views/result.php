<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Word Generator</title>
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>
    <body>
    	<div class='container'>
	    	<form action="/process_forms/generate" method="post">
		        <h4>Random Word (attempt # <?= $count?>)</h4>
		        <div class="word">
                    <?= $word ?>
		        </div>
		        <input type="submit" value="Generate">
			</form>
		</div>
    </body>
</html>