<section class="content" style="background-color: #fff;">
  
  <div class="container-fluid pt-3">
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-8 connectedSortable">
        <!-- Agenda -->
        <div class="card" >
          <div class="card-header bg-gradient-success">
            <h3 class="card-title">
              <i class="ion ion-clipboard mr-1"></i>
              Agenda Masjid
            </h3>
          </div>
          <!-- /.card-header -->
          {{-- <div class="card-body">
            <ul class="todo-list" data-widget="todo-list">
              <li>
                <!-- drag handle -->
                <span class="handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <!-- checkbox -->
                <div  class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo1" id="todoCheck1">
                  <label for="todoCheck1"></label>
                </div>
                <!-- todo text -->
                <span class="text">Kajian Akbar Syeikh Ustman,Lc</span>
                <!-- Emphasis label -->
                <small class="badge badge-danger"><i class="far fa-clock"></i> 2 Jam Lagi </small>
                <!-- General tools such as edit or delete-->
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
              <li>
                <span class="handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <div  class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                  <label for="todoCheck2"></label>
                </div>
                <span class="text">Amal Jama'i Masjid</span>
                <small class="badge badge-info"><i class="far fa-clock"></i> 17 Jam Lagi</small>
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
              <li>
                <span class="handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <div  class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo3" id="todoCheck3">
                  <label for="todoCheck3"></label>
                </div>
                <span class="text">Jum'at Bersih-bersih </span>
                <small class="badge badge-warning"><i class="far fa-clock"></i> 1 Hari Lagi</small>
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
              <li>
                <span class="handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <div  class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo4" id="todoCheck4">
                  <label for="todoCheck4"></label>
                </div>
                <span class="text">Subuh Berkah</span>
                <small class="badge badge-success"><i class="far fa-clock"></i> 3 Hari Lagi</small>
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
              <li>
                <span class="handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <div  class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo5" id="todoCheck5">
                  <label for="todoCheck5"></label>
                </div>
                <span class="text">Kegiatan Pasar Gratis</span>
                <small class="badge badge-primary"><i class="far fa-clock"></i> 4 Hari Lagi</small>
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
              <li>
                <span class="handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <div  class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo6" id="todoCheck6">
                  <label for="todoCheck6"></label>
                </div>
                <span class="text">Bantuan Fakir Miskin</span>
                <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 Pekan Lagi</small>
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
            </ul>
          </div> --}}

          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>List Kegiatan</th>
                  <th>Tanggal</th>
                  <th>Pukul</th>
                  <th style="width: 0%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Kajian Syeikh Ustman,Lc</td>
                  <td>Selasa, 17 Juli</td>
                  <td>08.00 - Selesai</td>
                  <td class="w-5 btn-group">
                    <a href="#" class="btn btn-warning">
                      <i class="fas fa-pen-alt"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>Amal Jama'i</td>
                  <td>Rabu, 23 Juli</td>
                  <td>08.00 - Selesai</td>
                  <td class="w-5 btn-group">
                    <a href="#" class="btn btn-warning">
                      <i class="fas fa-pen-alt"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>Subuh Berkah</td>
                  <td>Jumat, 17 Juli</td>
                  <td>08.00 - Selesai</td>
                  <td class="w-5 btn-group">
                    <a href="#" class="btn btn-warning">
                      <i class="fas fa-pen-alt"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>Pengobatan Gratis</td>
                  <td>Ahad, 12 Juli</td>
                  <td>13.00 - Selesai</td>
                  <td class="w-5 btn-group">
                    <a href="#" class="btn btn-warning">
                      <i class="fas fa-pen-alt"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>Kajian Rutin Malam Rabu</td>
                  <td>Selasa, 17 Juli</td>
                  <td>18.00 - Selesai</td>
                  <td class="w-5 btn-group">
                    <a href="#" class="btn btn-warning">
                      <i class="fas fa-pen-alt"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>Pasar Bahagia</td>
                  <td>Rabu, 23 Juli</td>
                  <td>08.00 - Selesai</td>
                  <td class="w-5 btn-group">
                    <a href="#" class="btn btn-warning">
                      <i class="fas fa-pen-alt"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>Kajian Remaja</td>
                  <td>Jumat, 17 Juli</td>
                  <td>08.00 - Selesai</td>
                  <td class="w-5 btn-group">
                    <a href="#" class="btn btn-warning">
                      <i class="fas fa-pen-alt"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>Futsal Bareng</td>
                  <td>Ahad, 12 Juli</td>
                  <td>13.00 - Selesai</td>
                  <td class="w-5 btn-group">
                    <a href="#" class="btn btn-warning">
                      <i class="fas fa-pen-alt"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="pb-3 pr-3">
            <button type="button" class="btn btn-success float-right">
              <i class="fas fa-plus"></i> Tambah Acara Baru
            </button>
          </div>
        </div>
        <!-- /.card -->
      </section>
      {{--  Data Infaq Terbaru  --}}
      <!-- Jadwal Sholat List -->
      <section class="col-lg-4 connectedSortable">
        <div class="card">
          <div class="card-header bg-gradient-lightblue">
            <h3 class="card-title">
              <i class="far fa-clock"></i> 
               Jadwal Sholat 5 Waktu</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>#Sholat</th>
                  <th>Raka'at</th>
                  <th style="width: 10%">Pukul</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Shubuh</td>
                  <td>2 raka'at</td>
                  <td><span class="text-bold">04.30</span></td>
                </tr>
                <tr>
                  <td>Syuruq</td>
                  <td>  -- </td>
                  <td><span class="text-bold">06.01</span></td>
                </tr>
                <tr>
                  <td>Dzuhur</td>
                  <td>4 raka'at</td>
                  <td><span class="text-bold">12.01</span></td>
                </tr>
                <tr>
                  <td>Ashar</td>
                  <td>4 raka'at</td>
                  <td><span class="text-bold">14.59</span></td>
                </tr>
                <tr>
                  <td>Maghrib</td>
                  <td>3 raka'at</td>
                  <td><span class="text-bold">17.45</span></td>
                </tr>
                <tr>
                  <td>Isya'</td>
                  <td>4 raka'at</td>
                  <td><span class="text-bold">19.12</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>