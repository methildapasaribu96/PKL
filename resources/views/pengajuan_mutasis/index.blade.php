@extends('layouts.app')

@section('title')
    <title>Kelola Data Mutasi</title>
@endsection

@section('content')
<div style="background-color:rgb(237, 237, 237);" class="container-fluid">
    <div class="row">
      @include('identitas_pribadi.identitas_pribadi')
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Informasi Mutasi</h2>
        </div>
        <div class="profil-panel-body">
          <div class="identitas-pribadi-box">
  
            <table class="info-contents">
            <tr>
              <td>No Rek Bank Lama</td><td class="con">{{ Auth::user()->mutasi->no_rek_lama }}</td>
            </tr>
            <tr>
              <td>Kantor Bayar Lama</td><td class="con">{{ Auth::user()->mutasi->kantor_bayar_lama }}</td>
            </tr>
            <tr>
              <td>Kelurahan/Desa Lama</td><td class="con">{{ Auth::user()->mutasi->desa_lama }}</td>
            </tr>
            <tr>
              <td>Kecamatan Lama</td><td class="con">{{ Auth::user()->mutasi->kecamatan_lama }}</td>
            </tr>
            <tr>
              <td>Kota/Kabupaten Lama</td><td class="con">{{ Auth::user()->mutasi->kabupaten_lama }}</td>
            </tr>
            <tr>
              <td>Alamat Lama</td><td class="con">{{ Auth::user()->mutasi->alamat_lama }}</td>
            </tr>
            <tr>
              <td>No Telp Lama</td><td class="con">{{ Auth::user()->mutasi->no_telp_lama }}</td>
            </tr>
            <tr>
              <td>No Rek Bank Baru</td><td class="con">{{ Auth::user()->mutasi->no_rek_baru }}</td>
            </tr>
            <tr>
              <td>Kantor Bayar Baru</td><td class="con">{{ Auth::user()->mutasi->kantor_bayar_baru }}</td>
            </tr>
            <tr>
              <td>Kelurahan/Desa Baru</td><td class="con">{{ Auth::user()->mutasi->desa_baru }}</td>
            </tr>
            <tr>
              <td>Kecamatan Baru</td><td class="con">{{ Auth::user()->mutasi->kecamatan_baru }}</td>
            </tr>
            <tr>
              <td>Kota/Kabupaten Baru</td><td class="con">{{ Auth::user()->mutasi->kabupaten_baru }}</td>
            </tr>
            <tr>
              <td>Alamat Baru</td><td class="con">{{ Auth::user()->mutasi->alamat_baru }}</td>
            </tr>
            <tr>
              <td>No Telp Baru</td><td class="con">{{ Auth::user()->mutasi->no_telp_baru }}</td>
            </tr>
            <tr>
              <td>Buku Rekening</td><td class="con">{!! Html::image(asset('img/'.Auth::user()->mutasi->buku_rekening), null, ['class'=> 'img-kanvas']) !!}</td>
            </tr>
            <tr>
              <td>Sk</td><td class="con">{!! Html::image(asset('img/'.Auth::user()->mutasi->sk), null, ['class'=> 'img-kanvas']) !!}</td>
            </tr>
            <tr>
              <td>Ktp</td><td class="con">{!! Html::image(asset('img/'.Auth::user()->mutasi->ktp), null, ['class'=> 'img-kanvas']) !!}</td>
            </tr>
            <tr>
              <td>Kartu Keluarga</td><td class="con">{!! Html::image(asset('img/'.Auth::user()->mutasi->kartu_keluarga), null, ['class'=> 'img-kanvas']) !!}</td>
            </tr>
            </table>

          @if ($a->count() == 1)
            <div class="footer-panel">
          <p class="ignored" > Komentar :
          {{ Auth::user()->mutasi->komentar }}</p>
          </div>
            @else
        @endif

          @if ($a->count() == 1)
            <div class="footer-panel">
              <p class="ignore">Data yang telah diverifikasi tidak dapat dirubah lagi</p>
              <a class="button-green but-con" href="{{ route('pengajuan_mutasis.edit', $pengajuan_mutasi = Auth::user()->id) }}">Perbarui data</a>
            </div>
                @else
            <div class="footer-panel">
              <p class="ignore">Data yang telah diverifikasi tidak dapat dirubah lagi</p>
              <a class="button-green but-con" href="{{ route('export.mutasis.post', $mutasis = Auth::user()->id) }}">Cetak</a>
            </div>
        @endif
          </div>
        </div>
      </div>

    </div>
</div>

@endsection
