<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Navotas Hospital System</title>

    <!-- FontAwesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Hospital CSS -->
    <link rel="stylesheet" href="{{ asset('css/hospital.css') }}">
</head>

<body>

    <!-- Header -->
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


    <!-- Top Navigation -->
    <div class="top-navbar">

        <div class="nav-left">

            <!-- Hamburger -->
            <button class="hamburger-btn" onclick="toggleSideMenu()">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>

            <!-- Search -->
            <div class="search-container">

                <i class="fa-solid fa-magnifying-glass"></i>

                <input
                    type="text"
                    placeholder="Search"
                >

            </div>

        </div>


        <!-- User Dropdown -->
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


    <!-- Main Layout -->
    <div class="main-container">


        <!-- Side Menu -->
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


        <!-- Content -->
        <main class="content-area">


            {{-- HOME --}}
            @if ($page === 'home')

                <div class="card">

                    <p class="quote-text">
                        "A few years ago, we envisioned having a hospital
                        of our own. Our city government did not want to
                        build a mere facility that treats patients.
                        We wanted it to offer quality services, services
                        that are at par with private hospitals".
                    </p>

                </div>


            {{-- DEPARTMENT --}}
            @elseif ($page === 'department')

                <div class="card">

                    <h2>Healthcare System Department Hierarchy</h2>

                    <br>

                    <p>
                        <strong>Hospital A:</strong>
                        COVID-19 center
                    </p>

                    <p>
                        <strong>Hospital B, C, D:</strong>
                        Supporting hospitals
                    </p>

                </div>


            {{-- DOCTOR --}}
            @elseif ($page === 'doctor')

                <div class="card">

                    <h2>Doctor Structure</h2>

                    <br>

                    <p>
                        <strong>Head Doctor</strong>
                    </p>

                    <p>├── Attending Physician</p>
                    <p>├── Resident</p>
                    <p>└── Intern</p>

                </div>


            {{-- NURSE --}}
            @elseif ($page === 'nurse')

                <div class="card">

                    <h2>Nurse Department & Faculty Data</h2>

                    <br>

                    <p>
                        Academic & Clinical Rank H-Index metrics
                    </p>

                </div>


            {{-- MONITOR HOSPITAL --}}
            @elseif ($page === 'monitor_hospital')

                <div class="card">

                    <h2>Monitor Hospital Dashboard</h2>

                    <br>

                    <p>
                        Active Stats:
                        45 New Patients |
                        23 Doctors |
                        14 Operations
                    </p>

                </div>


            {{-- LOGIN --}}
            @elseif ($page === 'login')

                <div class="card login-card">

                    <i class="fa-solid fa-circle-user profile-icon"></i>

                    <h2>Login</h2>

                    <form action="{{ route('home') }}" method="POST">

                        @csrf

                        <div class="form-group">

                            <label>Username</label>

                            <input
                                type="text"
                                name="username"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label>Password</label>

                            <input
                                type="password"
                                name="password"
                                required
                            >

                        </div>


                        <a
                            href="{{ route('register') }}"
                            class="btn-submit register-button"
                        >
                            Register
                        </a>


                        <button
                            type="submit"
                            class="btn-submit"
                        >
                            Login
                        </button>

                    </form>

                </div>


            {{-- REGISTER --}}
            @elseif ($page === 'register')

                <div class="card login-card">

                    <h2>Register</h2>

                    <form action="{{ route('login') }}" method="POST">

                        @csrf

                        <div class="form-group">

                            <label>Username</label>

                            <input
                                type="text"
                                name="username"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label>Password</label>

                            <input
                                type="password"
                                name="password"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label>Email</label>

                            <input
                                type="email"
                                name="email"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label>Phone</label>

                            <input
                                type="text"
                                name="phone"
                                required
                            >

                        </div>


                        <button
                            type="submit"
                            class="btn-submit"
                        >
                            Register
                        </button>

                    </form>

                </div>


            {{-- INFORMATION --}}
            @elseif ($page === 'information')

                <div class="card">

                    <h2>Personal Information</h2>

                    <br>

                    <p>
                        User profile information details page.
                    </p>

                </div>


            {{-- 404 --}}
            @else

                <div class="card">

                    <h2>404 - Page Not Found</h2>

                </div>

            @endif

        </main>

    </div>


    <!-- JavaScript -->
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