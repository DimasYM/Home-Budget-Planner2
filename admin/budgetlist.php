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
                <li class="active">
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
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>
        <div class="header--wrapper">
            <div class ="header--title">
                <h2>Budgeting List</h2>
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
            <h3 class="main--title">Data Budget</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Daily Budget</th>
                            <th>Monthly Budget</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

include "../config.php";

$sql = "SELECT * FROM budgetlist";
$result = mysqli_query($conn, $sql);

// Mengecek apakah ada data yang ditemukan
if (mysqli_num_rows($result) > 0) {
    // Menampilkan data ke dalam tabel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['tanggal'] . "</td>";
        echo "<td>" . $row['daybudget'] . "</td>";
        echo "<td>" . $row['monthbudget'] . "</td>";
        echo "<td>
        <form method='post'>
        <input type='hidden' name='delete_id' value='" . $row['id'] . "'>
            <button class='button-no-border' style='color: red;' type='submit' name='delete'>Hapus</button> |
            </form>
        <form method='post' action='edit_budget.php'>
            <input type='hidden' name='edit_id' value='" . $row['id'] . "'>
            <button class='button-no-border' style='color:blue;' type='submit' name='edit'>Edit</button>
        </form>
        </td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah tombol delete ditekan
    if (isset($_POST["delete"])) {
        // Mengambil ID yang akan dihapus dari permintaan
        $id_to_delete = $_POST["delete_id"];
        
        // Query untuk menghapus data berdasarkan ID
        $sql_delete = "DELETE FROM budgetlist WHERE id = $id_to_delete";

        // Menjalankan query
        if (mysqli_query($conn, $sql_delete)) {
            header("Location: " . $_SERVER["PHP_SELF"]);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

$conn->close();
?>
            </tbody>
        </table>
    </div>
</div>
    </body>
</html>