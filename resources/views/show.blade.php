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
            @role('admin') 
            <a href="{{ route('edit.student.form',['id' => $student['id']]) }}" type="button" class="btn btn-warning">Edit</a>  
            <a data-href="{{ route('delete.student',['id' => $student['id']]) }}" data-toggle="modal" data-target="#confirm-delete" type="button" class="btn btn-danger">Delete</a>
            @endrole 
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="confirm-delete">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Message</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                    Do you want to delete "{{ $student['firstname'] }} {{ $student['lastname'] }}" student ?
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                    <a class="btn btn-primary btn-ok">Yes</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
        
            </div>
        </div>
    </div>
@endsection