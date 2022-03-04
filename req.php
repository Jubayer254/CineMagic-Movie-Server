<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Request Content</title>
  <link rel="stylesheet" href="css/feedback.css">
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
        <a class="nav-link" href="userhome.php"><i class="fa-solid fa-clapperboard"></i> Movies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="userhome.php"><i class="fa-solid fa-video"></i> Series</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="userhome.php"><i class="fa-solid fa-play"></i> Animations</a>
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

        <h3 class="cta-heading">Request Content</h3>
        <form>
        <div class="form-group" id="feedarea">
            <label for="name">Content Name</label>
            <input type="name" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Content Name" required>
        </div>
        <div class="form-group">
                  <label for="name">Content Type</label>
                  <select class="form-control" name="type">
                    <option value="Movie">Movie</option>
                    <option value="Series">Series</option>
                    <option value="Animation">Animation</option>
                  </select>
        </div>
        <div class="form-group">
                  <label for="name">Language</label>
                  <select class="form-control" name="lang">
                    <option value="English">English</option>
                    <option value="Bangla">Bangla</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Korean">Korean</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Telugu">Telugu</option>
                    <option value="Malayalam">Malayalam</option>
                    <option value="Chinese">Chinese</option>  
                  </select>
        </div>
        <div class="form-group">
        <label for="name">Poster</label>
        <input type="file" class="form-control" name ="img" aria-describedby="emailHelp" required>
        </div>
        <button type="submit"class="btn btn-lg btn-block btn btn-info downbtn2">Submit</button>
        </form>

    </section>
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