<!doctype html>
<html lang="en">
    <!-- Mirrored from www.eakroko.de/neat/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:11:59 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Budgies</title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <!-- <body class='login_body'>
        <div class="wrap">
            
           
    



                <div class="login">

                    <div class="email">
                        <label for="user">Email</label><div class="email-input"><div class="control-group"><div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><input type="text" id="user" name="user" class="{required:true}"></div></div></div>
                    </div>
                    <div class="pw">
                        <label for="pw">Password</label><div class="pw-input"><div class="control-group"><div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><input type="password" id="pw" name="pw" class='{required:true}'></div></div></div>
                    </div>

                    <div class="pw">
                        <label for="pw">Role</label><div class="pw-input"><div class="control-group"><div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><select name="type" class='{required:true}'>
                                        <option>Select Role</option>
                                        <option>Teacher</option>
                                        <option>Student</option>
                                        <option>Admin</option>

                                    </select></div></div></div>
                    </div>

                    <div class="pw">
                        <label for="pw">Role</label>
                        <div class="pw-input">
                            <div class="control-group">
                                <div class="input-prepend">
                                    <span class="add-on">
                                        <i class="icon-lock"></i>
                                    </span> 
                                    <select name="type" class='{required:true}'>
                                        <option>Select Role</option>
                                        <option>Teacher</option>
                                        <option>Student</option>
                                        <option>Admin</option>

                                    </select> </div>
                            </div>
                        </div>
                    </div> 
                    <div class="remember">
                        <label class="checkbox">
                            <input type="checkbox" value="1" name="remember"> Remember me on this computer
                        </label>
                    </div>


                    <div class="submit">

                        <button class="btn btn-red5">Login</button>
                    </div>
                    <div class="login social">
                        <div class="btn-row">
                            <a href="#" class="btn btn-social btn-twitter"><img src="img/twitter.png" alt="">Sign in with Twitter</a>
                            <a href="#" class="btn btn-social btn-fb"><img src="img/facebook.png" alt="">Sign in with Facebook</a>
                        </div>

                    </div>
            </form>


            <div class="social-shadow-hider"></div>
            <div class="social-toggle">
                <a href="#" class='toggle-social'>Registration <b class="caret"></b></a>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/jquery.metadata.js"></script>
        <script src="js/error.js"></script>
    </body> 
    -->

    <body class='login_body'>
        <div class="wrap">
            <h2>Budgies</h2>
            <h4>Welcome to the login page</h4>
            <form action="loginaction.php"  autocomplete="off" method="post" class="validate">
                <?php
                if (isset($_GET['error'])) {
                    $n = $_GET['error'];
                    if ($n == 1) {
                        echo '<div class="alert alert-error">
      <strong>Error!</strong> Invalid credentials
      </div>';
                    }
                    if ($n == 2) {
                        echo '<div class="alert alert-error">
      <strong>Error!</strong> Unverified User
      </div>';
                    }
                }
                ?>
                <div class="login">
                    <div class="email">
                        <label for="user">Addmission No./ID No.</label><div class="email-input"><div class="control-group"><div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><input type="text" id="user" name="user" class="{required:true}"></div></div></div>
                    </div>
                    <div class="pw">
                        <label for="pw">Password</label><div class="pw-input"><div class="control-group"><div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><input type="password" id="pw" name="pw" class='{required:true}'></div></div></div>
                    </div>

                    <div class="remember">
                        <label class="checkbox">
                            <input type="checkbox" value="1" name="remember"> Remember me on this computer
                        </label>
                    </div>
                </div>
                <div class="submit">

                    <button class="btn btn-red5">Login</button>
                </div>
                <div class="login social">
                    <div class="btn-row">
                        <a href="signup-student.php" class="btn btn-social btn-twitter">Signup for students</a>
                        <a href="signup-teacher.php" class="btn btn-social btn-fb">Signup for teachers</a>
                    </div>

                </div>
            </form>
            <div class="social-shadow-hider"></div>
            <div class="social-toggle">
                <a href="#" class='toggle-social'>New Member Registration<b class="caret"></b></a>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/jquery.metadata.js"></script>
        <script src="js/error.js"></script>
    </body>


</html>