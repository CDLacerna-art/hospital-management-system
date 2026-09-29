<?php
// PHP Routing Engine
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$titles = [
    'home'            => 'Home',
    'department'      => 'Home - Department',
    'doctor'          => 'Home - Doctor',
    'nurse'           => 'Home - Nurse',
    'monitor_hospital'=> 'Home - Monitor Hospital',
    'login'           => 'Login',
    'register'        => 'Register',
    'information'     => 'Personal Information'
];

$current_title = isset($titles[$page]) ? $titles[$page] : 'Navotas Hospital System';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navotas Hospital System</title>
    <!-- FontAwesome for UI Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #e0e0e0;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Top Header */
        header {
            background-color: #f5f5f5;
            border-bottom: 2px solid #ccc;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-title h1 {
            font-size: 24px;
            font-weight: bold;
        }

        .header-title p {
            font-size: 13px;
            color: #666;
            margin-top: 2px;
        }

        .header-center {
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            color: #333;
        }

        .header-logo i {
            font-size: 32px;
            color: #d9534f;
        }

        /* Navigation Bar */
        .top-navbar {
            background: #e6e6e6;
            padding: 8px 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .hamburger-btn {
            background: #000;
            color: #fff;
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-container i {
            position: absolute;
            left: 10px;
            color: #666;
            font-size: 14px;
        }

        .search-container input {
            padding: 6px 12px 6px 30px;
            border-radius: 15px;
            border: 1px solid #ccc;
            width: 350px;
            outline: none;
        }

        /* Top Right User Profile & Dropdown Menu */
        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .profile-btn {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            right: 0;
            top: 35px;
            background-color: #dcdcdc;
            min-width: 130px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
            border-radius: 4px;
            overflow: hidden;
            z-index: 100;
        }

        .dropdown-menu a {
            color: #000;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            font-weight: bold;
            font-size: 14px;
            border-bottom: 1px solid #ccc;
        }

        .dropdown-menu a:last-child {
            border-bottom: none;
        }

        .dropdown-menu a:hover {
            background-color: #bbb;
        }

        .user-dropdown.active .dropdown-menu {
            display: block;
        }

        /* Main Container Layout */
        .main-container {
            display: flex;
            flex: 1;
            position: relative;
        }

        /* Sliding Side Menu */
        .side-menu {
            width: 180px;
            background-color: #dcdcdc;
            padding: 10px 5px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            transition: margin-left 0.3s ease;
        }

        .side-menu.closed {
            margin-left: -190px;
        }

        .nav-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: #8e8e8e;
            color: #000;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 13px;
            border: 1px solid #777;
        }

        .nav-btn.active, .nav-btn:hover {
            background-color: #727272;
            color: #fff;
        }

        /* Content Display Area */
        .content-area {
            flex: 1;
            padding: 20px;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 8px;
            max-width: 650px;
            width: 100%;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .quote-text {
            font-style: italic;
            font-size: 18px;
            line-height: 1.5;
            color: #222;
        }

        /* Form Controls */
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 15px;
            border: 1px solid #999;
            background: #c0c0c0;
            outline: none;
        }

        .btn-submit {
            background-color: #8e8e8e;
            border: 1px solid #666;
            padding: 8px 25px;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            margin: 5px;
        }

        .btn-submit:hover {
            background-color: #666;
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="header-title">
            <h1>Navotas Hospital System</h1>
            <p><?php echo htmlspecialchars($current_title); ?></p>
        </div>
        <div class="header-center">
            #NavotaAs #AngatPaNavotas<br>
            #LetsBeTheBest<br>
            #SayaALL #ToBecontinued
        </div>
        <div class="header-logo">
            <i class="fa-solid => fa-hospital"></i>
        </div>
    </header>

    <!-- Top Navigation Bar -->
    <div class="top-navbar">
        <div class="nav-left">
            <!-- Hamburger Menu Button -->
            <button class="hamburger-btn" onclick="toggleSideMenu()">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
            <div class="search-container">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
            </div>
        </div>

        <!-- Top Right User Profile Dropdown -->
        <div class="user-dropdown" id="userDropdown">
            <button class="profile-btn" onclick="toggleDropdown()">
                <i class="fa-solid fa-circle-user"></i>
            </button>
            <div class="dropdown-menu">
                <a href="?page=information">Information</a>
                <a href="?page=login">Login</a>
            </div>
        </div>
    </div>

    <!-- Main Content Layout -->
    <div class="main-container">

        <!-- Side Navigation Menu -->
        <aside class="side-menu" id="sideMenu">
            <a href="?page=home" class="nav-btn <?php echo $page=='home'?'active':''; ?>">
                <i class="fa-solid fa-house"></i> Home
            </a>
            <a href="?page=department" class="nav-btn <?php echo $page=='department'?'active':''; ?>">
                <i class="fa-solid fa-sitemap"></i> Department
            </a>
            <a href="?page=doctor" class="nav-btn <?php echo $page=='doctor'?'active':''; ?>">
                <i class="fa-solid fa-user-doctor"></i> Doctor
            </a>
            <a href="?page=nurse" class="nav-btn <?php echo $page=='nurse'?'active':''; ?>">
                <i class="fa-solid fa-user-nurse"></i> Nurse
            </a>
            <a href="?page=monitor_hospital" class="nav-btn <?php echo $page=='monitor_hospital'?'active':''; ?>">
                <i class="fa-solid fa-desktop"></i> Monitor hospital
            </a>
        </aside>

        <!-- Dynamic Content View Area (PHP Router) -->
        <main class="content-area">

            <?php if ($page === 'home'): ?>
                <div class="card">
                    <p class="quote-text">
                        "A few years ago, we envisioned having a hospital of our own. Our city government did not want to build a mere facility that treats patients. We wanted it to offer quality services, services that are at par with private hospitals".
                    </p>
                </div>

            <?php elseif ($page === 'department'): ?>
                <div class="card">
                    <h2>Healthcare System Department Hierarchy</h2>
                    <br>
                    <p><strong>Hospital A:</strong> COVID-19 center</p>
                    <p><strong>Hospital B, C, D:</strong> Supporting hospitals</p>
                </div>

            <?php elseif ($page === 'doctor'): ?>
                <div class="card">
                    <h2>Doctor Structure</h2>
                    <br>
                    <p><strong>Head Doctor</strong></p>
                    <p>├── Attending Physician</p>
                    <p>├── Resident</p>
                    <p>└── Intern</p>
                </div>

            <?php elseif ($page === 'nurse'): ?>
                <div class="card">
                    <h2>Nurse Department & Faculty Data</h2>
                    <br>
                    <p>Academic & Clinical Rank H-Index metrics</p>
                </div>

            <?php elseif ($page === 'monitor_hospital'): ?>
                <div class="card">
                    <h2>Monitor Hospital Dashboard</h2>
                    <br>
                    <p>Active Stats: 45 New Patients | 23 Doctors | 14 Operations</p>
                </div>

            <?php elseif ($page === 'login'): ?>
                <div class="card" style="max-width: 400px;">
                    <i class="fa-solid fa-circle-user" style="font-size: 40px; margin-bottom: 10px;"></i>
                    <h2 style="margin-bottom: 20px;">login</h2>
                    <form action="?page=home" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" required>
                        </div>
                        <a href="?page=register" class="btn-submit" style="text-decoration: none; display: inline-block;">Register</a>
                        <button type="submit" class="btn-submit">Login</button>
                    </form>
                </div>

            <?php elseif ($page === 'register'): ?>
                <div class="card" style="max-width: 400px;">
                    <h2 style="margin-bottom: 20px;">Register</h2>
                    <form action="?page=login" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" required>
                        </div>
                        <button type="submit" class="btn-submit">Register</button>
                    </form>
                </div>

            <?php elseif ($page === 'information'): ?>
                <div class="card">
                    <h2>Personal Information</h2>
                    <br>
                    <p>User profile information details page.</p>
                </div>

            <?php else: ?>
                <div class="card">
                    <h2>404 - Page Not Found</h2>
                </div>
            <?php endif; ?>

        </main>
    </div>

    <!-- JavaScript Interactivity -->
    <script>
        // Toggle Side Navigation Drawer
        function toggleSideMenu() {
            const sideMenu = document.getElementById('sideMenu');
            sideMenu.classList.toggle('closed');
        }

        // Toggle Top Right User Profile Dropdown
        function toggleDropdown() {
            const dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('active');
        }

        // Close dropdown when clicking outside
        window.onclick = function(event) {
            if (!event.target.matches('.profile-btn') && !event.target.matches('.profile-btn *')) {
                const dropdown = document.getElementById('userDropdown');
                if (dropdown.classList.contains('active')) {
                    dropdown.classList.remove('active');
                }
            }
        }
    </script>
</body>
</html>