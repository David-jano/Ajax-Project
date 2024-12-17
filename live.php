<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="search-div">
<input type="text" name="write" id="search-field">
    </div>
<div id="output"></div>
    <script type="text/javascript">
$(document).ready(function(){
    $("#search-field").keyup(function(){

    var input = $(this).val();
   alert(input);
    
});
});
        </script>
</body>
</html>
