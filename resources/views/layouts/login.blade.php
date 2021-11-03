@extends('index')
@section('title') Giriş Yap @endsection
@section('content')
    <div class="main d-flex justify-content-center " style="min-height: calc(100% - 687px);">
        <div class="row container p-md-5 py-5">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Giriş Yap</h5>
                    <div class="card-body">
                        <form action="{{ route("login.control") }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="ornek@hotmail.com" required>
                              <small id="emailHelp" class="form-text text-muted">Email adresiniz başkaları ile asla paylaşılmaz.</small>
                            </div>
                            <div class="form-group">
                              <label for="password">Şifre</label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme">
                              <label class="form-check-label" for="rememberme">Beni Hatırla</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Giriş</button>
                            @error('hata') <div class="alert alert-danger mt-2">{{ $message }}</div> @enderror
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection