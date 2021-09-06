<?php

include_once("config.php");
 

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
        
        $tgl = $_POST['tgl'];
        $nama = $_POST['nama'];
        $produk = $_POST['produk'];
        $nominal = $_POST['nominal'];
        

    $result = mysqli_query($mysqli, "UPDATE pipeline SET tgl='$tgl',nama='$nama',produk='$produk',nominal='$nominal' WHERE id=$id");
    

    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 

$result = mysqli_query($mysqli, "SELECT * FROM pipeline WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    
    $tgl = $user_data['tgl'];
    $nama = $user_data['nama'];
    $produk = $user_data['produk'];
    $nominal = $user_data['nominal'];
        
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Id</td>
                <td><input type="text" name="id" value=<?php echo $id;?>></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="text" name="tgl" value=<?php echo $tgl;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Produk</td>
                <td><input type="text" name="produk" value=<?php echo $produk;?>></td>
            </tr>
            <tr> 
                <td>Nominal</td>
                <td><input type="text" name="nominal" value=<?php echo $nominal;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>