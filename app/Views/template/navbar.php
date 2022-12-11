<!-- navbar -->
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">  
  <div class="container">
        <a class="navbar-brand" href="/">
          <img src="/img/logo.png"alt="Logo" style="width: 30px;" alt="">Metro Reload</a>            
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
          <a class="nav-link <?= $nav_home == true ? 'active':''?>" aria-current="page" href="/"><i class="bi bi-house-door me-1"></i>Home</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-tags me-1"></i>Daftar Harga</a>
                <ul class="dropdown-menu">
                  <li><a href="/harga/pulsa_all" class="dropdown-item">Pulsa All Operator</a></li>
                  <li><a href="/harga/paket_telp" class="dropdown-item">Paket Telp & SMS</a></li>
                  <li><a href="/harga/paket_data" class="dropdown-item">Paket Data Internet</a></li>
                  <li><a href="/harga/isi_saldo" class="dropdown-item">Isi Saldo E-Money</a></li>
                  <li><a href="/harga/voucher_game" class="dropdown-item">Voucher Game Online</a></li>
                  <li><a href="/harga/voucher_tv" class="dropdown-item">Voucher TV Prabayar</a></li>
                  <li><a href="/harga/token_pln" class="dropdown-item">Token PLN Prabayar</a></li>
                  <li><a href="/harga/fee_ppob" class="dropdown-item">Fee Loket PPOB</a></li>
                </ul>
              </li>
            </ul>          
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-box-arrow-in-right me-1"></i>
                  Cara Daftar akun
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/daftar/aplikasi">Pakai Aplikasi Android</a></li>
                  <li><a class="dropdown-item" href="/daftar/whatsapp">Pakai WhatsApp</a></li>
                  <li><a class="dropdown-item" href="/daftar/sms">Pakai SMS</a></li>
                </ul>
              </li>
            </ul>          
            <li class="nav-item">
              <a class="nav-link <?= $nav_deposit == true ? 'active':''?>" href="/deposit"><i class="bi bi-credit-card me-1"></i>Cara Deposit</a>
            </li>          
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-journal-text me-1"></i>
                  Cara Transaksi
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/transaksi/trx_android">Pakai Aplikasi Android</a></li>
                  <li><a class="dropdown-item" href="#">Pakai WhatsApp</a></li>
                  <li><a class="dropdown-item" href="#">Pakai Telegram</a></li>
                  <li><a class="dropdown-item" href="#">Pakai Hangout</a></li>
                  <li><a class="dropdown-item" href="#">Format Transaksi Manual</a></li>
                </ul>
              </li>
            </ul>          
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-clipboard2-data me-1"></i>
                  Fitur Server
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Web Report</a></li>
                  <li><a class="dropdown-item" href="#">Cetak Struk</a></li>                  
                </ul>
              </li>
            </ul>
          </div>          
        </ul>
      </div>    
  </div>
</nav>