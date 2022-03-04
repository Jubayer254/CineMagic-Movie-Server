<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Adminhome</title>
  <link rel="stylesheet" href="css/adminhome.css">
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
        <a class="nav-link" href="adminhome.php"><i class="fa-solid fa-house-user"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addcontents.php"><i class="fa-solid fa-plus"></i> Add Content</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-xmark"></i> Remove Content</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-comment"></i> View Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-list-check"></i> Requested Contents</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://dashboard.tawk.to/#/dashboard/620fecc01ffac05b1d7a99a7"><i class ="fa-brands fa-rocketchat"></i> Live Chat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminsignup.php"><i class="fa-solid fa-address-book"></i> Create New Admin</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.html"><i class="fa-solid fa-user"></i> Logout</a>
      </li>
      
    </ul>
    </div>
    </nav>
    
    
    <section id="cta">
        <h3 class="cta-heading">WELCOME ADMIN</h3>
        
    </section>
    </div>
    </div>
  </section>

    
  

  


  <!-- Movies -->

  <section id="Movies">
    <section id="press">
      <img class="logos1" src="img/Logonetflix.png" alt="logo">
      <img class="logos2" src="img/ap.png" alt="logo">
      <img class="logos3" src="img/Hulu_Logo.svg.png" alt="logo"> 
    </section>

    <div class="row">

    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-plus"></i> Add Content</h5>
        <a href="addcontents.php" class="btn btn-lg btn-block btn btn-warning downbtn2">Click Here</a>
        </div>
        </div>
    </div>

    <div class="p-col col-lg-4 col-md-6 col-sm-12">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-xmark"></i> Remove Content</h5>
        <a href="#" class="btn btn-lg btn-block btn btn-danger downbtn2">Click Here</a>
        </div>
        </div>
    </div>

    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-comment"></i> View Feedback</h5>
        <a href="#" class="btn btn-lg btn-block btn btn-info downbtn2">Click Here</a>
        </div>
        </div>
    </div>

    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-list-check"></i> Requested Contents</h5>
        <a href="#" class="btn btn-lg btn-block btn btn-secondary downbtn2">Click Here</a>
        </div>
        </div>
    </div>
    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class ="fa-brands fa-rocketchat"></i> Live Chat</h5>
        <a href="https://dashboard.tawk.to/#/dashboard/620fecc01ffac05b1d7a99a7" class="btn btn-lg btn-block btn btn-success downbtn2">Click Here</a>
        </div>
        </div>
    </div>

    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-address-book"></i> Create New Admin</h5>
        <a href="adminsignup.php" class="btn btn-lg btn-block btn btn-dark downbtn2">Click Here</a>
        </div>
        </div>
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>