<div class="container">
    
    <div class="" style="padding: 10px">
      <!-- <h3 class="text-center text-dark">Add Article</h3> -->
      <a href="admin.php"><button class="btn-danger">Close</button></a>
      <h4 text-align="center" class="btn-info">Update Article Page</h4>
      <?php
        require '../func.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM t_artikel WHERE id = $id";
        $result = mysqli_query($con, $sql);
        $result = mysqli_fetch_assoc($result);
        
        function edit($data)
        {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        if (isset($_POST["update_post"])) {
          $judul = edit($_POST["judul"]);
          $gambar = @$_FILES['gambar']['name'];
          $tmp = @$_FILES['gambar']['tmp_name'];
          $gambarbaru = date ('dmYis').$gambar;
          $path = "../img/".$gambarbaru;
          $isi = edit($_POST["isi"]);

      if(move_uploaded_file($tmp, $path)) {
        $sql = "UPDATE t_artikel SET judul='$judul',gambar='$gambarbaru',isi='$isi' WHERE id=$id";
        $result = mysqli_query($con, $sql);
      }        
          $result = mysqli_query($con, $sql);

           if ($result ) {
              header("Location:../index.php");
            } else{
              echo "Pesan Error ". mysqli_error($con);
            }
        }
        ?>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="u_form">
          <input type="text" name="judul" placeholder="Article Title" required value="<?= $result['judul'] ?>"/>
        </div>
        <div class="u_form">
          <input type="file" name="gambar" placeholder="Input Image" required/>
        </div>
        <div class="u_form">
          <!-- <input type="text" name="isi" placeholder="Isi Artikel" required /> -->
          <textarea name="isi" rows="20" cols="120" placeholder="Input Article Content" required
            style="height: 150px"><?= $result['isi'] ?></textarea>
        </div>
        <button type="submit" name="update_post">Submit</button>
      </form>
    </div>
  </div>