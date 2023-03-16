@extends('layouts.main')
@section('content')
<h6 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User /</span> Daftar User</h6>

<h3>Daftar User GSC</h3>
<p><div class="badge bg-primary">3</div>&nbsp; Total User</p>

<div class="table-responsive text-nowrap table-bordered table-hover">
    <table class="table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No Hp/WhatsApp</th>
          <th>Kategori User</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Yudis Ganzz</strong></td>
          <td>Jln. Sulawesi Perum Puri Tanjung Intan No.B2 Gunung Simping</td>
          <td>085228409840</td>
          <td><span class="badge bg-label-primary me-1">Petugas</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>


@endsection
