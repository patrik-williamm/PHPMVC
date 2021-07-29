<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['mhs']['nama'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim'] ?></h6>
    <span class="card-link"><?= $data['mhs']['email'] ?></span>
    <span class="card-link"><?= $data['mhs']['jurusan'] ?></span>
     <li><a href="<?= URLBASE ?>/mahasiswa/edit/<?= $data['mhs']['id'] ?>" data-bs-toggle="modal" data-bs-target="#modalMahasiswa" class="modalUbah">Edit</a></li>
    <a href="<?= URLBASE ?>/mahasiswa">kembali</a>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalMahasiswa" tabindex="-1" aria-labelledby="modalLabelMahasiswa" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelMahasiswa">edit data mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= URLBASE ?>/Mahasiswa/edit" method="post">
          <div class="mb-3">
            <input value="<?= $data['mhs']['id'] ?>" type="hidden" class="form-control" id="id" name="id">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input value= "<?= $data['mhs']['nama'] ?>" type="text" class="form-control" id="nama" name="nama">
          </div>

           <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input value= "<?= $data['mhs']['nim'] ?>" type="number" class="form-control" id="nim" name="nim">
          </div>

           <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input value= "<?= $data['mhs']['email'] ?>" type="email" class="form-control" id="email" name="email">
          </div>

           <div class="mb-3">
            <label for="jurusan" class="form-label">jurusan</label>
            <input value= "<?= $data['mhs']['jurusan'] ?>" type="text" class="form-control" id="jurusan" name="jurusan">
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
          </div>
       </form>
    </div>
  </div>
</div>
