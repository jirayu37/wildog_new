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
                        <label>ข้อมูลติดต่อ:</label>
                        <input type="text" class="form-control" v-model="phone">
                    </div>
                    <div class="form-group">
                        <label>สถานที่ทำงาน:</label>
                        <input type="text" class="form-control" v-model="workplace">
                    </div>

                    <div class="form-group">
                        <label>ที่อยู่:</label>
                        <input type="text" class="form-control" v-model="address">
                    </div>

                    <div class="form-group">
                        <label>เงินเดือน:</label>
                        <input type="number" class="form-control" v-model=" salary">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" v-on:click="addInformation()">เพิ่มข้อมูล</button>
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
                id:'',
                phone:'',
                workplace:'',
                address:'',
                salary:''
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
                addInformation(){
                    axios.post('information-store', {
                        id:this.id,
                        phone:this.phone,
                        workplace:this.workplace,
                        salary:this.salary, 
                        address:this.address
                    });
                }
            }


                //     addNewMenber(){
                //     axios.post('/api/members', {
                //         name:this.name,
                //         phone:this.phone
                //     });
                // }


        }
</script>