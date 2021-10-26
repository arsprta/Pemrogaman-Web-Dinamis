<?php
// Create database connection using config file
include_once("conn.php");
// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM komen ");
?>
<html>

<head>
    <title>Halaman Utama</title>
</head>

<body>
    <a href="validasi.php">Tambah Data Baru</a><br /><br />
    <table width='80%' border=1>
        <tr>
            <th>nama</th>
            <th>email</th>
            <th>website</th>
            <th>comment</th>
            <th>gender</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['website'] . "</td>";
            echo "<td>" . $user_data['comment'] . "</td>";
            echo "<td>" . $user_data['gender'] . "</td>";
            echo "<td><a href='delete.php?nama=$user_data[nama]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>