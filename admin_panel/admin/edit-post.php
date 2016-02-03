<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Edit Post</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>
</head>
<body>

<div id="wrapper">

	<?php include('menu.php');?>
	<p><a href="./">Blog Admin Index</a></p>

	<h2>Edit Post</h2>


	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation


		if($head ==''){
			$error[] = 'Please enter the title.';
		}
				
		if($description ==''){
			$error[] = 'Please enter the name of organisers.';
		}

		
		if(!isset($error)){

			try {
				 
				//insert into database
				$query="UPDATE nri SET head ='".$head."', description ='".$description."' WHERE id ='".$id."' " ;
			    $n=my_iud($query);
				//redirect to index page
				if($n==1)
				header('Location: index.php?action=updated');
				exit;

			} catch(Exception $e) {
			    echo $e->getMessage();
			}

		}

	}

	?>


	<?php
	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo $error.'<br />';
		}
	}

		try {
		    $pid=$_GET['id'];
            $query="SELECT id,head,description FROM nri WHERE id = '".$id."'";
			$rs=my_select($query);
			$row = $rs->fetch(PDO::FETCH_BOTH); 

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

	?>

	<form action='' method='post'>
		<input type='hidden' name='id' id='id' >

		<p><label>Title</label><br /></p>
		<input type='text' name='head'  id='head'  >

		<p><label>Description</label><br />
		<textarea name='description' id='description' cols='60' rows='10'></textarea>
		</p>

		

		<p><input type='submit' name='submit' id='submit' value='Update'></p>

	</form>

</div>

</body>
</html>	
