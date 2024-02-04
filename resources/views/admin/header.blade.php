<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Learner - @yield('title')</title>
    <link rel="stylesheet" href="{{ config('app.asset_url') }}bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/css/utility.css'])
</head>
<body>
    <section class="row admin-dashboard">
        <aside class="col-3">
            <h2 class="text-center mb-4">Code Learner</h2>
            <ul class="px-5">
                <li class="mb-4">
                    <a href="#" class="text-decoration-none">
                        <i class="fa-solid fa-house fs-5 me-2"></i>
                        Home
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-decoration-none">
                        <i class="fa-solid fa-newspaper fs-5 me-2"></i>
                        Post
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-decoration-none">
                        <i class="fa-solid fa-user fs-5 me-2"></i>
                        Users
                    </a>
                </li>
            </ul>
            <div class="text-center">
                <a href="#" class="text-aqua text-decoration-none">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </a>
            </div>
        </aside>
        <div class="col-9 admin-content">
            <nav class="text-end">
                <a href="#" class="btn btn-aqua">
                    <i class="fa-solid fa-circle-user me-1"></i>
                    Sign In
                </a>
            </nav>
            @yield('content')
        </div>
    </section>
</body>
</html>