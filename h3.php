<?php 
// error_reporting(0);
// $becvr1=$_POST['bed1'];
// $becvr2=$_POST['bed2'];
// $pakaian=$_POST['pkian'];
// $jeans=$_POST['Jeans'];
// $harga_becvr1=$becvr1*25000;
// $harga_becvr2=$becvr2*20000;
// $harga_pakaian=$pakaian*1500;
// $harga_jeans=$jeans*5000;

// $harga_total=$harga_becvr1+$harga_becvr2+$harga_jeans+$harga_pakaian;

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="satuan">
        <form action="sstm3.php" method="post">
            <table>
                <tr>
                    <td><label for="nama">Nama Pelanggan</label></td>
                    <td><input type="text" required="" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td><label for="bedcvr1">Bed cover 200x200</label></td>
                    <td><input value="0" type="number" min="0" name="bed1" id="bedcvr1"></td>
                </tr>
                <tr>
                    <td><label for="bedcvr2">Bed cover 180x200</label></td>
                    <td><input value="0" type="number" min="0" name="bed2" id="bedcvr2"></td>
                </tr>
                <tr>
                    <td>
                        <label for="pakaianb">Pakaian biasa</label>
                    </td>
                    <td>
                        <input value="0" type="number" min="0" name="pkian" id="pakaianb">
                    </td>
                </tr>
                <tr>
                    <td><label for="jeans">Pakaian Jeans</label></td>
                    <td><input value="0" type="number" min="0" name="Jeans" id="jeans"></td>
                </tr>       
                <tr >
                    <td style="padding-top: +25px"><label for="tgl">Tanggal masuk: </label></td>
                    <td style="padding-top: +25px"><input required="" type="date" name="tgl" id="tgl"></td>
                </tr>
                <tr>
                    <td><input type="reset" value="reset" name=""></td>
                    <td style="text-align: center;"><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
    <?php 
    // if ($harga_total==0) {
    //     # code...
    // }
    // elseif ($harga_total<0) {
    //      # code...
    //     echo "Invalid Input";
    //  } 
    // else {
    //     # code...
    //     echo "Harga Totalnya: Rp.".$harga_total;
    // }
    
    
    ?>

    <br><br>
<h3><a href="h1.php">Back</a></h3>
</body>
</html>