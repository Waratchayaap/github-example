<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js">
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <form action="login.php" method="post">
                            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                            <form>
                                <?php if (isset($_GET['error'])) { ?>

                                    <p class="error"><?php echo $_GET['error']; ?></p>

                                <?php } ?>
                                <div class="form-floating mb-3">
                                    
                                    <input type="text" class="form-control" name="uname" id="floatingInput" placeholder="User Name"><br>
                                    <label>User Name</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password"><br>
                                    <label>Password</label>
                                </div>

                                <!-- <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                <label class="form-check-label" for="rememberPasswordCheck">
                                    Remember password
                                </label>
                            </div> -->
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                                        in</button>
                                </div>
                                <!-- <hr class="my-4">
                            <div class="d-grid mb-2">
                                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-google me-2"></i> Sign in with Google
                                </button>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                                </button>
                            </div> -->
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>