@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
  <!-- Main content -->
  <div class="main-content" id="panel">

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Products</h3>
            </div>
                        <div class="card-body">
              <button type="button" class="btn btn-warning">                                  <a style="color: white;" href="{{ route('addproduct') }}">
                                    {{ __('Add Product') }}
                                </a></button>              
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Product Category</th>
                    <th scope="col" class="sort" data-sort="name">Product Code</th>
                    <th scope="col" class="sort" data-sort="name">Product Class Code</th>
                    <th scope="col" class="sort" data-sort="status">Standard Product Class Description</th>
                    <th scope="col" class="sort" data-sort="name">Product Brick Code</th>
                    <th scope="col" class="sort" data-sort="name">Product Brick Description</th>
                    <th scope="col" class="sort" data-sort="name">Core Attribute Type Code</th>
                    <th scope="col" class="sort" data-sort="name">Core Attribute Type Code Description</th>
                    <th scope="col" class="sort" data-sort="name">Core Attribute Value Code</th>
                    <th scope="col" class="sort" data-sort="name">Core Attribute Value Description/Product Name</th>
                    <th scope="col" class="sort" data-sort="name">Product Unit Price</th>
                    <th scope="col" class="sort" data-sort="name">Your Product Description</th>
                    <th scope="col" class="sort" data-sort="completion">Barcode Request</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>

                    <th scope="row">
                      
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Arts/Crafts/Needlework</span>
                        </div>
                      </div>
                      
                    </th>
                    
                  
                    <td class="budget">
                    70000000
                    </td>
                    <td class="budget">
                    70010200
                    </td>
                    <td class="budget">Airbrushing Supplies</td>
                    <td class="budget">10001686</td>
                    <td class="budget">Airbrushes (Powered)</td>
                    <td class="budget">20001349</td>
                    <td class="budget">Type of Airbrushing Equipment – Replacement Part/Accessory</td>
                    <td class="budget">30008542</td>
                    <td class="budget">AIRBRUSH CONTROL VALVE</td>
                    <td class="budget">1200</td>
                    <td class="budget">African Air cotrol brush blue in color</td>
                    <td class="budget"><button class="btn btn-sm btn-warning">Make Barcode Request</button></td>
<!--                     <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td> -->
                    <td>    <!-- delete product -->

                      <button class="btn btn-sm btn-warning">View Product</button></td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

@include('layouts.footers.auth')
    </div>
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush