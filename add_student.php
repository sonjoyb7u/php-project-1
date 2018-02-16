<?php 

  // Add Student Information browser and database............................
  $message = "";

  if(isset($_POST['btn'])) {
    require_once 'process_file/student_function_process.php';
    $message = add_student();
  }
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add-Student</title>
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
            <li class="active"><a href="add_student.php">Add Student</a></li>
            <li><a href="manage_student.php">Manage Student</a></li>
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
        <div class="col-sm-offset-3 col-sm-6">
          <div class="well">
            <h2 class="text-center text-success">Add Student Form</h2>
            <hr/>
            <form class="form-horizontal" method="POST" action="">
              <div class="form-group">
                <label class="col-sm-3 control-label">Student Name</label>
                <div class="col-sm-9">
                  <input type="text" name="student_name" class="form-control" placeholder="Student Name">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Email Address</label>
                <div class="col-sm-9">
                  <input type="email" name="email_address" class="form-control" placeholder="Email_address">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Phone Number</label>
                <div class="col-sm-9">
                  <input type="number" name="phone_number" class="form-control" placeholder="Phone Number">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Address</label>
                <div class="col-sm-9">
                  <textarea name="address" class="form-control" placeholder="Present Address"></textarea>
                </div>
              </div>              
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" name="btn" class="btn btn-success btn-block">Save Student Info</button>
                </div>
              </div>

              <h3 class="text text-center text-success"><?php echo $message; ?></h3>

            </form>
          </div>
        </div>
      </div>
    </div>    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>