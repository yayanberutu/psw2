<?php
/*database.php
  database function
*/
	global $con;
	
	$con = mysqli_connect("localhost", "root", "");
	if (!$con) {
		die("database connect problem");
	}
	$db_use = mysqli_select_db($con, "shop") or die("selet db problem !!");
	
	function execQ($strQ){
		global $con;
		
		$res = mysqli_query($con, $strQ);
	
		return $res;		
	}
	
	function closeConn()
	{
		global $con;
		
		$res = mysqli_close($con);
		
		return $res;		
		
	}
	function getItemDetail($itemId){
		$strQ = "select * from items where id = ". $itemId;
		
		$resItem = execQ($strQ);
		
		return $resItem;
	}
	
	function getAllItems(){
		$strQ = "select * from items";
		
		$resItems = execQ($strQ);
		
		return $resItems;
	}
	function getCategory($catId){
		$strQ = "select * from item_categories where id = ". $catId;
		$resCat = execQ($strQ);
                
		if(mysqli_num_rows($resCat)!=0){
                    $ret = array();
                    while($data = mysqli_fetch_assoc($resCat)){
                        array_push($ret, array(
                            'img' => $data['image'],
                            'name' => $data['name'],
                            'desc' => $data['desc'],
                            'price' => $data['price'],
                            'stock' => $data['stock'],
                        ));
                    }
                    return $ret;
                } else {
                    return false;
                }
	}
	function getAllCategories(){
		$strQ = "select * from item_categories";
		$resCat = execQ($strQ);
		
                if(mysqli_num_rows($resCat)!=0){
                    $ret = array();
                    while($data = mysqli_fetch_assoc($resCat)){
                        array_push($ret, array(
                            'id' => $data['id'],
                            'name' => $data['name'],
                            'desc' => $data['desc'],
                        ));
                    }
                    return $ret;
                } else {
                    return false;
                }
	}
	
	function getAllItemByCategory($catId){
		$strQ = "select * from items where item_category_id = ".$catId;
		$resCat = execQ($strQ);
		
		return $resCat;
	}
	
	function getUser($username)	{
		$strQ = "select * from customers where username = '".$username."'";
		
		$resUsr = execQ($strQ);
		
		if (mysqli_num_rows($resUsr) > 0) {
			return $resUsr;
		}else{
			return NULL;
		}
	}
	/*fungsi-fungsi yang digunakan pada saat checkout*/
	function decItemStock($itemId, $stock)
	{
            $stock = $item['stock'];
		$strQ = "update items set stock = $stock where id = $itemId";
		
		$res = execQ($strQ);
		
		return $res;
	}
	/*menembalikan id transaksi yang nantinya akan digunakan sebagai foreign key dalam tabel transaction_items*/
	function addTransaction($userId)
	{
		$transId = 0;
		$dateTimeNow = date ("Y-m-d H:m:s"); 
		$strQins = "insert into transactions (customer_id, date_time) values(".$userId.", '".$dateTimeNow."')";
		
		$res = execQ($strQins);
		
		$strQsel = "select id from transactions where customer_id = ".$userId." and date_time = '".$dateTimeNow."'";
		$res2 = execQ($strQsel);
		$row = mysqli_fetch_array($res2, MYSQLI_ASSOC);
		$transId = $row['id'];
		
		return $transId;
	}
	
	function addTransactionItems($transId, $itemId, $qty, $price)
	{
		$strQ = "insert into transaction_items (transaction_id, item_id, qty, price) values( $transId, $itemId, $qty, $price)";
		$res = execQ($strQ);
		
		return $res;
	}	

?>
