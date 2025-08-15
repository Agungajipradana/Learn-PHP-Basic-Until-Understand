<?php
/*
$_POST (Data Form via POST)

Note:
- Digunakan untuk mengambil data dari form HTML yang dikirimkan menggunakan method POST.
- Biasanya dipakai untuk proses seperti login, registrasi, komentar, dan upload file.
- Data tidak terlihat di URL sehingga lebih aman dibanding GET (meskipun tetap perlu validasi).
*/

echo "-------------------- PHP \$_POST Examples --------------------\n\n";

/*
1. Simple POST Data
   - Mengambil satu field dari form sederhana.
   - Cocok untuk login singkat atau input nama.
*/
echo "1. Simple POST Data\n\n";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    $username = $_POST['username']; // e.g., Michael
    echo "Hello, $username!\n";
    // Output example: Hello, Michael!
} else {
    echo "Form not submitted yet for username.\n";
}
echo "\n\n";

/*
2. Multiple POST Fields
   - Mengambil beberapa data sekaligus, misalnya form registrasi.
*/
echo "2. Multiple POST Fields\n\n";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['full_name']) && isset($_POST['email'])) {
    $fullName = $_POST['full_name']; // e.g., Sarah Johnson
    $email = $_POST['email'];        // e.g., sarah@example.com
    echo "Full Name: $fullName\nEmail: $email\n";
    // Output example:
    // Full Name: Sarah Johnson
    // Email: sarah@example.com
} else {
    echo "Registration form not submitted yet.\n";
}
echo "\n\n";

/*
3. Validating and Sanitizing POST Data
   - Membersihkan input user untuk keamanan.
   - Mencegah XSS dan SQL Injection.
*/
echo "3. Validating and Sanitizing POST Data\n\n";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment'])) {
    $comment = htmlspecialchars(trim($_POST['comment'])); // Sanitizing
    echo "Your comment: $comment\n";
    // Output example: Your comment: This is a great product!
} else {
    echo "No comment submitted yet.\n";
}
echo "\n\n";

/*
4. Handling POST Array Data
   - Mengambil banyak nilai dari checkbox dengan nama yang sama.
*/
echo "4. Handling POST Array Data\n\n";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hobbies'])) {
    $hobbies = $_POST['hobbies']; // e.g., ["Reading", "Traveling"]
    echo "Selected hobbies:\n";
    foreach ($hobbies as $hobby) {
        echo "- " . htmlspecialchars($hobby) . "\n";
    }
    /*
    Output example:
    Selected hobbies:
    - Reading
    - Traveling
    */
} else {
    echo "No hobbies selected yet.\n";
}
echo "\n\n";

/*
5. File Upload with POST
   - Mengirim file menggunakan form enctype="multipart/form-data".
   - $_POST digunakan bersamaan dengan $_FILES.
*/
echo "5. File Upload with POST\n\n";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['profile_picture'])) {
    $fileName = $_FILES['profile_picture']['name'];     // e.g., photo.jpg
    $fileTmp  = $_FILES['profile_picture']['tmp_name'];

    // Membuat folder upload jika belum ada
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }

    move_uploaded_file($fileTmp, "uploads/" . $fileName);
    echo "File uploaded successfully: $fileName\n";
    // Output example: File uploaded successfully: photo.jpg
} else {
    echo "No file uploaded yet.\n";
}
echo "\n\n";

/*
6. Debug Mode: Show All $_POST Data
   - Berguna untuk memeriksa semua data yang dikirim.
*/
echo "6. Debug Mode: JSON Output\n\n";
echo json_encode($_POST, JSON_PRETTY_PRINT);
// Output example:
// {
//     "username": "Michael",
//     "email": "michael@example.com"
// }
