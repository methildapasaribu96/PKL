      <h1 class="header-profil">Kelola Identitas Pribadi</h1>
      {{-- Panel Informasi Umum --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Identitas Pribadi</h2>
          {{-- {{ Session::get('message') }} --}}
        </div>
        <div class="profil-panel-body">
          <div class="identitas-pribadi-box">

            {{-- Detail Info Umum --}}

             <p class="img-jos">{!! Html::image(asset('img/'.Auth::user()->pensiunan->foto), null, ['class'=> 'img-rounded img-responsive image-profils img-pas']) !!}</p>
            <table class="info-contents">
              <tr>
                <td>Nama Lengkap</td><td class="con">{{ Auth::user()->pensiunan->nama_pensiunan }}</td>
              </tr>
              <tr>
                <td>NIP</td><td class="con">{{ Auth::user()->pensiunan_id }}</td>
              </tr>
              <tr>
                <td>Status Kepegawaian</td><td class="con">{{ Auth::user()->pensiunan->status_kepegawaian }}</td>
              </tr>
              <tr>
                <td>Status</td><td class="con">{{ Auth::user()->mutasi->status }}</td>
              </tr>
              <tr>
                {{-- <td>Status</td><td class="con">{{ Auth::user()->mutasi->status }}</td> --}}
              </tr>
            </table>


            {{-- Link Collection --}}
            <div class="btn-groups">
              <a class="button-green" href="{{ route('identitas_pribadi.index') }}">Identitas Pribadi</a>
              <a class="button-dark-blue" href="{{ route('pengajuan_mutasis.index') }}">Mutasi</a>
            </div>
          </div>
        </div>
      </div>
