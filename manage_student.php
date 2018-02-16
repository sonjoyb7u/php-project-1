<?php 
    require_once 'process_file/student_function_process.php';

    //Indivisual  Data information delete from browser and also database............
    $message = '';


    if(isset($_GET['status'])) {
      require_once 'process_file/student_function_process.php';
      $message = delete_student_info();
    }

    //All Data information show into Browser from Database.....................
    $result = select_all_student_info();  

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Manage-Student</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Deshboard</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="add_student.php">Add Student</a></li>
            <li class="active"><a href="manage_student.php">Manage Student</a></li>
            <li><a href="add_block.php">Add Blog</a></li>
            <li><a href="manage_blog.php">Manage Blog</a></li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Start Form.................. -->
    <div class="container">
      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <div class="well">
            <h3 class="text-center text-success">All Student Information</h3>
            <hr/>
              <h3 class="text text-center text-success"><?php echo $message; ?></h3>               
              <table class="table table-bordered">
                <thead>
                  <tr class="text-center">
                    <th>Student Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Present Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php while ($student_info = mysqli_fetch_assoc($result)) { ?>
                <tbody>
                  <tr>
                    <td><?= $student_info['student_name']; ?></td>
                    <td><?= $student_info['email_address']; ?></td>
                    <td><?= $student_info['phone_number']; ?></td>
                    <td><?= $student_info['address'] ?></td>
                    <td><a href="process_file/edit_process.php?student_id=<?= $student_info['student_id'];?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a> | <a href="?status=delete&student_id=<?= $student_info['student_id'];?>" class="btn btn-danger"><span  class="glyphicon glyphicon-trash"></span></a></td>
                  </tr>
                </tbody>
                <?php } ?>
              </table>         
          </div>
        </div>
      </div>
    </div>    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>