<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GS1ugandaAdministrationsystem') }}</title>
        <link href="{{ asset('argon') }}/img/brand/small.png" rel="icon" type="image/png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    </head>
<body>
                      <div class="card-header bg-transparent pb-5">
                                                <div class="text-center">
                        <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/brand/small.png"></span>
                        <h2>GS1 Standards Uganda Product Catalogue</h2>
                        <button type="button" class="btn btn-success">                    <a class="nav-link" href="{{ route('home') }}" style="color: white;">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('GS1 Dashboard') }}
                    </a></button>
                      </div>
                    </div>
       <form role="form" method="POST" action="{{ route('generatebarcodes') }}">
                            @csrf
  <div class="row" style="margin-left: 3%;margin-right: 3%;">
        <div class="col-md-4">
                <div class="form-group">
        <label>Product Category</label>
        <select class="form-control"><option>Arts/Crafts/Needlework </option>
            <option>Arts/Crafts/Needlework</option><option>Arts/Crafts/Needlework</option>
            <option>Arts/Crafts/Needlework</option><option>Arts/Crafts/Needlework</option><option>Arts/Crafts/Needlework</option>
          </select>
      </div>
            <div class="form-group">
        <label>Product Code</label>
        <select class="form-control"><option>70000000 </option>
            <option>70000000</option><option>70000000</option>
            <option>70000000</option><option>70000000</option><option>70000000</option>
          </select>
      </div>
      <div class="form-group">
        <label>Product Class Code</label>
        <select class="form-control"><option>700000022 </option>
            <option>700000022</option><option>700000022</option>
            <option>700000022</option><option>700000022</option><option>700000022</option>
          </select>
      </div>
            <div class="form-group">
        <label>Standard Product Class Description</label>
        <select class="form-control"><option>Airbrushing Supplies </option>
            <option>Airbrushing Supplies</option><option>Airbrushing Supplies</option>
            <option>Airbrushing Supplies</option><option>Airbrushing Supplies</option><option>Airbrushing Supplies</option>
          </select>
      </div>
            
        </div>
    <div class="col-md-4">
      <div class="form-group">
        <label>Product Brick Code</label>
        <select class="form-control"><option>10001686 </option>
            <option>10001686</option><option>10001686</option>
            <option>10001686</option><option>10001686</option><option>10001686</option>
          </select>
      </div>
      <div class="form-group">
        <label>Product Brick Description</label>
                  <select class="form-control"><option>Airbrushes (Powered) </option>
            <option>Airbrushes (Powered)</option><option>Airbrushes (Powered)</option>
            <option>Airbrushes (Powered)</option><option>Airbrushes (Powered)</option><option>Airbrushes (Powered)</option>
          </select>
      </div>
      <div class="form-group">
        <label>Core Attribute Type Code</label>
        <select class="form-control"><option>20001349 </option>
            <option>20001349</option><option>20001349</option>
            <option>20001349</option><option>20001349</option><option>20001349</option>
          </select>
      </div>
      <div class="form-group">
        <label>Core Attribute Type Code Description</label>
        <select class="form-control"><option>Type of Airbrushing Equipment – Replacement Part/Accessory </option>
            <option>Type of Airbrushing Equipment – Replacement Part/Accessory</option><option>Type of Airbrushing Equipment – Replacement Part/Accessory</option>
            <option>Type of Airbrushing Equipment – Replacement Part/Accessory</option><option>Type of Airbrushing Equipment – Replacement Part/Accessory</option><option>Type of Airbrushing Equipment – Replacement Part/Accessory</option>
          </select>
      </div>
           
            <!-- <div class="form-group">
        <label>Item Number</label><br>
        <input type="number" placeholder="Item number" class="form-control" >
      </div> -->
    </div>
    <div class="col-md-4">
     <label>Core Attribute Value Code</label><br>
        <div class="form-group">
        <div class="input-group mb-4">

          <select class="form-control"><option>30008542 </option>
            <option>30008542</option><option>30008542</option>
            <option>30008542</option><option>30008542</option><option>30008542</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label>Core Attribute Value Description/Product Name</label><br>
          <select class="form-control"><option>AIRBRUSH CONTROL VALVE </option>
            <option>AIRBRUSH CONTROL VALVE</option><option>AIRBRUSH CONTROL VALVE</option>
            <option>AIRBRUSH CONTROL VALVE</option><option>AIRBRUSH CONTROL VALVE</option><option>AIRBRUSH CONTROL VALVE</option>
          </select>
      </div>
        <label>Product Price</label><br>
        <div class="form-group">
        <div class="input-group mb-4">

                  <input type="number" id="price" name="barcode" value="" class="form-control" placeholder="UGX">
        </div>
      </div>
      <div class="form-group">
        <label>Your Product Description </label><br>
        <input type="text" id="describe" name="describe" value="" class="form-control" placeholder="eg: rwenzori mineral water 500ml, pure UV treated">
      </div>
    </div>
  </div>
      </div>
      <div class="form-group" style="margin-left: 45%;">
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </div>
</div>
    </div>

</form>

@include('layouts.footers.auth')
    </div>
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
</body>
</html>