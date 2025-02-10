@extends('layout.admin')

@section('title','Produk - '.$settings->name)
    
@section('main')

<div class="pagetitle">
    <h1>Produk</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item active">Produk</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
    <div class="col-lg-12">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Produk</h5>

            @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <a class="btn btn-primary" href="/admin/products/create"><i class="bi bi-plus-circle"></i> Tambah Produk</a>

            <!-- Table with stripped rows -->
            <table class="table datatable">
            <thead>
                <tr>
                <th>#</th>
                <th>Logo</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!$products->isEmpty())
                @foreach ($products as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      <img src="{{ asset($data->logo) }}" class="img-fluid" width="80" alt="{{ 'Logo '.$data->name }}">
                    </td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->category->name }}</td>
                    <td>{{ $data->status }}</td>
                    <td>
                        <a href="/admin/products/{{ $data->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                        <a href="/admin/products/{{ $data->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteAction('{{ route('products.destroy', $data->id) }}')">
                          <i class="bi bi-trash"></i>
                        </button>
                    </td>
                  </tr>
                @endforeach
                @else
                    <tr>
                    <td class="text-center" colspan="6">Belum ada Produk</td>
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
          <h5 class="modal-title text-center">Hapus produk?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0">
            Produk yang terhapus tidak dapat dipulihkan.
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