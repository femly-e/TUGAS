<div class="container">
  <h2>Data Mahasiswa</h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Npm</th>
        <th>Fakultas</th>
        <th>Prodi</th>
      </tr>
    </thead>
    <tbody>
      <?php

      require_once 'connect.php';

      $query = mysqli_query($connect, "SELECT * FROM `mahasiswa`");
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
            <?php echo $hasil['npm'] ?>
          </td>
          <td>
            <?php echo $hasil['fakultas'] ?>
          </td>
          <td>
            <?php echo $hasil['prodi'] ?>
          </td><?php
      }
      ?>
      </tbody>
  </table>
</div>