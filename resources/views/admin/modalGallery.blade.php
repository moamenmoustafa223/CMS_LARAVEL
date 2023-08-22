<div class="modal fade" id="editGallery{{ $g->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gallery.update', $g->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row text-center">
                        <div class="col mb-3">
                            <img width="300px" src="{{ asset('/storage/gallery/' . $g->image) }}"
                                class="img-fluid rounded-3 mb-3" alt="">
                            <input type="file" name="image" value=""
                                class="form-control @error('image') is-invalid @enderror" id="basic-default-name">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
