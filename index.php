<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PHP Learning">
    <meta name="author" content="@romulotil">
    <link rel="icon" href="/favicon.ico">
    <title>PHP Learning</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="styles/style.css" type="text/css" />
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">PHP Learning</a>
        </div>
      </div>
      </div>
    </nav>

    <div class="container">
      <div class="starter-template">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
              <form class="login-form" method="POST" action="">
                <h2>LOG IN</h2>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" placeholder="Email" class="form-control clean-input" required="required" />
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" placeholder="Password" class="form-control clean-input" required="required" />
                </div>
                <div style="text-align: right">
                  <button type="submit" class="btn btn-primary clean-button" style="width: 70px;">Login</button>
                </div>
              </form>
            </div>
            <div class="col-md-3">
              <form method="POST" action="" class="signup-form">
                <h2>SIGN UP</h2>
                <div class="form-group">
                  <label for="signName">Name</label>
                  <input type="text" class="form-control clean-input" id="signName" placeholder="Enter your name..." required="required">
                </div>
                <div class="form-group">
                  <label for="signBirth">Birthday</label>
                  <input type="date" class="form-control clean-input" id="signBirth" placeholder="Enter your name...">
                </div>
                <div class="form-group">
                  <label for="signCountry">Country</label>
                  <select id="signCountry" class="form-control clean-input" placeholder="Select your country...">
                    <option>Select your country...</option>
                    <option>Brazil</option>
                    <option>Uruguay</option>
                    <option>Argentina</option>
                    <option>Paraguay</option>
                    <option>Chile</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="signMail">Email</label>
                  <input type="email" class="form-control clean-input" id="signMail" placeholder="Enter a valid email..." required="required">
                </div>
                <div class="form-group">
                  <label for="signPass">Password</label>
                  <input type="password" class="form-control clean-input" id="signPass" placeholder="Enter a password..." required="required">
                </div>
                <div class="form-group">
                  <label for="signPassConf">Confirm Password</label>
                  <input type="password" class="form-control clean-input" id="signPassConf" placeholder="Confirm password..." required="required">
                </div>
                <div style="text-align: right">
                  <button type="submit" class="btn btn-primary clean-button" style="width: 100px;">Sign Up</button>
                </div>
              </form>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>

</html>