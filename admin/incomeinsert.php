
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
                <li>
                    <a href="./incomelist.php">
                        <h4>Income List</h4>
                    </a>
                </li>
                <li class="active">
                    <a href="./incomeinsert.php">
                        <h4>Insert Income</h4>
                    </a>
                </li>
                <li class="logout">
                    <a href="../login.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <h4>Logout</h4>
                    </a>
                </li>
            </ul>
        </div>

    <div class="main--content">
            
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                
                <!-- Elemen formulir untuk Nama Pasien -->
                <div class="mb-3">
                    <label for="tanggal">Date</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>

                </div>
    
                <!-- Elemen formulir untuk alamat -->
                <div class="mb-3">
                    <label for="income" class="form-label">Income</label>
                    <input type="text" class="form-control" id="income" name="income" required>
                </div>
    
                <!-- Elemen formulir untuk telepon -->
                <div class="mb-3">
                    <label for="expenses" class="form-label">Expenses</label>
                    <input type="text" class="form-control" id="expenses" name="expenses" required>
                </div>

                <!-- Tombol Submit -->
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="submit" value="Submit">Insert</button>
                </div>
            </form>
        </div>
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "homebudget_db";

        // Membuat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tanggal = $_POST["tanggal"];
            $income = $_POST["income"];
            $expenses = $_POST["expenses"];

        // Menambahkan data ke dalam database
        $sql = "INSERT INTO incomelist (tanggal, income, expenses) VALUES ('$tanggal', '$income', '$expenses')";

        if ($conn->query($sql) === TRUE) {
            header("Location: incomelist.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
        </div>
    
</body>
</html>
