@extends('admin.layout.app')

@section('content')
<div class="container">
    <h1>Upload Images and Assign to Service</h1>
    @if (Session::has('success'))
    <div id="myalert" class="alert alert-success alert-dismissible" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('service.uploadImages') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Select Service -->
        <div class="mb-3">
            <label for="service_id" class="form-label">Select Service</label>
            <select name="service_id" id="service_id" class="form-control @error('service_id') is-invalid @enderror">
                <option value="">Select a service</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                        {{ $service->name_en }}
                    </option>
                @endforeach
            </select>
            @error('service_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Upload Images -->
        <div class="mb-3">
            <label for="images" class="form-label">Upload Images</label>
            <input type="file" name="images[]" id="images" class="form-control @error('images.*') is-invalid @enderror" multiple>
            @error('images.*')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Image Names in Arabic -->
        <div class="mb-3">
            <label for="image_names_ar" class="form-label">Image Names (Arabic)</label>
            <input type="text" name="image_names_ar[]" class="form-control @error('image_names_ar.*') is-invalid @enderror" placeholder="Enter image name in Arabic" value="{{ old('image_names_ar.0') }}">
            <input type="text" name="image_names_ar[]" class="form-control mt-2 @error('image_names_ar.*') is-invalid @enderror" placeholder="Enter another image name in Arabic" value="{{ old('image_names_ar.1') }}">
            <!-- Add more fields as needed -->
            @error('image_names_ar.*')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Image Names in English -->
        <div class="mb-3">
            <label for="image_names_en" class="form-label">Image Names (English)</label>
            <input type="text" name="image_names_en[]" class="form-control @error('image_names_en.*') is-invalid @enderror" placeholder="Enter image name in English" value="{{ old('image_names_en.0') }}">
            <input type="text" name="image_names_en[]" class="form-control mt-2 @error('image_names_en.*') is-invalid @enderror" placeholder="Enter another image name in English" value="{{ old('image_names_en.1') }}">
            <!-- Add more fields as needed -->
            @error('image_names_en.*')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Upload Images</button>
    </form>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h3>Service Images</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Image</th>
                        <th>Image Name (Arabic)</th>
                        <th>Image Name (English)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        @foreach($service->images as $image)
                            <tr>
                                <td>{{ $service->name_en }} / {{ $service->name_ar }}</td>
                                <td><img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->name_en }}" width="100"></td>
                                <td>{{ $image->name_ar }}</td>
                                <td>{{ $image->name_en }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editImage{{ $image->id }}">
                                        <i class="bx bx-edit-alt"></i> Edit
                                    </button>

                                    <!-- Delete Form -->
                                    <form action="{{ route('serviceImage.destroy', $image->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this image?')">
                                            <i class="bx bx-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Edit Image Modal -->
                            <div class="modal fade" id="editImage{{ $image->id }}" tabindex="-1" aria-labelledby="editImageLabel{{ $image->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editImageLabel{{ $image->id }}">Edit Image</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('serviceImage.update', $image->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="form-group">
                                                    <label for="image_name_ar">Image Name (Arabic)</label>
                                                    <input type="text" name="image_name_ar" id="image_name_ar" class="form-control" value="{{ $image->name_ar }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="image_name_en">Image Name (English)</label>
                                                    <input type="text" name="image_name_en" id="image_name_en" class="form-control" value="{{ $image->name_en }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="new_image">Upload New Image</label>
                                                    <input type="file" name="new_image" id="new_image" class="form-control">
                                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->name_en }}" width="100">
                                                </div>

                                                <button type="submit" class="btn btn-primary mt-3">Update Image</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
