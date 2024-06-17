@extends('students.master')
@section('content')

    <div class="card container">
        <div class="card-header"><b>Thông tin sinh viên</b></div>
        <div class="card-body">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Tên sinh viên</label>
                    <div class="col-md-10">
                        {{ $data_student->name }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Loại sinh viên</label>
                    <div class="col-md-10">
                        {{ $data_student->types->name }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Ngày sinh</label>
                    <div class="col-md-10">
                        {{ $data_student->birthday }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Giới tính</label>
                    <div class="col-md-10">
                        {{ $data_student->gender }}
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Số điện thoại</label>
                    <div class="col-md-10">
                        {{ $data_student->phone_number }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Email</label>
                    <div class="col-md-10">
                        {{ $data_student->email }}
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Địa chỉ</label>
                    <div class="col-md-10">
                        {{ $data_student->address }}
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('students.index') }}" class="btn btn-danger">Quay lại</a>
                </div>
        </div>
    </div>

