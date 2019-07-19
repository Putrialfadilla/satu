@include('admin.headadmin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <small></small>
        </h1>
    </section>

    {{-- {{dd($data_siswa)}} --}}
            <h1>Edit Data Admin</h1>
            <div class="box">
                <div class="box-header">
            <form action="/admin/{{$admin->id}}/update" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$admin->nama}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$admin->tempat}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$admin->tanggal_lahir}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</select>
                        <select name="jenis_klamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="L"@if($admin->jenis_klamin == 'L') selected @endif>Laki-laki</option>
                                <option value="P"@if($admin->jenis_klamin == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" style="width:335px;">{{$admin->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$admin->jabatan}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">OPD</select>
                        <select name="opd" class="form-control" id="exampleFormControlSelect1">
                                <option value="Dinas Sosial"@if($admin->opd == 'Dinas Sosial') selected @endif>Dinas Sosial</option>
                                <option value="Dinas Perhubungan"@if($admin->opd == 'Dinas Perhubungan') selected @endif>Dinas Perhubungan</option>
                                <option value="Dinas Komunikasi dan Informatika"@if($admin->opd == 'Dinas Komunikasi dan Informatika') selected @endif>Dinas Komunikasi dan Informatika</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">HP</label>
                        <input name="hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$admin->hp}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Foto</label>
                        <img src="{{url('image')}}/{{ $admin->foto}}" id="output" style="max-height:200px;max-width:200px;margin-top:10px;"><input type="file" name="foto" onchange="loadFile(event)" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                            <button type="submit" class="btn btn-warning">Update</button>                   
                </form>
            </div>
    
        </section>
        <!-- /.content -->
    </div>
{{--  --}}
<style>
    .gambar {
        width: 200px;
        height: 200px;
    }

</style>
<script>
    var loadFile = function (event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };

</script>
@include('admin.footeradmin')