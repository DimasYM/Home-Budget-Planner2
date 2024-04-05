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
                <li>
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
                <li class="active">
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
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>
        <div class="header--wrapper">
            <div class ="header--title">
                <h2>Income List</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <form action="">
                        <i class="fas fa-search"></i>
                        <input type="text" id="search" name="search" placeholder="Search" autocomplete="off">
                        <button type="submit" id="tombolCari">Search</button>
                    </form>

                </div>
                <img src="../assets/profile.jpg" alt=""/>
            </div>            
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Data Financial</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                        <form action="">
                            <th>ID</th>
                            <th>Month<button type="submit" name="sort" value="bulan_income"><i class="bi bi-sort-alpha-up"></i></button> </th>
                            <th>Income<button type="submit" name="sort" value="incomet"><i class="bi bi-sort-alpha-up"></i></button></th>
                            <th>Expenses<button type="submit" name="sort" value="expenses"><i class="bi bi-sort-alpha-up"></i></button></th>
                            <th></th>
                            <input type="hidden" name="order">
                        </form>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>November</td>
                                <td>Rp3.000.000</td>
                                <td>Rp1.000.000</td>
                                <td><a href="" style="color: blue;">Edit</a> | <a href="" style="color: red;">Delete</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>December</td>
                                <td>Rp.5.000.000</td>
                                <td>Rp1.500.000</td>
                                <td><a href="" style="color: blue;">Edit</a> | <a href="" style="color: red;">Delete</a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </body>
</html>