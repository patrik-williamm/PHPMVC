<div class="accordion mt-4 col-12 container" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php foreach($data['mhs'] as $mhs): ?>
          <ul>
            <li><?= $mhs['nama'] ?></li>
            <li><a href="<?= URLBASE ?>/mahasiswa/detail/<?= $mhs['id'] ?>">Detail</a></li>
          </ul>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>