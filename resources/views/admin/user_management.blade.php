    @extends('admin/index_admin')
    @section('content')

    <main>
        <div class="container">
            @if (Session::has('success'))
            <div class="alert alert-success">
                <b>Success!</b> {{session('success')}}
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Management</li>
                        </ol>
                    </nav>
                    <div class="card-title">
                        <h3>User Management</h3>
                    </div>

                    <hr>
                    <h4 class="mt-4">List User</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @forelse ($users as $item => $value)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $item+1 }}</th>
                                    <td><img src="{{'storage/'.$value['foto'] }}" alt="profil_user" style="width: 100px"></td>
                                    <td>{{ $value['nama'] }}</td>
                                    @if ($value['active'] == null)
                                    <td>{{ $value['email'] }} <span class="badge text-bg-danger">Unverified</span></td>
                                    @else
                                    <td>{{ $value['email'] }} <span class="badge text-bg-success">Verified</span></td>
                                    @endif
                                    <td>{{ $value['alamat'] }}</td>
                                    <td><a href="{{url('admin/user_management/edit_user', $value['id'])}}">Edit</a> | <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{$value['id']}}">Hapus</a></td>
                                </tr>
                            </tbody>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{$value['id']}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus User</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda ingin menghapus user ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="{{url('actionAdminDeleteUser', $value['id'])}}" class="btn btn-danger">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <tbody>
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data user</td>
                                </tr>
                            </tbody>
                            @endforelse
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </main>

    @endsection