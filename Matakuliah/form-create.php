<?php

include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);
?>
<body>
<h1>Tambah Data Matakuliah</h1>
    <form action="Create.php" method="POST">
        Kode        : <input type="text" name="kode"><br><br>
        Matakuliah  : <input type="text" name="nama_matkul"><br><br>
        SKS         : <input type="text" name="sks"><br><br>
        Semester    : <input type="text" name="semester"><br><br>
        <select name="id_dosen" id="nama_dosen">
        <option value="-">--Pilih salah satu--</option>
        <?php
        while ($data = mysqli_fetch_assoc($result)){
            ?>
            <option value = "<?php echo $data['id_dosen']; ?>">
            <?php echo $data['nama_dosen']; ?>
            </option>
            <?php
        }
        ?>
        </select>
        <input type="submit" name="btnSimpan" value="SIMPAN">
    </form>
    </body>
