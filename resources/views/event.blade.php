@extends('layouts.app')

@section('content')
<div class="container">
  <div class="detail m-5">
    <h1 class="text-xl text-black font-sans font-semibold">
      Available Events
    </h1>
  </div>
  <div class="events flex flex-col md:flex-row">
    <div class="w-1/3 mx-2 bg-white hover:shadow-lg rounded-lg">
      <img class="rounded-t-lg h-64 w-full object-cover" src="https://images.unsplash.com/photo-1563050860-87d45eaaeabb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" />
      <div class="p-4 font-sans-serif text-center">
        Ea labore.
      </div>
    </div>
    <div class="w-1/3 mx-2 bg-white hover:shadow-lg rounded-lg">
      <img class="rounded-t-lg h-64 w-full object-cover" src="https://images.unsplash.com/photo-1514533212735-5df27d970db0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" />
      <div class="p-4 font-sans-serif text-center">
        Lorem ipsum cupidatat ut et quis.
      </div>
    </div>
    <div class="w-1/3 mx-2 bg-white hover:shadow-lg rounded-lg">
      <img class="rounded-t-lg h-64 w-full object-cover" src="https://images.unsplash.com/photo-1525098507636-f48dc7917654?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" />
      <div class="p-4 font-sans-serif text-center">
        Sit ullamco eiusmod dolore fugiat.
      </div>
    </div>
  </div>
</div>
@endsection
