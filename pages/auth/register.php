 
<?php 
pageAdd('include/header.php');
?>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-6 pt-4"> 
                <h2>Register Form</h2>
                <form action="submit-register" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="text">Name:</label>
                        <input type="text" class="form-control" id="text" placeholder="Enter Name" name="name">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password"
                            name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="login" class="btn btn-dark">Login</a>
                </form>

            </div>
        </div>


    </div>
<?php  
pageAdd('include/footer.php');
?>