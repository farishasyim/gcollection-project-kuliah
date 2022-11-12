<!DOCTYPE html>
<html>
<body style="background-color: #d51f27">
    <div class="container container-fluid pt-5 align-items-center">
        <div class="text-canter">
            <h4 class="font-weight-bold text-dark"><span class="text-light" style="font-size: 2em">G</span><span class="text-dark" style="font-size: 2em">C</span>OLLECTION</h4>
        </div>
        <div class="bg-light p-5 rounded">
            <form method="POST">
                <h4 class="mb-4">Login Member</h4>
                <div class="form-group">
                    <label>Username :</label>
                    <input type="text" name="username" class="form-control" placeholder="Username anda">
                </div>
                    <div class="form-group">
                    <label>Password :</label>
                    <input type="Password" name="password" placeholder="Password anda" class="form-control">
                    </div>
                    <div class="form-group">
                    <input type="submit" name="submit" value="log in" class="btn btn-primary">
                    </div>
            </form>
        </div>
    </div>
    <?php 
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username == "user" && $password == "12345") {
                echo "
                    <script>
                        window.location = '?page=home';
                    </script>
                ";
            } else {
                echo "<script>
                    alert('username atau password salah');
                </script>";
            }
        }
    ?>
</body>
</html>