<?= $this->extend('template/tema') ?>

<?= $this->section('content') ?>

<div class="container">
  <div class="row mt-5">
    <div class="col-md-6 my-3">
      <h1 class="display-5">Daftar Harga Pulsa Murah Elektrik Real Time</h1>
      <p class="display-5 fs-5">Harga Pulsa Elektrik Murah yang tercantum di bawah ini adalah harga update real time langsung dari server kami. Semua produk Agen Pulsa Elektrik Murah kami merupakan pulsa all operator skala nasional sehingga dapat digunakan transaksi dimana saja di seluruh Indonesia tanpa dibatasi regional dan cluster.</p>
    </div>
    <div class="col-md-6 my-3">
    <iframe src="https://metroreload.co.id/daftar.php?upline=MR41327&up=25" width="100%" height="370px" frameborder="0"></iframe>
    </div>
  </div>
  <div class="row">
    <div class="col text-center">      
      <script type="text/javascript" src="https://metroreload.co.id/tanggal.js"></script>
      <script type="text/javascript" src="https://metroreload.co.id/harga.php?type=js&level=RS&up=25&grup=PULSA"></script>
    </div>
  </div>
</div>

<?= $this->endSection() ?>