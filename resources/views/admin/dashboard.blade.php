@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

         {{--  @foreach ($test as $r)
          
          {{ $r->id }}
          @endforeach --}}
         
        <div class="flex-center position-ref full-height">
            <div class="content">

                   <div class="container">
            <h2 class="text-center">ข้อมูลสมาชิก</h2>
            {{-- <a href="analyze">วิเคราะห์</a> --}}
            <div class="col-md-8">
                  {{-- <button type="button" class="btn btn-primary" data-toggle="modal" >show  
                      </button> --}}
            </div>

               <div class="col-md-2">
                   <a href="{{ url('admin/analyze') }}" class="btn btn-success">วิเคราะห์</a>
            </div>

             
            <div class="col-md-2">
              {{--     <button type="button" class="btn btn-success" data-toggle="modal" >{{ route('register') }}เพิ่มบัญชีลูกค้า  
                      </button> --}}
                      <a href="{{ url('admin/add_customer') }}" class="btn btn-success">เพิ่มบัญชีลูกค้า</a>
            </div>
           <div class="col-md-12">
            </div>
            <hr>
            <table class="table table-bordered">
                <tr>
                     <th>รหัส</th>
                    <th>ชื่อจริง</th>
                    <th>นามสกุล</th>
                   <!--  <th>เบอร์โทร</th>
                    <th>อืเมล์</th>
                    <th>ที่อยู่</th> -->
                   
                   
                    <th>ข้อมูล</th>
                    <th>เพิ่มข้อมูลเงินฝาก</th>
                    <th></th>
                    <th></th> 
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>

              
                   @foreach ($users as $t)
    
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->firstname}}</td>
                    <td>{{$t->lastname}}</td>
                    <td>{{$t->phone}}</td>
                    <td>{{$t->email}}</td>
                    <td>{{$t->address}}</td>
                    <!-- <td><a :href="'/informations/'+user.id+'/edit'" class="btn btn-success">Add</a></td> -->
                  {{--   <td><button type="button" class="btn btn-primary" data-toggle="modal" :data-target="'#yourModal'+user.id">show</button></td>
                    <td><a :href="'/informations/'+user.id+''" class="btn btn-success">Add</a></td> --}}
          
                     <td>
                      
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yourModal{{$t->id}}">show  
                      </button>


                     {{--    <a class="btn btn-success"  data-target="#yourModal{{$t->id}}">Show {{$t->id}}</a> --}}

                   {{--   @if ($test->id == null)
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yourModal{{$t->id}}">show 
                      </button>
                      @else
                       I don't have any records!
                      @endif --}}


                     </td> 

                     {{-- href="{{ URL::to('blogs/' . $value->id) }} --}}



                 {{--    <td><a :href="'/admin/informations/create/{{$t->id}}'" class="btn btn-success">เพิ่มข้อมูล</a></td>  --}}


                  
                      


                   <!--    <td><a :href="'/customers/create'" class="btn btn-success">Add</a></td> -->
                    <!-- <td><a href="#" class="btn btn-primary">คลิก</a></td> -->
                    <!--  <td><a :href="'/members/'+member.id+'/edit'" class="btn btn-primary">Edit</a></td> -->
                    <td><a href="{{ URL::to('customers/' . $t->id . '/edit') }}" class="btn btn-primary">Edit</a></td>
                   {{--  href="{{ URL::to('blogs/' . $value->id . '/edit') }}" --}}
                    <td>
                    {{--   <a href="#" class="btn btn-danger">Delete</a> --}}
                     <form action="{{ route('customers.destroy', $t->id)}}" method="post" enctype="multipart/form-data">

                
                 {{ csrf_field() }}
                      
                        {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>


                    </td>



                </tr>
                 @endforeach
            </table>
        </div>




@foreach ($test as $t)    
    <div class="modal fade" id="yourModal{{$t->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">{{$t->i_phone}}</h4>
          </div>
           <center>
           <div class="modal-body">
           {{--  <img src="{{ asset("storage/app/public/$t->image") }}"> --}}
            {{-- <img src="{{ asset("storage/$t->image") }}"> --}}
           
            <img src="{{ asset("storage/$t->image") }}" alt="Example" width="250" height="250">

            <br>
           
          </div>


            <div class="modal-body">
            ชื่อ <br> 
            {{$t->firstname}}   {{$t->lastname}}
          </div>
           <div class="modal-body">
            อีเมล์ <br> 
            {{$t->email}}
          </div>

          
          <div class="modal-body">
            สถานที่ทำงาน <br> 
            {{$t->workplace}}
          </div>
          <div class="modal-body">
            เบอร์ติดต่อ <br> 
            {{$t->i_phone}}
          </div>
          <div class="modal-body">
            ที่อยู่ <br> 
            {{$t->address}}
          </div>
           <div class="modal-body">
            เงินเดือน <br> 
            {{$t->salary}}
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
          </div>
          </center>
        </div>
      </div>
    </div>
@endforeach

           {{--    <div id="app">
                <admin-des></admin-des>
            




            </div> --}}
        </div>
        </div>
    </div>



</div>

@endsection
{{--   <script src="{{ asset('js/app.js') }}"></script> --}}


