<?php
function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Sistem Informasi Masjid Agung<span> Nur Sulaiman</span></h2>
          <p>Sipendal merupakan sebuah sistem yang digunakan untuk penitipan sandal
            pengunjung di Masjid Agung Nur Sulaiman Banyumas, untuk menghindari terjadinya pertukaran sandal. Yang dapat dipantau melalui website
          </p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
            <img src="style/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>
    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="ti-alarm-clock"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Buka 24 jam</a></h4>
            </div>
          </div>
          <!-- Icon Box -->
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="ti-book"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Kajian Rutinan</a></h4>
            </div>
          </div>
          <!-- Icon Box -->
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="ti-location-pin"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lokasi strategis</a></h4>
            </div>
          </div>
          <!-- Icon Box -->
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="ti-car"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Parkir Luas</a></h4>
            </div>
          </div>
          <!-- Icon Box -->
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Hero Section -->


<div class="recent_news_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Berita Masjid</h3>

                </div>
            </div>
        </div>
        <div class="row">



            <?php foreach ($berita->result() as $row) : ?>
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" alt="<?php echo $row->tulisan_judul; ?>">
                            </a>
                            <span class="badge"><?php echo $row->tulisan_kategori_nama; ?></span>
                        </div>
                        <div class="news_info">
                            <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">
                                <h4><?php echo $row->tulisan_judul; ?></h4>
                            </a>
                            <p><?php echo limit_words($row->tulisan_isi, 10) . '...'; ?></p>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> <?php echo $row->tanggal; ?></span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!--/ service_area_start  -->

<!-- popular_program_area_start  -->
<div class="popular_program_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>Pengumuman Masjid</h3>
                </div>
            </div>
        </div>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">




                    <?php foreach ($pengumuman->result() as $row) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/1.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span><?php echo $row->tanggal; ?></span>
                                    <h4><a href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a></h4>
                                    <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>
                                    <a href="<?php echo site_url('pengumuman'); ?>" class="boxed-btn5">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>



                </div>
            </div>



        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="course_all_btn text-center">
                    <a href="<?php echo site_url('pengumuman'); ?>" class="boxed-btn4">Lihat Semua Pengumuman</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular_program_area_end -->

<!-- latest_coures_area_start  -->

<!--/ latest_coures_area_end -->

<!-- recent_event_area_strat  -->
<div class="recent_event_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Agenda Masjid</h3>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">


                <?php foreach ($agenda->result() as $row) : ?>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span><?php echo date("d", strtotime($row->agenda_tanggal)); ?></span>
                            <p><?php echo date("M. y", strtotime($row->agenda_tanggal)); ?></p>
                        </div>
                        <div class="event_info">
                            <a href="<?php echo site_url('agenda'); ?>">
                                <h4><?php echo $row->agenda_nama; ?></h4>
                            </a>
                            <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>