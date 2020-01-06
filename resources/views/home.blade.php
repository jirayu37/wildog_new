@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard {{ Auth::user()->firstname }}</div>

                  

         
               
               
                       <h2 class="text-center">ข้อมูลสมาชิก</h2>
            <table class="table table-bordered">
                <tr>
                    
                    <th>ชื่อจริง</th>
                    <th>นามสกุล</th>
                    <th>เบอร์โทร</th>
                    <th>อืเมล์</th>
                    <th>ที่อยู่</th>
                   
                  
                </tr>
                <tr>
                    <td>{{ $costomer->firstname }}</td>
                    <td>{{ $costomer->lastname }}</td>
                    <td>{{ $costomer->phone }}</td>
                    <td>{{ $costomer->email }}</td>
                    <td>{{ $costomer->address }}</td>
                   
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yourModal{{$costomer->id}}">show  
                      </button></td>
                      <td>
                         @if($check == null)
                        <a :href="'/informations/create/{{ $costomer->id }}'" class="btn btn-success">แจ้งข้อมูล</a></td> 

                          @else
                      
                        ไม่สามารถแก้ไขได้
                      @endif 
                 <!--    <td><a href="#" class="btn btn-primary">คลิก</a></td>
                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                    <td><a href="#" class="btn btn-warning">Delete</a></td> -->
                </tr>
            </table>
              {{--     <customer></customer>
 --}}



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
           
            <img src="{{ asset("storage/$t->image") }}" alt="Example" width="250" height="250">
          
            <br>
           
          </div>


            <div class="modal-body">
            ชื่อ <br>
            {{$t->firstname}}   {{$t->lastname}}
          </div>
           <div class="modal-body">
            อีเมล์ <br> {{$t->email}}
          </div>

          
          <div class="modal-body">
            สถานที่ทำงาน <br> {{$t->workplace}}
          </div>
          <div class="modal-body">
            เบอร์ติดต่อ <br> {{$t->i_phone}}
          </div>
          <div class="modal-body">
            ที่อยู่ <br> {{$t->address}}
          </div>
           <div class="modal-body">
            เงินเดือน <br> {{$t->salary}}
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
          </div>

        </center>

        </div>
      </div>
    </div>
@endforeach




            </div>
        </div>
    </div>
</div>
@endsection
