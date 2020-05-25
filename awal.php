<html>
<head>
 <title>FORM UNTUK ENKRIPSI</title>
</head>
<body>
<form action="enkcaesar.php" method="get">
 Plainteks : <input type="text" name="kata"> <br>
 Key : <input type="text" name="key" maxlength="5"> <br>
 <input type="submit" value="kirim">
 <input type="reset" value="ulangi">
</form>

<form action="enkcaesar.php" method="get">
                <div class="form-group">
                  <label for="nama">Plain Text</label>
                  <input type="text" class="form-control" id="kata">
                </div>
                <div class="form-group">
                  <label for="email">Key</label>
                  <input type="text" class="form-control" id="key">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Encode</button>
                </div>
              </form>


</body>
</html>