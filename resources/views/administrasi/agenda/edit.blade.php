@extends('layouts.master')

@section('title', 'Agenda')

@section('subheader-main')

<h3 class="kt-subheader__title">
    Administrasi
</h3>
<span class="kt-subheader__separator kt-hidden"></span>
<div class="kt-subheader__breadcrumbs">
    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <a href="{{ route('agenda.index') }}" class="kt-subheader__breadcrumbs-link">
        Agenda </a>
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
        Ubah Data Agenda </span>
</div>

@endsection

@section('content')

<form action="{{ route('agenda.update', $agenda->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PATCH')
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Ubah Data Agenda
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="{{ route('agenda.index') }}" class="btn btn-clean">
                            <i class="la la-arrow-left"></i>
                            <span class="kt-hidden-mobile">Kembali</span>
                        </a>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <div class="form-group">
                        <label>Nama Agenda<span class="text-danger">*</span></label>
                        <input type="hidden" name="old_nama" value="{{ $agenda->nama }}">
                        <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama"
                            id="nama" value="{{ $agenda->nama }}" required autofocus>
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