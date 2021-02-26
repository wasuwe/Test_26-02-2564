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

  <center>
    <div class="row">
        <div class="col">
            <a href="revenue.php" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">บันทึกรายรับ</a>
        </div>
        <div class="col">
        <a href="expenditure.php" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">บันทึกรายจ่าย</a>
        </div>        
    </div>
    <br>
  <table class="table">
    <thead>
      <tr>
        <th>รายการ</th>
        <th>จำนวนเงิน</th>
        <th>วันที่ได้รับ/ใช้จ่าย</th>
        <th>วันที่บันทึก</th>
        <th>วันที่แก้ไขล่าสุด</th>
        <th>#</th>

      </tr>
    </thead>
    <tbody>

      <tr>
              
    <?php
    include 'connect.php';

    $sql = "SELECT * FROM record";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      
      while($row = $result->fetch_assoc()) {
    ?>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["money"]; ?></td>
    <td><?php echo $row["payday"]; ?></td>
    <td><?php echo $row["recordday"]; ?></td>
    <td><?php echo $row["editday"]; ?></td>
    <td> 
   <form action="editform.php" method="get">
        <input type="hidden" value="<?php echo $row["id"]; ?>"  name="id" >
    <button>แก้ไข</button>
    <button>ลบ</button>
    </form>
    </td>

        
    <?php
      }
    } else {
      echo "0 results";
    }
      
    ?>
</tr>
</tbody>
  </table>
  

    

  </center>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>