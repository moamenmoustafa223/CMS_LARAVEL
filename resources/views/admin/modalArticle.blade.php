<div class="modal fade" id="editArticle{{ $a->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('article.update', $a->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" value="{{ $a->image }}"
                                class="form-control @error('image') is-invalid @enderror" id="basic-default-name">
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" value="{{ $a->title }}"
                                class="form-control @error('title') is-invalid @enderror" id="basic-default-name">
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Konten</label>
                        <div class="col-sm-10">
                            <input type="text" name="content" value="{{ $a->content }}"
                                class="form-control @error('content') is-invalid @enderror" id="basic-default-name">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
