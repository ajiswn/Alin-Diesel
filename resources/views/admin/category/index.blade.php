@extends('layout.admin')

@section('title','Kategori - '.$settings->name)
    
@section('main')

<div class="pagetitle">
    <h1>Kategori</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item active">Kategori</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
    <div class="col-lg-8">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kategori</h5>

            @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <a class="btn btn-primary" href="/admin/categories/create"><i class="bi bi-plus-circle"></i> Tambah Kategori</a>

            <!-- Table with stripped rows -->
            <table class="table datatable">
            <thead>
                <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!$categories->isEmpty())
                @foreach ($categories as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        <a href="/admin/categories/{{ $data->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteAction('{{ route('categories.destroy', $data->id) }}')">
                          <i class="bi bi-trash"></i>
                        </button>
                    </td>
                  </tr>
                @endforeach
                @else
                    <tr>
                    <td class="text-center" colspan="6">Belum ada Kategori</td>
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
          <h5 class="modal-title text-center">Hapus kategori?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0">
            Kategori yang terhapus tidak dapat dipulihkan dan produk yang termasuk kategori ini akan terhapus juga.
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

<script>
    function deleteAction(actionUrl) {
        document.getElementById('deleteForm').action = actionUrl;
    }
</script>

@endsection