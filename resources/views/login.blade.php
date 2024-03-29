<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Omimed-Turnos</title>

</head>

<body>
    <div class="container mt-5 login-container">
        <div class="centrado2 ">
            <div>
                <img src="img/omimed.png" alt="" class="logo_login ">
            </div>
            <div class="col-md-6 login-box mt-5">

                <div class="centrado">
                    <h2>Login</h2>
                    <form method="POST" action="login" >
                        @csrf

                        <div class="form-group">

                            <input type="text" class="form-control mt-5" id="username" name="username" placeholder="username" required>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control mt-3" id="password" name="password" placeholder="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Login</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>




