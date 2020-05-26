<template>
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-12">
                <form class="form-inline ">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Select Date</label>
                        <input type="date"  id="inputPassword2" placeholder="Password" name="date" v-model="form.date"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('date') }">
                        <has-error :form="form" field="date"></has-error>
                    </div>
                    <a type="button" class="btn btn-success mb-2" @click.prevent="date" ><i class="fas fa-filter"></i></a>
                </form>
             <button type="button"  class="btn btn-default float-right cbutton" data-toggle="modal" data-target="#new" @click="displayModal">
             <i class="fas fa-plus"></i>
            Attendance
            </button>
                <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col" class="text-golden">#</th>
                    <th scope="col" class="text-golden">Name</th>
                    <th scope="col" class="text-golden">Employee Id</th>
                    <th scope="col" class="text-golden">Time-in</th>
                    <th scope="col" class="text-golden">Time-out</th>
                     <th scope="col" class="text-golden">Lunch-in</th>
                    <th scope="col" class="text-golden">Lunch-out</th>
                    <!-- <th scope="col" class="text-golden">Hours Worked</th> -->
                    <th scope="col" class="text-golden">Date</th>
                    <th scope="col" class="text-golden">Action</th>
                   </tr>
                </thead>
                <tbody>
                  <tr v-for="attend in attendance" v-bind:key="attend.id">
                    <th scope="row">{{attend.id}}</th>
                    <td>{{attend.user.employeeName}}</td>
                     <td>{{attend.user. employeeID}}</td>
                      <td>{{attend.timein}}</td>
                      <td>{{attend.timeout}}</td>
                       <td>{{attend.lunchin}}</td>
                      <td>{{attend.lunchout}}</td>
                      <!-- <td>{{(attend.timeout)-(attend.timein)}}</td>  -->
                       <td>{{attend.created_at}}</td>
                       <td>
                        <a>
                        <i class="fas fa-pencil-alt text-greenish" @click="editModal(attend)"></i>
                        </a>
                         /
                        <a>
                         <i class="fas fa-trash-alt text-red" @click="deleteAttendance(attend.id)"></i>
                        </a>
                       </td>
                   </tr>
                </tbody>
                </table>
            </div>
        </div>
        <nav aria-label="Page navigation example float-right">
          <ul class="pagination pagination-sm">
          <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a @click="getAttendance(pagination.prev_page_url)" class="page-link" href="#">Previous</a></li>
          <li class="page-item disabled"><a class="page-link text-dark" href="#">Page {{pagination.current_page}} of {{pagination.last_page}}</a></li>
          <li  v-bind:class="[{disabled:!pagination.next_page_url}]" class="page-item"><a @click="getAttendance(pagination.next_page_url)" class="page-link" href="#">Next</a></li>
         </ul>
       </nav>

<!-- Modal -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" id="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h5 v-show="!edit" class="modal-title" id="exampleModalLongTitle">Attendance</h5>
        <h5 v-show="edit" class="modal-title" id="exampleModalLongTitle">Attendance </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form @submit.prevent="edit ? updateAttendance() :addAttendance()">
      <div class="modal-body">
           <div class="form-group" >
             <label for="exampleInputEmail1">User</label>
              <select  v-model="form.user_id" name="user_id"
              :disabled="edit"
                required=""
               class="form-control" :class="{ 'is-invalid': form.errors.has('user_id') }">
               <has-error :form="form" field="user_id"></has-error> >
               <option value="">Select User</option>
               <option
                v-for="user in users" :key="user.id"
                 v-bind:value="user.id">{{user.employeeName}}</option>
                </select>
            </div>
            <div  class="form-group" v-show="!edit">
              <label for="exampleInputEmail1">Time-in</label>
               <vue-clock-picker
               :class="{ 'is-invalid': form.errors.has('timein') }"
                v-model="form.timein"
                name="timein"
                required=""
                :readonly="edit">
                <has-error :form="form" field="timein"></has-error>
                </vue-clock-picker>
            </div>
           <div  class="form-group" v-show="edit">
              <label for="exampleInputEmail1">Time-out</label>
                <vue-clock-picker
                  :class="{ 'is-invalid': form.errors.has('timeout') }"
                  v-model="form.timeout"
                   name="timeout"
                  :readonly="edit">
                   <has-error :form="form" field="timeout"></has-error>
                  </vue-clock-picker>
            </div>
            <div  class="form-group" v-show="edit">
               <label for="exampleInputEmail1">Lunch In</label>
                  <vue-clock-picker
                  :class="{ 'is-invalid': form.errors.has('lunchin') }"
                   v-model="form.lunchin"
                   name="lunchin"
                   :readonly="edit">
                    <has-error :form="form" field="lunchin"></has-error>
                    </vue-clock-picker>
            </div>
              <div  class="form-group" v-show="edit">
               <label for="exampleInputEmail1">Lunch Out</label>
                  <vue-clock-picker
                  :class="{ 'is-invalid': form.errors.has('lunchout') }"
                   v-model="form.lunchout"
                   name="lunchout"
                   :readonly="edit">
                    <has-error :form="form" field="timeout"></has-error>
                    </vue-clock-picker>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button v-show="!edit" type="submit" class="btn btn-primary">Save</button>
        <button v-show="edit" type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>
