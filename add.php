
<html>
<head>
    <title>Tambah Data</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="text" name="tgl"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Produk</td>
                <td><input type="text" name="produk"></td>
            </tr>
            <tr> 
                <td>Nominal</td>
                <td><input type="text" name="nominal"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $tgl = $_POST['tgl'];
        $nama = $_POST['nama'];
        $produk = $_POST['produk'];
        $nominal = $_POST['nominal'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pipeline(id,tgl,nama,produk,nominal) VALUES('$id','$tgl','$nama','$produk','$nominal')");
        
        // Redirect to homepage to display updated user in list
        header("Location: index.php");

    }
    ?>
</body>
</html>