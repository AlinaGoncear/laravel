<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign in</title>

  </head>

  <body class="bg-image">

 <link rel="stylesheet" href="..\materialize\css\materialize.min.css">
 <link rel="stylesheet" href="..\materialize\css\custom.css">
    
</head>

<body>
  <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 250px;" src="/images/logo.png" /> <!-- Project logo -->
      <div class="section"></div>

      <h5 class="white-text">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input placeholder="Username" id="username" type="text" class="validate">

              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input placeholder="Password" class='validate' type='password' name='password' id='password' />
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#'><b>Forgot Password?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect teal darken-2'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a class="white-text" href="#">Create account</a>
    </center>

  </main>

</body>

</html>

