<?php
		require_once 'dbcon.php';
		
		$username = $_POST['usuario'];
		$password = $_POST['contra'];
		/* student */
		$query = "SELECT * FROM participantes WHERE usuario='$username' AND contra='$password'";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_array($result);
		$num_row = mysqli_num_rows($result);

		$status =$row['tipo'];
		
		if( $num_row > 0 ) { 
		session_start();
		$_SESSION['id']=$row['id_part'];
		
		if($status==1){
			header("Location: home.php");
		}else
		if($status==2){
			header("Location: perfil.php");	
		}
		else{ 
			header("Location: perfil.php");
		}
	}	else{
		echo "No seas metido!!!";
	}
		?>