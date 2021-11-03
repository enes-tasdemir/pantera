@extends('index')
@section('title') Anasayfa @endsection
@section('content')
    <div class="slider">

    </div>
    <div class="main d-flex justify-content-center">
        <div class="row container p-5 my-5">
            @foreach ($categories as $item)
                <div class="col-md-3 indexKategori">
                    <img src="images/{{ $item['picture'] }}" alt="" class="rounded">
                    <h4>{{ $item['name'] }}</h4>
                </div>
            @endforeach   
        </div>
    </div>
@endsection