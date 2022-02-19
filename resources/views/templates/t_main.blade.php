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
<!-- Font Awesome -->
<link rel="stylesheet" href="fontawesome/css/all.css" />
<!-- style -->
<link rel="stylesheet" href="css/style.css" />
<title>Yayasan Rumah Quran Cianjur - {{ $page_title }}</title>
</head>
<body>

  @include('partials.navbar')

  <div class="container">
    @yield('container')
  </div>

  <!-- Event -->
  <section id="event" class="event p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/event/event.jpg" class="img-fluid rounded shadow-lg" alt="Event">
        </div>
        <div class="col-md-6">
          <i class="fas fa-user-graduate fs-1 mb-3"></i> <br>
          <h2>Event Edukatif untuk Santri</h2>
          <hr class="w-25 event-hr">
          <p>Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-danger">Read More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /Event -->

  <div class="container">
    @yield('staff')
  </div>

  <div class="container">
    @yield('contact')
  </div>

  <footer id="footer" class="footer">
    @yield('footer')
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>