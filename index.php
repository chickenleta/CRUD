<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM pipeline ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<h1>Data Pipeline Nasabah</h1>

<a href="add.php">Tambah</a><br></br>
 
    <table width='80%' border=1>
 
    <tr>
        <th>No</th> 
        <th>Tanggal</th> 
        <th>Nama</th> 
        <th>Produk</th> 
        <th>Nominal</th>
        <th>Aksi</th>
    </tr>
    <?php  
    $no_urut = 0;
    while($user_data = mysqli_fetch_array($result)) {  
    $no_urut++;       
        echo "<tr>";
        echo "<td>$no_urut</td>";
        echo "<td>".$user_data['tgl']."</td>";
        echo "<td>".$user_data['nama']."</td>";    
        echo "<td>".$user_data['produk']."</td>";
        echo "<td>".$user_data['nominal']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>