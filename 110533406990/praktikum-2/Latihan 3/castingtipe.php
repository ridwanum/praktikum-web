<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Casting Tipe</title>
</head>
<body>

<?php
// Deklrasikan dan inisialisasi
$str = '123abc';

// Casting nilai variabel $str ke integer
$bil = (int) $str; // $bil = 123

echo gettype ($str);
//Output: string

echo gettype($bil);
//Output: integer

?>

</body>
</html>