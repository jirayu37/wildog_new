@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

           
        <div class="flex-center position-ref full-height">
            <div class="content">
             

        <div class="container">
            <h2 class="text-center">Add sdsd   {{ $id }}</h2>
            <div class="col-md-8">
             <h2>ระบบบันทึกข้อมูล</h2>
                
            @if($check == null)
              <form method="POST" action="{{ route('informations.store') }}" enctype="multipart/form-data" >

                 {{ csrf_field() }}
                     <div class="form-group">
                        {{-- <label>รหัส:</label> --}}
                        <input type="hidden" class="form-control" name="user_id" value="{{$id}}">
                    </div>

                    {{-- <div class="form-group"> --}}
                    <div class="form-group{{ $errors->has('i_phone') ? ' has-error' : '' }}">
                        <label>ข้อมูลติดต่อ:</label>
                        <input type="text" class="form-control" name="i_phone"  required autofocus>

                           @if ($errors->has('i_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('i_phone') }}</strong>
                                    </span>
                                @endif
                    </div>


                   {{--  <div class="form-group"> --}}
                     <div class="form-group{{ $errors->has('workplace') ? ' has-error' : '' }}">
                        <label>สถานที่ทำงาน:</label>
                        <input type="text" class="form-control" name="workplace"  required autofocus>

                           @if ($errors->has('workplace'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('workplace') }}</strong>
                                    </span>
                                @endif
                    </div>

                     <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label>ที่อยู่:</label>
                        <input type="text" class="form-control" name="address"  required autofocus>

                        @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                        <label>เงินเดือน:</label>
                        <input type="number" class="form-control" name="salary"  required autofocus>

                         @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label for="image" class="col-md-4 control-label">image</label>
                       
                            <input type="file" name="image"  required autofocus>
                               @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                        @endif
                      
                        </div>

                    <div class="form-group">
                        <button class="btn btn-primary">เพิ่มข้อมูล</button>
                    </div>
                </form>
             @else
                       I don't have any records!
                      @endif 


           
            </div>
        </div>
    

        </div>
        </div>
    </div>

</div>

@endsection
{{--   <script src="{{ asset('js/app.js') }}"></script> --}}