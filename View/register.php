<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="admin/assets/css/main/app.css">
    <link rel="stylesheet" href="admin/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="admin/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="admin/assets/images/logo/favicon.png" type="image/png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="admin/assets/images/logo/logo.svg" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Sign Up</h1>
                    <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                    <form action="../actions/register_action.php" method="post" enctype="multipart/form-data" id="regis_form">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Email" name="customer_email" required id="regis_email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div id="error_msg_email"></div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="customer_name" required id="user_name">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            <div id="error_msg_name"></div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="customer_pass" required id="regis_password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <div id="error_msg_pass"></div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Country" name="customer_country" required id="country">
                            <div class="form-control-icon">
                                <i class="bi bi-compass"></i>
                            </div>
                            <div id="error_msg_country"></div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="City" name="customer_city" required id="city">
                            <div class="form-control-icon">
                                <i class="bi bi-compass"></i>
                            </div>
                            <div id="error_msg_city"></div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Phone" name="customer_contact" required id="contact">
                            <div class="form-control-icon">
                                <i class="bi bi-phone-fill"></i>
                            </div>
                            <div id="error_msg_contact"></div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Profile Picture</label>
                            <input class="form-control" type="file" id="formFile" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="submit">Sign Up</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Already have an account? <a href="login.php" class="font-bold">Log
                                in</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="../js/app.js"></script>
</body>

</html>