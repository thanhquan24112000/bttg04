
<?php 
require 'ketnoi.php';
//TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'SELECT count(userid) as total from user');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];   
        // TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 2;
        // tổng số trang
        $total_page = ceil($total_records / $limit);
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
        // Tìm Start
        $start = ($current_page - 1) * $limit;
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $sql = "SELECT * from user LIMIT $start, $limit";
        $result = mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <body style =" background:#bfbbbb ">
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="#"><h3>Admin</h3></a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" href="http://localhost:81/BTTH04/php/logout.php" onclick = "return confirm('Are you sure want to delete?');"><h5>Logout</h5><span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="http://localhost:81/BTTH04/php/xem.php"><h5>Change Profile</h5></a>
                  </li>
              </ul>
          </div>      
      </nav>
      <div style =" background:#bfbbbb ;display: flex;flex-direction: column; align-items: center;">
  <div style = "margin-top : 3%;margin-bottom:3%"><H1>Danh sách User</H1></div>
  <div class = "xem" style ="width : 90vw">
      <table class="table" >
          <thead>
              <tr>
                  <th>USER ID</th> 
                  <th>Name</th>
                  <th>Email</th>
                  <th>Class</th>
                  <th>Address</th>
                  <th >City</th>
                  <th>Phone</th>
                  <th>User_level</th>
                  <th>State_country</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
          <?php if(mysqli_num_rows($result) > 0){
              while ($row = mysqli_fetch_assoc($result)){ ?>
              <tr>
                  <td scope="row"><?php echo $row['userid'] ?></td>
                  <td><?php echo $row['last_name'] ?></td>
                  <td style = "min-width:200px !important"><?php echo $row['email'] ?></td>
                  <td><?php echo $row['class'] ?></td>
                  <td><?php echo $row['address1'] ?></td>
                  <td><?php echo $row['city'] ?></td>
                  <td><?php echo $row['phone'] ?></td>
                  <td><?php echo $row['user_level'] ?></td>
                  <td><?php echo $row['state_country'] ?></td>
                  <td><div style = "display: flex; justify-content:space-between; width: 100px ;"><a href="xemtt.php?id=<?php echo $row['userid'] ?>"><i class="fas fa-eye"></i></a> <a href="sua.php?id=<?php echo $row['userid'] ?>"><i class="fas fa-wrench"></i></a> <a href="xoa.php?id=<?php echo $row['userid'];?>" onclick = "return confirm('Are you sure want to delete?');"><i class="fas fa-trash-alt"></i></a></div></td>
              </tr>
              <?php } 
            } ?>
          </tbody>
      </table>
      <div class="pagination">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="xem.php?page='.($current_page-1).'"><i class="fas fa-caret-left"></i></a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="xem.php?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="xem.php?page='.($current_page+1).'"><i class="fas fa-caret-right"></i></a> | ';
            }
           ?>
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
<?php ?>
