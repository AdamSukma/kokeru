@extends('layouts.app', [
    'namePage' => 'profile',
    'class' => 'sidebar-mini',
    'activePage' => 'profile',
])

@section('content')
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Edit Profile</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\ManagerController@update',$manager->id], 'method' => 'PUT']) }}
        <div class="form-group">
            {{ Form::label('name', 'Nama Manager: ', ['class' => 'form-label']) }}
            {{ Form::text('name', $manager->name, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email: ', ['class' => 'form-label']) }}
            {{ Form::text('email', $manager->email, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password: ', ['class' => 'form-label']) }}
            {{ Form::password('password',['class' => 'form-control'])}}
        </div>

        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
        <a href="/manager/dataCS" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
@endsection