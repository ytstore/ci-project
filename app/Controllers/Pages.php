<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
      $data = [
        'title' => 'Home | Metro Reload',
        'nav_home' => true,
        'nav_deposit' => false,
        'nav_harga' => false,
        'nav_daftar' => false,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
        
      ];
        return view('pages/home', $data);
               
    }

    public function pulsa_all()
    {
      $data = [
        'title' => 'Pulsa Elektrik All Operator',
        'nav_home' => false,
        'nav_deposit' => false,
        'nav_harga' => true,
        'nav_daftar' => false,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
        
      ];
      return view('pages/harga/pulsa_all', $data);
    }

    public function fee_ppob()
    {
      $data = [
        'title' => 'Fee PPOB',
        'nav_home' => false,
        'nav_deposit' => false,
        'nav_harga' => true,
        'nav_daftar' => false,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
      ];
      return view('pages/harga/fee_ppob', $data);
    }

    public function isi_saldo()
    {
      $data = [
        'title' => 'Top Up E-Money',
        'nav_home' => false,
        'nav_deposit' => false,
        'nav_harga' => true,
        'nav_daftar' => false,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
      ];
      return view('pages/harga/isi_saldo', $data);
    }

    public function paket_data()
    {
      $data = [
        'title' => 'Paket Data Internet',
        'nav_home' => false,
        'nav_deposit' => false,
        'nav_harga' => true,
        'nav_daftar' => false,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
      ];
      return view('pages/harga/paket_data', $data);
    }

    public function paket_telp()
    {
      $data = [
        'title' => 'Paket SMS & Telepon',
        'nav_home' => false,
        'nav_deposit' => false,
        'nav_harga' => true,
        'nav_daftar' => false,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
      ];
      return view('pages/harga/paket_telp', $data);
    }

    public function token_pln()
    {
      $data = [
        'title' => 'Token PLN Prabayar',
        'nav_home' => false,
        'nav_deposit' => false,
        'nav_harga' => true,
        'nav_daftar' => false,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
      ];
      return view('pages/harga/token_pln', $data);
    }

    public function voucher_game()
    {
      $data = [
        'title' => 'Voucher Game Online',
        'nav_home' => false,
        'nav_deposit' => false,
        'nav_harga' => true,
        'nav_daftar' => false,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
      ];
      return view('pages/harga/voucher_game', $data);
    }

    public function voucher_tv()
    {
      $data = [
        'title' => 'Voucher TV Prabayar',
        'nav_home' => false,
        'nav_deposit' => false,
        'nav_harga' => true,
        'nav_daftar' => false,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
      ];
      return view('pages/harga/voucher_tv', $data);
    }

    public function daftar()
    {
      $data = [
        'title' => 'Cara Daftar',
        'nav_home' => false,
        'nav_deposit' => false,
        'nav_harga' => false,
        'nav_daftar' => true,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
      ];
      return view('pages/daftar', $data);
    }

    public function whatsapp()
    {
      $data = [
        'title' => 'Whatsapp'
      ];
      return view('pages/daftar/whatsapp', $data);
    }

    public function sms()
    {
      $data = [
        'title' => 'sms'
      ];
      return view('pages/daftar/sms', $data);
    }

    public function deposit()
    {
      $data = [
        'title' => 'deposit',
        'nav_home' => false,
        'nav_deposit' => true,
        'nav_harga' => false,
        'nav_daftar' => false,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
      ];
      return view('pages/deposit', $data);
    }

    public function transaksi()
    {
      $data = [
        'title' => 'Format Transaksi',
         'nav_home' => false,
         'nav_deposit' => false,
         'nav_harga' => false,
         'nav_daftar' => false,
         'nav_transaksi' => true,
         'nav_server' => false,
         'nav_contact' => false,
      ];
      return view('pages/transaksi', $data);
    }

    public function contact()
    {
      $data = [
        'title' => 'Hubungi Kami',
        'nav_home' => false,
        'nav_deposit' => false,
        'nav_harga' => false,
        'nav_daftar' => false,
        'nav_transaksi' => false,
        'nav_server' => false,
        'nav_contact' => false,
      ];
      return view('pages/contact', $data);
    }

}
