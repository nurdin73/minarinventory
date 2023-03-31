<x-auth-layout>
  <x-slot:title>Register</x-slot:title>
  <x-slot:css>
    <link rel="stylesheet" href="{{ asset('assets/css/select2.css') }}">
  </x-slot:css>
  <div class="container-fluid p-0"> 
    <div class="row justify-content-center align-items-center">
      <div class="col-7">
        <div class="card">
          <div class="card-body">
            <form class="theme-form" autocomplete="off" method="POST" action="{{ route('register') }}">
              @csrf
              <h4>Buat akun</h4>
              <h6>Masukkan detail akun anda</h6>
              <div class="form-group">
                <label for="">Tipe Pengguna</label>
                <select name="user_type" id="" class="form-select">
                  <option value="">Pilih</option>
                  <option value="perorangan">Perorangan</option>
                  <option value="instansi">Instansi</option>
                </select>
              </div>
              <div class="form-group">
                <label for="name">Nama</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                  <input class="form-control" value="{{ old('name') }}" name="name" type="text" required="" placeholder="Name">
                </div>
                @error('name')
                  <div class="help-block text-sm text-red-600 space-y-1">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                      <input class="form-control" value="{{ old('email') }}" name="email" type="email" required="" placeholder="Test@gmail.com">
                    </div>
                    @error('email')
                      <div class="help-block text-sm text-red-600 space-y-1">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Username</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                      <input class="form-control" value="{{ old('username') }}" name="username" type="text" required="" placeholder="johndoe">
                    </div>
                    @error('username')
                      <div class="help-block text-sm text-red-600 space-y-1">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Password</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
                    </div>
                    @error('password')
                      <div class="help-block text-sm text-red-600 space-y-1">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                      <input class="form-control" type="password" name="password_confirmation" required="" placeholder="*********">
                    </div>
                    @error('password_confirmation')
                      <div class="help-block text-sm text-red-600 space-y-1">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Gender</label>
                <select name="gender" id="" class="form-select">
                  <option value="">Pilih</option>
                  <option value="L">Laki laki</option>
                  <option value="P">Perempuan</option>
                </select>
                @error('gender')
                  <div class="help-block text-sm text-red-600 space-y-1">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Provinsi</label>
                    <select class="js-example-basic-single" name="provinsi_id">
                      
                    </select>
                    @error('provinsi_id')
                      <div class="help-block text-sm text-red-600 space-y-1">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Kota/kabupaten</label>
                    <select class="js-example-basic-single form-select" name="kotakab_id">
                      
                    </select>
                    @error('kotakab_id')
                      <div class="help-block text-sm text-red-600 space-y-1">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Kecamatan</label>
                    <select class="js-example-basic-single form-select" name="kecamatan_id">
                      
                    </select>
                    @error('kecamatan_id')
                      <div class="help-block text-sm text-red-600 space-y-1">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Kelurahan</label>
                    <select class="js-example-basic-single form-select" name="kelurahan_id">
                      
                    </select>
                    @error('kelurahan_id')
                      <div class="help-block text-sm text-red-600 space-y-1">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Kode POS</label>
                <select class="js-example-basic-single form-select" name="kodepos">
                  
                </select>
                @error('kodepos')
                  <div class="help-block text-sm text-red-600 space-y-1">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea name="address"  id="" cols="30" rows="4" class="form-control">{{ old('address') }}</textarea>
                @error('address')
                  <div class="help-block text-sm text-red-600 space-y-1">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Buat Akun</button>
              </div>
              <p>Sudah punya akun?<a class="ms-2" href="{{ route('login') }}">Sign in</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <x-slot:js>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script>
      const BASE_URL = "{{ url('api/location') }}"
    </script>
    <script src="{{ asset('assets/js/select2/location.js') }}"></script>
  </x-slot:js>
</x-auth-layout>
