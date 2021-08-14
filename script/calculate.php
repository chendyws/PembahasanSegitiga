<html> 
    <head> 
        <title>Latihan Menghitung Luas Segitiga</title> 
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
    </head> 
    <body>

        <div class="perhitungan">
            <h2 class="judul">HASIL PERHITUNGAN LUAS SEGITIGA</h2> 
            <form method="POST" action="index.html" class="tulisan"> 
            <br>
            <h4>PEMBAHASAN</h4> 
            <?php 
              function luas_segitiga($alas,$tinggi)
              {
              $luas = ($alas)/2 * $tinggi;
              return $luas;
              }    
              echo "Diketahui :</br>";
              echo "Alas Segitiga = 10 cm</br>";
              echo "Tinggi Segitiga = 8 cm</br>";
              echo "</br>";
              echo "Rumus :</br>";
              echo "1/2 x alas x tinggi</br>";
              echo "</br>";
              echo "Maka :</br>";
              echo "Luas Segitiga Sama Kaki dengan alas 10 cm dan tinggi 8 cm adalah ".luas_segitiga(10,8). "cm<sup>2</sup>";
              echo "</br>";
              echo "</br>";
              ?>
              <center>
              <p>
              <a class="tombol" href="index.html" style="text-decoration:none" onclick = "return confirm('Apakah anda yakin akan kembali?');"> Kembali </a> 
            </form>
        </div>
  </body> `
</html>