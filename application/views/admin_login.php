<html lang="tr">
  <head>
<title>Giriş Yap</title>
    <link rel="stylesheet " type = "text/css"  href="<?php echo base_url(); ?>css/adminLogin.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-md-3 hidden-md-down">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center vh-100">
          <h1 class="text-center font-weight-bold text-monospace border-bottom">Giriş</h1>
          <br>
          <form action=<?php echo base_url()."admin/main"?> method="post">
            <div class="form-group">
              <label for="username">Kullanıcı Adı</label><br>
              <input class= "form-control"type="text" name="username" id="username"><br>
            </div>
            <div class="form-group">
              <label for="password">Şifre</label><br>
              <input class= "form-control"type="password" name="password" id="password"><br>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-outline-dark p-3" name="button">Giriş Yap</button>

            </div>
          </form>
        </div>
        <div class="col-md-3 hidden-md-down">
        </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
