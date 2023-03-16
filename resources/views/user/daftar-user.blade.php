@extends('layouts.main')
@section('content')
<h6 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User /</span> Daftar User</h6>

<h3>Daftar User GSC</h3>
<p><div class="badge bg-primary">3</div>&nbsp; Total User</p>

<div class="table-responsive text-nowrap ">
    {{-- <table class="table table-bordered table-hover" id="dt-user">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No Hp/WhatsApp</th>
          <th>Kategori User</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0"> --}}
        {{-- <tr>
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
        </tr> --}}
        {{-- @foreach ($user as $data)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $data->name }}</td>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $data->address }}</td>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $data->phone }}</td>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $data->role_name }}</td>
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
        @endforeach
      </tbody>
    </table> --}}
    <table id="dt-tes" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
        </tbody>
    </table>

</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('#dt-tes').DataTable();
    });
</script>
@endpush
