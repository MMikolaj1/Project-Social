<?php
//function used to test arrays.
function pr($arr){
	echo'<pre>';
	print_r($arr);//display
}
//function used to test arrays.
function prx($arr){
	echo'<pre>';
	print_r($arr);//display
	die();//exit
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);//trim string
		return mysqli_real_escape_string($con,$str);
	}
}

//function gets product from the database
function get_product($con,$limit='',$cat_id='',$product_id=''){
	
	//get product from database where the product is active.
	$sql="select product.*,categories.categories from product,categories where product.status=1 ";
	if($cat_id!=''){//if id is not empty then
		//gets id for category and product
		$sql.=" and product.categories_id=$cat_id ";//execute this SQL command.
	}
		if($product_id!=''){
		$sql.=" and product.id=$product_id ";//SQL Command
	}
	$sql.=" and product.categories_id=categories.id ";//SQL Command
	$sql.=" order by product.id desc";//SQL Command to set the order of product id into descending.
	
	if($limit!=''){
		$sql.=" limit $limit";
	}
	
$res=mysqli_query($con,$sql);//response for connection and sql.
$data=array();//array
	
while($row=mysqli_fetch_assoc($res)){
	$data[]=$row;//array
}
	return $data;
}
?>