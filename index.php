
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMK NEGERI 65 BANDUNG</title>
    <link rel="stylesheet" href="css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<form action="" method="post">
    <div class="container">
    <nav class="navbar" id="myDIV">
    <ul id="">
        <li><a class=" active" href="#">Home</a></li>
        <li><a  href="jurusan">Jurusan</a></li>
        <li><a  href="blog">Berita</a></li>
        <li><a  href="ekstrakulikuler">Ekstrakulikuler</a></li>
        <li><a href="#">Dokumentasi</a></li>
        <li><a class="li" href="login">Login</a></li>          
      </ul>
    </nav>
</div>
        <div class="home">
            <section id="home">
                <h1 class="kata1">SMK NEGERI 56 BANDUNG</h1>
                <p class="kata2 ">Smk Negeri 56 Bandung dikenal sebagai sekolah terakreditasi <span class="span1">A+</span> juga dikenal sebagai sekolah terfavorit di kota Bandung sekolah yang mencapai banyak penghargaan di usia muda siswa dan siswi</p>
            </section>
        </div>
        <section class="news">
        <div class="berita">
            <h1 class="n">NEWS</h1>
            <div class="berita1">
                <div class="tabel1">
                    <img src="image/berita1.png" alt="berita" class="picne">
                    <p class="judul1">KELEBIHAN SMK</P>
                    <p class="kabe1">Sekolah SMK Negeri 56 Bandung memiliki kemampuan lebih daripada sekolah lainnya</p>
                    <p class="kabe2">27/01/2022 13:47 WIB</p>
                    <p class="pe1"> byRafliAfdillah</p>

                </div>
                <div class="tabel2">
                    <img src="image/berita2.jpg" alt="berita" class="picne2">
                    <p class="judul2">PROGRAM ROOTS</p>
                    <p class="kabe3">Roots Day sendiri merupakan kegiatan penguat dan pelengkap dari program Sekolah yang aman dan nyaman bebas dari perundungan.</p>
                    <p class="kabe4">27/01/2022 13:47 WIB
                    </p>
                    <P class="pe2">byRafliAfdillah</P>
                </div>
                <div class="tabel3">
                    <img src="image/blog1.jpeg" alt="berita" class="picne3">
                    <p class="judul3">MEMPERINGATI HARI GURU</p>
                    <p class="kabe5">Siswa smk negeri 56 Bandung sedang memperingati hari guru Nasional diperingati setiap tanggal 25 November, bertepatan dengan ulang tahun PGRI</p>
                    <p class="kabe6">27/01/2022 13:47 WIB 
                    </p>
                    <p class="pe3">byRafliAfdillah</p>
                </div>
                <div class="tabel4">
                    <img src="image/MAULID.jpeg" alt="berita" class="picne4">
                    <p class="judul4">MENGADAKAN PENGAJIAN</p>
                    <p class="kabe7"> siswa smk negeri 56 Bandung mengadakan Kegiatan pengajian itu biasanya diisi dengan berbagai macam kegiatan seperti pembacaan ayat suci Al-Quran, pembacaan dzikir, tahlil dan shalawat, ceramah agama langsung dari Habib, Kyai atau Ustadz</p>
                    <p class="kabe8">27/01/2022 13:47 WIB
                    </p>
                    <p class="pe4">byRafliAfdillah</p>
                </div>
            </div>
        </div>
 
    </section>
        <section id="lokasi">
            <div class="maps1">
                <p class="alamat">SMK NEGERI 56 BANDUNG Jl. Gumuruh 16-2,  <span class="alamat2">Gumuruh, Kec. Batununggal, <span class="alamat3"> Kota Bandung, Jawa Barat 40275</span></p>
                <p class="telpon">Telepon: 021 – 430 3676, Fax: 021 – 430 4580</p>
                <p class="email">Email: info@smknegeri56_bandung.sch.id</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6673364682756!2d107.63686361431724!3d-6.930306769761371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e87683a17541%3A0xf6549f02a95ee1dd!2sJl.%20Gumuruh%2016-2%2C%20Gumuruh%2C%20Kec.%20Batununggal%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040275!5e0!3m2!1sid!2sid!4v1643259034627!5m2!1sid!2sid"
                    width="920" height="550" style="border:0; position:absolute; left:500px top:1px;" allowfullscreen="" loading="lazy" class="maps"></iframe>
            </div>
        </section>
    </div>

    <div id="footer">
    <i class='bx bxl-facebook-circle fb'></i><p class="pfb">smk56bandung</p>
    <i class='bx bxl-instagram ig'></i><p class="pig">smkn56_bandung</p>
    <i class='bx bxl-whatsapp wa' ></i><p class="pwa">082167823546</p>
    <i class='bx bxl-youtube yt' ></i><p class="pyt">smk56bandung</p>
    </div>
    <?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {

				//Asrama
				case 'rekayasa-perangkat-lunak':
					include "read/rpl.php";
					break;
				case 'administrasi-keungan-lembaga':
					include "read/akl.php";
					break;
				case 'tata-boga':
					include "read/tata.php";
					break;
				}
			}
		
    ?>
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