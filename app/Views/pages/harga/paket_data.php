<?= $this->extend('template/tema') ?>

<?= $this->section('content') ?>

<div class="container">
  <div class="row mt-5">
    <div class="col-md-6 my-3">
      <h1 class="display-5">Paket Data Internet</h1>
      <p class="display-5 fs-5">Harga Paket Data Internet yang tercantum di bawah ini adalah harga update real time 
        langsung dari server kami. Selalu cek deskripsi produk sebelum melakukan transaksi.
      </p>
    </div>
    <div class="col-md-6 my-3">
      <iframe src="https://metroreload.co.id/daftar.php?upline=MR41327&up=25" width="100%" height="370px" 
      frameborder="0"></iframe>
    </div>
  </div>
  <div class="row">
    <div class="col text-center">      
      <script type="text/javascript" src="https://metroreload.co.id/tanggal.js"></script>
      <script type="text/javascript" src="https://metroreload.co.id/harga.php?type=js&level=RS&up=25&grup=INTERNET"></script>
    </div>
  </div>
</div>

<?= $this->endSection() ?>