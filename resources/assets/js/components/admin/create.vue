<template>
    <div>
        <div class="container">
            <h2 class="text-center">Add</h2>
            <div class="col-md-8">
             <h2>ระบบบันทึกข้อมูล</h2>
                <form action="/customers">
                     <div class="form-group">
                        <label>รหัส:</label>
                        <input type="text" class="form-control" v-model="id">
                    </div>


                    <div class="form-group">
                        <label>ชื่อ:</label>
                        <input type="text" class="form-control" v-model="name">
                    </div>
                    <div class="form-group">
                        <label>เบอร์โทร:</label>
                        <input type="text" class="form-control" v-model="phone">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" v-on:click="addNewMenber()">เพิ่มข้อมูล</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        props:['id'],
        data(){
            return{
                id:''
            }
        },
            mounted(){
                axios.get('../api/users/'+this.id).then(response=>{
                    //console.log(response.data)
                    var users = response.data;
                    this.id=users.id;
                });
            },
            methods:{
                updateMenber(){
                    axios.put('../api/users/'+this.id,{
                        users:this.users                 
                    });
                }
            }
        }
</script>

<!-- 
<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <h2>แก้ไขข้อมูล</h2>
                <form action="/members">
                    <div class="form-group">
                        <label>ชื่อ:</label>
                        <input type="text" class="form-control" v-model="name">
                    </div>
                    <div class="form-group">
                        <label>เบอร์โทร:</label>
                        <input type="text" class="form-control" v-model="phone">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" v-on:click="updateMenber()">อัพเดทข้อมูล</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
    export default{
        props:['id'],
        data(){
            return{
                name:'',
                phone:''
            }
        },
            mounted(){
                axios.get('/api/members/'+this.id).then(response=>{
                    //console.log(response.data)
                    var member = response.data;
                    this.name=member.name;
                    this.phone=member.phone;
                });
            },
            methods:{
                updateMenber(){
                    axios.put('/api/members/'+this.id,{
                        name:this.name,
                        phone:this.phone                    
                    });
                }
            }
        }
</script> -->