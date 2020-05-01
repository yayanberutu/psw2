<!DOCTYPE html>
<html>
	<head>
		<script>
			function loadXMLDoc(url){
				var xmlhttp;
				if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
 				}
 				else {// code for IE6, IE5
 					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 				}

 				xmlhttp.onreadystatechange = function () {
 					if (xmlhttp.readyState === 4 && xmlhttp.status === 200){
 						document.getElementById('p1').innerHTML = "Last modified: " +xmlhttp.getResponseHeader('Last-Modified');
 					}
 				};

 				xmlhttp.open("GET", url, true);
 				xmlhttp.send();
 			}
 		</script>
 	</head>

 	<body>
 		<p id="p1">The getResponseHeader() function is used to return specific header information from a resource, like length, server-type, content-type, last- modified, etc.</p>
		<button onclick="loadXMLDoc('ajax_info.txt')">Get "Last Modified" information</button>
 	</body>
</html>