<div class="container">
  <h2>Data Mahasiswa</h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Alamat</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php

      require_once 'connect.php';

      $query = mysqli_query($connect, "SELECT * FROM `dosen`");
      $no = 0;
      while ($hasil = mysqli_fetch_array($query)) {
        $no++;
        ?>
        <tr>
          <td>
            <?php echo $no ?>
          </td>
          <td>
            <?php echo $hasil['nama'] ?>
          </td>
          <td>
            <?php echo $hasil['alamat'] ?>
          </td>
          <td>
            <?php echo $hasil['email'] ?>
          </td>
          <?php
      }
      ?>
      </tbody>
  </table>
</div>