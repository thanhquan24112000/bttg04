
<?php
if(isset($_GET['action'])){
    $dir = '../upload/';
    if (isset($_POST['submit'])){
      $file_name = $_FILES['filename']['name'];
      $filename = $_FILES['filename']['tmp_name'];
      $de = $dir.$file_name;
      move_uploaded_file($filename,$de);
      require 'ketnoi.php';
      $sqll ="UPDATE user set avatar = '". $de ."' where userid = '". $_GET['action'] ."' ";
      $resultt = mysqli_query($conn,$sqll);
      header('location:xem.php');
    }
  }
  else{
?>
<?php
require 'ketnoi.php';
$sql = "SELECT * from user where userid='". $_GET['id']."'";
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
    <div class = "avatar">
    <div>
    <?php if($row['avatar'] == null) { ?>
    <img src="../php/img/avatar.png" alt="">
    <?php }else {?>
    <img src="<?php echo $row['avatar']?>" alt="">
    <?php
    } ?></div>
    <div>
    <form action="xemtt.php?action=<?php echo $row["userid"] ?>" method = "post" enctype ="multipart/form-data">
    <input type="file" name="filename"> <br>
    <input type="submit" name="submit" value="upload avatar">
    </form>
</div>
    </div>
    <div class="container-fluid hi">
      <div class="row">
        <div class = "col-6 ha">
        <label>User ID : <label><?php echo $row['userid'];?></label> </label> 
        <label>First_Name : <label><?php echo $row['first_name'];?></label></label> 
        <label>Last_Name : <label><?php echo $row['last_name'];?></label></label> 
        <label>Email : <label><?php echo $row['email'];?></label></label> 
        <label>Registration_Date : <label><?php echo $row['registration_date'];?></label></label> 
        <label>user_level : <label><?php echo $row['user_level'];?></label></label> 
        <label>Class : <label><?php echo $row['class'];?></label></label> 
        <label>Address1 :  <label><?php echo $row['address1'];?></label></label>
        </div>
        <div class = "col-6 ha">
        <label>Address2 : <label><?php echo $row['address2'];?></label></label> 
        <label>City : <label><?php echo $row['city'];?></label></label> 
        <label>State_country : <label><?php echo $row['state_country'];?></label></label> 
        <label>Zocde_pcode : <label><?php echo $row['zocode_pcode'];?></label></label> 
        <label>Phone : <label><?php echo $row['phone'];?></label> </label> 
        <label>Paid : <label><?php echo $row['paid'];?></label></label>  
        <label>Status : <label><?php echo $row['status'];?></label></label> 
        <label>Activation_code : <label><?php echo $row['activation_code'];?></label></label> 
        </div>
      </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php } } ?>