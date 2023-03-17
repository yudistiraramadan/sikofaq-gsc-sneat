@extends('layouts.main')
@section('content')
    <h6 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User /</span> Daftar User</h6>

    <h4>Daftar User GSC</h4>
    <p>
    <div class="badge bg-primary">3</div>&nbsp; Total User</p>

    <a href="{{ route('tambahuser') }}">
        <button type="button" class="btn btn-success tambah mb-4 btn-sm">Tambah User</button>
    </a>
    &nbsp;
    <a href="#">
        <button type="button" class="btn btn-primary mb-4 btn-sm">Export Excel</button>
    </a>
    &nbsp;
    <a href="#">
        <button type="button" class="btn btn-danger mb-4 btn-sm">Export PDF
            <i class="bi bi-printer-fill"></i>
        </button>
    </a>

    <div class="table-responsive text-nowrap ">
        <table class="table table-hover" id="dt-user">
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
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>

                    </tr>
                @endforeach --}}
            </tbody>
        </table>


    </div>
    {{-- @push('scripts') --}}
    <script>
        // let table = new DataTable('#dt-user');
        $('#dt-user').DataTable({
            "processing": true,
                "serverSide": true,
                // "lengthChange": false,
                "bDestroy": true,
                "searching": true,
                "paginate": {
                    "first": "First",
                    "last": "Last",
                    "next": "Next",
                    "previous": "Previous"
                },
                "ajax": {
                    "url": "{{ route('user') }}",
                    "type": "GET",
                    "datatype": "json"
                },

                "render": $.fn.dataTable.render.text(),
                "columns": [{
                        data: 'name',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'address',
                        searchable: true,
                        orderable: false
                    },
                    {
                        data: 'phone',
                        searchable: true,
                        orderable: false
                    },
                    {
                        // "data": function(data) {
                        //     if (data.role_name == 'Admin'){
                        //         return '<span class="badge bg-label-success me-1">Admin</span>';
                        //     } else if (data.role_name == 'Petugas'){
                        //         return '<span class="badge bg-label-primary me-1">Petugas</span>';
                        //     } else {
                        //         return '<span class="badge bg-label-info me-1">Bendahara</span>';
                        //     }

                        // }

                        data: 'role_name',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'action',
                        searchable: false,
                        orderable: false
                    },
                ],
                order: [
                    [4, 'desc']
                ],
                responsive: true,
                language: {
                    search: "Cari Data :",
                    searchPlaceholder: "",
                    emptyTable: "Tidak ada data pada tabel ini",
                    info: "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
                    infoFiltered: "(difilter dari _MAX_ total data)",
                    infoEmpty: "Tidak ada data pada tabel ini",
                    lengthMenu: "Menampilkan _MENU_ data",
                    zeroRecords: "Tidak ada data pada tabel ini"
                },
                columnDefs: [{
                    className: 'text-center',
                    targets: [2, 3]
                }, {
                    //     width: '25%',
                    //     targets: [0, 1]
                    // }, {
                    //     width: '20%',
                    //     targets: [2, 3]
                }],
            });
        // });

    </script>
    {{-- @endpush --}}
@endsection
