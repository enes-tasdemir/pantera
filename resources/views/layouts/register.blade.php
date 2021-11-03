@extends('index')
@section('title') Hesap Oluştur @endsection
@section('content')
    <div class="main d-flex justify-content-center " style="min-height: calc(100% - 687px);">
        <div class="row container p-md-5 py-5">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Hesap Oluştur</h5>
                    <div class="card-body">
                        <form action="{{route("register.control")}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="ad">Adınız</label>
                                  <input type="text" class="form-control" id="ad" name="ad" placeholder="Adınız" required value="{{ old('ad') }}">
                                  @error('ad') <div class="alert alert-danger mt-2">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="soyad">Soyadınız</label>
                                  <input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyadınız" required value="{{ old('soyad') }}">
                                  @error('soyad') <div class="alert alert-danger mt-2">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="ornek@hotmail.com" required value="{{ old('email') }}">
                                    <small id="emailHelp" class="form-text text-muted">Email adresiniz başkaları ile asla paylaşılmaz.</small>
                                    @error('email') <div class="alert alert-danger mt-2">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tel">Telefon</label>
                                    <input type="number" class="form-control" id="tel" name="tel" aria-describedby="telHelp" placeholder="0 (***) *** ** **" required min="00000000000" max="99999999999" value="{{ old('tel') }}">
                                    <small id="telHelp" class="form-text text-muted">Telefon numaranız başkaları ile asla paylaşılmaz.</small>
                                    @error('tel') <div class="alert alert-danger mt-2">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">Şifre</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="*******" required >
                                    @error('password') <div class="alert alert-danger mt-2">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password_confirmation">Şifre Tekrarı</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="*******" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mt-2">Oluştur</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection