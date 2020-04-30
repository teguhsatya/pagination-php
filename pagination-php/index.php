<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination DB</title>
</head>
<body>
<!-- 
    Teguh Satya
    1708561019
    kelas A
-->
<table border="1">
  <tr>
    <th>firstname</th>
    <th>lastname</th>  

  </tr>
  <?php 
  $halaman = 10;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($conn,"SELECT * FROM data_sample");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($conn,"select * from data_sample LIMIT $mulai, $halaman");
  $no =$mulai+1;
 
 
  while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>               
      <td><?php echo $data['first_name']; ?></td>
      <td><?php echo $data['last_name']; ?></td>              
                  
    </tr>
 
    <?php               
  } 
  ?>
  
</table>     
<div class="">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 
  <?php } ?>
 
</div>     

    
</body>
</html>