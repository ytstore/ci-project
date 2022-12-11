<?= $this->extend('template/tema') ?>

<?= $this->section('content') ?>

<div class="container">
  <div class="row">
    <div class="col my-5">
      <h1>CARA PENGISIAN SALDO DEPOSIT PULSA</h1>
      <p>Anda dapat melakukan deposit saldo di Metro Reload minimal Rp 50.000. Deposit dapat dilakukan dengan mengambil tiket via Aplikasi maupun WhatsApp/SMS/Telegram ke nomor center kami. Pembayaran dapat dilakukan via transfer bank, Alfamart, Indomaret, dan Virtual Account (VA). Deposit tidak dikenakan biaya admin (gratis) dan nominal yang nantinya akan masuk ke Akun Anda sesuai dengan nominal yang Anda transfer.</p>
      <h5>CONTOH :</h5>
      Anda memesan tiket deposit senilai Rp 100.000,- nanti Anda akan mendapatkan balasan dari server, misalnya Rp 100.567, maka Anda harus transfer sebesar <b>Rp 100.567</b> agar deposit masuk secara otomatis tanpa perlu melakukan komplain/konfirmasi, dan nantinya saldo yang masuk ke akun Anda senilai Rp 100.567.
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <h3>Langkah-Langkah Pengisian Deposit</h3>
    <div class="col-md-6 gy-3">
      <div class="d-grid">
        <button class="btn btn-primary text-center rounded-pill" type="button">1. Pesan Tiket Deposit</button>
      </div>
      <div class="col d-inline-flex">
        <div>
          <img src="/img/comment.png" style="width: 100px;" alt="">
        </div>
        <div class="p-1">
          <p>Pesan tiket deposit dengan cara kirim ke nomon Center, Whatsapp, Telegram atau melalui Aplikasi.</p>
          <ul>
            <li>Ketik Format : <br><b>TIKET.JUMLAH.PIN</b></li>
            <li>Contoh : <br><b>TIKET.100.000.123456</b></li>
            <li>kirim ke <b>SMS/WA CENTER <br>NO CENTER BLA BLA BLA</b></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6 gy-3">
      <div class="d-grid">
        <button class="btn btn-primary text-center rounded-pill" type="button">2. Tunggu Balasan Tiket</button>
      </div>
      <div class="col d-inline-flex">
        <div>
          <img src="/img/comment.png" style="width: 100px;" alt="">
        </div>
        <div class="p-1">
          <p><b>Contoh SMS Reply / Balasan request tiket :</b><br>
          <span>Transfer sebelum 21:00 WIB Rp.100.567,- (Harus Persis) ke : BCA : <script type="text/javascript" src="https://metroreload.co.id/rekbca.php"></script>, BNI : <script type="text/javascript" src="https://metroreload.co.id/rekbni.php"></script>, BRI : <script type="text/javascript" src="https://metroreload.co.id/rekbri.php"></script>, MANDIRI : <script type="text/javascript" src="https://metroreload.co.id/rekmandiri.php"></script> a/n CV. <script type="text/javascript" src="https://metroreload.co.id/anbri.php"></script></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 gy-3">
      <div class="d-grid">
        <button class="btn btn-primary text-center rounded-pill" type="button">3. Transfer Sesuai Tiket</button>
      </div>
      <div class="col d-inline-flex">
        <div>
          <img src="/img/comment.png" style="width: 100px;" alt="">
        </div>
        <div class="p-1">
          <p><b>Transfer Sesuai Nominal Balasan Tiket</b> Jika sudah mendapatkan SMS balasan. Anda bisa langsung melakukan transfer ke salah satu rekening bank yang tertera. Pastikan jumlah yang Anda transfer sama dengan nominal yang tertera pada SMS balasan, sehingga deposit bisa terinput otomatis oleh sistem.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 gy-3">
      <div class="d-grid">
        <button class="btn btn-primary text-center rounded-pill" type="button">4. Deposit Masuk Otomatis</button>
      </div>
      <div class="col d-inline-flex">
        <div>
          <img src="/img/comment.png" style="width: 100px;" alt="">
        </div>
        <div class="p-1">
          <p><b>Deposit Otomatis Masuk ke Akun Anda</b> Tunggu beberapa menit, biasanya saldo akan otomatis masuk ke akun Anda maksimal dalam 15 menit. Jika tidak ada kesalahan transfer atau internet banking tidak trouble maka Anda bisa langsung memperoleh SMS dari server yang menyatakan saldo Anda sudah diinput.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="d-grid">
      <button class="btn btn-primary rounded-pill" type="button"><span class="display-5 fs-3"><i class="bi bi-wallet2"></i> REKENING BANK DEPOSIT</span></button>
    </div>
    <div class="col-md-6 col-lg-3 border text-center text-success my-3 fw-bold">
      <img src="/img/BCA.png" class="mx-auto border border-success border-3 p-2" style="height: 60px;" alt="">
      <script type="text/javascript" class="d-block" src="https://metroreload.co.id/rekbca.php"></script>
      <script type="text/javascript" class="d-block" src="https://metroreload.co.id/anbca.php"></script>
    </div>
    <div class="col-md-6 col-lg-3 border text-center text-success my-3 fw-bold">
      <img src="/img/BRI.png" class="mx-auto border border-success border-3 p-2" style="height: 60px;" alt="">
      <script type="text/javascript" class="d-block" src="https://metroreload.co.id/rekbri.php"></script>
      <script type="text/javascript" class="d-block" src="https://metroreload.co.id/anbri.php"></script>
    </div>
    <div class="col-md-6 col-lg-3 border text-center text-success my-3 fw-bold">
      <img src="/img/BNI.png" class="mx-auto border border-success border-3 p-2" style="height: 60px;" alt="">
      <script type="text/javascript" class="d-block" src="https://metroreload.co.id/rekbni.php"></script>
      <script type="text/javascript" class="d-block" src="https://metroreload.co.id/anbni.php"></script>
    </div>
    <div class="col-md-6 col-lg-3 border text-center text-success my-3 fw-bold">
      <img src="/img/MANDIRI.png" class="mx-auto border border-success border-3 p-2" style="height: 60px;" alt="">
      <script type="text/javascript" class="d-block" src="https://metroreload.co.id/rekmandiri.php"></script>
      <script type="text/javascript" class="d-block" src="https://metroreload.co.id/anmandiri.php"></script>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <h1 class="text-center">Pertanyaan Seputar Deposit</h1>
    <div class="col">
      <div class="accordion" id="accordionExample">
        <div class="accordion my-3">
          <h2 class="accordion-header" id="headingOne">
            <div class="d-grid">
            <button class="btn btn-primary d-block rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Bagaimana Jika sudah Transfer tapi saldo deposit belum masuk?
            </button>
          </div>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Jika lebih dari 15 menit saldo belum masuk, Anda dapat segera melakukan komplain/konfirmasi via WhatsApp/SMS/Aplikasi/Telegram center kami dengan format yang sesuai.</p>
              <p>Format : KOM.ID isi pesan</p>
                Contoh : KOM.MR10023 Deposit Via BRIVA Rp 100.567 a/n. Soleh jam 13.05 saldo belum masuk
            </div>
          </div>
        </div>
        <div class="accordion my-3">
          <h2 class="accordion-header" id="headingTwo">
            <div class="d-grid">
            <button class="btn btn-primary d-block rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              Kenapa setelah transfer deposit terlalu lama masuk ke akun saya?
            </button>
          </div>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Saldo deposit yang belum masuk, ada kemungkinan Anda transfer tidak sesuai nominal tiket atau Bank sedang mengalami gangguan/error. Jika internet sudah kembali normal maka deposit Anda akan langsung diproses oleh sistem dan terinput otomatis ke akun Anda sesuai nominal yang Anda transfer. Jika transfer tidak sesuai tiket maka Anda harus konfirmasi ke Customer Service kami.</p>
            </div>
          </div>
        </div>
        <div class="accordion my-3">
          <h2 class="accordion-header" id="headingThree">
            <div class="d-grid">
            <button class="btn btn-primary d-block rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              Bagaimana jika tidak mempunyai rekening bank untuk transfer?
            </button>
          </div>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Jika tidak mempunyai rekening bank, maka Anda dapat melakukan transfer melalui teller (petugas bank) dan transfer sesuai balasan tiket, misalnya Rp 100.567 maka harus transfer Rp 100.567. Selain itu, Anda juga dapat melakukan transfer Via Alfamart dan Indomaret Group dengan terlebih dahulu mengambil tiket di Aplikasi Metro Reload.</p>
            </div>
          </div>
        </div>
        <div class="accordion my-3">
          <h2 class="accordion-header" id="headingFour">
            <div class="d-grid">
            <button class="btn btn-primary d-block rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
              Bagaimana melakukan deposit diluar jam kerja customer service?
            </button>
          </div>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Layanan deposit kami hanya dari jam 05.30 - 21.00 WIB. Jika melakukan deposit di luar jam kerja Customer Service, maka Anda harus menunggu keesokan harinya untuk melakukan konfirmasi ke Customer Service kami agar deposit dapat diinput ke akun Anda.</p>
            </div>
          </div>
        </div>
        <div class="accordion my-3">
          <h2 class="accordion-header" id="headingFive">
            <div class="d-grid">
            <button class="btn btn-primary d-block rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
              Bolehkan langsung transfer tanpa harus request tiket deposit?
            </button>
          </div>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Sistem kami menggunakan deposit otomatis. Jika Anda transfer tanpa request tiket terlebih dahulu ataupun transfer dengan nominal bulat, seperti Rp 50.000, Rp 100.000, Rp 150.000, dll maka akan menyulitkan dalam pengecekan di Internet Banking.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row text-center">
    <div class="col-md-6">
      <h3>Butuh Bantuan / Pertanyaan?</h3>
    </div>
    <div class="col-md-6">
      <button class="btn btn-primary rounded-pill" type="button">Hubungi Kami</button>
    </div>
  </div>
</div>
  

<?= $this->endSection() ?>