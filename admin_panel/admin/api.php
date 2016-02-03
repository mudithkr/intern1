<?php  
$dbserver='localhost';
$dbuser='';
$dbpwd='';
$dbname='';

$db= new PDO('mysql:host='.$dbserver.';dbname='.$dbname.'',$dbuser, $dbpwd);

$cat=$_GET["category"];
$row=$db->prepare("SELECT  * FROM  WHERE category ='".$cat."' ");  
$row->execute();  
$json_data=array();  
foreach($row as $rec)  
{  
	$json_array['']=$rec[''];  
    $json_array['']=$rec[''];  
     
	//$json_array['eventDate']=$rec['eventDate'];  
    array_push($json_data,$json_array);  
  
}  
    
echo json_encode($json_data);  
  
  
?>  