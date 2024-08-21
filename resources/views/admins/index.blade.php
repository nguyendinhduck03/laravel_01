@extends('layout.admin')
@section('content')
    <h1>Trang Dashboard</h1>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button class="btn btn-danger" type="submit">Logout</button>
    </form>
@endsection
