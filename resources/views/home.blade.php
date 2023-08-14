<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Febyanta Yoga Pratama - Web Developer</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="beranda/css/home.css">
  <!-- Include FontAwesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Crimson+Text:wght@600&family=Indie+Flower&family=Kanit:wght@300;600&family=Roboto+Condensed:wght@300&family=Roboto+Slab:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg" data-aos="fade-down"  data-aos-duration="500">
  <a class="navbar-brand" href="{{url('home')}}" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="700">Febyanta Yoga Pratama</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{url('home')}}" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="900">
          <i class="fas fa-home" "></i> Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-section" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="1100">
          <i class="fa-solid fa-user-secret "></i> About
        </a>
      <li class="nav-item">
        <a class="nav-link" href="#skills-section" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="1300">
          <i class="fa-brands fa-phoenix-framework"></i> Skills
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#education-section" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="1500">
          <i class="fas fa-graduation-cap"></i> Education
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#game-section" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="1700">
          <i class="fa fa-headset"></i> Game
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#portfolio-section" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="1900">
          <i class="fa-laptop fa-solid"></i> Portofolio
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact-section" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="2300">
          <i class="fa-solid fa-envelope-open-text"></i> Contact
        </a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dark-mode" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="2500">
        <div class="dark-mode-toggle">
          <i class="fas fa-moon"></i>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 " data-aos="fade-down" data-aos-duration="900">
        <p class="hello-from animate-from-top">Hello from</p>
        <h1 class="name animate-from-top">Febyanta Yoga Pratama</h1>
        <p class="title animate-from-top">.
          <span id="developer-type"></span>
        </p>
        <p class="description ">Pengembang web yang bersemangat dengan pengalaman dalam membuat situs web yang responsif dan ramah pengguna. Selalu bersemangat untuk belajar dan mengeksplorasi teknologi baru.</p>
        <a href="game.pdf" class="btn btn-primary download-button" data-aos="fade-up" data-aos-duration="900">
        Download CV <i class="fa-solid fa-angles-down"></i> 
      </a>
      </div>
      <div class="col-lg-6">
        <img src="https://i.ibb.co/swn5qLB/33-Modern-Coming-Soon-Poster-removebg-preview.png" alt="Profile Image" class="profile-image" data-aos="zoom-in-left" data-aos-duration="900">
      </div>
    </div>
  </div>
</div>

<div class="scroll-down">
  <a href="#about-section" class="scroll-arrow">
  Scroll down for more <i class="fa-solid fa-arrow-down"></i> 
  </a>  
</div>
</div>



<section id="about-section" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
      <h2 class="section-title">
  <i class="fa-solid fa-user-secret"></i> About Me
</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6" data-aos="fade-right" data-aos-easing="linear"  data-aos-duration="900">
        <div class="about-image">
          <img src="https://i.ibb.co/n6ztZ1w/Whats-App-Image-2023-08-12-at-20-59-32-removebg-preview.png" alt="Profile Image" class="profile-image1">
        </div>
      </div>
      <div class="col-lg-6 mx-auto">
        <div class="about-content">
          <p class="about-description" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="900"><strong>Hi Guys</strong></p>
          <p class="about-description" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="900">
            Saya Febyanta Yoga Pratama, seorang pengembang web yang bersemangat dengan pengalaman dalam membuat situs web yang responsif dan ramah pengguna. Saya suka belajar dan mengeksplorasi teknologi baru untuk meningkatkan keterampilan saya dan memberikan solusi inovatif. Tujuan saya adalah membangun situs web yang fungsional dan menarik secara visual yang memberikan pengalaman pengguna yang luar biasa.
          </p>
          <p class="about-description" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="900">
            Selain itu, saya juga seorang mobile developer dengan kecintaan pada pengembangan aplikasi untuk platform mobile. Saya juga memiliki minat yang besar dalam desain grafis, khususnya dalam menciptakan antarmuka yang indah dan intuitif (UI/UX). Di waktu senggang, saya senang bereksperimen dengan berbagai bahasa dan kerangka kerja pemrograman, serta berkontribusi pada proyek sumber terbuka.
          </p>
          <a href="#contact-section" class="btn btn-primary download-button" data-aos="fade-up-left" data-aos-easing="linear" data-aos-duration="900">
            <i class="fas fa-envelope"></i> Contact Me
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="skills-section" class="skills">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center" data-aos="zoom-in" data-aos-duration="900">
      <h2 class="section-title">
  <i class="fa-brands fa-phoenix-framework"></i> Skills
