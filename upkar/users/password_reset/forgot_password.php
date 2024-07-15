<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot contact</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-10/assets/css/login-10.css">
</head>
<style>
    #container{
        box-shadow: 10px 10px 54px darkcyan; 

    }
</style>
<body>
    <div class="container" id="container">
    <h1 class="text-center mt-5 mb-5">Forgot Password</h1>
    <form action="password_reset.php" method="post">
                <div class="col-12">
                   <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@" required>
                    <label for="email" class="form-label">Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact" required>
                    <label for="contact" class="form-label">Contact</label>
                  </div>
                  </div>

         <div class="text-center pb-2">
        <button class="btn btn-warning">Submit</button>
    </div>
    </form>
    </div>
</body>
</html>