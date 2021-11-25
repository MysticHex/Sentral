<?php
error_reporting(0);
$hasil = $_POST['ans'];
if ($hasil == "kiloan") {
  header('location: h2.php');
} elseif ($hasil == "satuan") {
  header('location: h3.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laundry</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    #Putih {
      background-color: white;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* Change the link color to #111 (black) on hover */
    li a:hover {
      background-color: #111;
    }
  </style>
</head>

<body>
  <div class="nav">
    <ul>
      <li id="Putih">Home</a></li>
      <li><a href="search.php">Tracking</a></li>
    </ul>
    <div style="margin-bottom: 20px;"></div>
  </div>
  <div>
    <h1 style="text-align: center;">Laundry</h1><br>

    <form style="text-align: center; font-size: 24px" action="" method="post">
      <input onclick='this.form.submit()' type="radio" name="ans" value="satuan" id="sat">
      <label for="sat">Satuan</label>

      <input style="margin-left: 150px" onclick='this.form.submit()' type="radio" style="margin-left: 50px" name="ans" value="kiloan" id="kil">
      <label for="kil">Kiloan</label><br>

      <input di type="reset" value="Reset">

      </table>
  </div>
  </form>
  <br><br><br>
  <div>

  </div>
</body>

</html>