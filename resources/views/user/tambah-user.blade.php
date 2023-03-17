@extends('layouts.main')
@section('content')
<h4>Tambah User</h4>
<form action="{{ route('insertuser') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Nama</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                      <input type="text" name="name" class="form-control" id="basic-icon-default-fullname" placeholder="Masukan Nama Lengkap" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                    </div>
                  </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Email</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                      <input type="text" name="email" id="basic-icon-default-email" class="form-control" placeholder="Masukan Email" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Password</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-lock"></i></span>
                      <input type="password" name="password" id="basic-icon-default-email" class="form-control" placeholder="Masukan Password" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                    </div>
                  </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Alamat</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-home"></i></span>
                      <input type="text" name="address" id="basic-icon-default-email" class="form-control" placeholder="Masukan Alamat Lengkap" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">No Hp/WhatsApp</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-phone"></i></span>
                      <input type="text" name="phone" id="basic-icon-default-email" class="form-control" placeholder="Masukan No WhatsApp" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                    </div>
                  </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <label for="defaultFormControlInput" class="form-label">Foto Profil <b>*jika ada</b></label>
                    <div class="input-group">
                        <input type="file" name="photo" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                      </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <label for="" class="form-label">Tipe Relawan :</label>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role_id" id="admin"
                                value="1" value="{{ old('role_id') }}">
                            <label class="form-check-label" for="admin">
                                Admin
                            </label>
                        </div>
                    </div>
                    <div class="col-6 pull-right">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role_id" id="petugas"
                                value="2" value="{{ old('role_id') }}">
                            <label class="form-check-label" for="petugas">
                                Petugas
                            </label>
                        </div>
                    </div>
                    <div class="col-6 pull-right">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role_id" id="bendahara"
                                value="3" value="{{ old('role_id') }}">
                            <label class="form-check-label" for="bendahara">
                                Bendahara
                            </label>
                        </div>
                    </div>
                    @error('role_id')
                        <div class="text-danger"> {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <label for="" class="form-label">Jenis Kelamin :</label>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="laki-laki"
                                value="laki-laki" value="{{ old('gender') }}">
                            <label class="form-check-label" for="laki-laki">
                                Laki-laki
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="perempuan"
                                value="perempuan" value="{{ old('gender') }}">
                            <label class="form-check-label" for="perempuan" >
                                Perempuan
                            </label>
                        </div>
                    </div>
                    @error('gender')
                        <div class="text-danger"> {{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <a href="/daftar-user">
        <button type="button" class="btn btn-warning btn-sm">Kembali</button>
    </a>
    &nbsp;
    <button type="submit" class="btn btn-success btn-sm">Tambah User</button>
</form>

@endsection
