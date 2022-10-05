

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Maha</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Tambah Data</h2>
                    </div>
                    <p>Silahkan isi form di bawah ini kemudian submit untuk menambahkan data mahasiswa ke dalam database.</p>
                    
                    <form action="sample.php" method="post" name="form1">
                    <a href="index.php">Go to Home</a>
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>Asal</td>
                <td><input type="text" name="asal"></td>
            </tr>
            <tr> 
                <td>Fakultas</td>
                <td><input type="text" name="fakultas"></td>
            </tr>
            <tr> 
                <td>Program Studi</td>
                <td><input type="text" name="prodi"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>    
                    
                </div>
            </div>
        </div>
    </div>

    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['name'];
        $nim = $_POST['nim'];
        $asal = $_POST['asal'];
        $fakultas = $_POST['fakultas'];
        $prodi = $_POST['prodi'];
        
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($link, "INSERT INTO mhs(nama_mhs,id_mhs,asal,fakultas,prodi) VALUES('$nama','$nim','$asal', '$fakultas', '$prodi')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>