@extends('layouts.template')

@section('title','Student Management')

@section('content')
    <div class="card mt-4">
        <div class="card-header">Student list</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Sex</th>
                    <th>Age</th>
                    <th>Major</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student['firstname'] }}</td>
                            <td>{{ $student['lastname'] }}</td>
                            <td>{{ $student['sex'] }}</td>
                            <td>{{ $student['age'] }}</td>
                            <td>{{ $student['major'] }}</td>
                            <td><a href="{{ route('show.student',['id' => $student['id']]) }}" type="button" class="btn btn-success">View</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div> 
    </div>
@endsection
