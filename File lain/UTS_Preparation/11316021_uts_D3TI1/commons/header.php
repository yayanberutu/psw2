<html>
<head>
	<title>Lapo Gadget</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="jquery-1.12.4.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.search-box input[type="text"]').on("keyup input", function(){
                /* Get input value on change */
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if(inputVal.length){
                    $.get("livesearch.php", {term: inputVal}).done(function(data){
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else{
                    resultDropdown.empty();
                }
            });

            // Set search input value on click of result item
            $(document).on("click", ".result p", function(){
                $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
        </script>
</head>
<body>
<h1> Lapo Gadget</h1>
<hr>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search..." />
        <div class="result"></div>
    </div>
<table>
<tr>
	<td class="menu_box">
		<?php require_once(dirname(__FILE__)."/menubar.php")?>
	</td>
	<td class="content">
<!--end header-->