<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="/style.css">
<head>
 <title>{{ config('app.name') }}</title>
</head>

<body>
    <!-- Navbar -->
    <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
            <h1>Ailsa's</h1>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="/home" data-after="Home">Home</a></li>
            <li><a href="/about" data-after="About">About</a></li>
            <li><a href="/project" data-after="Project">Experiences</a></li>
            <li><a href="/education" data-after="Contact">Education</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Navbar -->

      @yield('content')
    


    <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1>Ailsa Isnani Anubhawa</h1>
      </div>
      <h2>Vocational Faculty of Gadjah Mada University</h2>
    </div>
  </section>



</body>