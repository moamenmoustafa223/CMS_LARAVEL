<div class="modal fade" id="editProduct{{ $a->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('product.update', $a->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" name="image"
                                class="form-control @error('image') is-invalid @enderror" id="basic-default-name">
                        </div>
                        @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ $a->name }}"
                                class="form-control @error('name') is-invalid @enderror" id="basic-default-name">
                        </div>
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Deskripsi Produk</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" value="{{ $a->description }}"
                                class="form-control @error('description') is-invalid @enderror" id="basic-default-name">
                        </div>
                        @error('description')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Harga Produk</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" value="{{ $a->price }}"
                                class="form-control @error('price') is-invalid @enderror" id="basic-default-name">
                        </div>
                        @error('price')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Kategori Produk</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-lg" name="category_id" id="basic-default-message">
                                @foreach ($category as $c)
                                    <option value="{{ $c->id }}"
                                        {{ $c->id === $a->category_id ? 'selected' : '' }}>
                                        {{ $c->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('price')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row justify-content-end mt-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
