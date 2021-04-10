	<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header("location:index.php");
	}
	$user=$_SESSION["user"];
	$user_id=$_SESSION["user_id"];
	

	$MySQLdb = new PDO("mysql:host=127.0.0.1;dbname=blog", "root", "");
	$MySQLdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$action=$_POST["action"];
	
	if(isset($_POST["data"])){
		$data=$_POST["data"];
	}
	header("Content-Type: application/json");
	switch($action){
		//new post for chat
		case "new_post":
			$cursor = $MySQLdb->prepare("INSERT INTO posts (user_id,post_data, username) value (:id,:data,:username)");
			$cursor->execute(array(":id"=>$user_id,":data"=>$data,":username"=>$user));
			echo '{"success":"true"}';
			break;
		//new comment for blog popular posts box	
		case "new_comment":
			$cursor = $MySQLdb->prepare("INSERT INTO comments (user_id,post_data, username) value (:id,:data,:username)");
			$cursor->execute(array(":id"=>$user_id,":data"=>$data,":username"=>$user));
			echo '{"success":"true"}';
			break;
			
		//print chat history by row	
		case "get_all_post":
			$cursor = $MySQLdb->prepare("SELECT * FROM posts");
			$cursor->execute();
			$retval="";
			foreach($cursor->fetchAll() as $row){
				if($row["user_id"] == $user_id){
					$retval= $retval ."<div class='media'><div class='media-body text-right'><h4 class='media-heading'>".$user."</h4><p>".$row['post_data']."</p></div><div class='media-right'><img src='images/pro1.png' class='media-object' style='width:60px'></div></div>";					
				}else{
					$retval=$retval . "<div class='media'> <div class='media-left'> <img src='images/pro2.png' class='media-object' style='width:60px'></div><div class='media-body'><h4 class='media-heading'>".$row['username']."</h4><p>".$row['post_data']."</p></div></div>";
				}
			}
			echo '{"success":"true","data":"'.$retval.'"}';
			die();
			break;
		//print 4 first posts in blog popular posts box		
		case "get_all_comments":
			$cursor = $MySQLdb->prepare("SELECT * FROM comments");
			$cursor->execute();
			$retval="";
			$counter=0;
			foreach($cursor->fetchAll() as $row){
		    //limit the popular posts to the first 4 posts are posted.
			if($counter < 4){
			$retval=$retval . "<div class='media'> <div class='media-left'> <img src='images/5.png' class='media-object' style='width:60px'></div><div class='media-body'><h4 class='media-heading'>".$row['username']."</h4><p>".$row['post_data']."</p></div></div>";
			}
			$counter++;
			}
			echo '{"success":"true","data":"'.$retval.'"}';
			die();
			break;
		//logout
		case "logout":
			session_destroy();
			echo '{"success":"true"}';
			break;
			
		default:
			echo '{"success":"false"}';
			die();
		
	}
	?>
   