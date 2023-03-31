<x-main>
  <x-slot:title>Dashboard</x-slot:title>
  <x-slot:css>
    <link rel="stylesheet" href="{{ asset('assets/css/date-picker.css') }}">
  </x-slot:css>
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-6">
          <h3>Warranty</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            @if (session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif
            <form action="{{ route('postWarranty') }}" enctype="multipart/form-data" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="serial_number">Serial Number</label>
                    <input type="text" value="{{ old('serial_number') }}" name="serial_number" class="form-control">
                    @error('serial_number')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="part_number">Part Number</label>
                    <input type="text" value="{{ old('part_number') }}" name="part_number" class="form-control">
                    @error('part_number')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="purchase_date">Purchase Date</label>
                    <input type="text" value="{{ old('purchase_date') }}" name="purchase_date" class="form-control">
                    @error('purchase_date')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="receipt_file">Receipt File(optional)</label>
                    <input type="file" name="receipt_file" accept=".pdf,image/*" class="form-control">
                    @error('receipt_file')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-primary" type="submit">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->

  <x-slot:js>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script>
      $(document).ready(function () {
        $('input[name=purchase_date]').datepicker({
          dateFormat: "yyyy-mm-dd",
          language: 'en',
        })
      });
    </script>
  </x-slot:js>
</x-main>