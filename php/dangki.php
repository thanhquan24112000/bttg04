<?php require 'Home.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <title>dang ki</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
  input{
      margin-bottom:4px;
      width:100%;
  }
  </style>
  <body>
  <div>
      <!-- Modal -->
      <form action="dangki1.php" method="post" >
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Sign-Up</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          </button>
                  </div>
                  <div class="modal-body">
                      
                      <input type="text" placeholder="Email" name ="email" style = "padding :5px"><br>
                      <input type="password" placeholder="password" name="pass" ><br>
                      <input type="text" placeholder="First_Name" name ="name1" ><br>
                      <input type="text" placeholder="Last_Name" name ="name2" ><br>
                      <input type="date" placeholder="Registration_Date" name ="date" ><br>
                      <input type="text" placeholder="Class" name ="class" ><br>
                      <input type="text" placeholder="Address1" name ="address1" ><br>
                      <input type="text" placeholder="Address2" name ="address2" ><br>
                      <input type="text" placeholder="City" name ="city" ><br>
                      <input type="text" placeholder="State_Country" name ="state" ><br>
                      <input type="text" placeholder="Zocode_pcode" name ="zocode" ><br>
                      <input type="text" placeholder="Phone" name ="phone" ><br>
                      <input type="text" placeholder="Paid" name ="paid" ><br>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </div>
          </div>
          </div>
        </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>