<?php

$namaFile = $_FILES['file']['name'];
$typeFile = $_FILES['file']['type'];
$tmpFile = $_FILES['file']['tmp_name'];
$sizeFile = $_FILES['file']['size'];


if ($typeFile != "image/jpg" && $typeFile != "image/jpeg" && $typeFile != "image/png") {
  echo "<script>
          alert('File tidak support');
          window.location.href = 'index.php?page=upload';
        </script>";
} elseif ($sizeFile > 1000000) {
  echo "<script>
          alert('File tidak boleh lebih dari 1MB!');
          window.location.href = 'index.php?page=upload';
        </script>";
} else {
  
  $folderTujuan = "storage/";
  $infoFile = $folderTujuan . $namaFile;



 
  if (move_uploaded_file($tmpFile, $infoFile)) {
      echo "<script>
              alert('File berhasil diupload!');
              window.location.href = 'index.php?page=upload';
            </script>";
  } else {
      echo "<script>
              alert('File gagal diupload');
              window.location.href = 'index.php?page=upload';
            </script>";
  }
}
?>  

