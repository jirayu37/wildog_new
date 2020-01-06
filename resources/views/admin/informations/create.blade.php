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
        
             <form method="POST" action="{{ route('informations.store') }}" enctype="multipart/form-data" >

                 {{ csrf_field() }}
                     <div class="form-group">
                        <label>รหัส:</label>
                        <input type="text" class="form-control" name="u_id" value="{{ $id }}">
                    </div>

                    <div class="form-group">
                        <label>ข้อมูลติดต่อ:</label>
                        <input type="text" class="form-control" name="i_phone">
                    </div>
                    <div class="form-group">
                        <label>สถานที่ทำงาน:</label>
                        <input type="text" class="form-control" name="workplace">
                    </div>

                    <div class="form-group">
                        <label>ที่อยู่:</label>
                        <input type="text" class="form-control" name="address">
                    </div>

                    <div class="form-group">
                        <label>เงินเดือน:</label>
                        <input type="number" class="form-control" name="salary">
                    </div>

                    <div class="form-group">
                        <label for="image" class="col-md-4 control-label">image</label>
                            <input type="file" name="image">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">เพิ่มข้อมูล</button>
                    </div>
                </form>
            </div>
        </div>
    

        </div>
        </div>
    </div>

</div>

@endsection
{{--   <script src="{{ asset('js/app.js') }}"></script> --}}