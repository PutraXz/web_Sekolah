<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/jurusan.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
<form action="" method="post">
    <div class="container">
        <nav class="navbar">
        <ul id="">
        <li><a class="ho" href="index">Home</a></li>
        <li><a class="ju active" href="jurusan">Jurusan</a></li>
        <li><a class="blog" href="blog">Berita</a></li>
        <li><a class="esk" href="ekstrakulikuler">Ekstrakulikuler</a></li>
        <li><a class="do" href="#">Dokumentasi</a></li>
        <li><a class="li" href="login">Login</a></li>          
      </ul>
        </nav>
</div>
        <!--image slider start-->
        <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="image/slide.jpg" alt="">
        </div>
        <div class="slide">
          <img src="image/akutansi.jpg" alt="">
        </div>
        <div class="slide">
          <img src="image/tata.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 3500);
    </script>
<h1 class="jurusan">JURUSAN</h1>
<div class="rpl">
    <img src="image/nr.png" style="position: absolute; top:0px; width:287px; left:23px;" >
</div>
<div class="rpl2">
    <p class="pr">Rekayasa Perangkat Lunak adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</p>
<a href="baca?page=rekayasa-perangkat-lunak" class="btnrpl">Selengkapnya</a>
    </div>
    <div class="akl">
    <img src="image/na.png" style="position: absolute; top:0px; width:280px; left:23px;" >
</div>
<div class="akl2">
        <p class="pa">
        Akuntansi adalah sebuah Kompetensi Keahlian (Jurusan) yang sangat berhubungan dengan angka dan hitung menghitung. Bidang studi yang mempelajari materi terkait metode pencatatan dan penyusunan laporan keuangan.
        </p>
        <a href="baca?page=rekayasa-perangkat-lunak" class="btnak">Selengkapnya</a>
    </div>
    <div class="tata">
    <img src="image/nt.png" style="position: absolute; top:0px; width:280px; left:23px;" >
</div>
<div class="tata2">
        <p class="pt">
        Tata Boga  mempelajari bagaimana teknik menyajikan makanan agar terlihat berkualiatas tinggi, mempunyai estetika, rasa, dan kebutuhan gizi yang terpenuhi. Disini kalian akan belajar bagaimana cara mengolah bahan masakan.
        </p>
        <a href="baca?page=rekayasa-perangkat-lunak" class="btntb">Selengkapnya</a>
    </div>

<section>
    
</section>
</section>
    <div id="footer">
    <i class="bx bxl-facebook-circle fb"></i><p class="pfb">smk56bandung</p>
    <i class='bx bxl-instagram ig'></i><p class="pig">smkn56_bandung</p>
    <i class='bx bxl-whatsapp wa' ></i><p class="pwa">082167823546</p>
    <i class='bx bxl-youtube yt' ></i><p class="pyt">smk56bandung</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
          $('ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js "></script>
                </form>
</body>

</html>