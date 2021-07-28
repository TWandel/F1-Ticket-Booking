@extends('layouts.app')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<main class="my-8">
            <div class="container px-6 mx-auto mt-3">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <h3 class="text-3xl text-bold">Order history</h3>
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left">Name</th>
                              <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <span class="hidden lg:inline">Quantity</span>
                              </th>
                              <th class="hidden text-right md:table-cell"> price</th>
                              <th class="hidden text-right md:table-cell"> Remove </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                  <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Flag">
                                </a>
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4">{{ $item->name }} ({{ $item->attributes->tier }} - {{$item->attributes->type}})</p>                      
                                </a>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                    
                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input id="zero" type="num" name="quantity" min="1" value="{{ $item->quantity }}" 
                                    class="w-8 text-center bg-gray-300" maxlength="2"  min="1" max="99" required  />
                                    <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    €{{ $item->price }}
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="px-4 py-2 text-white bg-red-600">x</button>
                              </form>
                                
                              </td>
                            </tr>
                            @endforeach
                             
                          </tbody>
                        </table>
                        <div>
                         Total: €{{ Cart::getTotal() }}
                        </div>
                        <div class="d-flex">
                        <div class="p-2">
                          <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300">Remove All Cart</button>
                          </form>
</div>
<div class="p-2">
                          <form action="{{ route('cart.buy') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-green-800 bg-green-300">Buy it</button>
                          </form>
</div>
                        </div>


                      </div>
                    </div>
                  </div>
            </div>
        </main>
        <script src="{{ asset('js/input.js') }}" defer></script>
        <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>


@endsection