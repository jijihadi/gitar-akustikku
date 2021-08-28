@extends('layout.main')
@section('title', 'Web')

{{-- @yield('container') --}}

@section('container')
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h1 class="breadcrumb-heading">Upload File Anda</h1>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Upload Sample</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="compare-area section-space-y-axis-100">
        <div class="container">
            <div class="compare-table table-responsive">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach()
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                        </button>
                    </div>
                @endif
                <form action="{{ route('stem.insert') }}" method="POST" role="form"
                    enctype="multipart/form-data" class="form form-horizontal">
                    <table class="table table-borderless table-hover mb-0">
                        <tbody>
                            <tr>
                                <th class="compare-column-titles" colspan="2">
                                    <h3>Upload file tuning anda</h3>
                                    <hr>
                                </th>
                            </tr>
                            <tr>
                                <th>Label Chord</th>
                                <td><input type="text" class="form-control" name="label"
                                        placeholder="Chord seperti C, A, B"></td>
                            </tr>
                            <tr>
                                <th>Variasi Chord</th>
                                <td><input type="text" class="form-control" name="variasi" placeholder="Variasi gitar">
                                </td>
                            </tr>
                            <tr>
                                <th>File Sample</th>
                                <td>
                                    <div class="custom-file">
                                        <input id="profile_image" type="file" class="form-control" name="gambar">
                                        <small class="text-danger pull-left">*Gunakan file jenis WAV dengan ukuran maks
                                            4mb.</small>
                                    </div>
                                </td>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </tr>
                            <th colspan="2"> <button class="btn btn-success pull-right"> Submit</button></th>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection