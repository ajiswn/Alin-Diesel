@extends('layout.admin')

@section('title','Detail Produk - Alin Diesel')
    
@section('main')

  <div class="pagetitle">
    <h1>Detail Produk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item"><a href="/admin/products">Produk</a></li>
        <li class="breadcrumb-item active">Detail Produk</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Detail Produk</h5>
            <div class="row g-3">
              <div class="col-12">
                <a href="/admin/products/" class="btn btn-success"><i class="bi bi-arrow-left"></i> Kembali</a>
                <a href="/admin/products/{{ $product->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteAction('{{ route('products.destroy', $product->id) }}')">
                  <i class="bi bi-trash"></i> Hapus
                </button>
              </div>
              <div class="col-12">
                <div class="image-previews-container d-block">
                    @foreach ($product_images as $data)
                        <div class="box-image position-relative">
                          <img src="{{ asset($data->image_path) }}" alt="Product Image">
                        </div>
                    @endforeach
                </div>
              </div>
              <div class="col-12 product-show">
                <div class="product-info">
                  <h1>{{ $product->name }}</h1>
                  <img src="{{ asset($product->logo) }}" alt="{{ $product->name }}" height="60" class="mb-3">
                    <ul>
                      <li><strong>Kategori</strong>: {{ $product->category->name }}</li>
                      <li><strong>Deskripsi</strong>: </li>
                    </ul>
                </div>
                <div class="product-description">
                  {!! $product->description !!}
                </div>
              </div>
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
        <h5 class="modal-title text-center">Ingin hapus produk?</h5>
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