</h2>
      </div>
      <div class="bullet-images" data-aos="zoom-in-right">
        <div class="tools-text">
          <i class="fa fa-screwdriver-wrench" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="900"></i> Text Tools
        </div>
        <div class="tools-icons">
          <i class="fa-solid fa-gear" data-aos="zoom-in" data-aos-duration="900"></i> Tools
        </div>
          <div class="image-grid">
          <div class="image" >
    <img src="https://i.ibb.co/MBpp2hh/1370503.png" alt="Image 5" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="900">
    <div class="image-name" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="900">Html</div>
   </div>
    <div class="image">
    <img src="https://i.ibb.co/9wmHhx7/1073599.png" alt="Image 5" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1100">
    <div class="image-name" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1100">Css</div>
   </div>
    <div class="image">
    <img src="https://i.ibb.co/nDC57Qr/374972.png" alt="Image 5" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1300">
    <div class="image-name"data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1300">Javascrip</div>
   </div>
   <div class="image">
    <img src="https://i.ibb.co/Z8wf6Gt/laravel-logo.webp" alt="Image 5" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1500">
    <div class="image-name" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1500">Laravel</div>
   </div>
   <div class="image">
    <img src="https://i.ibb.co/WHSBt6b/4846310.png" alt="Image 5" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1700" >
    <div class="image-name" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1700">Node js</div>
   </div>
    <!-- Repeat this pattern for the remaining images -->
    <!-- ... -->
  </div>
  <div class="image-grid1">
    <!-- Repeat this pattern for the next row of images -->
    <div class="image">
    <img src="https://i.ibb.co/wMF08qz/react-js-clipart-8.png" alt="Image 5" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1900">
    <div class="image-name" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1900">React js</div>
   </div>
   <div class="image">
    <img src="https://i.ibb.co/wMQCKZ1/v2-df081aadcb6c5b35b7ae28253875d5a8-b.png" alt="Image 5" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2100">
    <div class="image-name" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2100">Veu js</div>
   </div>
   <div class="image">
    <img src="https://i.ibb.co/4ZXRrdh/nextjs.png" alt="Image 5" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2200">
    <div class="image-name" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2200">Next js</div>
   </div>
   <div class="image">
    <img src="https://i.ibb.co/5sRTfck/php-PNG35.png" alt="Image 5" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2400">
    <div class="image-name" data-aos="zoom-in"  data-aos-easing="linear" data-aos-duration="2400">php</div>
   </div>
   <div class="image">
    <img src="https://i.ibb.co/sVYyHbm/4121171.png" alt="Image 5" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2600">
    <div class="image-name" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2600">api</div>
   </div>
   </div>
   <div class="text-container">
    <div class="border-text">
      <p class="border-text-inner" data-aos="fade-left" data-aos-duration="900"><strong>Tech Stack <br>&amp; Tools</strong></p>
    </div>
    <div class="bottom-text">
      <p class="bottom-text-inner1" data-aos="fade-up" data-aos-duration="900">I have mastered a few <br>skills and am still a beginner</p>
    </div>
  </div>
</div>
  </div>
</section>

<section id="education-section" class="education">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="900">
      <h2 class="section-title">
  <i class="fas fa-graduation-cap"></i> Eduaction
</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="900" >
        <div class="education-image">
          <img src="https://i.ibb.co/r0LCGCX/unmuh-jember-vektor-terbaru.png" alt="Education Image" class="education-image">
        </div>
      </div>
      <div class="col-lg-6 mx-auto">
        <div class="education-content">
          <h3 class="education-title" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="900">Teknik Informatika</h3>
          <p class="education-description" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="900">Universitas Muhamadiyah Jember</p>
          <p class="education-duration" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="900">2023</p>
          <p class="education-details" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="900">
            saya masih maba di Universitas Muhamadiyah Jember. saya kuliah di sana mengambil jurusan Teknik Informatika, saya mengambil jurusan itu untuk belajar lebih tentang pemerograman.
          </p>
        </div>
      </div>
    </div>
    <!-- You can repeat the above structure for each education entry -->
    <!-- ... -->
  </div>
