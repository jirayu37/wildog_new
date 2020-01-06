<template>
    <div>
        <div class="container">
            <h2 class="text-center">ข้อมูลสมาชิก</h2>
            <table class="table table-bordered">
                <tr>
                     <th>รหัส</th>
                    <th>ชื่อจริง</th>
                    <th>นามสกุล</th>
                   <!--  <th>เบอร์โทร</th>
                    <th>อืเมล์</th>
                    <th>ที่อยู่</th> -->
                    <th>รูป</th>
                   
                    <th>ข้อมูล</th>
                    <th>เพิ่มข้อมูลเงินฝาก</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
                <tr v-for="user in users">
                    <td>{{ user.id }}</td>
                    <td>{{ user.firstname }}</td>
                    <td>{{ user.lastname }}</td>
             <!--        <td>{{ user.phone }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.address }}</td> -->
                    <td>null</td>
                    <!-- <td><a :href="'/informations/'+user.id+'/edit'" class="btn btn-success">Add</a></td> -->
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" :data-target="'#yourModal'+user.id">show</button></td>
                    <td><a :href="'/informations/'+user.id+''" class="btn btn-success">Add</a></td>
                    


                  
                      


                   <!--    <td><a :href="'/customers/create'" class="btn btn-success">Add</a></td> -->
                    <!-- <td><a href="#" class="btn btn-primary">คลิก</a></td> -->
                    <!--  <td><a :href="'/members/'+member.id+'/edit'" class="btn btn-primary">Edit</a></td> -->
                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>


<div class="modal fade" :id="'yourModal'+user.id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
       ชื่อ : {{ user.firstname }} {{ user.lastname }}
      </div>
       <div class="modal-body">
       เบอร์ติดต่อ : {{ user.phone }} 
      </div>
        <div class="modal-body">
       เมล์ : {{ user.email }} 
      </div>
      <div class="modal-body">
       ที่อยู่ : {{ user.address }} 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<!--         <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
                </tr>
            </table>
        </div>
    </div>
</template>



<script>
  export default{
    mounted(){
        this.getUserData();
    },
    methods:{
        getUserData(){
            axios.get('../api/users').then(response=>{
                console.log(response);
                this.users=response.data;
            });
        }
    },
        data(){
            return{
                users:[],
                user:{
                    id:0,
                    firstname:'',
                    lastname:'',
                    phone:''
                }
            }
        }
  }

</script>
