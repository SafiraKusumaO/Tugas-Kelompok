<html>
<head>
    <title>Membuat Form Login</title>
</head>
<body>
    <form action="">
        <form>
            <div>
                <label>Username</label> <br>
                <input name="Nama" type="text">
            </div>
            <div>
                <label>Alamat</label> <br>
                <input name="Alamat" type="text">
            </div>
            <div>
                <label>password</label> <br>
                <input name="password" type="password">
            </div>
            <div>
                <label>ComboBox1</label> <br>
                <select name="agama" id="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </div>
            <div>
                    <label>Jenis Kelamin =</label> <br>
                    <input type="radio" name="jk" value="Laki-laki"> Laki-laki<br>
                    <input type="radio" name="jk" value="Perempuan"> Perempuan<br>
                    <input type="submit" value="Kirim">
            </div>
        </form>
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
        <!-- End menampilkan Input -->
    </body>
    </html>