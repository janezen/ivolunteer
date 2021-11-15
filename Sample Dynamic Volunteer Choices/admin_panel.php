<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title> iVolunteerph Admin </title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span> iVolunteerph </span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                    <span>Volunteer</span></a>
                </li>
                <li>
                    <a href="admin_volunteer_program.php"><span class="las la-clipboard-list"></span>
                    <span>Volunteer Program</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                    <span>Donor</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                    <span>Donor Program</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                    <span>Account</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h1>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h1>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here "/>
            </div>

            <div class="user-wrapper">
                <img src="admin.jpg" width="40px" height="50px" alt="">
                <div>
                    <h4>Janezen Dagami</h4>
                    <small> Admin </small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>50</h1>
                        <span>Total Number of Volunteer</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>50</h1>
                        <span>Total Number of Donation</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>10</h1>
                        <span>Number of Volunteer(Today)</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>10</h1>
                        <span>Number of Donations(Today)</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </body>
</html>