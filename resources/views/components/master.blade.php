<!doctype html>
<html lang="en" dir="ltr">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<!-- Bootstrap Icon CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<!-- AOS (Animate On Scroll) -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="fontawesome/css/all.css" />
<!-- style -->
<link rel="stylesheet" href="css/style.css" />
<title>Yayasan Rumah Quran Cianjur - {{ $page_title }}</title>
</head>
<body>
<x-navbar></x-navbar>
{{ $slot }}

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

<!-- footer -->
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
<!-- /footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<!-- AOS (Animate On Scroll) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>