<?= $this->extend('template/tema') ?>

<?= $this->section('content') ?>

<div class="container-fluid bg-heading">
  <div class="container p-3">
    <a href="/" class="text-decoration-none">Home</a><br>
    <Span class="display-3 fs-1 text-white pb-3">Daftar fee PPOB</Span>
    </Span>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="bg-body shadow rounded p-2 mt-2">
        <h5 class="text-capitalize">fee produk pembayaran tagihan PPOB</h5>
        <div class="mx-2 my-2 p-2">
        <img src="/img/agen.png" alt="" class="img-fluid col-md-8 mx-auto d-block">
        </div>
        <p>Fee Produk Pembayaran Tagihan PPOB yang tercantum dibawah ini adalah fee harga update real time langsung dari server kami. Semua produk Agen Pembayaran Tagihan Online kami merupakan produk pembayaran skala nasional sehingga dapat digunakan transaksi dimana saja di seluruh Indonesia tanpa dibatasi regional atau cluster.</p>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h5 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed border-bottom border-top border-dark border-2 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Format Transaksi Pembayaran Tagihan PPOB
              </button>
            </h5>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul class="list-group list-transaksi"><span class="fw-bold text-uppercase">format cek tagihan</span>
                  <li>Format : CEKPLN.IDPelanggan.PIN</li>
                  <li>Contoh : CEKPLN.543210232425.123456</li>
                  <li class="fw-bold">** Kirim ke salah satu Nomor Sms Center/Chat Center</li>
                </ul>
                <ul class="list-group list-transaksi my-3"><span class="fw-bold text-uppercase">format bayar tagihan</span>
                  <li>Format : BYRPLN.IDPelanggan.NOHP.PIN</li>
                  <li>Contoh : BYRPLN.543210232425.081231758447.123456</li>
                  <li class="fw-bold">** Kirim ke salah satu Nomor Sms Center/Chat Center</li>
                </ul>
                <a href="https://cetakstruk.co.id/" target="_blank" class="text-decoration-none btn btn-outline-warning text-dark fw-bold fs-3"><i class="bi bi-printer-fill me-2"></i>Cetak Struk</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-body rounded shadow my-3">
        <div class="bg-heading text-center text-white rounded-top p-2">
          <h5><script type="text/javascript" src="https://metroreload.co.id/tanggal.js"></script></h5>
        </div>
        <div class="text-center mt-3 p-2">
          <span><b>Daftar Harga Pulsa</b> Di Bawah ini Selalu Update (update otomatis) Karena Terhubung dengan Database Server Secara Langsung</span>
          <script type="text/javascript" src="https://metroreload.co.id/harga.php?type=js&level=RS&up=25&grup=PPOB"></script>
        </div>
      </div>
    </div>
    <div class="col-md-4 my-2">
      <!-- KANTRO METRO RELOAD -->
      <div class="">
        <div class="shadow rounded-top bg-heading p-2">
          <div class="">
            <h5 class="text-uppercase text-white fs-5"><i class="bi bi-building-fill me-2"></i>kantor metro reload</h5> 
          </div>
        </div>
        <div class="border border-dark border-1 shadow text-center bg-body p-2 mb-3">
          <span class="text-capitalize">alamat: desa purworejo RT 01 RW 01, kecamatan nguntoronadi, kabupaten magetan, provinsi jawa timur.<br>call center: 08123129288<br>Website: .....</span>
        </div>
      </div>
      <!-- CARA PENDAFTARAN -->
      <div class="shadow rounded-top bg-heading p-2">
        <h5 class="text-uppercase text-white fs-5"><i class="fa-sharp fa-solid fa-right-to-bracket me-2"></i>cara pendaftaran</h5>
      </div>
      <div class="border border-dark border-1 shadow bg-body text-center p-2">
        <span class="text-uppercase">ingin jadi master dealer md / mk pulsa murah ???<br>pendaftaran mk / md silahkan ketik :<br><span class="text-danger fw-bold">topmd.nama.kota</span><br>contoh :<br><span class="text-danger fw-bold">topmd.kioscell.magetan</span><br>kirim ke salah satu sms center / whatsapp center yang ada di bawah ini</span><br><script type="text/javascript" src="https://metroreload.co.id/nocenter.php?link=no"></script><span class="text-capitalize text-danger">pendaftaran otomatis langsung ke server klik gambar whatsapp di bawah (silahkan ganti dengan Nama dan Kota Anda)</span><script type="text/javascript" src="https://metroreload.co.id/autoreg.php?autoreg=TOPMD"></script>
        <div class="border border-danger border-1 bg-yellow my-3">
          <span>note : jika salah 1 SMS CENTER di atas tidak merespon silahkan di kirim ulang SMS transaksinya ke SMS CENTER yang berbeda. untuk mengetahui SMS CENTER yang aktif silahkan ketik : CENTER kirim ke salah satu center.</span>
        </div>
      </div>
      <!-- CENTER TRANSAKSI ONLINE -->
      <div class="shadow rounded-top bg-heading p-2 mt-3">
        <h5 class="text-uppercase text-white fs-5"><i class="bi bi-chat-right-dots me-2"></i>center transaksi online</h5>
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
      <div class="shadow rounded-top bg-heading p-2 mt-3">
        <H5 class="text-uppercase text-white fs-5"><i class="bi bi-telephone-fill me-2"></i>customer service</H5>
      </div>
      <div class="border border-dark bg-body border-1 shadow text-center p-2">
        <span class="text-uppercase text-danger fw-bold">layanan support</span><br><span>ready setiap hari mulai pukul 06:00-23:00 WIB ketik : KOM.isi pesan keluhan lalu kirim ke center transaksi di atas, atau chat WA CS di bawah</span><br><span class="text-uppercase text-danger fw-bold">call center<br><script type="text/javascript" src="https://metroreload.co.id/wacs.php?link=no"></script><br></span><span class="text-uppercase text-danger fw-bold">whatsapp cs<br><script type="text/javascript" src="https://metroreload.co.id/wacs.php?link=no"></script></span><br><span class="text-uppercase text-danger fw-bold">telegram cs<br><script type="text/javascript" src="https://metroreload.co.id/telegramcs.php?link=no"></script></span>
        <div class="border border-danger border-1 bg-yellow text-center p-2 my-2">
          <span>untuk terhubung dengan layanan <span class="text-danger fw-bold">WhatsApp</span> dan <span class="text-danger fw-bold">Telegram CS</span> kami, silahkan simpan nomor Call Center di atas.</span>
        </div>
        <span class="text-capitalize fw-bold">(hanya melayani keluhan transaksi dan deposit saja tidak untuk pendaftaran. untuk mempermudah pelayanan kami setiap komplain mohon sertakan kode ID anda)</span>
      </div>
      <!-- REKENING SUPPORT DEPOSIT -->
      <div class="shadow rounded-top bg-heading p-2 mt-3">
        <h5 class="text-uppercase text-white fs-5"><i class="bi bi-wallet me-2"></i>rekening support deposit</h5>
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
      <div class="shadow rounded-top bg-heading p-2 mt-3">
        <h5 class="text-uppercase text-white fs-5"><i class="bi bi-journal-bookmark-fill me-2"></i>legalitas server</h5>
      </div>
      <div class="border border-dark border-1 bg-body shadow text-center">
        <span class="text-uppercase text-danger fw-bold">cv. metro payment indotama</span><br><span class="fw-bold">Direktur Utama :</span><br><span>Wariyanto</span><br><span class="fw-bold">Nomor SK :</span><br><span>AHU-00311XX-AH.01.16 Tahun 2021</span><br><span class="fw-bold">NIB :</span><span>1229000121316</span><br><span class="text-uppercase fw-bold">Notaris :</span><br><span>Dedy Imron Maha Putra, S.H., M.Kn.</span><br><span class="fw-bold">TDP :</span><br><span>....</span><br><span class="fw-bold">Tanggal Akta :</span><br><span>03 September 2021</span>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>