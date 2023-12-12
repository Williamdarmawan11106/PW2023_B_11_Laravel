    @extends('admin/index_admin')
    @section('content')

    <main>
        <div class="container">
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
                            @forelse ($user as $item)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $item['id'] }}</th>
                                    <td><img src="{{ $item['foto'] }}" alt="book_cover" style="width: 100px"></td>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>{{ $item['alamat'] }}</td>
                                    <td><a href="{{url('admin/edit_user')}}">Edit</a> | <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">Hapus</a></td>
                                </tr>
                            </tbody>
                            @empty
                            <tbody>
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data</td>
                                </tr>
                            </tbody>
                            @endforelse
                        </table>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                    <a href="{{url('admin/user_management')}}" class="btn btn-danger">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection