<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);
error_reporting(E_ALL);
?>

<?php
$servername = "localhost:3307";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'reg');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking</title>
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
            <li><a href="h1.php">Home</a></li>
            <li id="Putih">Tracking</li>
        </ul>
        <div style="margin-bottom: 20px;"></div>
    </div>
    <div>
        <form action="" method="post">
            <select name="kilsat" id="">
                <option value="Kiloan">Kiloan</option>
                <option value="Satuan">Satuan</option>
            </select>
            <br>
            <label for="">Nama</label><br>
            <input type="text" name="nama" id=""><br>
            <input type="submit" value="Submit">
            <br>
            <input type="reset" value="Reset">
        </form>
    </div>
    <div>
        <?php
        error_reporting(0);
        $opt = $_POST['kilsat'];

        
        $nm = $_POST['nama'];
        if ($opt == "Kiloan") {
            if ($resultCheck > 0) {
                $s = "SELECT * FROM pesanan_kilo WHERE nama='$nm';";
                $sel = mysqli_query($conn, $s);
                $resultCheck = mysqli_num_rows($sel);
                // echo
                // "
                // <table border='1'>
                //     <tr>
                //         <td>Nama</td>
                //         <td>Berat (Kg)</td>
                //         <td>Tanggal Masuk</td>
                //         <td>Tanggal Keluar</td>
                //         <td>Status</td>
                //     </tr>
                //     <tr>
                //         <td>"echo $row[`nama`];"</td>
                //         <td>";echo $row[`Kilopesanan`];"</td>
                //         <td>";echo $row[`tanggal_masuk`];"</td>
                //         <td>";echo $row[`tanggal_keluar`];"</td>
                //         <td>";echo $row[`Status`];"</td>
                //     </tr>
                // </table>
                // "
                // ;
                echo "<table border='1' style='text-align: center;'>
    
                        <tr>
    
                        <th>Nama</th>
    
                        <th>Berat(Kg)</th>
    
                        <th>Tanggal masuk</th>
    
                        <th>Tanggal ambil</th>
                        
                        <th>Status</th>
    
                        </tr>";
                while ($row = mysqli_fetch_assoc($sel)) {

                    echo "<tr>";

                    echo "<td>" . $row['nama'] . "</td>";

                    echo "<td>" . $row['Kilopesanan'] . "</td>";

                    echo "<td>" . $row['tanggal_masuk'] . "</td>";

                    echo "<td>" . $row['tanggal_keluar'] . "</td>";

                    echo "<td>" . $row['Status'] . "</td>";

                    echo "</tr>";
                }

                echo "</table>";



                // echo "Nama: " . $row[`nama`];
                // echo "<br>";
                // echo "Jumlah kilo: " . $row[`Kilopesanan`];
                // echo "<br>";
                // echo "Tanggal masuk: " . $row[`tanggal_masuk`];
                // echo "<br>";
                // echo "Tanggal Ambil: " . $row[`tanggal_keluar`];
                // echo "<br>";
                // echo "Status: " . $row[`Status`];
                // echo "<br>";
            } else if ($resultCheck <= 0) {
                echo "Data not found";
            }
        } else if ($opt = "Satuan") {
            $s = "SELECT * FROM `pesanan_sat` WHERE `nama`='$nm';";
            $sel = mysqli_query($conn, $s);
            $resultCheck = mysqli_num_rows($sel);

            if ($resultCheck== 1) {
                echo "<table border='1' style='text-align: center;'>
    
                <tr>
                <th>Nama</th>
                <th>Tanggal masuk</th>
                <th>Tanggal ambil</th>
                <th>Bed Cover (200x200)</th>
                <th>Bed Cover (180x200)</th>
                <th>Pakaian biasa</th>
                <th>Pakaian Jean</th>
                <th>Status</th>
                </tr>";
                while ($row = mysqli_fetch_assoc($sel)) {
                    echo "<tr>";

                    echo "<td>" . $row['nama'] . "</td>";

                    echo "<td>" . $row['tanggal_masuk'] . "</td>";
                    echo "<td>" . $row['tgl_ambil'] . "</td>";

                    echo "<td>" . $row['bedcover_1'] . "</td>";

                    echo "<td>" . $row['bedcover_2'] . "</td>";

                    echo "<td>" . $row['pakaian_b'] . "</td>";

                    echo "<td>" . $row['pakaian_jins'] . "</td>";
                    
                    echo "<td>" . $row['harga'] . "</td>";

                    echo "<td>" . $row['status'] . "</td>";

                    echo "</tr>";
                }

                echo "</table>";
            } else if ($resultCheck == 0) {
                echo "Data not found";
            }
        }

        ?>
    </div>
</body>

</html>
