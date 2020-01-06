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
                  
                </tr>
                <tr v-for="cusrtomer in cusrtomers">
                    <td>{{ cusrtomer.id }}</td>
                    <td>{{ cusrtomer.firstname }}</td>
                    <td>{{ cusrtomer.lastname }}</td>
                    <td>{{ cusrtomer.phone }}</td>
                    <td>{{ cusrtomer.email }}</td>
                    <td>{{ cusrtomer.address }}</td>
                    <td>null</td>
                 <!--    <td><a href="#" class="btn btn-primary">คลิก</a></td>
                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                    <td><a href="#" class="btn btn-warning">Delete</a></td> -->
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
            axios.get('customers').then(response=>{
                console.log(response);
                this.cusrtomers=response.data;
            });
        }

//         getUserData: function(){
//     axios.get('/customers').then(response => {
//           console.log(response);
//     this.cusrtomers = response.data;
//   });
// }


    },
        data(){
            return{
                cusrtomers:[],
                cusrtomer:{
                    id:0,
                    firstname:'',
                    lastname:'',
                    phone:'',
                    email:'',
                    address:''
                }
            }
        }
  }

</script>
