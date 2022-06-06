<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        html , body {
            min-height: 100vh;
            position: relative;
            width: 100%
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container">
            <div class="navbar-brand">Blog App</div>
            <button class="navbar-toggler" data-bs-toggle="collapse" href="#navbar-container">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbar-container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="/blog/list" class="nav-link">Blogs</a>
                    </li>
                </ul>
            </div>

            <div>
                <button class="btn btn-primary">
                     Login
                </button>          
            </div>
           
        </div>
    </nav>

    <div class="" style="margin-bottom: 100px">
        <section>
            @yield("content")
        </section>
    </div>

     <footer class="bg-dark text-white p-3 footer">
         <div class="container">
             <div class="row mx-0">
                    <div class="col-4">
                        <div> Contact</div>
                    </div>
                    <div class="col-4">
                        <div>Copyrate</div>
                    </div>
                    <div class="col-4">
                        <div>Fetaures</div>
                    </div>
             </div>
         </div>
     </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>