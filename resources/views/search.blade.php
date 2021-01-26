@extends('master')
@section('content')
            <div class="custom-product">
               <div class="col-sm-4">
                   <a href="#">filter</a>
               </div>
               <div class="col-sm-4">
                <div class="trending-wrapper">
                    <h4>Result for products</h4>
                    <div class="">
                        @foreach ($products as $item)
                        <a href="detail/{{$item['id']}} ">
                              <div class="searched-item">
                                <img class="trending-img" src="{{ $item['gallery']}}" alt="Chania">
                                <div class="">
                                  <h2>{{ $item['name']}}</h2>
                                  <h5>{{ $item['description']}}</h5>
                                </div>
                            </a>
                              </div>
                         @endforeach
                </div>
               </div>
            </div>
    @endsection