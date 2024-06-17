@extends('students.master')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card container">
        <div class="card-header"><b>Cập nhật thông tin sinh viên</b></div>
        <div class="card-body">
            <form method="post" action="{{ route('students.update',$data_student->id) }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Tên sinh viên</label>
                    <div class="col-md-10">
                        <input type="text" name="StudentName" class="form-control" value="{{ $data_student->name }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Loại sinh viên</label>
                    <div class="col-md-10">
                        <select name="TypeStudent" id="TypeStudent" class="form-control">
                            @foreach($types as $type)
                                <option value="{{ $type->Id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Ngày sinh</label>
                    <div class="col-md-10">
                        <input type="date" name="BirthdayStudent" class="form-control" value="{{ $data_student->birthday }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Giới tính</label>
                    <div class="col-md-10">
                        <select name="GenderStudent" id="GenderStudent" class="form-control">
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Số điện thoại</label>
                    <div class="col-md-10">
                        <input type="text" name="PhoneStudent" class="form-control" value="{{ $data_student->phone_number }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Email</label>
                    <div class="col-md-10">
                        <input type="email" name="EmailStudent" class="form-control" value="{{ $data_student->email }}" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-2 col-label-form">Địa chỉ</label>
                    <div class="col-md-10">
                        <input type="text" name="AddressStudent" class="form-control" value="{{ $data_student->address }}">
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-success" value="Sửa">
                    <a href="{{ route('students.index') }}" class="btn btn-danger">Quay lại</a>
                </div>
            </form>
            <script>
                document.getElementsByName('GenderStudent')[0].value = "{{ $data_student->gender }}";
                document.getElementsByName('TypeStudent')[0].value = "{{ $data_student->types->Id  }}"
            </script>
        </div>
    </div>
