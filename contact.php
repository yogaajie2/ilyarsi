<!doctype html>
<html lang="en">

 <?php include ('fungsi/koneksi.php'); ?>

  <head>

    <?php include ('head.html'); ?>

    <title>Contact | Webe Piles</title>
  </head>

  <body>
    <div class="container-fluid sticky-top menu">
        <div class="container">

            <?php include ('navbar.html') ?>
        
        </div>
    </div>
        
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mt-5" style="text-transform: uppercase;">Contact</h1>
                <small>
                    <a href="home.php">Home</a> > Contact
                </small>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 my-5">
                <p>Start building your dream project with us. Have other questions? Please fill this form below and we will contact you shortly.</p>
                <form action="pesan.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="perusahaan" placeholder="Company Name">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="telepon" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subjek" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="pesan">Message...</textarea>
                    </div>
                    <button type="submit" class="btn btn-light">Send Message</button>
                </form>
            </div>
            <div class="col-md-6 my-5">
                <div class="row">

                <?php
                    $kontak = "SELECT * FROM kontak";
                    $hasil_kontak = mysqli_query($koneksi, $kontak);

                    $i = 0;

                    while ($row_kontak = mysqli_fetch_array($hasil_kontak, MYSQLI_ASSOC)) {
                ?>

                    <div class="col-md-6">
                        <address>
                            <strong>PT. Webe Piles</strong><br>
                            <?php echo $row_kontak['alamat']; ?>
                        </address>
                    </div>
                    <div class="col-md-6">
                        <p>Phone: <?php echo $row_kontak['telepon']; ?></p>
                        <p>Email: <?php echo $row_kontak['email']; ?></p>
                    </div>

                <?php } ?>

                </div>
                <div class="row">
                    <img class="img-fluid" src="img/contents/map.png">
                </div>
            </div>
        </div>
    </div>

    <?php include ('footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>