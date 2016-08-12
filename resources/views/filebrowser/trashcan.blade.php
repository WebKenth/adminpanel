@extends('layouts.app')
@section('content')
    <file-browser-trashcan csrf_token="{{csrf_token()}}"></file-browser-trashcan>
@endsection