</section>

<section id="game-section" class="game">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="900">
      <h2 class="section-title">
  <i class="fa fa-headset"></i> Game
</h2>
      </div>
    </div>
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1200">
        <div class="game-item">
          <div class="game-image">
            <img src="https://i.ibb.co/xmXtVyF/Cute-Minimalist-Beige-Ghost-Game-Center-Logo-removebg-preview-1.png" alt="Game 1">
          </div>
          <div class="game-text">
            <strong>Top Up All Game</strong>
            <a href="link_to_game_1">
              <div class="play-button">
                <i class="fas fa-play"></i>
                <span>Top Up Sekarang</span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- Game 2 -->
      <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1200">
        <div class="game-item">
          <div class="game-image">
            <img src="https://i.ibb.co/HYyrZ6R/egg-games-e-spor-game-studio-sweet-logo-removebg-preview.png" alt="Game 2">
          </div>
          <div class="game-text">
            <strong>Game Snake</strong>
            <a href="{{url('ular')}}">
              <div class="play-button">
                <i class="fas fa-play"></i>
                <span>Play Now</span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- Game 3 -->
      <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1400">
        <div class="game-item">
          <div class="game-image">
            <img src="https://i.ibb.co/k6L12Rn/Gray-Purple-Simple-Illustrated-Dice-Hoodie-removebg-preview.png" alt="Game 3">
          </div>
          <div class="game-text">
            <strong>Game Dadu</strong>
            <a href="{{url('dadu')}}">
              <div class="play-button">
                <i class="fas fa-play"></i>
                <span>Play Now</span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- Game 4 -->
      <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1600">
        <div class="game-item">
          <div class="game-image">
            <img src="https://i.ibb.co/xmXtVyF/Cute-Minimalist-Beige-Ghost-Game-Center-Logo-removebg-preview-1.png" alt="Game 4">
          </div>
          <div class="game-text">
          <strong>Coming Soon</strong>
            <a href="link_to_game_4">
              <div class="play-button">
                <i class="fas fa-play"></i>
                <span>Play Now</span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- Game 5 -->
      <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1800">
        <div class="game-item">
          <div class="game-image">
            <img src="https://i.ibb.co/xmXtVyF/Cute-Minimalist-Beige-Ghost-Game-Center-Logo-removebg-preview-1.png" alt="Game 5">
          </div>
          <div class="game-text">
          <strong>Coming Soon</strong>
            <a href="link_to_game_5">
              <div class="play-button">
                <i class="fas fa-play"></i>
                <span>Play Now</span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- Game 6 -->
      <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1400">
        <div class="game-item">
          <div class="game-image">
            <img src="https://i.ibb.co/xmXtVyF/Cute-Minimalist-Beige-Ghost-Game-Center-Logo-removebg-preview-1.png" alt="Game 6">
          </div>
          <div class="game-text">
            <strong>Coming Soon</strong>
            <a href="link_to_game_6">
              <div class="play-button">
                <i class="fas fa-play"></i>
                <span>Play Now</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="portfolio-section" class="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="900">
      <h2 class="section-title">
  <i class="fa-laptop fa-solid"></i> Portofolio
