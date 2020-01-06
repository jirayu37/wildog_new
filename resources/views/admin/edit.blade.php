@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

           
        <div class="flex-center position-ref full-height">
            <div class="content">
             

        <div class="container">
            <h2 class="text-center">Add sdsd </h2>
            <div class="col-md-8">
             <h2>ระบบบันทึกข้อมูล</h2>
        
          
           
             {{-- <form method="POST" action="{{ url('data_update') }}"> --}}

                  @foreach ($users as $user)   
                  <form class="form-horizontal" method="POST" action="{{ route('informations.update', $user->id) }}">
               {{--  {{ $user->firstname }} --}}
             
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                     <div class="form-group">
                        <label>รหัส:</label>
                        <input type="hidden" class="form-control" name="user_id" value="{{ $user->id }}" >
                    </div>

                     <div class="form-group">
                        <label>ขื่อจริง:</label>
                        <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}">
                    </div>

                    <div class="form-group">
                        <label>นามสกุล:</label>
                        <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}">
                    </div>

                     <div class="form-group">
                        <label>เบอรโโทร:</label>
                        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                    </div>


                     <div class="form-group">
                        <label>ที่อยู่:</label>
                        <input type="text" class="form-control" name="address" value="{{ $user->address }}">
                    </div>

                    <hr>                    
{{-- 
                    <div class="form-group">
                        <label>เบอรโโทร:</label>
                        <input type="text" class="form-control" name="i_phone" value="{{ $user->i_phone }}">
                    </div>
                    <div class="form-group">
                        <label>สถานที่ทำงาน:</label>
                        <input type="text" class="form-control" name="workplace" value="{{ $user->workplace }}">
                    </div>

                    <div class="form-group">
                        <label>ที่อยู่:</label>
                        <input type="text" class="form-control" name="address2" value="{{ $user->address }}">
                    </div>

                    <div class="form-group">
                        <label>เงินเดือน:</label>
                        <input type="number" class="form-control" name="salary" value="{{ $user->salary }}">
                    </div> --}}

                    <div class="form-group">
                        <button class="btn btn-primary">เพิ่มข้อมูล</button>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    

        </div>
        </div>
    </div>

</div>

@endsection
{{--   <script src="{{ asset('js/app.js') }}"></script> --}}