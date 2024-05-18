@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Students List</h2>
            <a href="{{ route('create') }}" class="btn btn-success">Add Student</a>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Age</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>
                                @if($student->image)
                                    <img src="{{ asset('storage/' . $student->image) }}" alt="{{ $student->name }}" width="50">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->status ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="{{ route('read', $student->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('update', $student->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
