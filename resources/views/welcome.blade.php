@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="/css/style.css">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="img/2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="img/3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <h2>Sejarah IBBI</h2>
        <a href ="https://ibbi.ac.id/sejarah-ibbi/"><img src="file:D:\IBBI.jpg"></a>
        <p><H4>Sejarah Berdirinya IBBI</H4></p>
        <p>Ketika sebuah perusahaan membutuhkan tenaga kerja terampil, cekatan dan bersedia kerja keras dan tekun, ternyata tak gampang memperolehnya. Apalagi yang menguasai teknik komputer, administrasi dan akuntansi maupun bahasa asing yang memadai. Ada sesuatu yang hilang terasa, proses pendidikan yang representatif untuk mengantisipasi perkembangan zaman...</p>
      </div>
      <div class="card">
        <h2>Studi Banding IBBI</h2>
        <a href ="https://medanbisnisdaily.com/news/read/2013/01/08/5919/33_mahasiswa_stie_stmik_ibbi_studi_banding_ke_taiwan/"><img src="file:D:\33.jpg"></a>
        <p><H4>Studi Banding IBBI</H4></p>
        <p>MedanBisnisâ€”Medan. Sekolah Tinggi Ilmu Ekonomi dan Sekolah Tinggi Manajemen Informatika Komputer IBBI (STIE-STMIK IBBI) memberikan penghargaan pada mahasiswa yang berprestasinya untuk melakukan studi banding ke luar negeri. Studi banding ke Taiwan mulai 7 sampai 12 Januari 2013 ini diikuti 65 orang, termasuk 33 mahasiswa....</p>
      </div>
      <div class="card">
        <h2>Wisudawan/i IBBI</h2>
        <a href ="https://medan.tribunnews.com/2017/11/28/kopertis-kompetensi-lulusan-ibbi-medan-diterima-baik-di-dunia-kerja"><img src="file:D:\stmik-ibbi_20171128_113003.jpg"></a>
        <p>Kopertis: Kompetensi Lulusan IBBI Medan Diterima Baik di Dunia Kerja</p>
        <p>TRIBUN-MEDAN.com, MEDAN - Koordinator Kopertis Wilayah I Prof. Drs. Dian Armanto,M.Pd,MA,MSc.,PhD yang diwakili Sekretaris Pelaksana (Sekpel) Dr.Mahyuni M.Hum, mengatakan bahwa sesuai hasil Tracer Study yang dilaporkan Ketua STIE IBBI Medan Prof.Dr.Amrin Fauzi, dimana alumni tahun 2015 sudah 87 persen alumni bekerja, merupakan indikasi bahwa kurikulum yang diimplementasikan STIE IBBI Medan sudah berbasis pasar. Artinya kompetensi lulusannya dapat diterima di dunia kerja dengan baik, karena skill yang diperoleh tidak jauh dengan tuntutan industri...</p>
      </div>
    </div>
    <div class="rightcolumn">
      <div class="card">
        <h2>Dosen STMIK IBBI</h2>
        <a href ="daftar dosen.html"><img src="file:D:\sir akj.jpg" style="width: 200px ; height:300px"></a>
        <p>Anderson King Junior,B.IS.,S.KOM.,M.TI,</p>
      </div>
      <div class="card">
        <h3>ORGANISASI</h3>
        <img src="file:D:\HMK.png" style="width: 200px ; height:200px">
         <p><b><i>Himpunan Mahasiswa Komputer<i><b></p>
  <br>
           <img src="file:D:\imk.jpg" style="width: 200px ; height:200px">
         <p><b><i>Ikatan Mahasiswa Karo<i><b></p>
  <br>
        <img src="file:D:\pmk.jpg" style="width: 200px ; height:200px">
     <p><b><i>Persatuan Mahasiswa Kristen<i><b></p>
  <br>
      </div>
      <div class="card">
        <h3>Call Me</h3>
  <a href="https://api.whatsapp.com/send?phone=6281312494566&text=Hi"><img src="file:D:\wa-logo.png" style="width: 200px ; height:300px"></a>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
