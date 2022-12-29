<!-- navbar -->
    
<nav class="navbar navbar-expand-lg navbar-dark bg-heading shadow sticky-top">  
  <div class="container">
        <a class="navbar-brand" href="/">
          <h5><span class="bg-yellow rounded text-dark d-inline-flex px-2 py-1">Metro</span> Reload</h5></a>            
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
          <a class="nav-link <?= $nav_home == true ? 'active':''?>" aria-current="page" href="/"><i class="bi bi-house-door me-1"></i>Home</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <li class="nav-item">
              <a class="nav-link <?= $nav_daftar == true ?'active':'' ?>" href="/daftar"><i class="bi bi-box-arrow-in-right me-1"></i>Cara Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $nav_deposit == true ?'active':'' ?>" href="/deposit"><i class="bi bi-credit-card me-1"></i>Cara Deposit</a>
            </li>  
              <li class="nav-item">
                <a class="nav-link <?= $nav_transaksi == true?'active':'' ?>" href="/transaksi"><i class="bi bi-journal-text me-1"></i>Cara Transaksi</a>
              </li>
            <ul class="navbar-nav">            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?= $nav_harga == true?'active':'' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-tags me-1"></i>Daftar Harga</a>
                <ul class="dropdown-menu bg-heading">
                  <li><a href="/harga/pulsa_all" class="dropdown-item border-bottom border-warning text-white"><i class="bi bi-phone me-1"></i>Pulsa All Operator</a></li>
                  <li><a href="/harga/paket_telp" class="dropdown-item border-bottom border-warning text-white"><i class="bi bi-phone-vibrate me-1"></i>Paket Telp & SMS</a></li>
                  <li><a href="/harga/paket_data" class="dropdown-item border-bottom border-warning text-white"><i class="bi bi-reception-4 me-1"></i>Paket Data Internet</a></li>
                  <li><a href="/harga/isi_saldo" class="dropdown-item border-bottom border-warning text-white"><i class="bi bi-cash me-1"></i>Isi Saldo E-Money</a></li>
                  <li><a href="/harga/voucher_game" class="dropdown-item border-bottom border-warning text-white"><i class="bi bi-controller me-1"></i>Voucher Game Online</a></li>
                  <li><a href="/harga/voucher_tv" class="dropdown-item border-bottom border-warning text-white"><i class="bi bi-tv me-1"></i>Voucher TV Prabayar</a></li>
                  <li><a href="/harga/token_pln" class="dropdown-item border-bottom border-warning text-white"><i class="bi bi-lightning me-1"></i>Token PLN Prabayar</a></li>
                  <li><a href="/harga/fee_ppob" class="dropdown-item border-bottom border-warning text-white"><i class="bi bi-laptop me-1"></i>Fee Loket PPOB</a></li>
                </ul>
              </li>
            </ul>             
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-clipboard2-data me-1"></i>Fitur Server</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Web Report</a></li>
                  <li><a class="dropdown-item" href="#">Cetak Struk</a></li>                  
                </ul>
              </li>
            </ul>
            <a href="/contact" class="btn bg-yellow rounded-3 text-capitalize text-center fw-bold display-5 fs-6 d-inline-block <?= $nav_contact == true? '':'' ?>" type="button"><i class="bi bi-headset me-1"></i>hubungi kami</a>
          </div>          
        </ul>
      </div>    
  </div>
</nav>