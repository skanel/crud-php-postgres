<?php
locked();
include_once('models/users.php');

//show users list
if ( !isset($_GET['edit']) && !isset($_GET['del'])&& !isset($_GET['add']) ){
	$countPerPage = 3;
	$totalResultCount  = count_users($conn);

	// The ceil function will round floats up.
	$numberOfPages = ceil($totalResultCount / $countPerPage);

	// Check if we have a page number in the _GET parameters
	if(!empty($_GET) && isset($_GET['page'])){
	    $page = (int)$_GET['page'];
	}else{
	    $page = 1;
	}

	// Check that the page is within our bounds
	if($page < 0){
	    $page = 1;
	}elseif($page > $numberOfPages){
	    $page = $numberOfPages;
	}

	$users = get_users_paging($conn,$page,$countPerPage);
	include('views/list_users.php');
} 
//deleted action
elseif (isset($_GET['del'])){
	$where = array("id" => $_GET['del']);
	del_user($conn,$where);	
	header("Location: index.php?controller=users"); 
	exit();
}

//edit action
elseif (isset($_GET['edit']) && is_numeric($_GET['edit'])){
	//if form is submitted.
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$where_condition = array("id" => $_GET['edit']);		
    		$msg = "";
		$class_stat = 'class="alert alert-info"';
		if(trim($_POST['password']) != trim($_POST['confirm_password'])){
			$msg = "Your password does not match your confirmed password.";
			$class_stat = 'class="alert alert-warning"';
		}else{
			$_POST['password'] = md5($_POST['password']);
			unset($_POST['confirm_password']);
			$data = $_POST;		
			$is_updated = update_user($conn,$data,$where_condition);
			if($is_updated){
				$msg = "Data is updated.";
				$class_stat = 'class="alert alert-info"';
			}else{
				$msg = "Error input.";
				$class_stat = 'class="alert alert-warning"';
			}
		}
		
	}
	// get user record informaation.
	$user = get_user($conn,$_GET['edit']);
	include('views/edit_user.php');
	
}
elseif(isset($_GET['add'])){
	//if form is submitted.
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
    		$msg = "";
		$class_stat = 'class="alert alert-info"';
		if(trim($_POST['password']) != trim($_POST['confirm_password'])){
			$msg = "Your password does not match your confirmed password.";
			$class_stat = 'class="alert alert-warning"';
		}else{
			$_POST['password'] = md5($_POST['password']);
			unset($_POST['confirm_password']);
			$data[] = $_POST;
			//print_r($data);exit;		
			$is_inserted = insert_user($conn,$data);
			if($is_inserted){
				$msg = "Data is inserted.";
				$class_stat = 'class="alert alert-info"';
			}else{
				$msg = "Error input.";
				$class_stat = 'class="alert alert-warning"';
			}
		}
		
	        //redirect to user list
		//header("Location: index.php?controller=users"); 
		//exit();
		
	}

	include('views/add_user.php');

}

?>
