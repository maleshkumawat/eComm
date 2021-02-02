@extends('master')
@section('content')
            <div class="custom-product">
               <div class="col-sm-10">
                <div class="trending-wrapper">
                    <h2>Cart List</h2>
                    {{-- @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif --}}
                    <a class="btn  btn-success" href="/ordernow">Order Now</a><br><br>
                    <div class="">
                        @foreach ($products as $item)
                                <div class="row searched item cart-list-divider">
                                    <div class="col-sm-3">
                                        <a href="detail/{{$item->id}} ">
                                            <img class="trending-img" src="{{ $item->gallery}}" alt="Chania">
                                        </a>
                                    </div> <div class="col-sm-3">
                                              <h2>{{ $item->name}}</h2>
                                              <h5>{{ $item->description}}</h5>
                                    </div> <div class="col-sm-3">
                                        <a href="/RemoveItem/{{ $item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                                    </div>
                                </div>
                         @endforeach
                </div>
                    <a class="btn  btn-success" href="/ordernow">Order Now</a><br><br>
                </div>
            </div></div>
    @endsection
   