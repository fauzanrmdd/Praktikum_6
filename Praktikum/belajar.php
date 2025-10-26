<?php
    echo "Hello World\n";

    $nim = "103092400012";
    $nama = "Panasonic";

    echo "\nNIM: " . $nim;
    echo "\nNama: " . $nama;
?>

<?php
    define(constant_name: "NAMA", value: "John doe");
    define(constant_name: "NIM", value: "John doe");
    echo "Nama: " . NAMA;
    echo "NIM: ". NIM
?>

<!-- Konstanta -->
 <h2> Ini materi konstanta </h2>
 <pre>
<?php 
    define(constant_name: "Univ", value: "Universitas Telkom Surabaya");
    echo "Selamat datang di " . Univ;
?>
</pre>

<!-- Operator -->
 <h2> Tes Operator </h2>
 <pre>
    <?php 
        $a = 10;
        $b = 5;
        echo "Tambah: " . ($a + $b) ."<br>";
        echo "Kurang: " . ($a - $b) ."<br>";
        echo "Bagi: " . ($a / $b) ."<br>";
        echo "Kali: " . ($a * $b) ."<br >";
    ?>
</pre>

<!--Kondisi-->
<h2>Kondisi</h2>
<pre>
    <?php 
        $nilai = 85;
        if ($nilai >= 75){
            echo "Asik cumlaude bg";
        } else {
            echo "Coba lagi bg";
        }

        echo"<br>";

        $grade = "B";
        switch($grade){
            case "A": echo "Bro is winning"; break;
            case "B": echo "Yang penting lulus"; break;
            default: echo "Belajar lagi";
        }
    ?>
</pre>

<!--Looping-->
<h2>Perulangan (Looping)</h2>
<pre>
    <?php 
        for ($i = 1; $i <= 5; $i++){
            echo "Match ke - $i <br>";
        }

        echo"<br>";

        $i = 1;
        while($i <= 3){
            echo "Angka: $i <br>";
            $i++;
        }

        echo"<br>";

        $warna = ["Merah", "Hijau", "Biru"];
        foreach($warna as $w){
            echo $w . "<br>";
        }
    ?>
</pre>

<!--Function-->
<h2>Fungsi</h2>
<pre>
    <?php 
        function luasSegitiga($alas, $tinggi): float|int {
            return 0.5 * $alas * $tinggi;
        }
        echo "Luas Segitiga (alas = 50, tinggi = 10): ".luasSegitiga(alas: 50, tinggi: 10);
    ?>
</pre>

<!--Array-->
<h2>Array - List</h2>
<pre>
    <?php
        $buah = ["Apel1", "Apel2", "Apel3"];
        echo "Buah Pertama: " .$buah[0]."<br>";

        $mhs = [
            "Nama" => "Jane Doe",
            "NIM" => "001",
            "Jurusan" => "DKV",
        ];
        echo "Nama mahasiswa" .$mhs["Nama"];
    ?>
</pre>