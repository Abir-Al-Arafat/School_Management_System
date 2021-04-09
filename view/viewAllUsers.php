<?php include "../model/db_connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1px solid black" width='100%' align="center">
  <tr align="left">
    <th>Id</th>
    <th>Fullname</th>
    <th>E-mail</th>
    <th>Phone</th>
    <th>Date of birth</th>
    <th>Username</th>
    <th>Password</th>
    <th>Registration date</th>
    <th>User Type</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
  $view_qry="select * from admin";
  $res=mysqli_query($link,$view_qry);
  while($row=mysqli_fetch_array($res))
  {
      echo "<tr>";
      echo "<td>"; echo $row["id"]; echo "</td>";
      echo "<td>"; echo $row["fullname"]; echo "</td>";
      echo "<td>"; echo $row["email"]; echo "</td>";
      echo "<td>"; echo $row["phone"]; echo "</td>";
      echo "<td>"; echo $row["dateOfBirth"]; echo "</td>";
      echo "<td>"; echo $row["username"]; echo "</td>";
      echo "<td>"; echo $row["password"]; echo "</td>";
      echo "<td>"; echo $row["regdate"]; echo "</td>";
      echo "<td>"; echo $row["type"]; echo "</td>";
      echo "<td>"; ?> <a href="editAdmin.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
      echo "<td>"; ?> <a href="../controller/deleteAdmin.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
      echo "</tr>";
  }
  ?>
  
</table>
</body>
</html>