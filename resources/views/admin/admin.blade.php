@include('admin.headadmin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Data Admin</h3>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
                            Tambah Data Admin
                            </button>
                        </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Tempat/Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Jabatan</th>
                          <th>OPD</th>
                          <th>HP</th>
                          <th>Foto</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($admin as $admins)
                            <tr>
                                <td>{{($admins->nama)}}</td>
                                <td>{{($admins->tempat)}}/{{($admins->tanggal_lahir)}}</td>
                                <td>{{($admins->jenis_klamin)}}</td>
                                <td>{{($admins->alamat)}}</td>
                                <td>{{($admins->jabatan)}}</td>
                                <td>{{($admins->opd)}}</td>
                                <td>{{($admins->hp)}}</td>
                            <td><img src="{{url('image')}}/{{ $admins->foto}}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>

                                <td>
                                    <a href="/admin/{{$admins->id}}/edit" class="btn btn-warning btn-sm">Edit </a>
                                    <a href="/admin/{{$admins->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus')">Hapus </a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
            </section>
        
            <!-- Main content -->
            <section class="content">

            </section>
            <!-- /.content -->
          </div>
 @include('admin.footeradmin')
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/admin/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Lahir</label>
                                <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                <input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Klamin</select>
                            <select name="jenis_klamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <textarea name="alamat" class="form-control" cols="10" rows="3" placeholder="Alamat"></textarea>
                            </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlSelect1">OPD</select>
                                <select name="opd" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Dinas Sosial">Dinas Sosial</option>
                                    <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                                    <option value="Dinas Komunikasi dan Informatika">Dinas Komunikasi dan Informatika</option>
                                </select>
                            </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">HP</label>
                    <input name="hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HP">
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlFile1">Foto</label>
                        <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                     
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                        </div>
                    </div>


