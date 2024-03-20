<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wotic</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- NavBar Start -->
    <nav class="NavBar">
      <img src="../img/logo.png" alt="logo"></a>

      <div class="navbar-nav">
        <a href="/">Beranda</a>
        <a href="/about">Tentang</a>
        <a href="/event">Event</a>
      </div>

      <div class="navbar-ext">
        <img src="../img/Jtng.png" alt="jtng" height="200%">
        <img src="../img/Wonosobo.png" alt="Wsobo">
        <a href="#" id="Hmenu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- NavBar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>LET'S EXPLORE <span>Wonosobo</span></h1>
        <p>
          Pesan dan jelajahi destinasi baru dengan mudah dari mana saja
        </p>
      </main>
    </section>
    <!-- Hero Section End -->

    <!-- Main Section Start -->
    <section class="main" id="main">
      <div class="search-bar">
        <form action="{{ route('search') }}" method="GET">
          <input type="text" name="q" id="searchInput" placeholder="Cari Destinasi">
          <button type="submit">Cari</button>
        </form>
      </div>

      <div class="Informasi">
        
      </div>
    </section>
    <!-- Main Section End -->
    
    <!-- Feather Icons -->

    <script>
      feather.replace();
    </script>

    <!-- Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
