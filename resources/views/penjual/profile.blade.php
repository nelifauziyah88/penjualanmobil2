<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman 36 - Akun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f7f7f7;
        }

        .container {
            display: flex;
            gap: 50px;
        }

        .sidebar {
            width: 180px;
            background-color: #b3b3b3;
            border-radius: 20px;
            text-align: center;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar img {
            width: 60px;
            height: 60px;
            margin: 0 auto;
        }

        .nav-link {
            font-weight: bold;
            text-decoration: none;
            color: black;
            display: block;
            margin-top: 10px;
            font-size: 16px;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .logout {
            font-weight: bold;
            text-decoration: none;
            color: red;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .logout:hover {
            text-decoration: underline;
        }

        .logout img {
            width: 20px;
            margin-right: 5px;
        }

        .main {
            flex: 1;
        }

        h1 {
            font-size: 28px;
        }

        label {
            font-weight: bold;
        }

        .profile-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #aaa;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            height: 35px;
            background-color: #aaa;
            border: none;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 5px;
        }

        .btn-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #b3b3b3;
            border-radius: 8px;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .btn-link:hover {
            background-color: #a0a0a0;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <img src="https://img.icons8.com/ios-filled/100/000000/user-male-circle.png" alt="User Icon">
                <p class="nav-link">DASHBOARD</p>
                <a href="#" class="nav-link">EDIT PROFIL</a>
            </div>
            <div style="border-top: 2px solid white; padding-top: 15px;">
                <a href="/logout" class="logout">
                    <img src="https://img.icons8.com/ios-glyphs/30/fa314a/logout-rounded.png" alt="Logout Icon">
                    LOGOUT
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main">
            <h1>Profile Penjual</h1>

            <label>Profile</label><br>
            <div class="profile-img"></div>

            <label>Name:</label><br>
            <input type="text" disabled value="Nama Penjual"><br>

            <label>Phone Number:</label><br>
            <input type="text" disabled value="08xxxxxxxxxx"><br>

            <label>Address:</label><br>
            <input type="text" disabled value="Alamat Penjual"><br>

            <a href="/edit-profile" class="btn-link">Edit</a>
        </div>
    </div>
</body>
</html>
