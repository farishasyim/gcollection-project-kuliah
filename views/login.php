<!DOCTYPE html>
<html>

<body style="background-color: #d51f27">
    <div class="container container-fluid pt-5 align-items-end">
        <div class="text-canter">
            <h4 class="font-weight-bold text-dark"><span class="text-light" style="font-size: 2em">G</span><span class="text-dark" style="font-size: 2em">C</span>OLLECTION</h4>
        </div>
        <div class="bg-light p-5 rounded">
            <div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert" style="display: none;">
                <strong id="keterangan"></strong> Tolong cek ulang
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST">
                <h4 class="mb-4">Login Member</h4>
                <div class="form-group">
                    <label>Username :</label>
                    <input type="text" name="username" required class="form-control" placeholder="Username anda">
                </div>
                <div class="form-group">
                    <label>Password :</label>
                    <input type="Password" required name="password" placeholder="Password anda" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="log in" class="btn btn-block text-light" style="background-color: #d51f27;">
                </div>
            </form>
        </div>
    </div>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "user") {
            if ($password == "12345") {
                $_SESSION['data'] = "ada";
                echo "
                    <script>
                        window.location = '?page=home';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        document.getElementById('alert').style.display = 'block';
                        document.getElementById('keterangan').innerHTML = 'Password Salah';
                    </script>
                ";
            }
        } else {
            echo "
                <script>
                    document.getElementById('alert').style.display = 'block';
                    document.getElementById('keterangan').innerHTML = 'Username Salah';
                </script>
            ";
        }
    }
    ?>
</body>

</html>