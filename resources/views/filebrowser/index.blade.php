@extends('layouts.app')
@section('content')
    <file-browser csrf_token="{{csrf_token()}}"></file-browser>
@endsection