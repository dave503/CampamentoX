<?php
		require_once 'dbcon.php';
		
		$username = $_POST['usuario'];
		$password = md5( $_POST['contra']);//$_POST['contra'];
		/* student */
		$query = "SELECT * FROM participantes WHERE usuario='$username' AND contra='$password'";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_array($result);
		$num_row = mysqli_num_rows($result);

		
		
		if( $num_row > 0 ) { 
		session_start();
		$_SESSION['id']=$row['id_part'];
		$status =$row['tipo'];
		if($status==1){
			header("Location: home.php");
		}
		else{ 
			header("Location: perfil.php");
		}
	}	else{
		echo   "<script '>
            alert('Credenciales incorrectas!');
			window.location.href='index.php'
        </script>";
	}
		?>