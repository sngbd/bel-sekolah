<!DOCTYPE html>
<html>
<head>
	<title>Kolaborasi Fasilkom-TI</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/about.css">
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

	<style type="text/css">
	nav{
  position: relative;
  width: 100%;
  height: 60px;
  background-color: #b1e67c;
  box-shadow: -1px -7px 20px 0px #888;
}

nav ul{
  position: relative;
  top: 20px;
  margin: 0;
  float: right;
  right: 10%
}
nav ul li{
float: left;
display: block;
margin: 0px 15px 0px 15px;
}
nav ul li a{
  text-decoration: none;
  color:#fff;
  font-family:'Helvetica, sans-serif';
}	

#section1 {
  height: 600px;
  background-color: white;
}

#section2 {
  height: 1100px;
  background-color: #e3e5e8;
}
#img.dosen{
display: block;
margin: 0 auto;
}
table, th, td {
  border:1px solid black;
border-collapse: collapse;
}
.tengah{
margin-left: auto;
margin-right: auto;
}
.footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px; 
}
	</style>


</head>	
<body>

	<div>
	<nav>
		<ul>
			<li><a href="http://localhost/bel/index.php">H O M E</a></li>
			<li><a href="http://localhost/bel/about.php">A B O U T</a></li>
		</ul>
	</nav>
	</div>
	<div class="section" id="section1">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>Tentang Proyek</h1>
				</div>
				<div class="content">
					<h3>Pembuatan IOT : Bel Sekolah</h3>
					<p>Proyek ini merupakan Tugas Akhir Semester Ganjil Mahasiswa Ilmu Komputer USU. Proyek ini mengusung ide "Aplikasi IOT dalam sistem bel sekolah". Siswa yang terlibat dalam proyek ini...
					<a style="text-decoration: none" href="#section2">
					<i class="fas fa-angle-double-down"></i> Lihat selengkapnya
				</a>
					</p>
				</div>
			</div>
			<div class="image-section">
				<img src="assets/img/img one.png">
			</div>
		</div>
	</div>
<div class="section" id="section2">
	<h1>Mahasiswa dan Dosen</h1>
	<br><br>
	<div style="text-align: center";>
	<h2>Dosen Pembimbing</h2>
	<img src="assets/img/dosen.jpg" width="150" height="200">
	<p>Herriyance, ST., M.Kom</p>
	</div>
<br><br>
<div style="text-align: center;">
		<h2>Mahasiswa</h2>
</div>
<div>
<table class="tengah">

  <tr>
    <th>Nama</th>
    <th>NIM</th>
  </tr>
  <tr>
    <td>Harry Sion Tarigan</td>
    <td>211401021</td>
  </tr>
  <tr>
    <td>Samuel Siahaan </td>
    <td>211401126</td>
  </tr>
    <tr>
    <td>Rizky Maulana Sembiring </td>
    <td>211401024</td>
  </tr>
    <tr>
    <td>Filbert Wijaya </td>
    <td>211401045</td>
  </tr>
    <tr>
    <td>Kimsang Silalahi </td>
    <td>211401122</td>
  </tr>
    <tr>
    <td>Rizky Wahyudi </td>
    <td>211401036</td>
  </tr>
    <tr>
    <td>Vio Aprivia Nugraha </td>
    <td>211401058</td>
  </tr>
    <tr>
    <td>Christofel Vitranata Simamora </td>
    <td>211401092</td>
  </tr>
    <tr>
    <td>Sindhy Marlina Lumban Raja </td>
    <td>211401113</td>
  </tr>
    <tr>
    <td>Gilberdi Axel Nathaniel Sinaga  </td>
    <td>211401039</td>
  </tr>
    <tr>
    <td>Helga Pricilla Br Purba</td>
    <td>211401067</td>
  </tr>
    <tr>
    <td>Jop Arapenta Ginting</td>
    <td>211401079</td>
  </tr>
    <tr>
    <td>Andrew</td>
    <td>211401085</td>
  </tr>
    <tr>
    <td>Irgi Ahmad Alfarizi</td>
    <td>211401129</td>
  </tr>
    <tr>
    <td>Tessa Agitha Irwani Br Barus</td>
    <td>211401138</td>
  </tr>
    <tr>
    <td>Arif Adrian</td>
    <td>211401088</td>
  </tr>
    <tr>
    <td>Ester Rosahana Sihaloho</td>
    <td>211401027</td>
  </tr>
    <tr>
    <td>Muhammad Gilang Fan Rizki</td>
    <td>211401144</td>
  </tr>
    <tr>
    <td>Billy Messi Aritonang</td>
    <td>211401098</td>
  </tr>
    <tr>
    <td>Annisa Khairina</td>
    <td>211401042</td>
  </tr>
    <tr>
    <td>Habel Sitanggang</td>
    <td>211401073</td>
  </tr>
  <tr>
    <td>Sri Rejeki Lusiana Tampubolon</td>
    <td>211401073</td>
  </tr>
  <tr>
    <td>Tiur Asria Tampubolon</td>
    <td>211401119</td>
  </tr>
</table>
</div>
<div class="footer"><script>document.write(new Date().getFullYear())</script> | Kolaborasi Fasilkom-TI X Mitra</div>
</body>
</html>