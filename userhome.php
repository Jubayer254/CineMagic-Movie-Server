<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Userhome</title>
  <link rel="stylesheet" href="css/userhome.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel = "icon" href="img/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <section id="title">
    <div class="container-fluid" id="cf">
        
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar navbar-light bg-light">
    <a class="navbar-brand" href="userhome.php"><i class="fa-solid fa-film"></i> CineMagic</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="userhome.php"><i class="fa-solid fa-house-user"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Movies"><i class="fa-solid fa-clapperboard"></i> Movies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Movies2"><i class="fa-solid fa-video"></i> Series</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Movies3"><i class="fa-solid fa-play"></i> Animations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback.php"><i class="fa-solid fa-comment"></i> Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="req.php"><i class="fa-solid fa-list-check"></i> Request Content</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.html"><i class="fa-solid fa-user"></i> Logout</a>
      </li>
      
    </ul>
    </div>
    </nav>
    
    
    <section id="cta">

        <h3 class="cta-heading">WELCOME TO CINEMAGIC</h3>
        <button type="button"class="btn btn-dark btn-lg downbtn2"><i class="fa-brands fa-apple"></i> Download</button>
        <button type="button"class="btn btn-outline-dark btn-lg downbtn2"><i class="fa-brands fa-google-play"></i> Download</button>

        
    </section>
    
    </div>
    </div>
  </section>

  
    
  <section id="testimonials">
    <div id="testimonials-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000" data-pause="false">
      <div class="carousel-item active"id="dark-overlay">
        <img class="me" src="img/pos/1.jpg" alt="profile">
      </div>
      <div class="carousel-item">
        <img class="me" src="img/pos/2.jpg" alt="profile">
      </div>
      <div class="carousel-item">
        <img class="me" src="img/pos/3.jpg" alt="profile">
      </div>
      <div class="carousel-item">
        <img class="me" src="img/pos/4.jpg" alt="profile">
      </div>
      
      <div class="carousel-item">
        <img class="me" src="img/pos/6.jpg" alt="profile">
      </div>
      <div class="carousel-item">
        <img class="me" src="img/pos/7.jpg" alt="profile">
      </div>
      <div class="carousel-item">
        <img class="me" src="img/pos/8.jpg" alt="profile">
      </div>
      
      <div class="carousel-item">
        <img class="me" src="img/pos/10.jpg" alt="profile">
      </div>
      <div class="carousel-item">
        <img class="me" src="img/pos/11.jpg" alt="profile">
      </div>
      
      <div class="carousel-item">
        <img class="me" src="img/pos/14.jpg" alt="profile">
      </div>
      
      <div class="carousel-item">
        <img class="me" src="img/pos/16.jpg" alt="profile">
      </div>
      <div class="carousel-item">
        <img class="me" src="img/pos/17.jpg" alt="profile">
      </div>
      
      <div class="carousel-item">
        <img class="me" src="img/pos/19.jpg" alt="profile">
      </div>
      <div class="carousel-item">
        <img class="me" src="img/pos/20.jpg" alt="profile">
      </div>
      <div class="carousel-item">
        <img class="me" src="img/pos/21.jpg" alt="profile">
      </div>
      
      <a class="carousel-control-prev" href="#testimonials-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonials-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

      <section id="press">
      <img class="logos1" src="img/Logonetflix.png" alt="logo">
      <img class="logos2" src="img/ap.png" alt="logo">
      <img class="logos3" src="img/Hulu_Logo.svg.png" alt="logo"> 
     </section>
    </div>

    

  </section>

  


  <!-- Movies -->

  <section id="Movies">
    <h2>Movies</h2>
    <p>Find movies according to languages</p>

    <div class="row">
    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch English movies</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">English</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Bangla movies</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Bangla</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Hindi movies</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Hindi</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Korean movies</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Korean</button>
        </div>
    </div>

  </div>

  <div class="row">
    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Tamil movies</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Tamil</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Telugu movies</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Telugu</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/7.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Malayalam movies</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Malayalam</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/8.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Chinese movies</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Chinese</button>
        </div>
    </div>


  </section>

  <section id="Movies2">
    <h2>Series</h2>
    <p>Find series according to languages</p>

    <div class="row">
    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/11.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch English series</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">English</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/12.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Bangla series</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Bangla</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/13.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Hindi series</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Hindi</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/14.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Korean series</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Korean</button>
        </div>
    </div>

  </div>

  <div class="row">
    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/15.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Tamil series</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Tamil</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/16.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Telugu series</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Telugu</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/17.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Malayalam series</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Malayalam</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/18.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Chinese series</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Chinese</button>
        </div>
    </div>


  </section>

  <section id="Movies3">
    <h2>Animations</h2>
    <p>Find animations according to languages</p>
    

    <div class="row">
    <div class="p-col col-lg-3 col-md-12 col-sm-12">
        
    </div>
    <div class="p-col col-lg-3 col-md-12 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/19.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch English animations</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">English</button>
        </div>
    </div>

    <div class="p-col col-lg-3 col-md-12 col-sm-12">
        <div class="card" style="width: 18rem;">
        <img src="img/mov/20.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Click below to watch Japanese animations</p>
        </div>
        <button onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Japanese</button>
        </div>
    </div>
    <div class="p-col col-lg-3 col-md-12 col-sm-12">
        
    </div>

  </div>


  </section>

  


  <!-- Footer -->

  <footer id="footer">
    <a id="icon-fb" href="https://www.facebook.com/jubayer.hossen.254">
      <i class="s-icons fa-brands fa-facebook"></i>
    </a>
    <a id="icon-insta" href="https://www.instagram.com/solanum_tuberosum_007/">
      <i class="s-icons fa-brands fa-instagram"></i>
    </a>
    <a id="icon-mail" href="mailto:jhossen191254@bscse.uiu.ac.bd">
      <i class="s-icons fa-solid fa-envelope" href=""></i>
    </a>
    
    
    <p>© Copyright Cinemagic</p>

  </footer>

  <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6210003b1ffac05b1d7a9c45/1fs781s9h';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
<!--End of Tawk.to Script-->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>