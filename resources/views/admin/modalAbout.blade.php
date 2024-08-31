<div class="modal fade" id="editAbout{{ $a->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit About</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('abouts.update', $a->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="title_ar">Title (AR)</label>
                        <div class="col-sm-10">
                            <input type="text" name="title_ar" value="{{ $a->title_ar }}"
                                class="form-control @error('title_ar') is-invalid @enderror" id="title_ar">
                            @error('title_ar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="title_en">Title (EN)</label>
                        <div class="col-sm-10">
                            <input type="text" name="title_en" value="{{ $a->title_en }}"
                                class="form-control @error('title_en') is-invalid @enderror" id="title_en">
                            @error('title_en')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="image">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="description1_ar">Description 1 (AR)</label>
                        <div class="col-sm-10">
                            <textarea name="description1_ar" class="form-control @error('description1_ar') is-invalid @enderror"
                                id="description1_ar">{{ $a->description1_ar }}</textarea>
                            @error('description1_ar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="description1_en">Description 1 (EN)</label>
                        <div class="col-sm-10">
                            <textarea name="description1_en" class="form-control @error('description1_en') is-invalid @enderror"
                                id="description1_en">{{ $a->description1_en }}</textarea>
                            @error('description1_en')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="description2_ar">Description 2 (AR)</label>
                        <div class="col-sm-10">
                            <textarea name="description2_ar" class="form-control @error('description2_ar') is-invalid @enderror"
                                id="description2_ar">{{ $a->description2_ar }}</textarea>
                            @error('description2_ar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="description2_en">Description 2 (EN)</label>
                        <div class="col-sm-10">
                            <textarea name="description2_en" class="form-control @error('description2_en') is-invalid @enderror"
                                id="description2_en">{{ $a->description2_en }}</textarea>
                            @error('description2_en')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
