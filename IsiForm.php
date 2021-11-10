<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inistial-scale=1.0">
    <title>Membuat Form Login</title>

    <style>
        body {
            background-color: papayawhip;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>


    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <center>

        <form action="">
            <form>
                <br>
                <div id="style7">
                    <div id="style2">
                        <label>Username</label> <br>
                        <input name="Nama" type="text">
                    </div>
                    <div id="style3">
                        <label>Alamat</label> <br>
                        <input name="Alamat" type="text">
                    </div>
                    <div id="style4">
                        <label>password</label> <br>
                        <input name="password" type="password">
                    </div>
                    <div id="style5">
                        <label>ComboBox1</label> <br>
                        <select name="agama" id="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                    </div>
                    <br>
                    <br>
                    <div id="style6">
                        <label>Jenis Kelamin =</label> <br>
                        <input type="radio" name="jk" value="Laki-laki"> Laki-laki<br>
                        <input type="radio" name="jk" value="Perempuan"> Perempuan<br>
                        <input type="submit" value="Kirim">
                    </div>
                </div>
            </form>
            </br>
            </br>

        </form>
        <!-- script ini dibuat untuk menampilkan input form ketika di submit -->
        <!-- Start menampilka input -->
        <?php
        if (isset($_GET['Nama']) | isset($_GET['Alamat']) | isset($_GET['password']) | isset($_GET['agama']) | isset($_GET['jk'])) {
            echo "Nama : " . $_GET['Nama'] . "<br> ";
            echo "Alamat : " . $_GET['Alamat'] . "<br> ";
            echo "Password : " . $_GET['password'] . "<br> ";
            echo "Agama : " . $_GET['agama'] . "<br> ";
            echo "Gender : " . $_GET['jk'];
        }
        ?>
    </center>
</body>

</html>