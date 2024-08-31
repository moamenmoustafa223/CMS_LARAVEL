@extends('admin.layout.app')

@section('content')
    <div class="container mt-3">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add Service</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div id="myalert" class="alert alert-success alert-dismissible" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="service-image">Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror" id="service-image">
                            </div>
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="service-name-ar">Name (Arabic)</label>
                            <div class="col-sm-10">
                                <input type="text" name="name_ar"
                                    class="form-control @error('name_ar') is-invalid @enderror" id="service-name-ar">
                            </div>
                            @error('name_ar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="service-name-en">Name (English)</label>
                            <div class="col-sm-10">
                                <input type="text" name="name_en"
                                    class="form-control @error('name_en') is-invalid @enderror" id="service-name-en">
                            </div>
                            @error('name_en')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="service-description-ar">Description (Arabic)</label>
                            <div class="col-sm-10">
                                <textarea name="description_ar" class="form-control @error('description_ar') is-invalid @enderror" id="service-description-ar"></textarea>
                            </div>
                            @error('description_ar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="service-description-en">Description (English)</label>
                            <div class="col-sm-10">
                                <textarea name="description_en" class="form-control @error('description_en') is-invalid @enderror" id="service-description-en"></textarea>
                            </div>
                            @error('description_en')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="service-slug">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" name="slug"
                                    class="form-control @error('slug') is-invalid @enderror" id="service-slug">
                            </div>
                            @error('slug')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="meta-tags-ar">Meta Tags (Arabic)</label>
                            <div class="col-sm-10">
                                <input type="text" name="meta_tags_ar"
                                    class="form-control @error('meta_tags_ar') is-invalid @enderror" id="meta-tags-ar">
                            </div>
                            @error('meta_tags_ar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="meta-tags-en">Meta Tags (English)</label>
                            <div class="col-sm-10">
                                <input type="text" name="meta_tags_en"
                                    class="form-control @error('meta_tags_en') is-invalid @enderror" id="meta-tags-en">
                            </div>
                            @error('meta_tags_en')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="meta-description-ar">Meta Description (Arabic)</label>
                            <div class="col-sm-10">
                                <textarea name="meta_description_ar" class="form-control @error('meta_description_ar') is-invalid @enderror" id="meta-description-ar"></textarea>
                            </div>
                            @error('meta_description_ar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="meta-description-en">Meta Description (English)</label>
                            <div class="col-sm-10">
                                <textarea name="meta_description_en" class="form-control @error('meta_description_en') is-invalid @enderror" id="meta-description-en"></textarea>
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
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card ">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name (Arabic)</th>
                            <th>Name (English)</th>
                            <th>Description (Arabic)</th>
                            <th>Description (English)</th>
                            <th>Slug</th>
                            <th>Meta Tags (Arabic)</th>
                            <th>Meta Tags (English)</th>
                            <th>Meta Description (Arabic)</th>
                            <th>Meta Description (English)</th>
                            <th>status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($services as $service)
                            <tr>
                                <td> 
                                    <img width="100px" src="{{ asset('/storage/service/' . $service->image) }}"
                                        class="img-fluid rounded-3" alt="">
                                </td>
                                <td>{{ $service->name_ar }}</td>
                                <td>{{ $service->name_en }}</td>
                                <td>{{ $service->description_ar }}</td>
                                <td>{{ $service->description_en }}</td>
                                <td>{{ $service->slug }}</td>
                                <td>{{ $service->meta_tags_ar }}</td>
                                <td>{{ $service->meta_tags_en }}</td>
                                <td>{{ $service->meta_description_ar }}</td>
                                <td>{{ $service->meta_description_en }}</td>
                                <td>{{ $service->status }}</td>
                                <td>
                                    <form action="{{ route('service.destroy', $service->id) }}"
                                          onsubmit="return confirm('Are you sure?')" method="post">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#editService{{ $service->id }}">
                                            <i class="bx bx-edit-alt me-2"></i>
                                        </button>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bx bx-trash me-1"></i>
                                        </button>
                                    </form>
                                
                                    <!-- Show Button -->
                                    <a href="{{ route('service.show', $service->id) }}" class="btn btn-primary">
                                        <i class="bx bx-show me-1"></i> Show
                                    </a>
                                
                                    @include('admin.modalService')
                                </td>
                                
                            </tr>
                        @empty
                            <div class="alert alert-danger alert-dismissible" id="myalert" role="alert">
                                No Data
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
