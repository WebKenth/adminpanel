@extends('layouts.app')

@section('content')

    <pages csrf_token="{{csrf_token()}}" pages="{{$pages}}" templates="{{$templates}}"></pages>

@endsection