@extends('layouts.app')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<main class="my-8 mb-3">
            <div class="container px-6 mx-auto mt-3">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                        <h3 class="text-3xl text-bold">Your order list</h3>
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left">Name</th>
                              <th class="text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <span class="hidden lg:inline">Quantity</span>
                              </th>
                              <th class="hidden text-right md:table-cell"> price</th>
                            </tr>
                          </thead>
                          <tbody>
                          @for ($i = 0; $i <= $count; $i++)
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                  <img src="https://flyclipart.com/thumb2/admission-ticket-png-icon-free-download-411529.png" class="w-20 rounded" alt="Flag">
                              </td>
                              <td>
                                  <p class="mb-2 md:ml-4">{{$data->racename[$i]}} ({{$data->tier[$i]}} - {{$data->type[$i]}})</p>               
                              </td>         
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                  
                                    <h2 name="quantity"class="w-8 text-center" >{{$data->count[$i]}}</h2>
                                   
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    €{{$data->price[$i]}}
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell">
                              </td>
                            </tr>   
                            @endfor   
                          </tbody>
                        </table>
                        <div>
                        </div>
                    </div>
                  </div>
            </div>
        </main>
        <footer class="py-4 bg-dark fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; F1 Ticket Booking 2021</p></div>
        </footer>
@endsection