</h2>
      </div>
    </div>
    <div class="row">
      <!-- Project 1 -->
      <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="900">
        <div class="portfolio-item">
          <div class="portfolio-image">
            <img src="https://i.ibb.co/GkCRCQJ/Cuplikan-layar-2023-08-14-104049.png" alt="Project 1">
            <a href="link_to_github_project_1" class="github-icon">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <div class="portfolio-text">
            <strong>My Personal Portofolio</strong>
            <p>This project was made using Laravel and is responsive and has a modern web interface</p>
            <div class="portfolio-buttons">
            <a class="btn btn-secondary popup-trigger" data-popup="#popup1">
            <span>Details</span> <i class="fa-solid fa-circle-info"></i>
              </a>
              <a href="link_to_project_1_preview" class="btn btn-primary">
              <span>Preview</span> <i class="fas fa-eye"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Project 2 -->
      <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1200">
        <div class="portfolio-item">
          <div class="portfolio-image">
            <img src="https://i.ibb.co/FbcKfLV/Cuplikan-layar-2023-08-14-104744.png" alt="Project 2">
            <a href="link_to_github_project_2" class="github-icon">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <div class="portfolio-text">
            <strong>Page Top Up games</strong>
            <p>This project was made using Laravel and is responsive and has a modern web interface</p>
            <div class="portfolio-buttons">
            <a class="btn btn-secondary popup-trigger" data-popup="#popup2">
            <span>Details</span> <i class="fa-solid fa-circle-info"></i>
              </a>
              <a href="link_to_project_2_preview" class="btn btn-primary">
              <span>Preview</span> <i class="fas fa-eye"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Project 3 -->
      <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
        <div class="portfolio-item">
          <div class="portfolio-image">
            <img src="https://i.ibb.co/zXSRJwW/Cuplikan-layar-2023-08-14-105004.png" alt="Project 3">
            <a href="link_to_github_project_3" class="github-icon">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <div class="portfolio-text">
            <strong>Food Pages</strong>
            <p>This project was made using Laravel and is responsive and has a modern web interface</p>
            <div class="portfolio-buttons">
            <a class="btn btn-secondary popup-trigger" data-popup="#popup3">
            <span>Details</span> <i class="fa-solid fa-circle-info"></i>
              </a>
              <a href="link_to_project_3_preview" class="btn btn-primary">
              <span>Preview</span> <i class="fas fa-eye"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Project 4 -->
      <!-- Include code for Project 4 here -->
    </div>
  </div>
</section>

