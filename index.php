<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="hasil.php" method="post">
        <h2>Cek Diabetes</h2>
        <table>
            <tr>
                <td>Jumlah Hamil</td>
                <td><input type="double" name="x1"></td>
            </tr>
            <tr>
                <td>Kadar Glukosa</td>
                <td><input type="double" name="x2"></td>
            </tr>
            <tr>
                <td>Tekanan Darah</td>
                <td><input type="double" name="x3"></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td><input type="double" name="x4"></td>
            </tr>
            <tr>
                <td></td>
                <td id="submit">
                    <input id="bawah" type="submit" value="Prediksi" name="prediksi">
                    <input id="bawah" type="reset" value="Hapus">
                </td>

            </tr>

        </table>
    </form>
</body>

</html>