<!DOCTYPE html>
<html>
	<head>
		<script>
			var xmlhttp;
			function loadXMLDoc(url, cfunc) {
				if (window.XMLHttpRequest) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
 				}
 				else {
 					// code for IE6, IE5
 					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 				}

 				xmlhttp.onreadystatechange = cfunc;
 				xmlhttp.open("GET", url, true);
 				xmlhttp.send();
 			}

 			function myFunction() {
 				loadXMLDoc("ajax_info.txt", function () {
 					if (xmlhttp.readyState === 4 && xmlhttp.status === 200){
 						document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
 					}
 				});
 			}
 		</script>
	</head>

 	<body>
 		<div id="myDiv"><h2>Let AJAX change this text</h2></div>
 		<button type="button" onclick="myFunction()">ChangeContent</button>
 	</body>
</html>
