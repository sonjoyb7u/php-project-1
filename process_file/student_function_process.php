<?php 

	function db_connection() {
		$host_name = 'localhost';
		$user_name = 'root';
		$password  = '';
		$db_name   = 'db_php_stdnt_info';

		$conn = mysqli_connect($host_name, $user_name, $password, $db_name);
		if(!$conn) {
			die("Connection Fail :" . mysqli_error($conn));
		}
		return $conn;
	}




	function query_execution($query) {
		if(!mysqli_query(db_connection(), $query)) {
		  die("SQL Query Problem :" . mysqli_error( db_connection() ) );
		}
	}



	// Add Student from input form and save it to database and manage student info to show........
	function add_student() {
		$query = "INSERT INTO tbl_student (student_name, email_address, phone_number, address) VALUES ('$_POST[student_name]', '$_POST[email_address]', '$_POST[phone_number]', '$_POST[address]')";

		query_execution($query);
		$message = "Student Information Save Successfully Done.";
		return $message;
	}





	//All Data information show into Browser from Database.....................
	function select_all_student_info() {
		$conn = db_connection();         
		$query = "SELECT * FROM tbl_student ORDER BY student_id DESC";

		if(mysqli_query($conn, $query)) {
		  $result = mysqli_query($conn, $query);
		  return $result;
		}
		else {
		  die("Sql Query problem :" . mysqli_error($conn));
		}
	}


	//Indivisual Student info display in browser inside form input value............
	function select_student_info_by_id() {
		$conn = db_connection();
		global $student_id;
		$query = "SELECT * FROM tbl_student WHERE student_id = '$student_id'";

		  if(mysqli_query($conn, $query)) {
		    $result = mysqli_query($conn, $query);
		    $student_info = mysqli_fetch_assoc($result);
		    return $student_info;
		  }
		  else {
		    die("SQL Query Problem :" . mysqli_error($conn));
		  }
	}



	// Update Indivisual selected student info to database and manage student in browser....... 
    function update_student_info() {
        $conn = db_connection();
        global $student_id;
        $query = "UPDATE tbl_student SET student_name = '$_POST[student_name]', email_address = '$_POST[email_address]', phone_number = '$_POST[phone_number]', address = '$_POST[address]' WHERE student_id = '$student_id'";

        if(mysqli_query($conn, $query)) { 
          header('Location: ../manage_student.php');
          // $message = "Student Information Updated Successfully Done.";
        }
        else {
          die("SQL Query Problem :" . mysqli_error($conn));
        }        
    }	



	//Indivisual  Data information delete from browser and also database............
	function delete_student_info() {
	  $student_id = $_GET['student_id'];
	  $query = "DELETE FROM tbl_student WHERE student_id = '$student_id'";

	  query_execution($query);
	  $message = "Student Information Deleted Successfully Done.";
	  return $message;    
	}       	

















 ?>