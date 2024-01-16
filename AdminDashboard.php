<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Margie's Place | ADMIN</title>
    <!--ICONS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--CSS-->
    <link rel="stylesheet" href="Jan6.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="M-removebg-preview.png" alt="Logo">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>
            <div class="sidebar">

                <a href="AdminDashboard.php" class="active">
                    <span class="material-symbols-outlined">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">account_circle</span>
                    <h3>Users</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">monitoring</span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <h3>Reservations</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">inventory_2</span>
                    <h3>Inventory</h3>
                </a>
                <a href="BookRoom.php">
                    <span class="material-symbols-outlined">note_add</span>
                    <h3>Book</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="AdminLogin.php">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
<!-------------------------------MAIN CONTENT HERE...---------------------------------------->
    <main>

        <h1>Overview</h1>
        

        <div class="date">
            <p class="current-date"></p>
            <p class="current-time"></p>
        </div>

        <div class="insights">
            <div class="sales">
                <span class="material-symbols-outlined">trending_up</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Sales</h3>
                        <h1>₱00,000.00</h1>
                    </div>
                </div>
                <small class="text-muted">Last 24 hours</small>
            </div>
            <div class="income">
                <span class="material-symbols-outlined">finance</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Income</h3>
                        <h1>₱00,000.00</h1>
                    </div>
                </div>
                <small class="text-muted">Last 24 hours</small>
            </div>
            <div class="more">
                <span class="material-symbols-outlined">group_add</span>
                <div class="middle">
                    <div class="left">
                        <h3>More</h3>
                        <h1>₱00,000.00</h1>
                    </div>
                </div>
            </div>
        </div>
        
<!------------------------------------------------------------------------------------------------------>     
    <div class="recent-book">
        <h2>Recent Bookings</h2>
        
            <table>
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
            <a href="Reservation.php">Show all</a>

    </div>
    </main>   
<!------------------------------------------------------------------------------------------------------>          
        
  

    <div class="right">
        <div class="top">
            <button id="menu-btn">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <div class="theme-toggler">
                <span class="material-symbols-outlined active">light_mode</span>
                <span class="material-symbols-outlined">dark_mode</span>
            </div>
            <div class="profile">
                <p>Hey, <b>AdminName</b></p>
                <small class="text-muted">Admin</small>
            </div>
            <div class="admin-photo">
                
            </div>
        </div>

        <!-------BELOW-------->
        <div class="reviews">
            <h2>Reviews</h2>
            <div class="comments">
                <div class="comment">
                    <div class="cust-profile">

                    </div>
                    <div class="message">
                        <p>Comment here. Lorem lorem ipsulum chuchu</p>
                    </div>
                </div>
                <div class="comment">
                    <div class="cust-profile">

                    </div>
                    <div class="message">
                        <p>Comment here. Lorem lorem ipsulum chuchu</p>
                    </div>
                </div>
                <a href="Reviews">See more</a>
            </div>
            
        </div>
<!------------------------------------------------------------------------------------------------------>       

    </div>

<footer>
    <p><small>&copy; 2024 Margie's Place. All rights reserved.</small></p>
</footer>
<!--------------------------------------------------->
    <script>
        function updateDateTime() {
            const currentDateTimeElement = document.querySelector('.date');
            const currentTime = new Date();
            const hours = currentTime.getHours();
            const minutes = currentTime.getMinutes();
            const seconds = currentTime.getSeconds();
            const formattedTime = ${hours}:${minutes}:${seconds};

            const year = currentTime.getFullYear();
            const month = currentTime.getMonth() + 1; // Months are zero-based
            const day = currentTime.getDate();
            const formattedDate = ${year}-${month < 10 ? '0' + month : month}-${day < 10 ? '0' + day : day};

            currentDateTimeElement.innerHTML = <p class="current-date">${formattedDate}</p><p class="current-time">${formattedTime}</p>;
        }

        // Update date and time every second
        setInterval(updateDateTime, 1000);

        // Initial update
        updateDateTime();
    </script>
    <script src="Booked2.js"></script>
    <script src="AdminDashboard1.js"></script>
</body>
</html>
