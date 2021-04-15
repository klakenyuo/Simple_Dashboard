<!-- header  -->

<?php 
$title = "User List" ;
include('database.php');
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
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">User List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" >
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 100px">Mail</th>
                      <th style="width: 40px">Edit</th>
                      <th style="width: 40px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                        $sql = "SELECT * FROM user";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {?>
                    <tr>
                      <td><?php echo $row["id"]?></td>
                      <td><?php echo $row["mail"]?></td>
                      <td><a href="show.php?id=<?php print($row["id"])?>"><button type="button"  class="btn btn-block btn-info">Edit</button></a> </td>
                      <td><a href="delete.php?id=<?php print($row["id"])?>"><button type="button" class="btn btn-block btn-danger">Delete</button></a></td>
                    </tr>
                    <?php
                        }
                        } else {?>
                        <tr > 
                        <td colspan="4"style="font-weight:bolder;" ><center>Aucun utilisateur</center> </td>
                        </tr>
                        <?php
                        }
                        $conn->close();
                    ?>
                   
                  </tbody>
                </table>
              </div>
             
            </div>
        </div>





       
<?php include('footer.php'); ?>