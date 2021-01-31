@extends('layouts.template')

@section('title','Student Management')

@section('content')
    <div class="card profile mt-4 mb-4">
        <img src="../../storage/app/public/storage/avatar/{{ $student['avatar'] }}" style="width:100%">
        <h1>{{ $student['firstname'] }} {{ $student['lastname'] }}</h1>
        <p class="major">{{ $student['major'] }}</p>
        <p>Age: {{ $student['age'] }}</p>
        <div style="margin: 24px 0;">
            <a href="{{ route('index') }}" type="button" class="btn btn-secondary">Back</a> 
            <a href="{{ route('edit.student.form',['id' => $student['id']]) }}" type="button" class="btn btn-warning">Edit</a>  
            <a href="{{ route('delete.student',['id' => $student['id']]) }}" type="button" class="btn btn-danger">Delete</a>  
        </div>
    </div>
@endsection