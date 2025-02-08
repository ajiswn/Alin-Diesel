@extends('layout.admin')

@section('title','Admin - Alin Diesel')
    
@section('main')

<div class="pagetitle">
    <h1>Admin</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item active">Admin</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
    <div class="col-lg-12">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Admin</h5>

            @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <a class="btn btn-primary" href="/admin/admins/create"><i class="bi bi-person-plus"></i> Tambah Admin</a>

            <!-- Table with stripped rows -->
            <table class="table datatable">
            <thead>
                <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!$admins->isEmpty())
                @foreach ($admins as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      <img src="{{ asset($data->photo) }}" alt="Foto" style="height: 40px; width: 40px" class="rounded-circle object-fit-cover">
                    </td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td> @if ($data->status == 'active') Aktif @else Nonaktif @endif </td>
                    <td>
                      @if ($data->status == 'active')
                        <button title="Nonaktifkan" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#deactivateModal" onclick="deactivateAction('{{ route('admins.deactivate', $data->id) }}')">
                          <i class="bi bi-person-x"></i>
                        </button>
                      @else
                        <button title="Aktifkan" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#activateModal" onclick="activateAction('{{ route('admins.activate', $data->id) }}')">
                          <i class="bi bi-person-check"></i>
                        </button>  
                      @endif
                        <button title="Hapus" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteAction('{{ route('admins.destroy', $data->id) }}')">
                          <i class="bi bi-trash"></i>
                        </button>
                    </td>
                  </tr>
                @endforeach
                @else
                    <tr>
                    <td class="text-center" colspan="6">Belum ada Admin</td>
                    </tr>
                @endif
            </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
        </div>

    </div>
    </div>
</section>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title text-center">Hapus akun?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0">
            Akun yang terhapus tidak dapat dipulihkan.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Tutup</button>
          <form action="" id="deleteForm" method="POST">
            @csrf @method('delete')
            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i> Hapus</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- End Delete Modal-->

<!-- Activate Modal -->
<div class="modal fade" id="activateModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title text-center">Aktifkan akun?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0">
            Akun yang diaktifkan akan bisa masuk ke halaman admin.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Tutup</button>
          <form action="" id="activateForm" method="POST">
            @csrf
            <button type="submit" class="btn btn-success"><i class="bi bi-person-check"></i> Aktifkan</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- End Activate Modal--> 

<!-- Deactivate Modal -->
<div class="modal fade" id="deactivateModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title text-center">Nonaktifkan akun?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0">
            Akun yang dinonaktifkan tidak akan bisa masuk ke halaman admin.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Tutup</button>
          <form action="" id="deactivateForm" method="POST">
            @csrf
            <button type="submit" class="btn btn-warning"><i class="bi bi-person-x"></i> Nonaktifkan</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- End Deactivate Modal-->  

<script>
    function deleteAction(actionUrl) {
      document.getElementById('deleteForm').action = actionUrl;
    }

    function activateAction(actionUrl) {
      document.getElementById('activateForm').action = actionUrl;
    }

    function deactivateAction(actionUrl) {
      document.getElementById('deactivateForm').action = actionUrl;
    }
</script>

@endsection