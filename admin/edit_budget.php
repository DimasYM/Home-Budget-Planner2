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
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>
        <div class="header--wrapper">
            <div class ="header--title">
                <h2>Edit Budget</h2>
            </div>
        </div>
        <div class="tabular--wrapper">
            <div class="table-container">
            <form method="post">
                <?php
                // Koneksi ke database
                include '../config.php';

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
                    // Tangkap data dari formulir update
                    $edited_date = $_POST['edited_date'];
                    $edited_dayilyb = $_POST['edited_dayilyb'];
                    $edited_monthb = $_POST['edited_monthb'];
                    $edit_id = $_POST['edit_id'];
                
                    // Query SQL UPDATE untuk meng-update data acara
                    $sql_update = "UPDATE budgetlist SET tanggal='$edited_date', daybudget='$edited_dayilyb', monthbudget='$edited_monthb' WHERE id='$edit_id'";
                
                    // Eksekusi query update
                    if (mysqli_query($conn, $sql_update)) {
                       header("Location: budgetlist.php");
                       exit();
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                }

                
                if (!$conn) {
                    die("Koneksi gagal: " . mysqli_connect_error());
                }

                // Tangkap ID acara dari URL
                if (isset($_POST['edit_id'])) {
                    $edit_id = $_POST['edit_id'];
                
                    // Query untuk mengambil detail acara berdasarkan ID
                    $sql = "SELECT * FROM budgetlist WHERE id = $edit_id";
                    $result = mysqli_query($conn, $sql);
                
                    // Mengecek apakah ada data yang ditemukan
                    if (mysqli_num_rows($result) > 0) {
                        // Menampilkan data pada formulir untuk diedit
                        $row = mysqli_fetch_assoc($result);
                        ?>
                        <!-- Formulir untuk mengedit data acara -->
                        <form method="post">
                            <!-- Field untuk mengedit nama acara -->
                            <label for="edited_date">Date</label><br>
                            <input type="date" id="edited_date" name="edited_date" value="<?php echo $row['tanggal']; ?>"><br>
                            
                            <!-- Field untuk mengedit alamat acara -->
                            <label for="edited_dayilyb">Daily Budget</label><br>
                            <input type="text" id="edited_dayilyb" name="edited_dayilyb" value="<?php echo $row['daybudget']; ?>"><br>
                            
                            <!-- Field untuk mengedit jumlah peserta acara -->
                            <label for="edited_monthb">Monthly Budget</label><br>
                            <input type="text" id="edited_monthb" name="edited_monthb" value="<?php echo $row['monthbudget']; ?>"><br>
                            
                            <!-- Hidden field untuk menyimpan ID acara yang diedit -->
                            <input type="hidden" name="edit_id" value="<?php echo $edit_id; ?>">
                            
                            <!-- Tombol "Update" untuk mengirimkan formulir -->
                            <button style="color:blue;" type="submit" name="update">Update</button>
                        </form>
                        <?php
                    } else {
                        echo "Tidak ada data yang ditemukan.";
                    }
                } else {
                    echo "ID acara tidak ditemukan.";
                }
                

                // Menutup koneksi
                mysqli_close($conn);
                ?>
            </form>
            </div>
        </div>
    </div>
    
    </body>
</html>