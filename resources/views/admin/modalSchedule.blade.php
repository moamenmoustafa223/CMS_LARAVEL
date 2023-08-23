<div class="modal fade" id="editSchedule{{ $a->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('schedule.update', $a->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Hari</label>
                        <div class="col-sm-10">
                            <input type="text" name="day" value="{{ $a->day }}"
                                class="form-control @error('day') is-invalid @enderror" id="basic-default-name">
                            @error('day')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Buka</label>
                        <div class="col-sm-10">
                            <input type="text" name="open" value="{{ substr($a->open, 0, -3) }}"
                                class="form-control @error('open') is-invalid @enderror" id="basic-default-name">
                            @error('open')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Tutup</label>
                        <div class="col-sm-10">
                            <input type="text" name="close" value="{{ substr($a->close, 0, -3) }}"
                                class="form-control @error('close') is-invalid @enderror" id="basic-default-name">
                            @error('close')
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
