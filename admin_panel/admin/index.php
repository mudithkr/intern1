<?php
require_once('../includes/config.php');
if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['delpost'])){ 
    $delpost=$_GET['delpost'];
	$stmt = "DELETE FROM WHERE id ='".$delpost."'";
	my_iud($stmt);
    header('Location:index.php?action=deleted');
	exit;
} 

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script language="JavaScript" type="text/javascript">
  function delpost(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = '=' + id;
	  }
  }
  </script>
</head>
<body>

	<div id="wrapper">

	<?php include('menu.php');?>

	<?php 
	//show message from add / edit page
	if(isset($_GET['action'])){ 
		echo '<h3>Event '.$_GET['action'].'.</h3>'; 
	} 
	?>

	<table>
	<tr>
		<th>Title</th>
		<th>Description</th>
		
		<th>Action</th>
	</tr>
	<?php
		try {

			$query = "SELECT  FROM  ORDER BY id DESC";
			$rs=my_select($query);
			while($row=$rs->fetch(PDO::FETCH_BOTH)){
				
				echo '<tr>';
				echo '<td>'.$row[''].'</td>';
				echo '<td>'.$row[''].'</td>';

				?>

				<td>
					<a href="javascript:delpost('<?php echo $row[''];?>','<?php echo $row[''];?>')">Delete</a>
				</td>
				
				<?php 
				echo '</tr>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
	</table>

	<p><a href='add-post.php'>Add Post</a></p>

</div>

</body>
</html>
