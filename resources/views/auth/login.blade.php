<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Peduli Sesama</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="text-center">Form Login</h3>
                        <hr>
                        <form action="/auth/login" method="post">
                            @csrf
                            <div class="form-group mb-2">
                                <strong>Username</strong>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group mb-2">
                                <strong>Password</strong>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group mb-2">
                                <button class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>