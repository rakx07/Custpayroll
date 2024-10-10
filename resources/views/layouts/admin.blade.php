<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #343a40;
            color: white;
            transition: all 0.3s;
        }

        #sidebar ul.components {
            padding: 0;
        }

        .sidebar-header {
            background: #23272b;
            padding: 20px;
        }

        #sidebar ul li {
            padding: 10px;
            font-size: 1.1rem;
        }

        #sidebar ul li a {
            color: white;
            display: block;
            text-decoration: none;
            padding: 10px;
            transition: background 0.3s ease;
        }

        #sidebar ul li a:hover {
            background: #495057;
        }

        #sidebar ul li.active > a {
            background: #007bff;
            color: white;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #content {
            flex-grow: 1;
            padding: 20px;
            background: #f8f9fa;
        }

        .navbar {
            padding: 15px;
            background: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }

        .dropdown-menu-right {
            right: 0;
            left: auto;
        }

        .navbar .profile-link {
            display: flex;
            align-items: center;
        }

        .navbar .profile-link i {
            font-size: 1.5rem;
            margin-right: 5px;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.active {
                margin-left: 0;
            }

            #content {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="bg-dark">
            <div class="sidebar-header text-white p-3">
                <h3>Admin Dashboard</h3>
            </div>
            <ul class="list-unstyled components">
                <li><a href="{{ route('employee.index') }}">Employee</a></li>
                <li><a href="{{ route('payroll.index') }}">Payroll</a></li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="govDeductionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Government Deduction
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="govDeductionDropdown">
                        <li><a class="dropdown-item" href="{{ route('sss.index') }}">SSS</a></li>
                        <li><a class="dropdown-item" href="{{ route('tax.index') }}">TAX</a></li>
                        <li><a class="dropdown-item" href="{{ route('hdmf.index') }}">Pag-IBIG (HDMF)</a></li>
                        <li><a class="dropdown-item" href="{{ route('philhealth.index') }}">PhilHealth</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Profile Dropdown -->
                    <div class="dropdown ms-auto">
                        <a class="profile-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                            <span>Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#">Profile Settings</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Main content area -->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Sidebar toggle functionality
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>
