<!DOCTYPE html>
<html>
<head>
  <title>Surat Mutasi</title>
  

  <style>

/* --------------------------------------------------------------

Hartija Css Print  Framework
* Version:   1.0

-------------------------------------------------------------- */

body {
width:100% !important;
margin:0 !important;
padding:0 !important;
line-height: 1.45;
font-family: "Open Sans";
color: #000;
background: none;
font-size: 12pt; }

/* Hide various parts from the site
   #header, #footer, #navigation, #rightSideBar, #leftSideBar
   {display:none;}
 */
.kop-surat  {
  height: 80px;
}
.inner-kop-surat{
  display: flex;
}
.logo-taspen{
  width: 80px;
  height: 100px;
  background: white;
}
.title-kop-surat{
  font-size: 16px;
  margin-left: 100px;
}
.title-kop-surat .main-title {
  font-size: 25px;
  font-weight: bold;
}
.title-row {
  text-align: center;
  font-weight: bold;
  font-size: 14px;
  text-transform: uppercase;
  margin-bottom: 5px;
}
.title-top {
  text-align: center;
  font-weight: bold;
  font-size: 18px;
  text-transform: uppercase;
  margin-bottom: 5px;
}
.outer-tabel {
  border: 1px solid black;
  padding: 5px;
  margin-bottom: 5px;
}
.tr {
  display: inline-block;
}
.outer-nano {
  display: flex;
}
.label-content {
  padding: 5px;
  border: 1px solid black;
  width: 200px;
  margin-left: 100px;
}
.btm {
  font-size: 12px;
}
.nano li {
  font-size: 13px;
}

  </style>
</head>
<body>

  {{-- {{ dd($pensiunan) }} --}}
  <div class="kop-surat">
    <div class="inner-kop-surat">
      <div class="logo-taspen"><img style="width:100%;" src="http://preview.ibb.co/i8qfOS/logo_taspen.png"></div>
      {{-- <div class="logo-taspen"><img style="width:100%;" src="/img/icon-2.png"></div> --}}
      <div class="title-kop-surat">
        <div class="main-title">PT.Taspen (PERSERO)</div>
        PT. Dana Tabungan dan Asuransi Pegawai (Negeri) Pesero
      </div>
    </div>
  </div>
  <div class="title-top">surat permohonan mutasi</div>
  <div class="container-content">
    <div class="outer-tabel">
      <table>
        <thead>
          <tr>
            <th><strong>A. PEMOHON</strong></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td >NAMA</td>
            <td style="border: 1px solid #000; ">{{ $pensiunan->nama_pensiunan }}</td>
          </tr>
          <tr>
            <td>LAHIR</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $pensiunan->tmpt_lahir }}, {{ $pensiunan->tgl_lahir }}</td>
          </tr>
          <tr>
            <td>NOTAS/NRP/NPV/NIP</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $pensiunan->nip }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="title-row">b. dengan ini mengajukan permohonan perubahan perubahan kantor bayar/alamat *)</div>
    <div class="outer-tabel">
      <table>
        <tbody>
          <tr>
            <td>KANTOR BAYAR LAMA   </td>
            <td style="border: 1px solid #000; ">{{ $mutasis->kantor_bayar_lama }}</td>
          </tr>
          <tr>
            <td>NO REKENING BANK</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->no_rek_lama }}</td>
          </tr>
          <tr>
            <td>KANTOR BAYAR BARU</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->kantor_bayar_baru }}</td>
          </tr>
          <tr>
            <td>NO REKENING BANK</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->no_rek_baru }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="outer-tabel">
      <table>
        <tbody>
          <tr>
            <td>ALAMAT LAMA</td>
            <td style="border: 1px solid #000; ">{{ $mutasis->alamat_lama }}</td>
          </tr>
          <tr>
            <td>KELURAHAN/DESA</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->desa_lama }}</td>
          </tr>
          <tr>
            <td>KECAMATAN</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->kecamatan_lama }}</td>
          </tr>
          <tr>
            <td>KOTA/KABUPATEN</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->kabupaten_lama }}</td>
          </tr>
          <tr>
            <td>NO TELP</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->no_telp_lama }}</td>
          </tr>
          <tr>
            <td>ALAMAT SEKARANG</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->alamat_baru }}</td>
          </tr>
          <tr>
            <td>KELURAHAN/DESA</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->desa_baru }}</td>
          </tr>
          <tr>
            <td>KECAMATAN</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->kecamatan_baru }}</td>
          </tr>

          <tr>
            <td>KOTA/KABUPATEN</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->kabupaten_baru }}</td>
          </tr>
          <tr>
            <td>NO TELP</td>
            <td style="border: 1px solid #000; width: 420px;">{{ $mutasis->no_telp_baru }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="">
      <div class="btm">KETERANGAN DIATAS SAYA BUAT DENGAN SEBENAR-BENARNYA DENGAN PENUH KESADARAN, APABILA KETERANGAN YANG SAYA BERIKAN TIDAK BENAR, SAYA BERSEDIA MENGGANTI SEMUA KERUGIAN KEPADA NEGARA ATAU PT. TASPEN DAN BERSEDIA DI TUNTUT SESUAI DENGAN PERATURAN PERUNDANG-UNDANGAN YANG BERLAKU</div>          
    </div>
    <div class="btn-left">
      <strong>CATATAN</strong>
      <ul class="nano">
        <li>Lampirkan Foto Copy KTP yang masih berlaku <span style="color: white;">-----------------------------------------------------------</span>Semarang, 21 September 2017</li>
        <li>Lampirkan Surat Pernyataan Pensiunan</li>
        <li>Lampirkan Foto Copy KARIP & SK Pensiun (Asli dibawa)</li>
        <li>Lampirkan Surat SP3R(Bila pembayaran melalui bank)</li>
        <li>Foto terbaru 3x4 2 lembar (kalau pindah ke kantor cabang lain)<span style="color: white;">-------------------------------------------------------</span>{{ $pensiunan->nama_pensiunan }}</li>
      </ul>
    </div>
  </div>
  {{-- <table>
    <thead>
      <tr>
        <td>Nip</td>
        <td>{{ $mutasis->pensiunan_id }}</td>1
      </tr>
    </thead>
  </table> --}}
</body>
</html>

