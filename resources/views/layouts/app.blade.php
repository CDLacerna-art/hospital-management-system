<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Navotas Hospital System</title>


    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/hospital.css') }}">
</head>

<body>


    <header>
        <div class="header-title">
            <h1>Navotas Hospital System</h1>

            <p>{{ $currentTitle }}</p>
        </div>

        <div class="header-center">
            #NavotaAs #AngatPaNavotas<br>
            #LetsBeTheBest<br>
            #SayaALL #ToBecontinued
        </div>

        <div class="header-logo">
            <i class="fa-solid fa-hospital"></i>
        </div>
    </header>


    <div class="top-navbar">

        <div class="nav-left">


            <button class="hamburger-btn" onclick="toggleSideMenu()">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>

            <div class="search-container">

                <i class="fa-solid fa-magnifying-glass"></i>

                <input
                    type="text"
                    placeholder="Search"
                >

            </div>

        </div>


        <div class="user-dropdown" id="userDropdown">

            <button class="profile-btn" onclick="toggleDropdown()">
                <i class="fa-solid fa-circle-user"></i>
            </button>

            <div class="dropdown-menu">

                <a href="{{ route('information') }}">
                    Information
                </a>

                <a href="{{ route('login') }}">
                    Login
                </a>

            </div>

        </div>

    </div>



    <div class="main-container">


        <aside class="side-menu" id="sideMenu">

            <a href="{{ route('home') }}"
               class="nav-btn {{ $page === 'home' ? 'active' : '' }}">

                <i class="fa-solid fa-house"></i>
                Home

            </a>


            <a href="{{ route('department') }}"
               class="nav-btn {{ $page === 'department' ? 'active' : '' }}">

                <i class="fa-solid fa-sitemap"></i>
                Department

            </a>


            <a href="{{ route('doctor') }}"
               class="nav-btn {{ $page === 'doctor' ? 'active' : '' }}">

                <i class="fa-solid fa-user-doctor"></i>
                Doctor

            </a>


            <a href="{{ route('nurse') }}"
               class="nav-btn {{ $page === 'nurse' ? 'active' : '' }}">

                <i class="fa-solid fa-user-nurse"></i>
                Nurse

            </a>


            <a href="{{ route('monitor.hospital') }}"
               class="nav-btn {{ $page === 'monitor_hospital' ? 'active' : '' }}">

                <i class="fa-solid fa-desktop"></i>
                Monitor Hospital

            </a>

        </aside>


        <main class="content-area">

            @yield('content')

        </main>

    </div>



    <script>

        function toggleSideMenu() {

            const sideMenu =
                document.getElementById('sideMenu');

            sideMenu.classList.toggle('closed');

        }


        function toggleDropdown() {

            const dropdown =
                document.getElementById('userDropdown');

            dropdown.classList.toggle('active');

        }


        window.onclick = function(event) {

            if (
                !event.target.matches('.profile-btn') &&
                !event.target.matches('.profile-btn *')
            ) {

                const dropdown =
                    document.getElementById('userDropdown');

                if (dropdown.classList.contains('active')) {

                    dropdown.classList.remove('active');

                }

            }

        }

    </script>

</body>
</html>
