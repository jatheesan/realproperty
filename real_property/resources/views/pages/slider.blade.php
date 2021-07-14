<!DOCTYPE html> 
<html> 
	<head>
    <title>jQuery UI : Birectionally Related Slider </title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.3/themes/hot-sneaks/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
       <script>
        $(document).ready(function() {
        
            $('#mySlider').slider({
                values: [25, 75],
                range: true,
                create: attachSlider,
                slide: attachSlider,
                stop: attachSlider
            })

            function attachSlider() {
                $('#lowerlimit').val($('#mySlider').slider("values", 0));
                $('#upperlimit').val($('#mySlider').slider("values", 1));
            }
            
            $('input').change(function(e) {
                var setIndex = (this.id == "upperlimit") ? 1 : 0;
                $('#mySlider').slider("values", setIndex, $(this).val())
            })


        });
    </script>

   
</head> 
<body>
 <div id="mySlider"></div> <br>
    <div class="inputs">
        <label for="lowerlimit">Lower Limit: </label><input id="lowerlimit" />
        <label for="upperlimit">Upper Limit: </label><input id="upperlimit" />
    </div> 
</body>
</html>