<?= $this->extend('template/tema') ?>

<?= $this->section('content') ?>

<div class="container-fluid bg-heading">
  <div class="container p-3">
    <a href="/" class="text-decoration-none">Home</a><br>
    <Span class="display-3 fs-1 text-white pb-3">Cara Transaksi</Span>
    </Span>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 my-2">
      <div class="bg-body shadow rounded p-2">
        <h5 class="text-capitalize my-3">cara transaksi pulsa yang mudah dan murah di metro reload</h5>
        <p>Untuk mempermudah dalam melakukan transaksi dapat menggunakan kode tertentu. Kode tersebut biasa disebut dengan Format Transaksi, sehingga Anda harus menggunakan format yang telah kami tentukan agar server dapat mengenali perintah transaksi Anda dan transaksi dapat diproses.</p>
        <div class="text-center my-3">
          <div class="p-3">
              <span>Anda dapat mengirimkan seluruh Format Transaksi ke SMS/WhatsApp Center kami di bawah ini.<br></span><span class="text-uppercase fw-bold mt-1">sms center<br><script type="text/javascript" src="https://metroreload.co.id/nocenter.php?link=no"></script></span><br>
              <span class="fw-bold text-uppercase">WhatsApp Center</span><br>
              <a href="https://wa.me/081213512999/" class="text-decoration-none fw-bold" target="_blank"><img src="/img/wa.png" alt="" width="30"> 081213512999</a><br>
              <a href="https://wa.me/081213514999/" class="text-decoration-none fw-bold" target="_blank"><img src="/img/wa.png" alt="" width="30"> 081213514999</a><br>
              <a href="https://wa.me/082137434999/" class="text-decoration-none fw-bold" target="_blank"><img src="/img/wa.png" alt="" width="30"> 082137434999</a><br>
              <a href="https://wa.me/082137450999/" class="text-decoration-none fw-bold" target="_blank"><img src="/img/wa.png" alt="" width="30"> 082137450999</a><br>
              <a href="https://wa.me/082244047999/" class="text-decoration-none fw-bold" target="_blank"><img src="/img/wa.png" alt="" width="30"> 082244047999</a><br>
              <a href="https://wa.me/082257289999/" class="text-decoration-none fw-bold" target="_blank"><img src="/img/wa.png" alt="" width="30"> 082257289999</a><br>
              <a href="https://wa.me/082334952999/" class="text-decoration-none fw-bold" target="_blank"><img src="/img/wa.png" alt="" width="30"> 082334952999</a><br>
              <a href="https://wa.me/085708057999/" class="text-decoration-none fw-bold" target="_blank"><img src="/img/wa.png" alt="" width="30"> 085708057999</a><br>
              <a href="https://wa.me/085730723999/" class="text-decoration-none fw-bold" target="_blank"><img src="/img/wa.png" alt="" width="30"> 085730723999</a><br>
              <a href="https://wa.me/087756061999/" class="text-decoration-none fw-bold" target="_blank"><img src="/img/wa.png" alt="" width="30"> 087756061999</a>
          </div>
          <h3 class="text-uppercase">aplikasi android metro reload</h3>
          <div class="bg-blue border border-danger border-1 p-2 mb-3">
            <span>Agar transaksi lebih cepat dan praktis, Anda dapat download Aplikasi Metro Reload yang tersedia di Play Store. Install Aplikasi Metro Reload, kemudian daftar menggunakan nomor HP Anda.</span>
            <script type="text/javascript" src="https://metroreload.co.id/android.php?referrer=TOPMD"></script>
          </div>
          <p>Tarif SMS sesuai dengan tarif operator masing-masing. SMS balasan tidak dikenakan biaya. Simpan lebih dari satu nomor center kami di HP Anda untuk mempermudah transaksi.</p>
        </div>
      </div>
      <div class="my-3">
        <div class="bg-body shadow rounded pb-2">
          <h5 class="bg-heading rounded-top text-capitalize text-white p-2 fs-5">berikut format transaksi pulsa elektrik yang dapat anda gunakan :</h5>
          <p>
            <ul class="list-group list-group-numbered p-1">
              <li class="list-group-item fw-bold">Isi pulsa tanpa kode (hanya untuk nomor GSM)</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">NOMINAL.NOHP.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">10.082256987413.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Isi pulsa dengan kode (untuk paket internet, SMS, telepon, pulsa transfer)</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">KODE PRODUK.NOHP.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">NB1.082256987413.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Isi pulsa ke nomor dan produk yang sama dalam sehari</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">NOMINAL.2.NOHP.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">10.2.087456321988.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Isi pulsa multi</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">NOMINAL1.NOHP1.NOMINAL2.NOHP2.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">25.082256987413.20.087456321988.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Isi token PLN</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">KODE PRODUK.NOMETERAN.NOHP PELANGGAN.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">PLN100.32015698562.087456321988.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Pembelian voucher game, top up e-money, maupun voucher tv prabayar</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">KODE PRODUK.NOHP.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">SPE20.081234567895.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Cek tagihan PPOB</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">CEK[KODE].ID PELANGGAN.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">CEKPLN.1230456789562.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Bayar tagihan PPOB</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">BYR[KODE].ID PELANGGAN.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">BYRPLN.1230456789562.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Cek harga</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">CH.KODE PRODUK.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">CH.IN.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Ganti PIN</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">GP.PIN BARU.PIN LAMA</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">GP.123456.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Ganti nama</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">GN.NAMA.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">GN.METROCENTER.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Meminta rekap transaksi</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">CEK.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">CEK.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Cek transaksi per tanggal</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">CEK.TANGGAL.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">CEK.22.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Cek status transaksi</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">CEK.NOHP.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">CEK.087456321988.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Cek saldo</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">S.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">S.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Cek mutasi saldo</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">LAP.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">LAP.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Cek laporan mutasi saldo per tanggal</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">CEK.TANGGAL.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">CEK.22.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Tambah  No. HP untuk transaksi (hanya via SMS)</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">TAMBAHHP.NOHPBARU.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">TAMBAHHP.085632147895.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Hapus  No. HP untuk transaksi (hanya via SMS)</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">HAPUSHP.NOHPBARU.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">HAPUSHP.085632147895.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Tambah YM transaksi</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">TAMBAHYM.ALAMATYAHOO.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">TAMBAHYM.metroreload@yahoo.co.id.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Hapus YM transaksi</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">HAPUSYM.ALAMATYAHOO.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">HAPUSYM.metroreload@yahoo.co.id.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Paralel Gtalk transaksi</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">TAMBAHGT.ALAMAT EMAIL.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">TAMBAHGT.metroreload@gmail.com.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Hapus Gtalk transaksi</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">HAPUSGT.ALAMAT EMAIL.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">HAPUSGT.metroreload@gmail.com.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Paralel ID Telegram</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">REG.[nohp_terdaftar]</li>
              </ul>
              <li class="list-group-item fw-bold">Lihat daftar pengirim semua tipe</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">CEKHP.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">CEKHP.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Lihat daftar pengirim SMS downline</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">CEKHP.ID DOWNLINE.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">CEKHP.MR123.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Konfirmasi deposit</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">KOM.ID isi pesan</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">KOM.MR123 sudah transfer via BCA 100.123 a/n Wariyanto belum masuk, mohon di cek</li>
                <li class="fst-italic text-primary fs-6">Note: Deposit input otomatis, konfirmasi deposit hanya digunakan pada saat deposit belum masuk lebih dari 15 menit sejak transfer.</li>
              </ul>
              <li class="list-group-item fw-bold">Komplain transaksi</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">KOM.ID isi pesan</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">KOM.MR123 pembelian pulsa 20 ribu ke nomor 081234567895 belum masuk, mohon di cek</li>
              </ul>
              <li class="list-group-item fw-bold">Mendaftarkan agen/downline baru</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">DAFTAR#NAMA#KOTA#NOHP#MARKUP#PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">DAFTAR#METROCENTER#MADIUN#081234567895#25#111000</li>
              </ul>
              <li class="list-group-item fw-bold">Transfer saldo ke downline (ID Agen bisa diganti nomor HP agen/downline)</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">TD.ID AGEN/NOHP.NOMINAL.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">TD.MR123.75000.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Ubah markup downline</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">UP.ID AGEN.MARKUP.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">UP.MR123.50.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Cek saldo downline</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">S.ID AGEN.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">S.MR123.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Reset PIN downline</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">PIN.ID AGEN.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">PIN.MR123.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Blokir downline</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">BLOKIR.ID AGEN.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">BLOKIR.MR123.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Aktifkan downline</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">AKTIF.ID AGEN.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">AKTIF.MR123.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Lihat daftar downline</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">LDL.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">LDL.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Lihat daftar downline dari downline (sub downline)</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">LDL.ID AGEN.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">LDL.MR123.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Setting SMS buyer</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">IKLAN#Isi Pesan</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">IKLAN#Terima kasih telah melakukan transaksi di METRO CENTER, sedia pembelihan token PLN dan pembayaran tagihan</li>
              </ul>
              <li class="list-group-item fw-bold">Request prefiks autoreg</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">AUTOREG#KATA KUNCI#25</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">AUTOREG#DAFTAR#25</li>
              </ul>
              <li class="list-group-item fw-bold">Format pendaftaran agen AUTOREG</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">KATA KUNCI#NAMA#KOTA</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">DAFTAR#METRO CENTER#MADIUN</li>
                <li class="fst-italic text-primary fs-6">Note : Harus sudah melakukan request prefiks autoreg dan format pendaftaran dikirim dari No HP calon agen.</li>
              </ul>
              <li class="list-group-item fw-bold">Request tiket deposit via transfer bank</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">TIKET.NOMINAL.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">TIKET.150000.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Request tiket deposit via alfamart</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">DEPO.ALFA.NOMINAL.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">DEPO.ALFA.150000.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Request tiket deposit via indomaret</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">DEPO.INDO.NOMINAL.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">DEPO.INDO.150000.111000</li>
              </ul>
              <li class="list-group-item fw-bold">Request tiket deposit via virtual account (VA)</li>
              <ul class="list-transaksi">
                <li><i class="bi bi-check2-circle me-2"></i>Format : <span class="text-danger fw-bold">DEPO.VA.BANK.NOMINAL.PIN</li>
                <li><i class="bi bi-check2-circle me-2"></i>Contoh : <span class="text-primary fw-bold">DEPO.VA.BCA.150000.111000</li>
              </ul>
            </ul>
          </p>
        </div>
        <div class="bg-body shadow rounded my-3">
          <h5 class="bg-heading rounded-top text-capitalize text-white p-2 fs-5">format bantuan</h5>
          <div class="px-2 pb-2">
            <span>Jika lupa salah satu format transaksi pulsa, Anda dapat menggunakan format bantuan dibawah ini :
            <ul class="list-transaksi"></span>
              <li><i class="bi bi-check-circle-fill me-2"></i>menu bantuan</li>
              <li><i class="bi bi-check-circle-fill me-2"></i>mengetahui format transaksi pulsa ketik : <b>FORMAT</b></li>
              <li><i class="bi bi-check-circle-fill me-2"></i>mengetahui kode produk ketik : <b>PRODUK</b></li>
              <li><i class="bi bi-check-circle-fill me-2"></i>mengetahui SMS CENTER ketik : <b>CENTER</b></li>
            </ul>
          </div>
        </div>
        <div class="bg-body shadow rounded my-3">
          <h5 class="bg-heading rounded-top text-capitalize text-white p-2 fs-5">salah format transaksi pulsa elektrik</h5>
          <p class="px-2 pb-2">Dalam kasus perintah format transaksi pulsa elektrik yang Anda kirimkan tidak sesuai, maka server akan menolak format transaksi pulsa Anda dengan mengirimkan reply FORMAT SALAH, tidak ada batasan khusus bagi Anda apabila berulang kali mengirimkan format salah ke server kami. Apabila Anda lupa atau tidak tahu Format dan sedang tidak di depan komputer maka Anda cukup dengan mengetik : FORMAT lalu kirim ke SMS/CENTER, nanti secara otomatis server akan memberikan daftar format transaksi pulsa murah yang dapat anda gunakan.</p>
        </div>
        <div class="bg-body shadow rounded my-3">
          <h5 class="bg-heading rounded-top text-capitalize text-white p-2 fs-5">Salah PIN</h5>
          <div class="p-2">
            <p class="border border-danger border-1 bg-yellow p-2">Hati-hati 3 kali Salah PIN, maka ID Anda terblokir otomatis. Untuk mengaktifkan kembali dapat menghubungi CS kami.</p>
            <p>Disamping kesalahan Format, banyak dari pelanggan setia kami yang salah dalam mengisi PIN (Personal Identification Number) nya. Lain halnya dengan salah format transaksi pulsa, kasus PIN SALAH harus diperhatikan dengan seksama karena apabila Anda 3 (TIGA) kali SALAH dalam mengisi PIN maka secara otomatis Morena Pulsa akan menonaktifkan ID Anda untuk sementara. Proteksi ini kami gunakan untuk melindungi Saldo deposit Anda dari tangan-tangan jahil yang mungkin berada di sekitar kita.</p>
            <p>Untuk mengaktifkan kembali ID Anda yang terblokir, maka cukup dengan menghubungi Customer Service kami, maka dalam waktu singkat ID Anda kembali aktif dan Saldo deposit tetap utuh dalam keadaan sebelum terblokir.</p>
          </div>
        </div>
        <div class="bg-body shadow rounded my-3">
          <h5 class="bg-heading rounded-top text-white p-2 fs-5">PENTING!</h5>
            <p class="px-2 pb-2">Kesalahan Penulisan Nomor dalam melakukan transaksi pulsa elektrik, BUKAN merupakan tanggungjawab KiosPulsaMurah.com, Oleh karena itu periksa kembali Nomor Tujuan Anda sebelum mengirimkan format transaksi pulsa elektrik</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 my-2">
      <!-- KANTRO METRO RELOAD -->
      <div class="shadow">
        <div class="bg-heading rounded-top pt-2 ps-2 pb-1">
          <h5 class="text-uppercase text-white fs-6"><i class="bi bi-building-fill me-2"></i>kantor metro reload</h5> 
        </div>
        <div class="border border-dark border-1 shadow text-center bg-body p-2 mb-3">
          <span class="text-capitalize">alamat: desa purworejo RT 01 RW 01, kecamatan nguntoronadi, kabupaten magetan, provinsi jawa timur.<br>call center: 08123129288<br>Website: .....</span>
        </div>
      </div>
      <!-- CARA PENDAFTARAN -->
      <div class="shadow rounded-top bg-heading pt-2 ps-2 pb-1">
        <h5 class="text-uppercase text-white fs-6"><i class="fa-sharp fa-solid fa-right-to-bracket me-2"></i>cara pendaftaran</h5>
      </div>
      <div class="border border-dark border-1 shadow bg-body text-center p-2">
        <span class="text-uppercase">ingin jadi master dealer md / mk pulsa murah ???<br>pendaftaran mk / md silahkan ketik :<br><span class="text-danger fw-bold">topmd.nama.kota</span><br>contoh :<br><span class="text-danger fw-bold">topmd.kioscell.magetan</span><br>kirim ke salah satu sms center / whatsapp center yang ada di bawah ini</span><br><script type="text/javascript" src="https://metroreload.co.id/nocenter.php?link=no"></script><span class="text-capitalize text-danger fw-bold">pendaftaran otomatis langsung ke server klik gambar whatsapp di bawah (silahkan ganti dengan Nama dan Kota Anda)</span><script type="text/javascript" src="https://metroreload.co.id/autoreg.php?autoreg=TOPMD"></script>
        <div class="border border-danger border-1 bg-yellow my-3">
          <span class="text-center p-2">note : jika salah 1 SMS CENTER di atas tidak merespon silahkan di kirim ulang SMS transaksinya ke SMS CENTER yang berbeda. untuk mengetahui SMS CENTER yang aktif silahkan ketik : CENTER kirim ke salah satu center.</span>
        </div>
      </div>
      <!-- CENTER TRANSAKSI ONLINE -->
      <div class="shadow rounded-top bg-heading pt-2 ps-2 pb-1 mt-3">
        <h5 class="text-uppercase text-white fs-6"><i class="bi bi-chat-right-dots me-2"></i>center transaksi online</h5>
      </div>
      <div class="border border-dark border-1 bg-body shadow text-center p-2">
        <span class="text-uppercase text-danger fw-bold">whatsapp center</span><br><script type="text/javascript" src="https://metroreload.co.id/wacenter.php?link=no"></script>
        <div class="border border-danger border-1 bg-yellow p-2 my-2">
          <span>untuk bisa transaksi via <span class="text-uppercase text-danger fw-bold">whatsapp</span> silahkan simpan center WhatsApp di atas.</span>
        </div>
        <span class="text-uppercase text-danger fw-bold my-2">telegram center<br><script type="text/javascript" src="https://metroreload.co.id/telegramcenter.php?link=no"></script></span>
        <div class="border border-danger border-1 bg-yellow p-2 my-3">
          <span class="text-capitalize">untuk paralel telegram silahkan ketik : <span class="text-uppercase text-danger fw-bold">tambahtl.idtelegram.pin</span> kirim ke sms center. keterangan lebih lengkap =><a href="" class="text-decoration-none text-danger fw-bold">cara transaksi via telegram</a></span>
        </div>
        <span class="text-uppercase text-danger fw-bold my-2">aplikasi android</span><script type="text/javascript" src="https://metroreload.co.id/android.php?referrer=TOPMD"></script>
        <div class="border border-danger border-1 bg-yellow p-2 my-2">
          <span class="text-capitalize">khusus pengguna android, silahkan download aplikasi <a href="" class="text-decoration-none text-danger fw-bold">METRO RELOAD.</a> keterangan lebih lengkap, baca => <a href="" class="text-decoration-none text-danger fw-bold">cara download dan menggunakan aplikasi android metro reload.</a></span>
        </div>
      </div>
      <!-- CUSTOMER SERVICE -->
      <div class="shadow rounded-top bg-heading pt-2 ps-2 pb-1 mt-3">
        <H5 class="text-uppercase text-white fs-6"><i class="bi bi-telephone-fill me-2"></i>customer service</H5>
      </div>
      <div class="border border-dark bg-body border-1 shadow text-center p-2">
        <span class="text-uppercase text-danger fw-bold">layanan support</span><br><span>ready setiap hari mulai pukul 06:00-23:00 WIB ketik : KOM.isi pesan keluhan lalu kirim ke center transaksi di atas, atau chat WA CS di bawah</span><br><span class="text-uppercase text-danger fw-bold">call center<br><script type="text/javascript" src="https://metroreload.co.id/wacs.php?link=no"></script><br></span><span class="text-uppercase text-danger fw-bold">whatsapp cs<br><script type="text/javascript" src="https://metroreload.co.id/wacs.php?link=no"></script></span><br><span class="text-uppercase text-danger fw-bold">telegram cs<br><script type="text/javascript" src="https://metroreload.co.id/telegramcs.php?link=no"></script></span>
        <div class="border border-danger border-1 bg-yellow text-center p-2 my-2">
          <span>untuk terhubung dengan layanan <span class="text-danger fw-bold">WhatsApp</span> dan <span class="text-danger fw-bold">Telegram CS</span> kami, silahkan simpan nomor Call Center di atas.</span>
        </div>
        <span class="text-capitalize fw-bold">(hanya melayani keluhan transaksi dan deposit saja tidak untuk pendaftaran. untuk mempermudah pelayanan kami setiap komplain mohon sertakan kode ID anda)</span>
      </div>
      <!-- REKENING SUPPORT DEPOSIT -->
      <div class="shadow rounded-top bg-heading pt-2 ps-2 pb-1 mt-3">
        <h5 class="text-uppercase text-white fs-6"><i class="bi bi-wallet me-2"></i>rekening support deposit</h5>
      </div>
      <div class="border border-dark border-1 bg-body shadow text-center p-2">
        <span class="fw-bold"><img src="/img/BCA.png" alt="" class="p-2" height="60"><br><script type="text/javascript" src="https://metroreload.co.id/rekbca.php"></script></span><br>
        <span class="fw-bold"><img src="/img/BNI.png" alt="" class="p-2" height="60"><br><script type="text/javascript" src="https://metroreload.co.id/rekbni.php"></script></span><br>
        <span class="fw-bold"><img src="/img/BRI.png" alt="" class="p-2" height="60"><br><script type="text/javascript" src="https://metroreload.co.id/rekbri.php"></script></span><br>
        <span class="fw-bold"><img src="/img/MANDIRI.png" alt="" class="p-2" height="60"><br><script type="text/javascript" src="https://metroreload.co.id/rekmandiri.php"></script></span><br>
        <span>Semua Rekening a/n<br></span><span class="text-danger fw-bold"><script type="text/javascript" src="https://metroreload.co.id/anbca.php"></script></span>
        <div class="border border-danger border-1 bg-yellow my-2 p-2">
          <span class="text-capitalize">gunakan sistem tiket agar deposit anda bisa masuk otomatis. ketik : <span class="text-danger text-uppercase fw-bold">tiket.jumlah.pin</span> kirim ke salah 1 center. keterangan lebih lengkap => <a href="" class="text-danger text-capitalize fw-bold text-decoration-none">cara deposit saldo metro reload</a></span>
        </div>
      </div>
      <!-- LEGALITAS SERVER -->
      <div class="shadow rounded-top bg-heading pt-2 ps-2 pb-1 mt-3">
        <h5 class="text-uppercase text-white fs-6"><i class="bi bi-journal-bookmark-fill me-2"></i>legalitas server</h5>
      </div>
      <div class="border border-dark border-1 bg-body shadow text-center p-2">
        <span class="text-uppercase text-danger fw-bold">cv. metro payment indotama</span><br><span class="fw-bold">Direktur Utama :</span><br><span>Wariyanto</span><br><span class="fw-bold">Nomor SK :</span><br><span>AHU-00311XX-AH.01.16 Tahun 2021</span><br><span class="fw-bold">NIB :</span><span>1229000121316</span><br><span class="text-uppercase fw-bold">Notaris :</span><br><span>Dedy Imron Maha Putra, S.H., M.Kn.</span><br><span class="fw-bold">Tanggal Akta :</span><br><span>03 September 2021</span>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>