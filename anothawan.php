<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            box-sizing: border-box;
            width: 100%;
            text-align: center;
        }

        .sidebar h2 {
            margin-top: 0;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .header {
            background-color: #3498db;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .content {
            flex: 1;
            padding: 20px;
            background-color: #ecf0f1;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex: 1 1 calc(33.333% - 40px);
            box-sizing: border-box;
        }

        .card h3 {
            margin-top: 0;
        }

        /* Responsive Styles */
        @media (min-width: 768px) {
            body {
                flex-direction: row;
            }

            .sidebar {
                width: 250px;
                text-align: left;
            }

            .content {
                flex-wrap: nowrap;
            }

            .card {
                flex: 1 1 auto;
            }
        }

        @media (max-width: 600px) {
            .card {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            Welcome to the Dashboard
        </div>

        <div class="content">
            <div class="card">
                <h3>Overview</h3>
                <p>CHING CHONG PING LING BINCHILING.</p>
            </div>

            <div class="card">
                <h3>Statistics</h3>
                <p>OMAEWA MO TANGINA MO.</p>
            </div>

            <div class="card">
                <h3>Recent Activity</h3>
                <p>MATULOG KA NA BOBO.</p>
            </div>
        </div>
    </div>
</body>
</html>
