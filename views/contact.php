<div class="container container-fluid p-5">
    <h3>Anda Tertarik? Silahkan Isi Form Dibawah</h3>
    <form method="POST">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="name" id="">
        </div>
        <div class="form-group">
            <label for="">No Telp</label>
            <input type="text" class="form-control" name="no telp" id="">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" id="">
        </div>
        <div class="form-group">
            <label for="">Message</label>
            <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        <p></p>
    </form>

    <div class="row mt-5">
        <div class="col-md-3"> <i class="fa fa-whatsapp"></i> Whatsapp</div>
        <div class="col-md-9">+628122839131</div>
        <div class="col-md-3"> <i class="fa fa-envelope"></i> Mail</div>
        <div class="col-md-9">gcollection@gmail.com</div>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $message = $_POST['message'];
    echo "<script>
            window.location = 'https://api.whatsapp.com/send?phone=6281223896063&text=" . $message . "';
        </script>";
}
?>