<div class="modal" id="popup1">
  <div class="modal-content">
    <span class="close" id="closePopup1">&times;</span>
    <div class="popup-text">
      <div class="popup-image-container">
    <div class="popup-title">
    <strong>My Personal Portofolio</strong>
        <img src="https://i.ibb.co/GkCRCQJ/Cuplikan-layar-2023-08-14-104049.png" alt="Project 3">
      </div>
      <div class="popup-buttons">
        <div class="popup-button">
          <a class="btn btn-secondary img-popup" data-popup="#popup1">
            <img src="https://i.ibb.co/5sRTfck/php-PNG35.png" alt="Project Expository">
            <span>php</span>
          </a>
        </div>
        <div class="popup-button">
          <a class="btn btn-secondary img-popup" data-popup="#popup1">
            <img src="https://i.ibb.co/Z8wf6Gt/laravel-logo.webp" alt="Project Expository">
            <span>Laravel</span>
          </a>
        </div>
      </div>
    </div>
    <div class="popup-content">
    <strong>description</strong>
      <p>Selamat datang di portofolio pribadi saya! Saya adalah seorang pengembang perangkat lunak dengan keahlian dalam pengembangan web menggunakan kerangka kerja Laravel. Saya memiliki hasrat yang mendalam dalam menciptakan solusi teknologi yang bermanfaat dan inovatif.<p>
    </div>
    <div class="popup-buttons">
        <div class="popup-button">
        <a class="btn btn-secondary github-popup" data-popup="#popup1" href="https://github.com/your-username/your-project" target="_blank">
        <i class="fab fa-github"></i> <span>Project Repository</span>
          </a>
        </div>
        <div class="popup-button">
          <a class="btn btn-secondary close-popup" data-popup="#popup1">
            <span>Close</span> 
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="popup2">
  <div class="modal-content">
    <span class="close" id="closePopup2">&times;</span>
    <div class="popup-text">
      <div class="popup-image-container">
    <div class="popup-title">
    <strong>Page Top Up games</strong>
        <img src="https://i.ibb.co/FbcKfLV/Cuplikan-layar-2023-08-14-104744.png" alt="Project 2">
      </div>
      <div class="popup-buttons">
        <div class="popup-button">
          <a class="btn btn-secondary img-popup" data-popup="#popup2">
            <img src="https://i.ibb.co/5sRTfck/php-PNG35.png" alt="Project Expository">
            <span>php</span>
          </a>
        </div>
        <div class="popup-button">
          <a class="btn btn-secondary img-popup" data-popup="#popup2">
            <img src="https://i.ibb.co/Z8wf6Gt/laravel-logo.webp" alt="Project Expository">
            <span>Laravel</span>
          </a>
        </div>
      </div>
    </div>
    <div class="popup-content">
    <strong>description</strong>
      <p>saya juga terlibat dalam pengembangan toko online berbasis Laravel yang memungkinkan pengguna untuk menjelajahi katalog produk, menambahkan produk ke keranjang belanja, dan menyelesaikan pembelian. Sistem ini terintegrasi dengan gateway pembayaran untuk memastikan pengalaman berbelanja yang mulus.</p>
    </div>
    <div class="popup-buttons">
        <div class="popup-button">
        <a class="btn btn-secondary github-popup" data-popup="#popup1" href="https://github.com/your-username/your-project" target="_blank">
        <i class="fab fa-github"></i> <span>Project Repository</span>
          </a>
        </div>
        <div class="popup-button">
          <a class="btn btn-secondary close-popup" data-popup="#popup2">
            <span>Close</span> 
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal" id="popup3">
  <div class="modal-content">
    <span class="close" id="closePopup3">&times;</span>
    <div class="popup-text">
      <div class="popup-image-container">
    <div class="popup-title">
    <strong>Food Pages</strong>
        <img src="https://i.ibb.co/zXSRJwW/Cuplikan-layar-2023-08-14-105004.png" alt="Project 3">
      </div>
      <div class="popup-buttons">
        <div class="popup-button">
          <a class="btn btn-secondary img-popup" data-popup="#popup3">
            <img src="https://i.ibb.co/5sRTfck/php-PNG35.png" alt="Project Expository">
            <span>php</span>
          </a>
        </div>
        <div class="popup-button">
          <a class="btn btn-secondary img-popup" data-popup="#popup3">
            <img src="https://i.ibb.co/Z8wf6Gt/laravel-logo.webp" alt="Project Expository">
            <span>Laravel</span>
          </a>
        </div>
      </div>
    </div>
    <div class="popup-content">
    <strong>description</strong>
      <p>Sebagai bagian dari dedikasi saya terhadap pengembangan web, saya menciptakan sebuah situs web makanan yang memungkinkan pengguna untuk menjelajahi menu makanan, melakukan pemesanan, dan melihat ulasan dari pelanggan lainnya. Proyek ini dibangun menggunakan kerangka kerja Laravel, yang memungkinkan saya mengoptimalkan kinerja dan efisiensi aplikasi.<p>
    </div>
    <div class="popup-buttons">
        <div class="popup-button">
        <a class="btn btn-secondary github-popup" data-popup="#popup1" href="https://github.com/your-username/your-project" target="_blank">
        <i class="fab fa-github"></i> <span>Project Repository</span>
          </a>
        </div>
        <div class="popup-button">
          <a class="btn btn-secondary close-popup" data-popup="#popup3">
            <span>Close</span> 
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="contact-section" class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="900">
        <h2 class="section-title">
          <i class="fa-solid fa-envelope-open-text"></i> Contact 
        </h2>
      </div>
    </div>
    <div class="row">
    <div class="col-lg-6 mx-auto">
        <div class="contact-form" data-aos="fade-right" data-aos-duration="900" data-aos-easing="ease-in-sine">
            <form action="{{ route('send.email') }}" method="post">
                @csrf <!-- CSRF token for Laravel -->
                <div class="form-group" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1200">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1800">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary"  data-aos="fade-up-right" data-aos-easing="linear" data-aos-duration="1200">Send Message</button>
            </form>
        </div>
    </div>

      <div class="col-lg-6">
        <div class="contact-info" data-aos="fade-left" data-aos-duration="900" data-aos-easing="ease-in-sine">
          <h3 data-aos="fade-left" data-aos-easing="linear" data-aos-duration="900">Contact Information</h3>
          <p data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1200"><i class="fas fa-map-marker-alt"></i> Address: Banyuwangi, Glenmore, Tulungrejo</p>
          <p data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500"><i class="fas fa-envelope"></i> Email: febyanta6@gmail.com</p>
          <p data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1800"><i class="fas fa-phone"></i> Phone: 085771756364</p>
          <div class="social-icons">
            <a href="https://www.threads.net/@febyanta__"><i class="fa-solid fa-at" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="900"></i></a>
            <a href="https://twitter.com/Febyanta946692"><i class="fab fa-twitter" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1200"></i></a>
            <a href="https://www.linkedin.com/in/feby-anta-200607288/"><i class="fab fa-linkedin" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500"></i></a>
            <a href="https://www.instagram.com/febyanta__/"><i class="fab fa-instagram" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1800"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer id="aboutus" class="bg-footer">
      <div data-v-10b0ebbe="" class="product-tile__clip-path"></div>
      <div class="pt-5 pb-5" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
          <div class="row" bis_skin_checked="1">
            <div class="col-lg-8 col-sm-8" bis_skin_checked="1">
              <p style="color: var(--font-color);" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="900"><i></i> <strong style="font-size: 30px; font-family: 'Indie Flower', cursive;">About</strong></p>
              <p style="color: var(--font-color); font-family: 'Roboto Condensed', sans-serif;" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="1300">untuk yang mau buat web atau aplikasi bisa hubungin nomer di bawah itu atau bisa kirim email melalui halaman contact saya, bisa request sesuai keinginan kalian mau buat web atau aplikasi seperti apa, di tunggu orderan nya</p>
              <p style="color: var(--font-color);" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="900"><i class="fas fa-envelope pr-3"></i> febyanta6@gmail.com</p>
              <p style="color: var(--font-color);" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1300"><i class="fab fa-whatsapp pr-3"></i> 085771756364</p>
              <hr>
              <ul class="nav mb-3">
                    
              <li class="nav-item">
    <a class="nav-link" href="https://www.tiktok.com/@spacexero_" style="color: var(--font-color);" data-aos="fade-up-right" data-aos-easing="linear" data-aos-duration="900">
        <i class="fab fa-tiktok pr-2" style="width: 20px;"></i> kenshinryu
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="https://www.instagram.com/febyanta__/" style="color: var(--font-color);" data-aos="fade-up-right" data-aos-easing="linear" data-aos-duration="1300">
        <i class="fab fa-instagram pr-2" style="width: 20px;"></i> febyanta_
    </a>
