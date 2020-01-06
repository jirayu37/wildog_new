@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

           
        <div class="flex-center position-ref full-height">
            <div class="content">
              <div id="app">

               {{--  <edit-component id="{!! $id !!}"></edit-component> --}}
                <admin-infor-edit id="{!! $id !!}"></admin-infor-edit>
              {{--   <user></user> --}}


            

            </div>
        </div>
        </div>
    </div>

</div>

@endsection
