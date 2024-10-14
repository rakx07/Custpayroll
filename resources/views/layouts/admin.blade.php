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
        /* Wrapper for the entire layout to create a flex container */
        .wrapper {
            display: flex; /* Enables flexible box layout */
            min-height: 100vh; /* Sets the minimum height to fill the viewport */
        }

        /* Sidebar styling */
        #sidebar {
            min-width: 250px; /* Minimum width of the sidebar */
            max-width: 250px; /* Maximum width of the sidebar */
            background: #343a40; /* Dark background color */
            color: white; /* Text color */
            transition: all 0.3s; /* Smooth transition for the sidebar toggle */
        }

        #sidebar ul.components {
            padding: 0; /* Removes padding from the sidebar navigation list */
        }

        /* Sidebar header styling */
        .sidebar-header {
            background: #23272b; /* Darker background for the sidebar header */
            padding: 20px; /* Padding for spacing */
        }

        /* Sidebar list item styling */
        #sidebar ul li {
            padding: 10px; /* Padding inside list items */
            font-size: 1.1rem; /* Increases font size */
        }

        /* Link styling in the sidebar */
        #sidebar ul li a {
            color: white; /* Text color for links */
            display: block; /* Makes the entire area clickable */
            text-decoration: none; /* Removes underline from links */
            padding: 10px; /* Padding inside links */
            transition: background 0.3s ease; /* Smooth background change on hover */
        }

        /* Hover effect for links */
        #sidebar ul li a:hover {
            background: #495057; /* Lighter background on hover */
        }

        /* Active state styling for the current page */
        #sidebar ul li.active > a {
            background: #007bff; /* Highlighted background for the active link */
            color: white; /* Text color for the active link */
        }

        /* Styling for when the sidebar is collapsed */
        #sidebar.active {
            margin-left: -250px; /* Moves the sidebar out of view */
        }

        /* Content area styling */
        #content {
            flex-grow: 1; /* Allows the content area to expand */
            padding: 20px; /* Padding for spacing */
            background: #f8f9fa; /* Light background color for content */
        }

        /* Navbar styling */
        .navbar {
            padding: 15px; /* Padding for the navbar */
            background: #f8f9fa; /* Light background for the navbar */
            border-bottom: 1px solid #dee2e6; /* Bottom border for separation */
        }

        /* Align dropdown menu to the right */
        .dropdown-menu-right {
            right: 0; /* Aligns dropdown menu to the right */
            left: auto; /* Prevents automatic left alignment */
        }

        /* Profile link styling */
        .navbar .profile-link {
            display: flex; /* Enables flex layout for the profile link */
            align-items: center; /* Vertically centers the profile icon and text */
        }

        /* Icon styling in the profile link */
        .navbar .profile-link i {
            font-size: 1.5rem; /* Increases icon size */
            margin-right: 5px; /* Spacing between icon and text */
        }

        /* Adjust the toggle button to be closer to the sidebar */
        #sidebarCollapse {
            margin-left: 0; /* Removes left margin for the toggle button */
        }

        /* Dropdown menu background color */
        .dropdown-menu {
            background-color: #343a40; /* Dark gray background for dropdown */
        }

        /* Change text color inside dropdown to white */
        .dropdown-menu .dropdown-item {
            color: white; /* White text color for dropdown items */
        }

        /* Change the hover background color for dropdown items */
        .dropdown-menu .dropdown-item:hover {
            background-color: #495057; /* Slightly lighter gray on hover */
        }

        /* Media query for responsive design */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px; /* Hides sidebar on smaller screens */
            }

            #sidebar.active {
                margin-left: 0; /* Shows sidebar when active */
            }

            #content {
                width: 100%; /* Full width for content area on smaller screens */
            }

            /* Adjust the toggle button for mobile to be nearer */
            #sidebarCollapse {
                margin-left: 0; /* Removes left margin for the toggle button */
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
                <li><a href="{{ route('employee.create') }}">Employee</a></li>
                <li><a href="{{ route('payroll.index') }}">Payroll</a></li>
                <li><a href="{{ route('employee.index') }}">Department</a></li>
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
                $('#sidebar').toggleClass('active'); // Toggles the active class on the sidebar
            });
        });
    </script>
</body>
</html>
