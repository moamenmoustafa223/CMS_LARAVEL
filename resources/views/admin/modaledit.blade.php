<!-- Modal -->
<div class="modal fade" id="edit{{ $a->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Carousel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('carousel.update', $a->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Name</label>
                            <textarea value="" type="text" id="nameBasic" name="title" class="form-control" placeholder="Enter Name">{{ $a->title }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <img src="/storage/carousel/{{ $a->image }}" class="img-fluid rounded-top"
                                alt="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit Logo -->
@foreach ($logo as $a)
    <div class="modal fade" id="editLogo{{ $a->id }}" tabindex="-1" aria-labelledby="editLogoLabel{{ $a->id }}"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLogoLabel{{ $a->id }}">Edit Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('logo.update', $a->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="brief_ar" class="form-label">Brief (AR)</label>
                            <input type="text" class="form-control" id="brief_ar" name="brief_ar" value="{{ $a->brief_ar }}">
                        </div>
                        <div class="mb-3">
                            <label for="brief_en" class="form-label">Brief (EN)</label>
                            <input type="text" class="form-control" id="brief_en" name="brief_en" value="{{ $a->brief_en }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

<div class="modal fade" id="editCategory{{ $a->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('category.update', $a->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row text-center">
                        <div class="col mb-3">
                            <input type="text" name="name" value="{{ $a->name }}"
                                class="form-control @error('name') is-invalid @enderror" id="basic-default-name">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
