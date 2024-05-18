@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Student Details</h2>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $student->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $student->name }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        @if($student->image)
                            <img src="{{ asset('storage/' . $student->image) }}" alt="{{ $student->name }}" width="100">
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>{{ $student->age }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $student->status ? 'Active' : 'Inactive' }}</td>
                </tr>
            </table>
            <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection
