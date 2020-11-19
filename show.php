<html>
<head>
<title>˗ˏˋITF LABˎˊ˗</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  p.ex1 {
    margin-top: 25px;
  }
  </style>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'pimpimchanok119.mysql.database.azure.com', 'Pimchanok119@pimpimchanok119', 'PPNuro26', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN !: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>

<div class="container">
    <div class="form">
        <p class="ex1"><h1><center>꒰FORM =͟͟͞͞♡</center></h1></p>
    </div>
  <table width="600" border="1" class="table table-dark table-striped" class="center" class="ex1">
    <tr class="info">
      <th width="200"> <div align="center">Name</div></th>
      <th width="350"> <div align="center">Comment </div></th>
      <th width="50"> <div align="center">Action</div></th>
    </tr>
  <?php
  while($Result = mysqli_fetch_array($res))
  {
  ?>
    <tr>
      <td><center><?php echo $Result['Name'];?></center></td>
      <td><center><?php echo $Result['Comment'];?></center></td>
      <td><center><a href="form edit.html"><input type="submit" value="EDIT" class="btn btn-warning"></a>&nbsp;&nbsp;<a href="form delete.html"><input type="submit" value="DELETE"  class="btn btn-danger"></a></center></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <center><a href="form insert.html"><input type="submit" value="INSERT" class="btn btn-info"></a></center>
  <?php
  mysqli_close($conn);
  ?>
</div>
</body>
</html>