</li>

              </ul>
            </div>
            <div class="col-lg-4 col-sm-4 col-12" bis_skin_checked="1">
              <h5 class="pb-2" style="color: var(--font-color);" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="1300"><strong>Produk Favorit</strong></h5>
              <div class="row">
                                <div class="col-4 mb-2" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="900" >
                    <img src="https://i.ibb.co/gmzMppZ/6024bc5746d7436c727825dc4fc23c22-html-programming-language-icon-by-vexels.png" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                                <div class="col-4 mb-2" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1200">
                    <img src="https://i.ibb.co/9wmHhx7/1073599.png" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                                <div class="col-4 mb-2" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                    <img src="https://i.ibb.co/nDC57Qr/374972.png" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                                <div class="col-4 mb-2" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1800">
                    <img src="https://i.ibb.co/5sRTfck/php-PNG35.png" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                                <div class="col-4 mb-2" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="2100">
                    <img src="https://i.ibb.co/Z8wf6Gt/laravel-logo.webp" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                                <div class="col-4 mb-2" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="2400">
                    <img src="https://i.ibb.co/nLCWbPq/nextjs-removebg-preview.png" class="img-fluid" style="border-radius: 10px; display: block;">
                  </a>
                </div>
                              </div>
            </div>
          </div>

          <div class="pt-5 pb-1" bis_skin_checked="1">
            <div class="row">
              <div class="col-sm-4 pt-2">
              
              </div>
              <div class="col-sm-4">
                <ul class="nav float-right">
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


<!-- Add the pop-up triggers -->
<div class="modal" id="projectModal">
  <a href="#" class="btn btn-secondary popup-trigger" data-popup="#popup1">Open Pop-up 1</a>
  <a href="#" class="btn btn-secondary popup-trigger" data-popup="#popup2">Open Pop-up 2</a>
  <a href="#" class="btn btn-secondary popup-trigger" data-popup="#popup3">Open Pop-up 3</a>
</div>

<!-- Include Bootstrap JS (optional) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="beranda/js/beranda.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  const popupTriggers = document.querySelectorAll('.popup-trigger');

  popupTriggers.forEach(trigger => {
    const popupId = trigger.getAttribute('data-popup');
    const popup = document.querySelector(popupId);
    const closePopup = popup.querySelector('.close');

    trigger.addEventListener('click', () => {
      popup.style.display = 'block';
    });

    closePopup.addEventListener('click', () => {
      popup.style.display = 'none';
    });

    window.addEventListener('click', event => {
      if (event.target === popup) {
        popup.style.display = 'none';
      }
    });
  });
</script>
</body>
</html>
