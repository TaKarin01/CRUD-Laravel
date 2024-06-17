<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sach sinh vien</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
<div class="container">
    <h2 class="text-center title">Danh sach sinh vien</h2>
    <a href="{{ route('students.create') }}" class="btn btn-success">Thêm sinh viên</a>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">Ma sinh vien</th>
                <th scope="col">Ten sinh vien</th>
                <th scope="col">Loai sinh vien</th>
                <th scope="col">Ngay sinh</th>
                <th scope="col">Gioi tinh</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data_students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->types->name }}</td>
                <td>{{ $student->birthday }}</td>
                <td>{{ $student->gender }}</td>
                <td>
                    <form method="post" action="{{ route('students.destroy', $student->id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                        <input type="submit" class="btn btn-danger btn-md" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
