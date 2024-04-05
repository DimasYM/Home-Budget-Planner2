<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../style/indexstyle.css">
</head>
<body>
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
                    <span>Primary</span>
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
                        <span class="card-detail">*** *** ***</span>
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
                            <span class="card-detail">*** *** ***</span>
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
                            <span class="card-detail">*** *** ***</span>
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
                            <span class="card detail">*** *** ***</span>
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
                            <span class="card-detail">*** *** ***</span>
                        </div>
                </div>
            </div>
        </body>
</html>