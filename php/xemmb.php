<?php session_start();?>
<?php
if(isset($_GET['action'])){
    $dir = '../upload/';
    if (isset($_POST['submit'])){
      $file_name = $_FILES['filename']['name'];
      $filename = $_FILES['filename']['tmp_name'];
      $de = $dir.$file_name;
      if ($de == "../upload/"){
      require 'ketnoi.php';
      $sqll ="UPDATE user set phone = '" . $_POST['phone'] . "',zocode_pcode = '" . $_POST['zocode_pcode'] . "',city = '" . $_POST['city'] . "',address2 = '" . $_POST['address2'] . "',first_name = '" . $_POST['first_name'] . "',last_name = '" . $_POST['last_name'] . "',registration_date = '" . $_POST['registration_date'] . "',class = '" . $_POST['class'] . "',address1 = '" . $_POST['address1'] . "',state_country = '" . $_POST['state_country'] . "' where userid = '". $_GET['action'] ."' ";
      $resultt = mysqli_query($conn,$sqll);
      header('Location:xemmb.php');
      }else{
      move_uploaded_file($filename,$de);
      require 'ketnoi.php';
      $sqll ="UPDATE user set avatar = '". $de ."',phone = '" . $_POST['phone'] . "',zocode_pcode = '" . $_POST['zocode_pcode'] . "',city = '" . $_POST['city'] . "',address2 = '" . $_POST['address2'] . "',first_name = '" . $_POST['first_name'] . "',last_name = '" . $_POST['last_name'] . "',registration_date = '" . $_POST['registration_date'] . "',class = '" . $_POST['class'] . "',address1 = '" . $_POST['address1'] . "',state_country = '" . $_POST['state_country'] . "' where userid = '". $_GET['action'] ."' ";
      $resultt = mysqli_query($conn,$sqll);
      header('Location:xemmb.php');
      }
    }
  }
  else{
?>
<?php
require 'ketnoi.php';
$sql = "SELECT * from user where email='". $_SESSION['email']."'";
$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
mysqli_close($conn);
if(!empty($row)){
?>

<!doctype html>
<html lang="en">
  <head>
    <title>thong tin chi tiet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/xemtt.css">
  </head>
  <body>
    <div class ='tt'>
    <div class='he'>
    <a href="member/index.php"><h3>Home</h3></a>
    </div>
    <div class = "avatar">
    <div>
    <?php if($row['avatar'] == null) { ?>
    <img src="../php/img/avatar.png" alt="">
    <?php }else {?>
    <img src="<?php echo $row['avatar']?>" alt="">
    <?php
    } ?></div>
      </div>
    <form action="xemmb.php?action=<?php echo $row["userid"] ?>" method = "post" enctype ="multipart/form-data">
    <input  style = "width:200px;margin-left:42%; margin-top : 0.5em;" type="file" name="filename"> <br>    
    <div class="container-fluid hi">
      <div class="row">
        <div class = "col-6 ha">
        <label><label class= "ho">User ID</label> : <input name ="userid" style ="background :#D3D3D3; border : 0px !important;" readonly type="text" value ="<?php echo $row['userid'];?>"> </label>
        <label><label class= "ho">First_Name</label> : <input name="first_name" style ="background :#D3D3D3; border : 0px !important;" type="text" value ="<?php echo $row['first_name'];?>"></label> 
        <label><label class= "ho">Last_Name</label> : <input name="last_name" style ="background :#D3D3D3; border : 0px !important;" type="text" value ="<?php echo $row['last_name'];?>"></label> 
        <label><label class= "ho">Registration_Date</label> : <input name= "registration_date" style ="background :#D3D3D3; border : 0px !important;" readonly type="text" value ="<?php echo $row['registration_date'];?>"></label> 
        <label><label class= "ho">Class</label> : <input name="class" style ="background :#D3D3D3; border : 0px !important;" type="text" value ="<?php echo $row['class'];?>"></label> 
        <label><label class= "ho">Address1</label> : <input name ="address1" style ="background :#D3D3D3; border : 0px !important;" type="text" value ="<?php echo $row['address1'];?>"></label>
        <label><label class= "ho">Paid</label> : <input name= "paid" style ="background :#D3D3D3; border : 0px !important;" readonly type="text" value ="<?php echo $row['paid'];?>"></label> 
        </div>
        <div class = "col-6 ha haha">
        <label><label class= "ho">Email</label> : <input name ="email" style ="background :#D3D3D3; border : 0px !important; width :500px;" type="text" value ="<?php echo $row['email'];?>"></label> 
        <label><label class= "ho">Address2</label> : <input name = "address2" style ="background :#D3D3D3; border : 0px !important;" type="text" value ="<?php echo $row['address2'];?>"></label> 
        <label><label class= "ho">City</label> : <input name= "city" style ="background :#D3D3D3; border : 0px !important;" type="text" value ="<?php echo $row['city'];?>"></label> 
        <label><label class= "ho">State_country</label> : <input name ="state_country" style ="background :#D3D3D3; border : 0px !important;" type="text" value ="<?php echo $row['state_country'];?>"></label> 
        <label><label class= "ho">Zocde_pcode</label> : <input name= "zocode_pcode" style ="background :#D3D3D3; border : 0px !important;" type="text" value ="<?php echo $row['zocode_pcode'];?>"></label> 
        <label><label class= "ho">Phone</label> : <input name= "phone" style ="background :#D3D3D3; border : 0px !important;" type="text" value ="<?php echo $row['phone'];?>"></label> 
        <input style ="background :red !important; width:4em;" type="submit" name="submit" value="Save">
        </div>
      </div>
      </div>
  </form>
    
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php } } ?>