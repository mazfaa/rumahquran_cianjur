@extends('templates.t_main')

@section('container')
  <!-- Carousel -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/santri/carousel_1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/santri/carousel_2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/santri/carousel_3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/santri/carousel_4.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/santri/carousel_5.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/santri/carousel_6.jpg" class="d-block w-100" alt="...">
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
        </div>
      </div>
    </div>
  <!-- /Carousel -->

  <!-- Student Achievement -->
    <section id="achievement" class="achievement text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center"><i class="fas fa-trophy"></i> Prestasi Santri</h2>
          </div>
        </div>
  
          <div class="row mt-5">
            <div class="col-md-4">
              <div class="card shadow">
                <img src="img/prestasi/prestasi-1.jpg" class="card-img-top prestasi-1" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Juara 1 MHQ Internasional</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadow">
                <img src="img/prestasi/prestasi-2.jpg" class="card-img-top prestasi-2" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Juara 1 MTQ Internasional</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadow">
                <img src="img/prestasi/prestasi-3.jpg" class="card-img-top prestasi-3" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Juara 1 Tahsin Quran</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Read More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row my-5">
            <div class="col-md-4 mx-auto">
              <a href="" class="btn btn-danger">Semua Prestasi &raquo;</a>
            </div>
          </div>
      </div>
    </section>
  <!-- /Student Achievement -->


  <!-- Student Achievement Targets -->
    <section id="ach-target" class="ach-target text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2><i class="bi bi-card-checklist"></i> Target Pencapaian Santri</h2>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-4">
            <div class="card shadow p-4 quran">
              <div class="card-body">
                <i class="fas fa-quran fs-1 mb-3"></i>
                <h5 class="card-title">Khatam Hafalan 30 Juz</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow p-4 ilmu-ulama">
              <div class="card-body">
                <i class="fas fa-book-open fs-1 mb-3"></i>
                <h5 class="card-title">Menguasai Ilmu Keulamaan</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow p-4 beasiswa-card">
              <div class="card-body">
                <i class="fas fa-star fs-1 mb-3"></i>
                <h5 class="card-title">Meraih Beasiswa</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- /Student Achievement Targets -->

  <!-- Second Carousel -->
  <section id="second-carousel" class="second-carousel">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="second_carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#second_carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#second_carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#second_carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#second_carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/second_carousel/carousel-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/second_carousel/carousel-2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/second_carousel/carousel-3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/second_carousel/carousel-4.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#second_carousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#second_carousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- /Second Carousel -->

<!-- Latest Article -->
<section id="article" class="article text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center"><i class="fas fa-newspaper"></i> Artikel Terbaru</h2>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card shadow">
          <img src="img/artikel/artikel-1.jpg" class="card-img-top artikel-1" alt="...">
          <div class="card-body">
            <h5 class="card-title">Metode Menghafal Quran</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-danger">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow">
          <img src="img/artikel/artikel-2.jpg" class="card-img-top artikel-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ilmu Fardhu 'Ain</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-danger">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow">
          <img src="img/artikel/artikel-3.jpg" class="card-img-top artikel-3" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mengikat ilmu agar selalu terjaga</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-danger">Read More</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row my-5">
      <div class="col-md-4 mx-auto">
        <a href="" class="btn btn-danger">Semua Artikel &raquo;</a>
      </div>
    </div>
  </div>
</section>
<!-- /Latest Article -->

<!-- Latest News -->
<section id="article" class="article text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center"><i class="bi bi-newspaper"></i> Berita Terbaru</h2>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card shadow">
          <img src="img/berita/berita-1.jpg" class="card-img-top artikel-1" alt="...">
          <div class="card-body">
            <h5 class="card-title">Acara Maulid Nabi Muhammad</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-danger">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow">
          <img src="img/berita/berita-2.jpg" class="card-img-top artikel-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Akselerasi Ramadhan</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-danger">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow">
          <img src="img/berita/berita-3.jpg" class="card-img-top artikel-3" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pembukaan Cabang RQDF</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-danger">Read More</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row my-5">
      <div class="col-md-4 mx-auto">
        <a href="" class="btn btn-danger">Semua Berita &raquo;</a>
      </div>
    </div>
  </div>
</section>
@endsection

@section('staff')
  <!-- Staff -->
    <section id="staff" class="staff">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2><i class="fas fa-chalkboard-teacher"></i> Staff Guru</h2>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-4">
            <img src="img/guru/guru-1.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-4">
            <img src="img/guru/guru-2.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-4">
            <img src="img/guru/guru-3.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  <!-- /Staff -->
@endsection

@section('contact')
  <!-- Contact Us -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center hubungi-kami-h2"><i class="fas fa-phone-alt"></i> Hubungi Kami</h2>
        </div>
        <div class="row mx-auto">
          <div class="col-md-12">
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Nama">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Alamat Email</label>
              <input type="email" class="form-control" id="email" autocomplete="off" placeholder="Alamat Email">
              <div id="emailHelp" class="form-text">Kami tidak akan pernah membagikan email Anda dengan orang lain.</div>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea class="form-control" id="message" rows="10" style="resize: none"></textarea>
            </div>
            <div class="row">
              <div class="col-md-4">
                <button type="submit" class="btn btn-danger">Kirim</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- /Contact Us -->
@endsection

<!-- footer -->
@section('footer')
<footer id="footer" class="footer p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <img src="img/logo/logo.png" alt="logo-rqdf" class="footer-logo text-center mx-auto">
        <p class="tag-line mt-4">Rumah Quran Darul Falah tempat untuk belajar Quran - Language - Science dari guru yang berpengalaman di bidangnya masing-masing.</p>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-4">
        <h5>Alamat Pusat</h5>
        <p>Jln. Ir. H. Juanda Gg. Bali (Depan Plaza Telkom) No. 897, Selakopi, Desa/Kelurahan Bojong Herang Kec. Cianjur, Kab. Cianjur, Jawa Barat. 43216</p>
        <h5>Kontak</h5>
        <p>Telp : +62 812-1454-4756 <br> WhatsApp : +62 812-1454-4756 <br> Telegram : +62 812-1454-4756 <br> Email : rumahqc@gmail.com </p>
      </div>
  </div>

  <hr class="footer-hr">

  <div class="row">
    <div class="col-md-6">
      <p class="copyright">Copyright &copy; 2021. Rumah Quran Darul Falah Cianjur.</p>
    </div>
    <div class="col-md-6">
      <ul class="sosmed-nav">
        <li>
          <a href="" class="text-danger">
            <i class="fab fa-whatsapp"></i>
          </a>
        </li>
        <li>
          <a href="https://instagram.com/rumahqurancianjur?utm_medium=copy_link" target="_blank" class="text-danger">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/channel/UCQB5iurcAqfaODdgqcYe8qQ" target="_blank" class="text-danger">
            <i class="fab fa-youtube"></i>
          </a>
        </li>
        <li>
          <a href="" class="text-danger">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li>
          <a href="" class="text-danger">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li>
          <a href="" class="text-danger">
            <i class="fab fa-telegram-plane"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>
@endsection
<!-- /footer -->