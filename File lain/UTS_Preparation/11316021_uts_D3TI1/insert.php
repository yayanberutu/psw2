<?php
	/*browseall.php*/
	
/*include functions*/
require_once(dirname(__FILE__).'/functions/database.php');

require_once(dirname(__FILE__).'/commons/header.php');


$q = "insert into transactions(customer_id, date_time) values(1, '2010-03-24 00:03:17')";

execQ($q);
require_once(dirname(__FILE__).'/commons/footer.php');
?>