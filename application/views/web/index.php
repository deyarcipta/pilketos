<?php
foreach ($jmlvote as $votedata) {
}
?>

<body id="home" class="content danger">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed">
    <div class="container">
      <!-- Header -->
      <div class="navbar-header">
        <a href="#" class="navbar-brand">
          <img class="logo" src="<?php echo base_url(); ?>asset/img/web/logo55.png" />
          <h1>Pilkasis</h1>
          <h2>SMK Wisata Indonesia</h2>
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#zero-menu" aria-expanded="true" id="toggle-button">
          <span class="sr-only">Menu Utama</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <!-- End Header -->
      <!-- Menu Navigation -->
      <div class="navbar-collapse collapse" id="zero-menu" aria-expanded="true">
        <ul class="nav navbar-right">
          <li>
            <a href="#home" rel="page-scroll">Beranda</a>
          </li>
          <li>
            <a href="#kandidat" rel="page-scroll" title="Kandidat Ketua OSIS">Kandidat</a>
          </li>
          <li>
            <a href="#galeri" rel="page-scroll" title="Galeri Kegiatan OSIS">Galeri</a>
          </li>
          <li>
            <a href="#osis" rel="page-scroll" title="Personil OSIS Sekarang">OSIS</a>
          </li>
          <!-- <li>
            <a href="#login" rel="page-scroll" title="Login Sebagai ...">Login</a>
          </li> -->
          <li>
            <a href="#contact" rel="page-scroll" title="Hubungi Kami">Hubungi</a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>/user" type="button" class="btn btn-primary" style="margin-left: 20px; width:120%; background-color:#6495ED; border-radius:25px;">Login</a>
          </li>
        </ul>
      </div>
      <!-- End Menu Navigation -->
    </div>
  </nav>
  <!-- End Navigation -->

  <!-- Cover -->
  <div class="cover">
    <div class="cover-overlay">
      <div class="col-lg-7 col-sm-7 col-xs-12 box-title">
        <h1>Pilkasis<span class="color-title"> SMK Wistin</span></h1>
        <h2>Pemilihan Ketua OSIS SMK Wisata Indonesia (SMK WISTIN)</h2>
      </div>
    </div>
  </div>
  <!-- End Cover -->

  <!-- CONTENT -->
  <div class="row content" id="kandidat">
    <div class="col-md-12 danger text-center zero-panel">
      <div class="col-md-8 zero-panel-content">

        <?php if ($votedata['jumlah'] != 0) { ?>
          <h1 id="title-about"> HASIL SEMENTARA PILKETOS </h1>
          <?php foreach ($vote as $datavote) { ?>
            <div class="col-md-6 text-justify col-sm-6" id="text-about-left">
              <center>
                <h3>Kandidat <?= $datavote['no'] ?> <br> <?= $datavote['nama'] ?></h3>
                <img src="<?php echo base_url(); ?>asset/img/<?= $datavote['photo']; ?>" class="img-circle" height="150px" width="150px" alt id="img-about<?= $datavote['no'] ?>">
                <h2><?= round(($datavote['jumlah'] / $votedata['jumlah'] * 100), 2) ?>%</h2>
                <p>Jumlah Pemilih : <?= $datavote['jumlah'] ?></p>
                <!-- <iframe width="420" height="315" src="<?= $datavote['video'] ?>"> -->
              </center>
              <!-- <span style="font-weight:bold; font-size:18px; text-transform:uppercase;">Visi :</span> <br>
              <p style="font-size: 16px; padding-left:22px"><?= $datavote['visi'] ?></p>
              <span style="font-weight:bold; font-size:18px; text-transform:uppercase;">Misi :</span> <br>
              <p style="font-size: 16px;"><?= $datavote['misi'] ?></p> -->
            </div>
          <?php } ?>
        <?php } else { ?>
          <h1 id="title-about"> KANDIDAT KETUA OSIS </h1>
          <?php foreach ($datacalon as $calon) { ?>
            <div class="col-md-6 text-justify col-sm-6" id="text-about-left">
              <center>
                <h3>Kandidat <?= $calon['no'] ?> <br> <?= $calon['nama'] ?></h3>
                <!-- <img src="<?php echo base_url(); ?>asset/img/<?= $calon['photo']; ?>" class="img-circle" height="150px" width="150px" alt id="img-about<?= $calon['no'] ?>"> -->
                <iframe width="100%" height="300" src="<?= $calon['video'] ?>"></iframe>
              </center>
              <!-- <span style="font-weight:bold; font-size:18px; text-transform:uppercase;">Visi :</span> <br>
              <p style="font-size: 16px; padding-left:22px"><?= $calon['visi'] ?></p>
              <span style="font-weight:bold; font-size:18px; text-transform:uppercase;">Misi :</span> <br>
              <p style="font-size: 16px;"><?= $calon['misi'] ?></p> -->
            </div>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
  </div>

  <!-- GALLERY -->
  <div class=" row content" id="galeri">
    <div class="col-md-12 primary text-center zero-panel">
      <div class="col-md-8 zero-panel-content">
        <h1> GALERI KEGIATAN OSIS </h1>
        <p>
          Inilah beberapa kegiatan OSIS yang terdokumentasikan. Silahkan klik untuk tampilan secara rinci.
        </p>
      </div>
      <div class="col-md-4 col-sm-6 gallery">
        <a class="gallery-link" href="#">
          <div class="caption">
            <div class="caption-content danger">
              <span>Upacara HUT RI 76 Th</span>
            </div>
          </div>
          <img src="<?php echo base_url(); ?>asset/img/web/upacara.jpg" class="img-responsive" alt>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 gallery">
        <a class="gallery-link" href="#">
          <div class="caption">
            <div class="caption-content danger">
              <span>Study Telkom Bandung</span>
            </div>
          </div>
          <img src="<?php echo base_url(); ?>asset/img/web/telkom.jpg" class="img-responsive" alt>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 gallery">
        <a class="gallery-link" href="#">
          <div class="caption">
            <div class="caption-content danger">
              <span>Ujian Tengah Semester</span>
            </div>
          </div>
          <img src="<?php echo base_url(); ?>asset/img/web/galeri3.jpg" class="img-responsive" alt>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 gallery">
        <a class="gallery-link" href="#">
          <div class="caption">
            <div class="caption-content danger">
              <span>Workshop Depicta 2016</span>
            </div>
          </div>
          <img src="<?php echo base_url(); ?>asset/img/web/galeri2.jpg" class="img-responsive" alt>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 gallery">
        <a class="gallery-link" href="#">
          <div class="caption">
            <div class="caption-content danger">
              <span>Sertijab 2014</span>
            </div>
          </div>
          <img src="<?php echo base_url(); ?>asset/img/web/galeri4.jpg" class="img-responsive" alt>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 gallery">
        <a class="gallery-link" href="#">
          <div class="caption">
            <div class="caption-content danger">
              <span>Nuzulul Qur'an</span>
            </div>
          </div>
          <img src="<?php echo base_url(); ?>asset/img/web/galeri6.jpg" class="img-responsive" alt>
        </a>
      </div>

      <div class="clear"></div>
    </div>
  </div>
  <!-- END GALLERY -->

  <!-- TEAM -->
  <div class="row content" id="osis">
    <div class="col-md-12 primary zero-panel text-center">
      <div class="col-md-12 zero-panel-content">
        <h1>PERSONIL OSIS</h1>
        <p>Inilah personil OSIS periode 2020-2021</p>
        <div class="col-md-3 col-sm-6">
          <div class="gallery-author">
            <img src="<?php echo base_url(); ?>asset/img/web/ketua.jpeg" class="img-responsive" alt>
            <div class="caption danger">
              <div class="caption-content">
                <span>Audytya putri syahrani</span>
                <br>
                <small>Ketua OSIS</small>
              </div>

            </div>
            <div class="author-toolbar danger">
              <i class="fa fa-instagram icon-border"></i>
              <i class="fa fa-youtube icon-border"></i>
              <i class="fa fa-facebook icon-border"></i>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="gallery-author">
            <img src="<?php echo base_url(); ?>asset/img/web/wakil.jpeg" class="img-responsive" alt>
            <div class="caption danger">
              <div class="caption-content">
                <span>Bastian Pamungkas Kaian</span>
                <br>
                <small>Wakil Ketua</small>
              </div>
            </div>
            <div class="author-toolbar danger">
              <i class="fa fa-instagram icon-border"></i>
              <i class="fa fa-youtube icon-border"></i>
              <i class="fa fa-facebook icon-border"></i>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="gallery-author">
            <img src="<?php echo base_url(); ?>asset/img/web/sekertaris.jpeg" class="img-responsive" alt>
            <div class="caption danger">
              <div class="caption-content">
                <span>Dwi Novitasari</span>
                <br>
                <small>Sekretaris</small>
              </div>

            </div>
            <div class="author-toolbar danger">
              <i class="fa fa-instagram icon-border"></i>
              <i class="fa fa-youtube icon-border"></i>
              <i class="fa fa-facebook icon-border"></i>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="gallery-author">
            <img src="<?php echo base_url(); ?>asset/img/web/bendahara.jpeg" class="img-responsive" alt>
            <div class="caption danger">
              <div class="caption-content">
                <span>Fara Dilla Nanda</span>
                <br>
                <small>Bendahara Umum</small>
              </div>

            </div>
            <div class="author-toolbar danger">
              <a href="https://www.instagram.com/deyarcipta3/" style="color:white;"><i class="fa fa-instagram icon-border"></i></a>
              <a href="https://www.youtube.com/c/DeyarCipta" style="color:white;"><i class="fa fa-youtube icon-border"></i></a>
              <i class="fa fa-facebook icon-border"></i>
            </div>
          </div>
        </div>

        <div class="clear"></div>

        <div class="col-md-8 zero-panel-content">
          <div class="quote">
            Silahkan sampaikan masukan anda untuk perbaikan program PILKASIS kedepannya
          </div>
          <a href="#contact" rel="page-scroll" class="btn btn-lg btn-outline color-white">MASUKAN</a>
        </div>
        <br>
      </div>
    </div>
  </div>
  <!-- END TEAM -->

  <!-- CONTACT -->
  <div class="row content" id="contact">
    <div class="col-md-12 danger text-center zero-panel">
      <div class="col-md-12 zero-panel-content">
        <h1> HUBUNGI KAMI </h1>
        <p>JL. Raya Lenteng Agung RT.004/RW.003, Kebagusan, Kec. Ps. Minggu, Kota Jakarta Selatan, DKI Jakarta 12520</p>
        <div class="col-md-6 text-left">
          <form id="box-contact" action="kontak.php" method="post">
            <div class="form-group">
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
              <input type="email" name="surel" class="form-control" placeholder="Email/Surel">
            </div>
            <div class="form-group">
              <input type="text" name="web" class="form-control" placeholder="Web/Blog">
            </div>
            <div class="form-group">
              <input type="text" name="judul" class="form-control" placeholder="Judul">
            </div>
            <div class="form-group">
              <textarea class="form-control" name="pesan" placeholder="Isi Pesan" rows=9></textarea>
            </div>
            <div class="form-group">
              <center>
                <input type="submit" value="KIRIM" class="btn btn-lg btn-outline btn-full">
              </center>
            </div>
          </form>
        </div>

        <!-- MAP CONTACT -->
        <div class="col-md-6 text-left">
          <br>
          <div class="col-md-12 default" style="min-height: 450px;" id="box-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.633856680399!2d106.83375241419444!3d-6.31173736352277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edee70aeb597%3A0x3c33aa85fd86d917!2sSMK%20WISATA%20INDONESIA%20%7BSekolah%20Menengah%20Kejuruan%7D!5e0!3m2!1sid!2sid!4v1631013930804!5m2!1sid!2si" width="100%" height="70%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <!-- END CONTACT -->
  <!-- END CONTENT -->

  <footer class="primary text-center">
    <div class="row">
      <div class="col-md-4">
        <h3>PILKETOS</h3>
        <p>
          Teknik Komputer & Jaringan <?php echo date('Y'); ?> <a href="#" target="_blank">Wistek</a> V.1 <br><a href="http://muhidin.web.id" target="_blank">Tampilan Web</a>
        </p>
      </div>
      <div class="col-md-4">
        <h3>TEMUKAN KAMI</h3>
        <a href="#" target="_blank" class="btn btn-xs btn-outline"><i class="fa fa-facebook fa-2x"></i></a>
        <a href="#" target="_blank" class="btn btn-xs btn-outline"><i class="fa fa-google-plus fa-2x"></i></a>
        <a href="#" target="_blank" class="btn btn-xs btn-outline"><i class="fa fa-twitter fa-2x"></i></a>
      </div>
      <div class="col-md-4">
        <h3>LOKASI</h3>
        <p>
          JL. Raya Lenteng Agung RT.004/RW.003, Kebagusan, Kec. Ps. Minggu, Jakarta Selatan, DKI Jakarta 12520
        </p>
      </div>
    </div>
  </footer>

  <!-- MODAL -->
  <div class="zero-modal">
    <div class="close-modal">&times;</div>
    <div class="modal-content">
      <div class="modal-body">
        <div class="col-md-6 contain">
          <h1 class="title">PROJECT TITLE</h1>
          <div class="box-modal">
            <p>Mentafakuri Ayat-ayat di Alam Semesta, Korelasi Rumus Fisika dan Ayat Al-Qur'an" itulah Materi Sanlat Selasa, 13 Juni 2017 yang diikuti oleh seluruh siswa/i SMA PRO Kelas 10 dan 11, pemateri disampaikan oleh Bapak Ryksa Raharja, M.Pd.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MODAL -->