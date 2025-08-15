<?php
/*
$_FILES pada PHP digunakan untuk meng-handle upload file melalui form HTML.

Note:
- Data file dikirim dengan method POST dan enctype="multipart/form-data".
- $_FILES berisi:
  - name      → Nama file asli
  - type      → MIME type file
  - tmp_name  → Lokasi file sementara di server
  - error     → Kode error upload
  - size      → Ukuran file (byte)
*/

echo "-------------------- PHP \$_FILES Examples --------------------\n\n";

/*
1. Basic File Upload
   - Mengupload file melalui form POST.
   - Wajib menggunakan enctype="multipart/form-data".
*/
echo "1. Basic File Upload\n\n";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['myfile'])) {
    $file = $_FILES['myfile'];

    if ($file['error'] === UPLOAD_ERR_OK) {
        echo "File uploaded successfully!\n";
        echo "Name: " . $file['name'] . "\n";
        echo "Type: " . $file['type'] . "\n";
        echo "Size: " . $file['size'] . " bytes\n";
        echo "Temp Location: " . $file['tmp_name'] . "\n";
    } else {
        echo "Error uploading file. Code: " . $file['error'] . "\n";
    }
} else {
    echo "No file uploaded yet.\n";
}
echo "\n\n";

/*
2. Moving Uploaded File
   - Setelah di-upload, file disimpan di folder tujuan.
*/
echo "2. Moving Uploaded File\n\n";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['myfile'])) {
    $targetDir = __DIR__ . "/uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $targetFile = $targetDir . basename($_FILES['myfile']['name']);

    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $targetFile)) {
        echo "File moved to: $targetFile\n";
    } else {
        echo "Failed to move uploaded file.\n";
    }
} else {
    echo "No file to move.\n";
}
echo "\n\n";

/*
3. Validating File Type
   - Membatasi hanya tipe tertentu yang diizinkan.
*/
echo "3. Validating File Type\n\n";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['myfile'])) {
    $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
    if (in_array($_FILES['myfile']['type'], $allowedTypes)) {
        echo "File type is allowed: " . $_FILES['myfile']['type'] . "\n";
    } else {
        echo "File type NOT allowed: " . $_FILES['myfile']['type'] . "\n";
    }
} else {
    echo "No file uploaded for type check.\n";
}
echo "\n\n";

/*
4. Validating File Size
   - Membatasi ukuran maksimal file.
*/
echo "4. Validating File Size\n\n";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['myfile'])) {
    $maxSize = 2 * 1024 * 1024; // 2MB
    if ($_FILES['myfile']['size'] <= $maxSize) {
        echo "File size is within limit.\n";
    } else {
        echo "File size exceeds limit (" . $_FILES['myfile']['size'] . " bytes).\n";
    }
} else {
    echo "No file uploaded for size check.\n";
}
echo "\n\n";

/*
5. Debugging $_FILES
   - Menampilkan isi $_FILES dengan JSON.
*/
echo "5. Debug Mode: JSON Output\n\n";
echo json_encode($_FILES, JSON_PRETTY_PRINT);

/*
HTML Form untuk menguji upload:
Buka file ini di browser dan gunakan form di bawah.
*/
?>

<hr>
<form action="" method="POST" enctype="multipart/form-data">
    <label>Select a file:</label>
    <input type="file" name="myfile" required>
    <button type="submit">Upload</button>
</form>