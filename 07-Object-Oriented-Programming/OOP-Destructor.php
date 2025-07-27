<?php

/*
Destructor dalam PHP adalah sebuah metode khusus yang dieksekusi secara otomatis saat objek dihancurkan atau keluar dari cakupan. Destructor digunakan untuk membersihkan atau melepaskan sumber daya yang digunakan oleh objek, seperti menutup koneksi database, menulis log, atau tugas pembersihan lainnya.

    - Destructor didefinisikan dengan nama __destruct().
    - Destructor tidak menerima parameter dan tidak memiliki nilai kembalian.
    - Destructor dipanggil secara otomatis oleh PHP.
*/

/*
Ciri-Ciri Destructor

1. Dipanggil secara otomatis ketika objek dihancurkan, misalnya:

    - Saat skrip selesai dieksekusi.
    - Ketika variabel yang menyimpan objek di-unset.
    - Saat objek keluar dari cakupan.

2. Biasanya digunakan untuk:

    - Menutup koneksi.
    - Membersihkan sumber daya.
    - Menyimpan log atau data ke file.
*/

echo "-------------------- Contoh Penggunaan Destructor --------------------" . "\n\n";

class FileLogger
{
    private $file;

    // Constructor: Membuka file untuk menulis log
    public function __construct($filename)
    {
        $this->file = fopen($filename, "a");
        echo "File {$filename} opened for logging.\n";
    }

    // Method untuk menulis log
    public function writeLog($message)
    {
        if ($this->file) {
            fwrite($this->file, $message . "\n");
        }
    }

    // Destructor: Menutup file log
    public function __destruct()
    {
        if ($this->file) {
            fclose($this->file);
            echo "File closed.\n";
        }
    }
}

// Membuat objek dan menulis log
$logger = new FileLogger("log.txt");
$logger->writeLog("This is the first log message.");
$logger->writeLog("This is the second log message.");

// Saat objek keluar dari cakupan, destructor akan dipanggil
unset($logger); // Memanggil destructor secara eksplisit
echo "End of script.\n";

/*
Output:

File log.txt opened for logging.
File closed.
End of script.
*/


/*
Penjelasan:

1. Constructor (__construct):

    - Membuka file log.txt untuk menulis log.

2. Destructor (__destruct):

    - Menutup file saat objek dihancurkan.

3. Method writeLog:

    - Digunakan untuk menulis pesan log ke file.

4. unset($logger):

    - Menghancurkan objek secara eksplisit sehingga destructor dipanggil.
*/

/*
Keuntungan Destructor

    - Mengelola sumber daya secara efisien.
    - Menghindari kebocoran memori dengan melepaskan sumber daya yang tidak lagi diperlukan.
    - Membantu memastikan bahwa tugas-tugas penting selesai sebelum objek dihancurkan.
*/