</template>

<script>
    export default {
        data()
        {
            return{
                edit:false,
                attendance:{},
                users:{},
                form:new Form(
                    {
                    id:'',
                    user_id:'',
                    timein:'',
                    timeout:'',
                    lunchin:'',
                    lunchout:'',
                    date:'',
                    }
                ),
                pagination:'',

            }

        },
        created()
        {
            Fire.$on('searching',()=>{
                    let query=this.$parent.search;
                    this.axios.get('api/searchAt?q=' + query)
                    .then((response)=>{
                          this.attendance=response.data.data

                    })
                })

            this.showUsers();
          this.getAttendance();



          P.$on('success',()=>{
             this.getAttendance();
          })

        }  ,
        methods:{
            displayModal()
            {
                this.edit=false;
                this.form.reset();
                $('#new').modal('show')
            },
             showUsers(){
                this.form.get('api/getusers')
                .then((res)=>{
                    this.users=res.data
                })

            },
            date()
            {
              this.form.post('api/date')
              .then((response)=>{
                this.attendance=response.data.data

              })

            },
            editModal(attend)
            {
            //   this.edit=true;
            //   this.form.reset();
               $('#new').modal('show')
            //   this.form.fill(attend);

            },
            getAttendance(page_url){
                page_url= page_url || 'api/getattendance';
                fetch(page_url)
                .then(res=>res.json())
                .then(res=>{
                    this.attendance=res.data;
                    this.makePagination(res.meta,res.links);
                })
            },
                makePagination(meta,links)
            {
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev

                }
                this.pagination= pagination;

            },
            addAttendance()
            {
                this.form.post('api/saveattendance')
                .then(()=>{
                         $('#new').modal('hide')
                          Swal.fire({
                            position: 'center',
                            type: 'success',
                            title: 'Attendance taken successfully',
                            showConfirmButton: false,
                            timer: 2000
                          })
                           P.$emit('success');
                            location.reload();

                })
                .catch(()=>{

                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'You already took the attendance of this worker today!',

                })
                 location.reload();

                })
            },
            updateAttendance()
            {
              this.form.put('api/attendance/' + this.form.id)
              .then(()=>{
                $('#new').modal('hide');
                 P.$emit('success');
                  Swal.fire({
                            position: 'center',
                            type: 'success',
                            title: 'Attendance updated successfully',
                            showConfirmButton: false,
                            timer: 2000
                          })



              })

            },
            deleteAttendance(id){
                      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        })
            .then((result) => {
      if (result.value) {
        this.form.delete('api/deleteattendance/' + id)
        .then(()=>{
           Swal.fire(
          'Deleted!',
          'Attendance has been deleted.',
          'success'
        )
        P.$emit('success');
        location.reload()


        })


      }
    })


            },

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style >
@import "https://use.fontawesome.com/releases/v5.6.3/css/all.css" ;

 #btn{
    margin-bottom:30px;
    color:white !important;
    background-color:#DBB900 !important;
}
.form-inline{
  margin-bottom:-40px;
  margin-top:30px;
}
#modal{
    max-width: 50% !important;

}
.cbutton{
  color:white !important;
  background-color: #3c8dbc!important;
  width:100px !important;
  margin-bottom:30px;
  float: right !important;

}
.clock-picker__input {
    /* border: 1px solid rgb(230, 215, 215); */
    width: 100% !important;
    padding: 7px 12px;
    margin: 10px 5px;
}
.clock-picker__dialog-header {
  background-color:#DBB900 !important;
}
.clock-picker__dialog-action
{
  color:#DBB900 !important  ;
}
.row{
  margin-top:20px;
}


</style>
