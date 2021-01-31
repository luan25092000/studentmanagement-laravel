@extends('layouts.template')

@section('title','Student Management')

@section('content')
    <div class="wrapper mt-4">
        <h2>Add student</h2>
        <form action="{{ route('add.student') }}" method="post" enctype="multipart/form-data" class="mt-4">

            @csrf

            <div class="form-group">
                <label for="avatar">Avatar:</label>
                <input type="file" name="avatar">
            </div>
            <div class="form-group">
                <label for="firstname">Firstname:</label>
                <input type="firstname" class="form-control" placeholder="Enter firstname" id="firstname" name="firstname">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname:</label>
                <input type="lastname" class="form-control" placeholder="Enter lastname" id="lastname" name="lastname">
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="sex[]" value="male"> Male
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="sex[]" value="female"> Female
                </label>
            </div>
            <div class="form-group mt-2">
                <label for="age">Age:</label>
                <input type="number" class="form-control" placeholder="Enter age" id="age" name="age">
            </div>
            <div class="form-group">
                <label for="major">Major:</label>
                <input type="text" class="form-control" placeholder="Enter major" id="major" name="major">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="reset" class="btn btn-warning text-white">Reset</button>
        </form>
    </div>
@endsection