@extends('layouts.app')

@section('content')
<div class="bg-gray-200 font-sans h-screen w-full flex flex-row justify-center items-center">
    <div class="card w-96 mx-auto bg-white  shadow-xl hover:shadow">
       <img class="w-32 mx-auto rounded-full -mt-20 border-8 border-white" src="https://www.personality-insights.com/wp-content/uploads/2017/12/default-profile-pic-e1513291410505.jpg" alt="">
       <div class="text-center mt-2 text-3xl font-medium">{{Auth::user()->name}}</div>
       <div class="text-center mt-2 font-light text-sm">{{Auth::user()->email}}</div>
       <div class="px-6 text-center mt-2 font-light text-sm">
         <p>
           Lorem Ipsum Lorem Ipsum Lorem Ipsum
         </p>
       </div>
       <hr class="mt-8">
       <div class=" flex flex-row justify-center items-center">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            Register Again?
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            
        </form>
           
       </div>
    </div>
  </div>
@endsection
