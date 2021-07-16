<!DOCTYPE html> 
<html> 
	<head>
    <title>jQuery UI : Birectionally Related Slider </title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.3/themes/hot-sneaks/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('boxroomstyle/css/bootstrap.min.css') }}">

    <script src="{{ asset('boxroomstyle/js/bootstrap.min.js') }}"></script>
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

    <script>
        "use strict";

        $("#showModal").click(function() {
            $("#myModal").modal("show");
            setTimeout(function() {
                createRecaptcha();
            }, 100);
        });



        function createRecaptcha() {
            grecaptcha.render("captcha", {sitekey: "6LcAPHkbAAAAAAeHnoucA9T_BPNzj4oaxXQroTPi", theme: "light"});
        }
    </script>

   
</head> 
<body>
 <div id="mySlider"></div> <br>
    <div class="inputs">
        <label for="lowerlimit">Lower Limit: </label><input id="lowerlimit" />
        <label for="upperlimit">Upper Limit: </label><input id="upperlimit" />
    </div>
    
    <button id="showModal" type="button">Show Modal</button>

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <div id="captcha"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>