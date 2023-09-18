<?php include('session.php');?>
<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>STITCHES AND THREADS</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css">
  <link rel="stylesheet" href="css/jcf.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" type="text/css" href="css/flaticon.css">
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="css/transitions.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/color.css">
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <style type="text/css">
    
  </style>
</head>
<body class="home" style="background-image: url('../photos/IMG-20190326-WA0043.jpg'); background-size:100% 100%; background-repeat: no-repeat; ">
  <div id="wrapper">
    <?php include('header.php');?>
    <div id="main" class=" haslayout padding-section" style="padding:0px;">
      <div class="container">
        <form  action="" method="POST">
          <fieldset class="row">
          <div class="col-md-3"></div>
            <div class=" col-md-8 col-sm-8 col-xs-6 col-offset-sm-2 col-md-offset-2 reg-customers">
              <div class="border-left">
                <h2>VIEW Work....</h2>
              </div>
              <table class="table table-bordered" id="example">
              <thead>
                <tr>
                <th>Sl.No</th>
                <th>user</th>
                <th>Work Type</th>
                <th>Status</th>
                <th>action</th>

                </tr>
              </thead>
              <tbody>
          <?php
                        include('connect.php');
            $i=1;
            $query=mysqli_query($con,"SELECT tbl_assign.type,status,id,tbl_staff.staff_id,tbl_staff.staff_name,tbl_user.full_name,tbl_user.contact,tbl_assign.assign_id FROM `tbl_assign`,tbl_staff,tbl_user where tbl_staff.staff_id=tbl_assign.staff_id and tbl_staff.staff_id='$staff_id' and tbl_assign.uid=tbl_user.uid  ") or die(mysqli_error($con));
            while ($row=mysqli_fetch_array($query)) {
              $type=$row['type'];
              $id=$row['id'];
              ?>
              <tr>
                <td><?php echo $i++;?></td>
               <?php 
               if($type=='blouse'){
                 $q=mysqli_query($con,"SELECT * FROM tbl_blouse where b_id='$id'");
                 $r=mysqli_fetch_array($q);
                 ?>
                 <td><?php echo $row['full_name'];?></td>
                 <td><?php echo $type;?></td>
                 <td><?php echo $row['status'];?></td>



                 <td>  <a href="update.php?sid=<?php echo $row['assign_id']; ?>&cid=<?php echo $row['id']; ?>" class="btn btn-warning" title="complete">Update</a></td>


                 <?php
               }elseif($type=='pant'){
                 $q=mysqli_query($con,"SELECT * FROM tbl_pant where p_id='$id'");
                 $r=mysqli_fetch_array($q);


                 ?>
                 <td><?php echo $row['full_name'];?></td> 
                 <td><?php echo $type;?></td>
                 <td><?php echo $row['status'];?></td>



                 <td>  <a href="update.php?sid=<?php echo $row['assign_id']; ?>&cid=<?php echo $row['id']; ?>" class="btn btn-warning" title="complete">Update</a></td>


                 <?php
               }elseif($type=='frock'){
                 $q=mysqli_query($con,"SELECT * FROM tbl_frock where f_id='$id'");
                 $r=mysqli_fetch_array($q);


                 ?>
                 <td><?php echo $row['full_name'];?></td> 
                 <td><?php echo $type;?></td>
                 <td><?php echo $row['status'];?></td>



                 <td>  <a href="update.php?sid=<?php echo $row['assign_id']; ?>&cid=<?php echo $row['id']; ?>" class="btn btn-warning" title="complete">Update</a></td>



                 <?php
               }elseif($type=='gown'){
                 $q=mysqli_query($con,"SELECT * FROM tbl_gown where g_id='$id'");
                 $r=mysqli_fetch_array($q);


                 ?>
                 <td><?php echo $row['full_name'];?></td> 
                 <td><?php echo $type;?></td>
                 <td><?php echo $row['status'];?></td>


                 <td>  <a href="update.php?sid=<?php echo $id; ?>&cid=<?php echo $row['id']; ?>" class="btn btn-warning" title="complete">Update</a></td>


                 <?php
               }elseif($type=='top'){
                 $q=mysqli_query($con,"SELECT * FROM tbl_top where t_id='$id'");
                 $r=mysqli_fetch_array($q);


                 ?>
                 <td><?php echo $row['full_name'];?></td> 
                 <td><?php echo $type;?></td>
                 <td><?php echo $row['status'];?></td>


                 <td>  <a href="update.php?sid=<?php echo $row['assign_id']; ?>&cid=<?php echo $row['id']; ?>" class="btn btn-warning" title="complete">Update</a></td>


                 <?php
               }elseif($type=='boys t-shirt'){
                 $q=mysqli_query($con,"SELECT * FROM tbl_bshirt where bs_id='$id'");
                 $r=mysqli_fetch_array($q);


                 ?>
                 <td><?php echo $row['full_name'];?></td> 
                 <td><?php echo $type;?></td>
                 <td><?php echo $row['status'];?></td>


                 <td>  <a href="update.php?sid=<?php echo $row['assign_id']; ?>&cid=<?php echo $row['id']; ?>" class="btn btn-warning" title="complete">Update</a></td>



                 <?php
               }elseif($type=='girls t-shirt'){
                 $q=mysqli_query($con,"SELECT * FROM tbl_gshirt where gs_id='$id'");
                 $r=mysqli_fetch_array($q);


                 ?>
                 <td><?php echo $row['full_name'];?></td> 
                 <td><?php echo $type;?></td>
                 <td><?php echo $row['status'];?></td>


                 <td>  <a href="update.php?sid=<?php echo $row['assign_id']; ?>&cid=<?php echo $row['id']; ?>" class="btn btn-warning" title="complete">Update</a></td>

                 <?php }  ?>
               </tr>

               <?php  }?>
             </tbody>
           </table>
    
              
            </div>
            <div class="col-md-3"></div>
          </fieldset>
        </form>
        </div>
    </div>
    </div>

  
   <?php include('footer.php');?>

  <script src="js/vendor/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#example').DataTable();
    });
  </script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/parallax.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/custom-form/jcf.js"></script>
  <script src="js/custom-form/jcf.checkbox.js"></script>
  <script src="js/custom-form/jcf.select.js"></script>
  <script src="js/custom-form/jcf.radio.js"></script>
  <script src="js/custom-form/jcf.file.js"></script>
  <script src="js/appear.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="js/gmap3.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>