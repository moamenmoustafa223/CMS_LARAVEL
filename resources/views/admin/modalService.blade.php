<div class="modal fade" id="editService{{ $service->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-image">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image"
                                class="form-control @error('image') is-invalid @enderror" id="basic-default-image">
                            @if ($service->image)
                                <img src="{{ asset('/storage/service/' . $service->image) }}" width="100" alt="Current Image">
                            @endif
                        </div>
                        @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name-ar">Name (Arabic)</label>
                        <div class="col-sm-10">
                            <input type="text" name="name_ar" value="{{ $service->name_ar }}"
                                class="form-control @error('name_ar') is-invalid @enderror" id="basic-default-name-ar">
                        </div>
                        @error('name_ar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name-en">Name (English)</label>
                        <div class="col-sm-10">
                            <input type="text" name="name_en" value="{{ $service->name_en }}"
                                class="form-control @error('name_en') is-invalid @enderror" id="basic-default-name-en">
                        </div>
                        @error('name_en')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-description-ar">Description (Arabic)</label>
                        <div class="col-sm-10">
                            <textarea name="description_ar" class="form-control @error('description_ar') is-invalid @enderror" id="basic-default-description-ar">{{ $service->description_ar }}</textarea>
                        </div>
                        @error('description_ar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-description-en">Description (English)</label>
                        <div class="col-sm-10">
                            <textarea name="description_en" class="form-control @error('description_en') is-invalid @enderror" id="basic-default-description-en">{{ $service->description_en }}</textarea>
                        </div>
                        @error('description_en')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-meta-tags-ar">Meta Tags (Arabic)</label>
                        <div class="col-sm-10">
                            <input type="text" name="meta_tags_ar" value="{{ $service->meta_tags_ar }}"
                                class="form-control @error('meta_tags_ar') is-invalid @enderror" id="basic-default-meta-tags-ar">
                        </div>
                        @error('meta_tags_ar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-meta-tags-en">Meta Tags (English)</label>
                        <div class="col-sm-10">
                            <input type="text" name="meta_tags_en" value="{{ $service->meta_tags_en }}"
                                class="form-control @error('meta_tags_en') is-invalid @enderror" id="basic-default-meta-tags-en">
                        </div>
                        @error('meta_tags_en')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-meta-description-ar">Meta Description (Arabic)</label>
                        <div class="col-sm-10">
                            <textarea name="meta_description_ar" class="form-control @error('meta_description_ar') is-invalid @enderror" id="basic-default-meta-description-ar">{{ $service->meta_description_ar }}</textarea>
                        </div>
                        @error('meta_description_ar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-meta-description-en">Meta Description (English)</label>
                        <div class="col-sm-10">
                            <textarea name="meta_description_en" class="form-control @error('meta_description_en') is-invalid @enderror" id="basic-default-meta-description-en">{{ $service->meta_description_en }}</textarea>
                        </div>
                        @error('meta_description_en')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="status">Status</label>
                        <div class="col-sm-10">
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                                <option value="active" {{ old('status', $service->status ?? '') === 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status', $service->status ?? '') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row justify-content-end mt-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
