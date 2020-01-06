<template>
    <div>
      
            <h2 class="text-center">ข้อมูลสมาชิก</h2>
            <table class="table table-bordered">
                <tr>
                     <th>รหัส</th>
                    <th>ชื่อจริง</th>
                    <th>นามสกุล</th>
                    <th>เบอร์โทร</th>
                    <th>อืเมล์</th>
                    <th>ที่อยู่</th>
                    <th>รูป</th>
                    <th>ข้อมูลเงินฝาก</th>
                    <th>แก้</th>
                    <th>ลบ</th>
                  
                </tr>
                <tr v-for="user in users">
                    <td>{{ user.id }}</td>
                    <td>{{ user.firstname }}</td>
                    <td>{{ user.lastname }}</td>
                    <td>{{ user.phone }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.address }}</td>
                    <td>nulssssl</td>
                    <td><a href="#" class="btn btn-primary">คลิก</a></td>
                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                    <td><a href="#" class="btn btn-warning">Delete</a></td>
                </tr>
            </table>
       
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
