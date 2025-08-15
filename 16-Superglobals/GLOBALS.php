<?php
/*
$GLOBALS adalah array asosiatif yang menyimpan semua variabel global di PHP.
Ini memungkinkan kita mengakses variabel dari mana saja, termasuk di dalam fungsi.
Dalam pengembangan web, ini berguna untuk berbagi data antar fungsi, 
mengatur konfigurasi global, atau menyimpan informasi yang dibutuhkan di berbagai bagian aplikasi.
*/

echo "-------------------- Using \$GLOBALS in PHP --------------------" . "\n\n";

/*
1. Basic Access to Global Variable
   - Mengakses variabel global di luar fungsi menggunakan $GLOBALS.
*/

echo "1. Basic Access to Global Variable" . "\n\n";

$name = "David"; // Variabel global
echo "Name (Direct Access): " . $name . "\n"; // Output: Name (Direct Access): David
echo "Name (Using \$GLOBALS): " . $GLOBALS['name'] . "\n"; // Output: Name (Using $GLOBALS): David
echo "\n\n";

/*
2. Access Global Variable Inside a Function
   - Menggunakan $GLOBALS untuk membaca variabel global di dalam fungsi.
*/

echo "2. Access Global Variable Inside a Function" . "\n\n";

$role = "Frontend Developer";

function showRole()
{
    echo "Role from \$GLOBALS: " . $GLOBALS['role'] . "\n";
}

showRole();
/*
Output:
Role from $GLOBALS: Frontend Developer
*/
echo "\n\n";

/*
3. Modify Global Variable Inside a Function
   - Mengubah nilai variabel global dari dalam fungsi menggunakan $GLOBALS.
*/

echo "3. Modify Global Variable Inside a Function" . "\n\n";

$project = "Company Website";

function changeProject()
{
    $GLOBALS['project'] = "E-Commerce Platform"; // Mengubah nilai global
}

changeProject();
echo "Updated Project: " . $project . "\n"; // Output: Updated Project: E-Commerce Platform
echo "\n\n";

/*
4. Share Data Between Multiple Functions
   - Menggunakan $GLOBALS untuk berbagi data antar fungsi tanpa parameter.
*/

echo "4. Share Data Between Multiple Functions" . "\n\n";

$visitorCount = 0;

function incrementVisitor()
{
    $GLOBALS['visitorCount']++;
}

function displayVisitorCount()
{
    echo "Total Visitors: " . $GLOBALS['visitorCount'] . "\n";
}

incrementVisitor();
incrementVisitor();
displayVisitorCount();
/*
Output:
Total Visitors: 2
*/
echo "\n\n";

/*
5. Store and Access Complex Data Structures
   - Menyimpan array asosiatif global menggunakan $GLOBALS.
*/

echo "5. Store and Access Complex Data Structures" . "\n\n";

$GLOBALS['siteConfig'] = [
    "siteName" => "TechWorld",
    "adminEmail" => "admin@techworld.com",
    "maintenanceMode" => false
];

echo "Site Name: " . $GLOBALS['siteConfig']['siteName'] . "\n"; // Output: Site Name: TechWorld
echo "Admin Email: " . $GLOBALS['siteConfig']['adminEmail'] . "\n"; // Output: Admin Email: admin@techworld.com
echo "Maintenance Mode: " . ($GLOBALS['siteConfig']['maintenanceMode'] ? "ON" : "OFF") . "\n"; // Output: Maintenance Mode: OFF
echo "\n\n";

/*
6. Real Case Example in Web Development
   - Menggunakan $GLOBALS untuk menyimpan konfigurasi dan fungsi yang saling terhubung.
*/

echo "6. Real Case Example in Web Development" . "\n\n";

$GLOBALS['dbConfig'] = [
    "host" => "localhost",
    "user" => "root",
    "password" => "password123",
    "database" => "my_app"
];

function connectDatabase()
{
    $config = $GLOBALS['dbConfig'];
    echo "Connecting to database '{$config['database']}' at {$config['host']} with user {$config['user']}...\n";
    // Di dunia nyata, ini akan menjadi mysqli_connect() atau PDO
}

connectDatabase();
/*
Output:
Connecting to database 'my_app' at localhost with user root...
*/
echo "\n\n";
