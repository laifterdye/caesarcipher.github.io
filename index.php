<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Portfolio</title>
  </head>
  <body>

    


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          
          <h1 class="display-4">CAESAR CIPHER</h1>
          
        </div>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>Caesar Cipher</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          
          <div class="col-md-5">
            <div class="col text-center">
              <h2>Encode</h2>
            </div>
            <div class="col-lg-10">
            
            <form action="encode.php" method="get">
                <div class="form-group">
                  <label for="nama">Plain Text</label>
                  <input type="text" class="form-control" name="kata">
                </div>
                <div class="form-group">
                  <label for="email">Key</label>
                  <input type="text" class="form-control" name="key" maxlength="2">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Encode Plain Text</button>
                </div>
              </form>
  
            </div>
          </div>
          <div class="col-md-4">
            <div class="col text-center">
              <h2>Decode</h2>
            </div>
            <div class="col-lg-13">
            
            <form action="decode.php" method="get">
                <div class="form-group">
                  <label for="nama">Cipher Text</label>
                  <input type="text" class="form-control" name="kata">
                </div>
                <div class="form-group">
                  <label for="email">Key</label>
                  <input type="text" class="form-control" name="key" maxlength="2">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Decode Cipher Text</button>
                </div>
              </form>
  
            </div>
          </div>
        </div>
      </div>
    </section>




<br>
<br>
<br>
<br><br><br><br><br><br><br><br>
    <!-- Contact -->
    <section class="contact" id="contact">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h3 class="card-title">Cyber Security</h3>
                
              </div>
            </div>
                <ul class="list-group mb-4">
                  <li class="list-group-item"><h5>Dosen : Irfan Syamsuddin, ST, PG.Dipl.BEC, M.Com.ISM,Ph.D</h5></li>
                  <li class="list-group-item">Nama : Agung Indrawan</li>
                  <li class="list-group-item">Kelas : 3B Teknik Komputer dan Jaringan</li>
                  <li class="list-group-item">NIM : 42517048</li>
                </ul>
            
          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Copyright &copy; 2020.</p>
          </div>
        </div>
      </div>
    </footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
