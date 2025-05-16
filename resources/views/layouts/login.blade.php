<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Revenue management</title>
  <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
  </head>

<body>
    <div class="login-container">
        <!-- Left Side: Login / Forgot Password -->
        <div class="login-form ">
            <div class="form-box">
                <!-- Login Form -->
                <div id="loginForm" class="form-toggle active">
                    <div class="login-title">Login</div>
                    <form>
                        <div class="mb-3">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email" required />
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" required />
                        </div>
                        <div class="mb-3 text-end">
                            <a href="#" id="showForgot">Forgot Password?</a>
                        </div>
                        <a href="dashboard.html" type="submit" class="btn btn-primary w-100">Login</a>
                    </form>
                </div>

                <!-- Forgot Password Form -->
                <div id="forgotForm" class="form-toggle">
                    <div class="login-title">Reset Password</div>
                    <form id="resetForm">
                        <div class="mb-3">
                            <label>Enter your email</label>
                            <input type="email" class="form-control" placeholder="Email address" required />
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Reset Link</button>
                        <div class="text-center mt-3">
                            <a href="#" id="backToLogin">Back to Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Right Side: Gradient Text -->
        <div class="login-bg custom-shadow">
            <div class="bg-text">
                Welcome to hotelxplore     
                <p> Manage your revenue management</p>
            </div>
        </div>
    </div>

     <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/custom.js"></script>

    <script>
       
    </script>


</body>

</html>