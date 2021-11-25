<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form style="margin-left: auto; margin-right:auto" action="sstmh2.php" method="post">
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td><label for="kloan">Masukan Perkiraan kiloan:</label></td>
                    <td><input value="0" min="0" type="number" name="kloan" id="kloan"></td>
                </tr>
                <tr>
                    <td>Tanggal masuk</td>
                    <td><input value="0" type="date" name="tgl"></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Reset" class="sbm"></td>
                    <td><input style="margin-left: +25%" type="submit" value="Submit" class="sbm"></td>
                </tr>
            </table>
        </form>
    </div>
    <div>
        <a href="h1.php">Back</a>
    </div>
</body>

</html>