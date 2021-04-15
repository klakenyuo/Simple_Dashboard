<!-- header  -->
<?php 
$title = "Add a New User" ;
include('header.php'); ?>

<!-- sidebar  -->
<?php include('sidebar.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main Code-->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-3">
               <!-- margin left-->
        </div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                    <h3 class="card-title">New User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="traitement.php" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="pass_word" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <center><button type="submit" name="confirm" class="btn btn-primary">Add</button></center>
                </div>
              </form>
            </div>
        </div>





       
<?php include('footer.php'); ?>