@extends('layouts.master')

@section('title', 'Jabatan')

@section('subheader-main')

<h3 class="kt-subheader__title">
    Jabatan
</h3>
<span class="kt-subheader__separator kt-hidden"></span>
<div class="kt-subheader__breadcrumbs">
    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <a href="" class="kt-subheader__breadcrumbs-link">
        Edit Data Jabatan </a>
    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
</div>

@endsection

@section('content')

<form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PATCH')
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Edit Data Jabatan
                        </h3>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <div class="form-group">
                        <label>Nama Jabatan<span class="text-danger">*</span></label>
                        <input type="hidden" name="old_nama" value="{{ $jabatan->nama }}">
                        <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama"
                            id="nama" value="{{ $jabatan->nama }}" required autofocus>
                    </div>
                </div>

                <div class="kt-portlet__foot">
                    <div class="row align-items-center">
                        <div class="col-12 kt-align-center">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-edit"></i>
                                Ubah Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection