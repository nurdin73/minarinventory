<x-auth-layout>
  <x-slot:title>Login</x-slot:title>
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-12">
        <div class="login-card">
          <form class="theme-form login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <h4>Login</h4>
            <h6>Selamat Datang! Masuk menggunakan akun anda</h6>
            <div class="form-group">
              <label>Email</label>
              <div class="input-group">
                <span class="input-group-text"><i class="icon-email"></i></span>
                <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
              </div>
              @error('email')
                <div class="help-block text-sm text-red-600 space-y-1">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label>Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="icon-lock"></i></span>
                <input name="password" class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                <div class="show-hide"><span class="show"></span></div>
              </div>
              @error('password')
                <div class="help-block text-sm text-red-600 space-y-1">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <div class="checkbox">
                <input id="checkbox1" name="remember" type="checkbox">
                <label for="checkbox1">Remember password</label>
              </div>
              @if (Route::has('password.request'))
              <a class="link" href="{{ route('password.request') }}">Lupa password?</a>
              @endif
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Sign in</button>
            </div>
            <p>Tidak punya akun?<a class="ms-2" href="{{ route('register') }}">Buat Akun</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-auth-layout>
