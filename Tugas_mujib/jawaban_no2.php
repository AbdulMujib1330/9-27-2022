<?php
//------soal------
// 2.Bagaimana Membuat = a.Constructor  b. Destructor
//------jawaban-----

class siswa{
    public function __construct(){
        echo "this comes from a construct function.";
    }

    public function __destruct(){
        echo "this comes from a destruct function.";
    }
}

$answerno2 = new siswa();

echo "<br>";
unset($answerno2);
echo "<br>";

?>