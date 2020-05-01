<script type="text/javascript">
function reload()
{
img = document.getElementById("capt");
img.src="captcha_creator.php?rand_number=" + Math.random();
}
</script>
Input Captcha shown<br>
<form type=post action=captcha_proses.php>
	<input type=text name=t1>
	<img src=captcha_creator.php id="capt">
	<input type=button onClick=reload(); value='Reload Captcha'>
	<input type=submit value='submit'>
</form>
</body>
</html>