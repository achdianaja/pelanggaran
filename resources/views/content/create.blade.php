@extends('app.main')

@section('title', 'Form Tambah')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Vertical Form with Icons</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Nama Siswa</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Input with icon left" id="first-name-icon" name="name">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="email-id-icon">Pelanggaran</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Email"
                                            id="email-id-icon" name="violation">
                                        <div class="form-control-icon">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="mobile-id-icon">Kelas</label>
                                    <div class="position-relative">
                                        <select type="text" class="form-control" placeholder="Mobile" id="mobile-id-icon" >
                                            <option value="">ioi</option>
                                        </select>
                                        <div class="form-control-icon">
                                            <i class="bi bi-phone"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
