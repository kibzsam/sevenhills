<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
      <div class="modal-button">
        <button
          type="button"
          class="btn btn-default float-right cbutton"
          data-toggle="modal"
          data-target="#new"
          @click="displayModal"
        >
          <i class="fas fa-plus"></i>
          Attendance
        </button>
        </div>


        <div class="table-wrapper">
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
                <th scope="col" class="text-golden">Hours Worked</th>

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
                <td>{{hours}}</td>
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
           <nav aria-label="Page navigation example float-right">
            <ul class="pagination pagination-sm">
              <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                <a @click="getAttendance(pagination.prev_page_url)" class="page-link" href="#">Previous</a>
              </li>
              <li class="page-item disabled">
                <a
                  class="page-link text-dark"
                  href="#"
                >Page {{pagination.current_page}} of {{pagination.last_page}}</a>
              </li>
              <li v-bind:class="[{disabled:!pagination.next_page_url}]" class="page-item">
                <a @click="getAttendance(pagination.next_page_url)" class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
   

    <!-- Add Attendance Modal -->
    <sweet-modal ref="attendanceModal" overlay-theme="dark">
      <template slot="title">
        <h4 class="mt-4" v-if="!edit">Add Attendance</h4>
        <h4 class="mt-4" v-if="edit">Edit Attendance</h4>
      </template>
      <form @submit.prevent="edit ? updateAttendance() : addAttendance()">
        <div class="form-group">
          <label for="exampleInputEmail1">User</label>
          <select
            v-model="form.user_id"
            name="user_id"
            :disabled="edit"
            required
            class="form-control"
            :class="{ 'is-invalid': form.errors.has('user_id') }"
          >
            <has-error :form="form" field="user_id"></has-error>>
            <option value>Select User</option>
            <option
              v-for="user in users"
              :key="user.id"
              v-bind:value="user.id"
            >{{user.employeeName}}</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Time-in</label>
          <vue-clock-picker
            :class="{ 'is-invalid': form.errors.has('timein') }"
            v-model="form.timein"
            name="timein"
            required
            :readonly="edit"
          >
            <has-error :form="form" field="timein"></has-error>
          </vue-clock-picker>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Lunch In</label>
          <vue-clock-picker
            :class="{ 'is-invalid': form.errors.has('lunchin') }"
            v-model="form.lunchin"
            name="lunchin"
            :readonly="edit"
          >
            <has-error :form="form" field="lunchin"></has-error>
          </vue-clock-picker>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Lunch Out</label>
          <vue-clock-picker
            :class="{ 'is-invalid': form.errors.has('lunchout') }"
            v-model="form.lunchout"
            name="lunchout"
            :readonly="edit"
          >
            <has-error :form="form" field="timeout"></has-error>
          </vue-clock-picker>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Time-out</label>
          <vue-clock-picker
            :class="{ 'is-invalid': form.errors.has('timeout') }"
            v-model="form.timeout"
            name="timeout"
            :readonly="edit"
          >
            <has-error :form="form" field="timeout"></has-error>
          </vue-clock-picker>
        </div>

        <button v-if="!edit" type="submit" class="btn btn-secondary">Save Attendance</button>
        <button v-if="edit" type="submit" class="btn btn-success">Update Attendance</button>
      </form>
    </sweet-modal>
    <!-- End Attendance Modal-->
  </div>
</template>

