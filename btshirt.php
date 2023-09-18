<?php include('session_user.php');?>
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
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/color.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<style type="text/css">
	input[type="file"].form-control
	{
	    box-shadow: none;
	    border-radius: 4px;
	    background: none;
	    height: 48px;
	    padding: 8px 15px;
	    width: 100%;
	}
	input[type="tel"].form-control
	{
	    box-shadow: none;
	    border-radius: 4px;
	    background: none;
	    height: 48px;
	    padding: 8px 15px;
	    width: 100%;
	}
	</style>
</head>
<body class="home" style="background-image: url('photos/IMG-20190326-WA0043.jpg'); background-size:100% 100%; background-repeat: no-repeat; ">
	<div id="wrapper">
		<?php include('header_user.php');?>
		<div id="main" class="haslayout padding-section" style="padding:0px;">
			<div class="container">
				<form class="login-form creataccount-form" action="" method="POST" enctype="multipart/form-data">
					<fieldset>
						<div class="border-left"><h2>Gents TSHIRT MEASURMENT</h2></div>
						<div class="row">
							<div class="form-group col-sm-6 col-xs-12">
								<label>Meterial Type</label>
								<select  name ="mtype" class="form-control" onchange="showContent(this.value)">
							        <option value="">Select Material type</option>
							        <?php 
							        include('connect.php');
							        $q=mysqli_query($con,"SELECT * from tbl_material ")or die(mysqli_query($con));
							        while($r=mysqli_fetch_array($q)){
							        	?>
							        	<option value="<?php echo $r['m_id'];?>"><?php echo $r['m_type'];?></option>
							        	<?php
							        }
							        ?>
     							</select>
     						</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Material Price:</label>
								<input type="text" class="form-control" name="mprice" placeholder="" id="mprice" readonly=""><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Quantity:</label>
								<input type="text" class="form-control" name="qty" placeholder="Quantity" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label> Material Colour:</label>
								<input type="color" class="form-control" name="colour" placeholder="" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Book Date:</label>
								<input type="date" class="form-control" name="bdate" placeholder="" value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Delivery Date:</label>
								<input type="date" class="form-control" name="ddate" placeholder="" min="<?php echo date('Y-m-d');?>"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Pocket:</label>
								<input type="radio" name="pocket" value="yes" >Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" name="pocket" value="no" >No<br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Sleeve Length:</label>
								<input type="text" class="form-control" name="slength" placeholder="Sleeve length in cm" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Sleeve Width:</label>
								<input type="text" class="form-control" name="swidth" placeholder="Sleeve width in cm" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Chest:</label>
								<input type="text" class="form-control" name="chest" placeholder="Chest in cm" required="" autocomplete="off"><br>
							</div>
							
							<div class="form-group col-sm-6 col-xs-12">
								<label>Waist:</label>
								<input type="text" class="form-control" name="waist" placeholder="waist in cm" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Hips:</label>
								<input type="text" class="form-control" name="hips" placeholder="Hips in cm" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Shoulder:</label>
								<input type="text" class="form-control" name="shoulder" placeholder="Shoulder in cm" required="" autocomplete="off"><br>
							</div>
								<div class="form-group col-sm-6 col-xs-12">
								<label>Length:</label>
								<input type="text" class="form-control" name="length" placeholder="Length in cm" required="" autocomplete="off"><br>
							</div>
							
							<div class="form-group col-sm-6 col-xs-12">
								<label>Comment:</label>
								<textarea name="cmt" rows="4" required="" autocomplete="off" placeholder="Comment"></textarea><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Image:</label>
								<input type="file" name="files[]" multiple="" class="form-control"><br>
							</div>
							
						</div>
						</div>
						<div class="form-group col-sm-6 col-xs-6 full-widthsx">
							<button type="submit" class="theme-btn btn-small" name="submit">Apply</button>
						</div>
				
				</fieldset>
			</form>
				</div>
		</div>
	</div>
<?php			
include('connect.php');
$user=$_SESSION['u_id'];
if(isset($_POST['submit']))
    {
        $targetDir = "photos/";
        $allowTypes = array('jpg','png','jpeg','gif');
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
        $Mtype=$_POST['mtype'];
        $Qty=$_POST['qty'];
        
        $Bookdate=$_POST['bdate'];
        $Deliverydate=$_POST['ddate'];
        $colour=$_POST['colour'];
        $pocket=$_POST['pocket'];
        $slength=$_POST['slength'];
        $swidth=$_POST['swidth'];
        $chest=$_POST['chest'];
        $waist=$_POST['waist'];
        $hips=$_POST['hips'];
        $shoulder=$_POST['shoulder'];
        $length=$_POST['length'];
        $cmt=$_POST['cmt'];
        $mprice=$_POST['mprice'];
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $insertValuesSQL .=$fileName.',';
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].',';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].',';
            }
        }
        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = mysqli_query($con,"INSERT INTO `tbl_bshirt`(`bs_id`, `m_id`, `qty`, `book_date`, `delivery_date`, `colour`, `pocket`, `SL`, `SW`, `chest`, `waist`, `hip`, `shoulder`, `length`, `comment`, `image`, `uid`,`materialprice`) VALUES  ('','$Mtype','$Qty','$Bookdate','$Deliverydate','$colour','$pocket','$slength','$swidth','$chest','$waist','$hips','$shoulder','$length','$cmt','$insertValuesSQL','$user','$mprice')") or die(mysqli_error($con));


            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
             $last_id=mysqli_insert_id($con);

              echo '<script> alert("Details are uploaded successfully.");window.location="view_bshirt.php?last_id='.$last_id.'";</script>';
            }
            else
            {
              echo '<script> alert("Sorry, there was an error uploading your details.");window.location="bshirt.php";</script>';
            }
            }
    
  }

?>
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>

<script>
        function showContent(a) {
            
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              var vals=this.responseText;
              var arr=vals.split("|");
             
              
              document.getElementById('mprice').value=arr[0];
             
            }
          }
          xmlhttp.open("GET","getcontent1.php?cid="+a,true);
          xmlhttp.send();
        }
        </script>
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
	<?php include('footer_user.php');?>

</html>