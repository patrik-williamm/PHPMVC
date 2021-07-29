
<div class="accordion mt-4 col-12 container" id="accordionExample">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMahasiswa">
    Tambah data Mahasiswa
  </button>

  <div class="accordion-item mt-3">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       Daftar mahasiswa
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php foreach($data['mhs'] as $mhs): ?>
          <ul>
            <li><?= $mhs['nama'] ?></li>
            <li><a href="<?= URLBASE ?>/mahasiswa/detail/<?= $mhs['id'] ?>">Detail</a></li>
           
            <li><a href="<?= URLBASE ?>/mahasiswa/hapus/<?= $mhs['id'] ?>">Hapus</a></li>
          </ul>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalMahasiswa" tabindex="-1" aria-labelledby="modalLabelMahasiswa" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelMahasiswa">tambah data mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= URLBASE ?>/Mahasiswa/tambah" method="post">
         
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

           <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="number" class="form-control" id="nim" name="nim">
          </div>

           <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

           <div class="mb-3">
            <label for="jurusan" class="form-label">jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan">
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
          </div>
       </form>
    </div>
  </div>
</div>