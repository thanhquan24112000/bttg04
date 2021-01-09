<?php
require "ketnoi.php";
if(isset($_GET['action'])&& $_GET['action']='luu'){
 if(isset($_POST['UserID']) && isset($_POST['Email']) && isset($_POST['User_level']) && isset($_POST['State_Country']) && isset($_POST['Paid']) && isset($_POST['Status'])){
    $sqli = "UPDATE user SET email='" . $_POST['Email'] . "',user_level='" . $_POST['User_level'] . "',state_country='" . $_POST['State_Country'] . "',paid='" . $_POST['Paid'] . "',status='" . $_POST['Status'] . "' WHERE userid = " . $_POST['UserID'] . " ";
    $resulti = mysqli_query($conn,$sqli);
    mysqli_close($conn);
    echo "Update thành công!";
    require "xem.php";
 }
 else{
require "ketnoi.php";
$sql = "SELECT * from user";
$result= mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
mysqli_close($conn);
if(!empty($row)){
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div>
  <div class="haha"><h1>Update</h1></div>
  <div style= "border: 2em !important">Nhập đầy đủ thông tin<form autocomplete ="off" method = "POST" action = "sua.php?action=luu" style="border :2px !important">
  <div class="form-group">
    <label for="exampleInputEmail1">User ID</label>
    <input readonly value = "<?php echo $row['userid'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name= "UserID" placeholder="User ID">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input value = "<?php echo $row['email']  ?>"  type="text" class="form-control" id="exampleInputPassword1" name = "Email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">User_level</label>
    <input value = "<?php echo $row['user_level']  ?>"  type="text" class="form-control" id="exampleInputPassword1" name = "User_level" placeholder="User_level">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">State_country</label>
    <input value = "<?php echo $row['state_country']  ?>"  type="text" class="form-control" id="exampleInputPassword1" name="State_Country" placeholder="State_Country">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Paid</label>
    <input value = "<?php echo $row['paid']  ?>"  type="text" class="form-control" id="exampleInputPassword1" name="Paid" placeholder="Paid">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status</label>
    <input value = "<?php echo $row['status']  ?>"  type="text" class="form-control" id="exampleInputPassword1" name="Status" placeholder="Status">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form></div></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
 }
}
}
else{
require "ketnoi.php";
$sql = "SELECT * from user where userid = '" . $_GET['id'] . "'";
$result= mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
mysqli_close($conn);
if(!empty($row)){
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div>
  <div class="haha"><h1>Update</h1></div>
  <div style= "border: 2em !important"><form autocomplete ="off" method = "POST" action = "sua.php?action=luu" style="border :2px !important">
  <div class="form-group">
    <label for="exampleInputEmail1">User ID</label>
    <input readonly value = "<?php echo $row['userid'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "UserID" placeholder="User ID">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input value = "<?php echo $row['email']  ?>"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name ="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">User_level</label>
    <input value = "<?php echo $row['user_level']  ?>"  type="text" class="form-control" id="exampleInputPassword1" placeholder="User_level" name= "User_level">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">State_country</label>
    <input value = "<?php echo $row['state_country']  ?>"  type="text" class="form-control" id="exampleInputPassword1" placeholder="State_Country" name = "State_Country">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Paid</label>
    <input value = "<?php echo $row['paid']  ?>"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Paid" name = "Paid">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status</label>
    <input value = "<?php echo $row['status']  ?>"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Status" name = "Status">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form></div></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php } }?>