<script>
export default {
  data() {
    return {
      edit: false,
      attendance: {},
      users: {},
      hours: "",
      form: new Form({
        id: "",
        user_id: "",
        timein: "",
        timeout: "",
        lunchin: "",
        lunchout: "",
        date: ""
      }),
      pagination: ""
    };
  },
  created() {
    Fire.$on("searching", () => {
      let query = this.$parent.search;
      this.axios.get("api/searchAt?q=" + query).then(response => {
        this.attendance = response.data.data;
      });
    });

    this.showUsers();
    this.getAttendance();

    P.$on("success", () => {
      this.getAttendance();
    });
  },
  methods: {
    displayModal() {
      this.edit = false;
      this.form.reset();
      this.$refs.attendanceModal.open();
    },
    showUsers() {
      this.form.get("api/getusers").then(res => {
        this.users = res.data;
      });
    },
    date() {
      this.form.post("api/date").then(response => {
        this.attendance = response.data.data;
      });
    },
    editModal(attend) {
      this.edit = true;
      this.form.reset();
      this.$refs.attendanceModal.open();
      this.form.fill(attend);
    },
    getAttendance(page_url) {
      let vm = this;
      page_url = page_url || "api/getattendance";
      this.form.get(page_url).then(res => {
        vm.attendance = res.data.data;
        for (var i = 0; i < this.attendance.length; i++) {
          console.log(this.attendance[i].timeout);
          if (this.attendance[i].timeout === "00:00:00") {
            this.hours = 0;
          } else {
            this.hours = this.attendance[i].hours;
          }
        }
      });
    },
    makePagination(meta, links) {
      let pagination = {
        current_page: meta.current_page,
        last_page: meta.last_page,
        next_page_url: links.next,
        prev_page_url: links.prev
      };
      this.pagination = pagination;
    },
    addAttendance() {
      this.$refs.attendanceModal.close();

      Swal.fire({
        title: "Do you want to add this record?",
        text: "The record will be saved in the system.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Save Attendance!"
      }).then(result => {
        if (result.value) {
          
          // Swal.fire("Deleted!", "Your file has been deleted.", "success");
          this.form
          .post("api/saveattendance")
          .then(() => {
            this.$refs.attendanceModal.close();
            Swal.fire({
              position: "top-end",
              icon: "success",
              title: "Attendance Taken Successfuly",
              showConfirmButton: false,
              timer: 1500
            });
            P.$emit("success");
          })
          .catch(error => {
            this.$refs.attendanceModal.close();
            Swal.fire({
              icon: "error",
              type: "error",
              title: "Oops...",
              text: error.response.data.error
            });
          });

        }
      });
    },
    updateAttendance() {
      this.form.put("api/updateattendance/" + this.form.id).then(() => {
        this.$refs.attendanceModal.close();
        P.$emit("success");
        Swal.fire({
          icon: "success",
          position: "top-end",
          type: "success",
          title: "Attendance updated successfully",
          showConfirmButton: false,
          timer: 2000
        });
      });
    },
    deleteAttendance(id) {
      Swal.fire({
        icon: "warning",
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(result => {
        if (result.value) {
          this.form.delete("api/deleteattendance/" + id).then(() => {
            Swal.fire("Deleted!", "Attendance has been deleted.", "success");
            P.$emit("success");
          });
        }
      });
    }
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
<style >
@import "https://use.fontawesome.com/releases/v5.6.3/css/all.css";
.container {
  width: 100% !important;
}

#btn {
  margin-bottom: 30px;
  color: white !important;
  background-color: #dbb900 !important;
}

.form-inline {
  margin-bottom: -40px;
  margin-top: 30px;
}

#modal {
  max-width: 50% !important;
}

.cbutton {
  color: white !important;
  background-color: #3c8dbc !important;
  width: 100px !important;
 
  
}

.clock-picker__input {
  /* border: 1px solid rgb(230, 215, 215); */
  width: 100% !important;
  padding: 7px 12px;
  margin: 10px 5px;
}

.clock-picker__dialog-header {
  background-color: #dbb900 !important;
}

.clock-picker__dialog-action {
  color: #dbb900 !important  ;
}

.row {
  margin-top: 20px;
}
.table-wrapper{
  overflow-x: auto;
  position: absolute;
  top: 90px;
  width: 95% !important;
  box-sizing: border-box;
}
.col-md-12{
  position: relative;
}
.modal-button{
  position: absolute;
  top:30px;
  box-sizing: border-box;

}

</style>
