@extends('master')
@section('content')
            <div class="custom-product">
               <div class="col-sm-10">
                <div class="trending-wrapper">
                    <h2>Orders List</h2>
                    <div class="">
                        @foreach ($orders as $item)
                                <div class="row searched item cart-list-divider">
                                    <div class="col-sm-3">
                                        <a href="detail/{{$item->id}} ">
                                            <img class="trending-img" src="{{ $item->gallery}}" alt="Chania">
                                        </a>
                                    </div> <div class="col-sm-3">
                                              <h2>{{ $item->name}}</h2>
                                              <h5>{{ $item->status}}</h5>
                                              <h5>payment : {{ $item->payment_method}}</h5>
                                              <h5>Delivery Address : {{ $item->address}}</h5>
                                              <h5>{{ $item->payment_status}}</h5>
                                              <h5>Price : {{ $item->price}} INR</h5>
                                    </div> <div class="col-sm-3">
                                        {{-- <a href="/RemoveItem/{{ $item->cart_id}}" class="btn btn-warning">Remove from cart</a> --}}
                                    </div>
                                </div>
                         @endforeach
                </div>
                </div>
            </div></div>
    @endsection
   