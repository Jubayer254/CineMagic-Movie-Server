<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
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
        <form class="form">
        <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12" id=col2>
                <div class="logo">
                  <h2><i class="fa-solid fa-film"></i> CineMagic</h2>
                </div>
            <img class= "mov" src="https://media4.giphy.com/media/S84tGkKts8FCKVXrBE/giphy.gif?cid=ecf05e47fd6indq4099m33ens5t2qmus2w5j0x1bvaigitt9&rid=giphy.gif&ct=s" alt="img">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12" id=col1>
        <div id="log-title">
                    <h2>Login</h2>
                </div>
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div class="log-bt form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button onclick="window.location.href='userhome.php'" class="btn btn-lg btn-block btn-info" type="button">Login</button>
                <button onclick="window.location.href='signup.php'" type="button" class="CA btn btn-lg btn-block btn btn-outline-info">Create New Account</button>
                <div class="gap">
                <a class="ret-home" href="index.html"><i class="fa-solid fa-house-user"></i> Return Home</a>
                </div>
              </div>
        </div>
        </div>
        </form>
    </div>
  </section>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>