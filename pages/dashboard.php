<?php 
pageAdd('/include/header.php');
?>

<body>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-6 pt-4">
                <h2>User Dashboard</h2>
                Wellcome Mr/Mrs
                <?php echo $_SESSION['user_name']; ?>
                <br>
                <br>
                <a href="logout" class="btn btn-dark btn-sm">Logout</a>

            </div>
        </div>


    </div>

    <?php 
pageAdd('/include/footer.php');
?>