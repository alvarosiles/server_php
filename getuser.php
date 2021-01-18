<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    td,
    th {
      border: 1px solid black;
      padding: 5px;
    }

    th {
      text-align: left;
    }
  </style>
</head>

<body>

  <?php
  $q = intval($_GET['q']);

  $con = mysqli_connect('localhost', 'root', '1234567', 'php');
  if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
  }

  mysqli_select_db($con, "ajax_demo");
  $sql = "SELECT * FROM user WHERE tipo = '" . $q . "'";
  $result = mysqli_query($con, $sql);

  echo "<table>
<tr>
<th>ID</th>
<th>USER NAME</th>
<th>PASSWORD</th>
<th>TIPO</th>
 
</tr>";
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Id'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['tipo'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($con);
  ?>
</body>

</html>