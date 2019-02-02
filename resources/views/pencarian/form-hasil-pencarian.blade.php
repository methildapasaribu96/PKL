         <div class="col-md-1 col-md-offset-2">
          <p class="img-jos">{!! Html::image(asset('img/'.$pensiunan->foto), null, ['class'=> 'img-rounded img-responsive img-pas1']) !!}</p>
          </div>
          <div class="col-md-7">
            <table class="tables">
              <tr>
                <td>
                  <span>Nama Lengkap</span>
                </td>
                <td>
                  <span class="title-name">{{ $pensiunan->nama_pensiunan }}</span>
                </td>
              </tr>
              <tr>
                <td>
                  <span>NIP</span>
                </td>
                <td>
                  <span class="yumi">{{ $pensiunan->nip }}</span>
                </td>
              </tr>
              <tr>
                <td>
                  <span>Alamat</span>
                </td>
                <td>
                  <span class="yumi">{{ $pensiunan->alamat }}</span>
                </td>
              </tr>
            </table>
          </div>
          <hr class="migrate">

