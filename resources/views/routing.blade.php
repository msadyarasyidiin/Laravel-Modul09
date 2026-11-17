
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel Routing</title>

    @vite('resources/sass/app.scss')
</head>
<body>

    <div class="container my-5">

        <h1 class="mb-4">Belajar Laravel Routing</h1>

        <!-- BAB 5 - DAFTAR ROUTING -->
        <div class="list-group list-group-numbered mt-4">

            <!-- 1. Basic Routing -->
            <a href="{{ url('/basic_routing') }}"
               class="list-group-item list-group-item-action">
                Basic Routing (No View, No Controller)
            </a>

            <!-- 2. View Route -->
            <a href="{{ url('/view_route') }}"
               class="list-group-item list-group-item-action">
                View Route
            </a>

            <!-- 3. Controller Route -->
            <a href="{{ url('/controller_route') }}"
               class="list-group-item list-group-item-action">
                Controller Route
            </a>

            <!-- 4. Redirect Route -->
            <a href="{{ url('/') }}"
               class="list-group-item list-group-item-action">
                Redirect Route
            </a>

            <!-- 5. Required Parameter 1 -->
            <a href="{{ url('/user/12345') }}"
               class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 1
            </a>

            <!-- 6. Required Parameter 2 -->
            <a href="{{ url('/posts/01/comments/20') }}"
               class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 2
            </a>

            <!-- 7. Optional Parameter -->
            <a href="{{ url('/username') }}"
               class="list-group-item list-group-item-action">
                Route Parameter (Optional Parameter)
            </a>

            <!-- 8. Regular Expression -->
            <a href="{{ url('/title/this-is-my-title') }}"
               class="list-group-item list-group-item-action">
                Route With Regular Expression Constraints
            </a>

            <!-- 9. Named Route -->
            <a href="{{ route('profileRouteName', ['profileId' => '123']) }}"
               class="list-group-item list-group-item-action">
                Named Route
            </a>

            <!-- 10. Route Priority -->
            <a href="{{ url('/route_priority/user') }}"
               class="list-group-item list-group-item-action">
                Route Priority
            </a>

            <!-- 11. Fallback Route -->
            <a href="{{ url('/asdqwezxc') }}"
               class="list-group-item list-group-item-action">
                Fallback Routes
            </a>

        </div>

        <!-- 5.13 - ROUTE GROUP -->
        <h5 class="mt-5 mb-3">
            Route Groups (Route Prefixes & Route Name Prefixes)
        </h5>

        <div class="list-group list-group-numbered">

            <a href="{{ route('admin.dashboard') }}"
               class="list-group-item list-group-item-action">
                Admin Dashboard
            </a>

            <a href="{{ route('admin.users') }}"
               class="list-group-item list-group-item-action">
                Admin Users
            </a>

            <a href="{{ route('admin.items') }}"
               class="list-group-item list-group-item-action">
                Admin Items
            </a>

        </div>

        <!-- BAB 7 - TUGAS NOMOR 2 -->
        <h5 class="mt-5 mb-3">Tugas Praktikum</h5>

        <div class="list-group">

            <a href="{{ route('portofolio') }}"
               class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">

                <span>
                    <i class="bi bi-person-badge me-2"></i>
                    Portofolio Rasyidiin
                </span>

                <i class="bi bi-arrow-right"></i>

            </a>

        </div>

    </div>

    @vite('resources/js/app.js')

</body>
</html>
