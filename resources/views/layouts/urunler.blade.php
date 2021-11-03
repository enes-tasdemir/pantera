@extends('index')
@section('title') Ürünlerimiz @endsection
@section('content')
    <div class="main d-flex justify-content-center " style="min-height: calc(100% - 687px);">
        <div class="row container">
            <div class="col-md-3">
                <div class="filters p-4">
                    <h6><b>Kategoriler</b></h6>
                    <hr>
                    @foreach ($categories as $item)
                        <div class="form-check form-check-inline filters-hover rounded w-100 px-2">
                            <input class="form-check-input h-100" type="checkbox" id="kat_{{ $item['id'] }}">
                            <label class="form-check-label w-100 h-100" for="kat_{{ $item['id'] }}">{{ $item['name'] }}</label>
                        </div>
                    @endforeach
                    <br><br>
                    <h6><b>Fiyat Aralığı</b></h6>
                    <hr>
                    <div class="d-flex">
                        <input type="number" id="min" class="form-control m-1 filter_price" placeholder="min">
                        <input type="number" id="max" class="form-control m-1 filter_price" placeholder="max">
                        <button type="button" class="btn btn-outline-success m-1"><i class="fas fa-check"></i></button>
                    </div>
                    <br><br>
                    <h6><b>Markalar</b></h6>
                    <hr>
                    @foreach ($brands as $item)
                        <div class="form-check form-check-inline filters-hover rounded w-100 px-2">
                            <input class="form-check-input h-100" type="checkbox" id="brand_{{ $item['id'] }}">
                            <label class="form-check-label w-100 h-100" for="brand_{{ $item['id'] }}">{{ $item['name'] }}</label>
                        </div>
                    @endforeach
                    
                </div>
            </div>
            <div class="col-md-9">
                <div class="products">

                </div>
            </div>
        </div>
    </div>
@endsection