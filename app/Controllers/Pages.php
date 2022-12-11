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
        
      ];
        return view('pages/home', $data);
               
    }

    public function pulsa_all()
    {
      $data = [
        'title' => 'Pulsa Elektrik All Operator'
      ];
      return view('pages/harga/pulsa_all', $data);
    }

    public function fee_ppob()
    {
      $data = [
        'title' => 'Fee PPOB'
      ];
      return view('pages/harga/fee_ppob', $data);
    }

    public function isi_saldo()
    {
      $data = [
        'title' => 'Top Up E-Money'
      ];
      return view('pages/harga/isi_saldo', $data);
    }

    public function paket_data()
    {
      $data = [
        'title' => 'Paket Data Internet'
      ];
      return view('pages/harga/paket_data', $data);
    }

    public function paket_telp()
    {
      $data = [
        'title' => 'Paket SMS & Telepon'
      ];
      return view('pages/harga/paket_telp', $data);
    }

    public function token_pln()
    {
      $data = [
        'title' => 'Token PLN Prabayar'
      ];
      return view('pages/harga/token_pln', $data);
    }

    public function voucher_game()
    {
      $data = [
        'title' => 'Voucher Game Online'
      ];
      return view('pages/harga/voucher_game', $data);
    }

    public function voucher_tv()
    {
      $data = [
        'title' => 'Voucher TV Prabayar'
      ];
      return view('pages/harga/voucher_tv', $data);
    }

    public function aplikasi()
    {
      $data = [
        'title' => 'Aplikasi'
      ];
      return view('pages/daftar/aplikasi', $data);
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
      ];
      return view('pages/deposit', $data);
    }

    public function trx_android()
    {
      $data = [
        'title' => 'Format Transaksi'
      ];
      return view('pages/transaksi/trx_android', $data);
    }

}
