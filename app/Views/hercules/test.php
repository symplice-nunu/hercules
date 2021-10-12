<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js">
    <style>
        button{
            background: url('https://herculesfreight.com/assets/datepicker/calendar2.png'); height: 2em; width: 2em;
        }
    .ui-datepicker-trigger {
    padding: 0 0 0 5px;
    vertical-align: middle;
    cursor: pointer;
    position: absolute; right: 14px; top:3px;
}
    </style>
	
	
	</script>

	<!-- JavaScript Code -->
	<script>
		$(function () {
			$("#gfg").datepicker(
				{
					
					showOn: "button"
				}
			);
		});
	</script>
</head>

<body>
    
	
	<p>Enter Date: <input type="text" id="gfg"></p>
</body>

</html>
