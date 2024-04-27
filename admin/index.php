<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../style/indexstyle.css">
</head>
<body>
            <?php 

include "../config.php";

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
    
    $sql = "SELECT * FROM budgetlist, incomelist";
    $result = mysqli_query($conn, $sql);
    
    // Mengecek apakah ada data yang ditemukan
    if (mysqli_num_rows($result) > 0) {
    }
    while ($row = mysqli_fetch_assoc($result)) {
    }
}
?>
<div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li class="active">
                    <a href="./index.php">
                        <h4>Dashboard</h4>
                    </a>
                </li>
                <li>
                    <a href="./budgetlist.php">
                        <h4>Budgeting List</h4>
                    </a>
                </li>
                <li>
                    <a href="./budgetinsert.php">
                        <h4>Insert Budgeting</h4>
                    </a>
                </li>
                <li>
                    <a href="./incomelist.php">
                        <h4>Income List</h4>
                    </a>
                </li>
                <li>
                    <a href="./incomeinsert.php">
                        <h4>Insert Income</h4>
                    </a>
                </li>
                <li class="logout">
                    <a href="../login.php">
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main--content">
            <div class="header--wrapper">
                <div class ="header--title">
                    <h2>Dashboard</h2>
                </div>
                <div class="user--info">
                    <!-- <img src="../assets/background.jpg" alt=""/> -->
                </div>            
            </div>

            <div class="card--container">
                <h3 class="main--title">Daily Data</h3>
                <div class="card--wrapper">
                    <div class="data--card light-cream">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">
                                Income
                                </span>
                                <span class="amount--value">
                                </span>
                            </div>
                            <img src="../assets/budget.jpg" alt="" class="icon" /> 
                        </div>
                        <span class="card-detail">Rp 000.000.000</span>
                    </div>
                    
                    <div class="data--card light-cream">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">
                                    Expenses
                                </span>
                                <span class="amount--value">
                                    </span>
                                </div>
                                <img src="../assets/budget.jpg" alt="" class="icon" />  
                            </div>
                            <span class="card-detail">Rp 000.000.000</span>
                        </div>
                    </div>
                    
                    <h3 class="main--title">Budget</h3>
                    <div class="card--wrapper">
                        <div class="data--card light-cream">
                            <div class="card--header">
                                <div class="amount">
                                    <span class="title">
                                    Daily Budget
                                    </span>
                                    <span class="amount--value">
                                    </span>
                                </div>
                                <img src="../assets/budget.jpg" alt="" class="icon" />
                            </div>
                            <span class="card-detail">Rp 000.000.000</span>
                        </div>

                        <div class="data--card light-cream">
                            <div class="card--header">
                                <div class="amount">
                                    <span class="title">
                                    Monthly Budget
                                    </span>
                                    <span class="amount--Value">
                                    </span>
                                </div>
                                <img src="../assets/budget.jpg" alt="" class="icon" />
                            </div>
                            <span class="card detail">Rp 000.000.000</span>
                        </div>
                    </div>

                        <h3 class="main--title">Financial Report</h3>
                    <div class="card--wrapper">
                        <div class="data--card light-cream">
                            <div class="card--header">
                                <div class="amount">
                                    <span class="title">
                                    Monthly Financial Report
                                    </span>
                                    <span class="amount--value">
                                    </span>
                                </div>
                                <img src="../assets/budget.jpg" alt="" class="icon" />  
                            </div>
                            <span class="card-detail">Rp 000.000.000</span>
                        </div>
                        
                </div>
            </div>
            <?php
            $conn->close();
            ?>
</body>
</html>