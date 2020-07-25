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

        <div class="table-wrapper card table-card">
          <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col" class="text-golden">#</th>
                <th scope="col" class="text-golden">Name</th>
                <th scope="col" class="text-golden">Employee Id</th>
                <th scope="col" class="text-golden">Hospital</th>
                <th scope="col" class="text-golden">Time-in</th>
                <th scope="col" class="text-golden">Time-out</th>
                <th scope="col" class="text-golden">Lunch-in</th>
                <th scope="col" class="text-golden">Lunch-out</th>
                <th scope="col" class="text-golden">Hours Worked</th>

                <th scope="col" class="text-golden">Date</th>
                <th scope="col" class="text-golden">Action</th>
              </tr>
            </thead>

            <tbody v-if="attendanceExists">
              <tr v-for="attend in attendance" v-bind:key="attend.id">
                <td scope="row" data-label="ID">{{attend.id}}</td>
                <td data-label="Name">{{attend.user.employeeName}}</td>
                <td data-label="Employee Id">{{attend.user. employeeID}}</td>
                <td data-label="Hospital">{{attend.hospital.name}}</td>
                <td data-label="Time-in">{{attend.timein}}</td>
                <td data-label="Time-out">{{attend.timeout}}</td>
                <td data-label="Lunch-in">{{attend.lunchin}}</td>
                <td data-label="Lunch-out">{{attend.lunchout}}</td>
                <td data-label="Hours Worked">{{hours | round}} Hrs</td>
                <td data-label="Date">{{attend.created_at}}</td>
                <td data-label="Action">
                  <a class="cursor">
                    <i class="fas fa-pencil-alt text-greenish" @click="editModal(attend)"></i>
                  </a>
                  /
                  <a class="cursor">
                    <i class="fas fa-trash-alt text-red" @click="deleteAttendance(attend.id)"></i>
                  </a>
                </td>
              </tr>
            </tbody>

            <div class="custom-jumbotron" v-else>
              <span class="lead">Hi <b>{{auth_user.employeeName}}</b>, no attendance yet have been recorded. Get started by clicking on the
                attendance button.
              </span>
            </div>

          </table>
          <nav aria-label="Page navigation example float-right">
            <ul class="pagination pagination-sm">
              <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                <a
                  @click="getAttendance(pagination.prev_page_url)"
                  class="page-link"
                  href="#"
                >Previous</a>
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
    <sweet-modal ref="attendanceModal" overlay-theme="dark" :blocking="true">
      <template slot="title">
        <h4 class="pt-4 bold" v-if="!edit">Add Attendance</h4>
        <h4 class="pt-4 bold" v-if="edit">Edit Attendance</h4>
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
          <label>Title</label>
          <input v-model="form.title" type="text" name="title" required
            class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
          <has-error :form="form" field="title"></has-error>
        </div>

        <div class="form-group">
          <label for="hospitalLabel">Hospital</label>
          <v-select
            label="name"
            :options="hospitals"
            :reduce="name => name.id"
            v-model="form.hospital_id"
            required
            name="hospital_id"
            :disabled="edit"
            :class="{ 'is-invalid': form.errors.has('hospital_id') }"
          ></v-select>

          <has-error :form="form" field="hospital_id"></has-error>
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

        <div class="form-group" v-show="edit">
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

        <div class="form-group" v-show="edit">
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

        <div class="form-group" v-show="edit">
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

    <!-- PDF Modal -->
    <sweet-modal ref="pdfModal" overlay-theme="dark">
      <template slot="title">
        <h4 class="mt-4">Generate Pdf</h4>
      </template>
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">User</label>
          <select
            v-model="userid"
            name="user_id"
            required
            class="form-control"
            :class="{ 'is-invalid': form.errors.has('userid') }"
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
          <label for="exampleInputEmail1">From Date</label>
          <datepicker name="fromdate" v-model="fromdate"></datepicker>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">To Date</label>
          <datepicker name="todate" v-model="todate"></datepicker>
        </div>
        <div class="form-group">
          <label>Signature</label>
          <vueSignature
            ref="signature"
            :sigOption="option"
            :w="'800px'"
            :h="'400px'"
            :disabled="disabled"
            :defaultUrl="dataUrl"
          ></vueSignature>

          <!-- <button @click="save">Save</button> -->
          <button @click.prevent="clear">Clear</button>
          <button @click.prevent="undo">Undo</button>
          <!--<button @click="addWaterMark">addWaterMark</button> -->
          <!-- <button @click="handleDisabled">disabled</button>  -->
        </div>

        <button type="submit" class="btn btn-secondary" @click.prevent="generatePdf">
          <i class="fas fa-file-pdf"></i>
          Generate
        </button>
      </form>
    </sweet-modal>
    <!-- End PDF Modal-->
  </div>
</template>

<script>
export default {
  data() {
    return {
      //Signature
      option: {
        penColor: "rgb(0, 0, 0)",
        backgroundColor: "rgb(255,255,255)"
      },
      disabled: false,
      dataUrl: "https://avatars2.githubusercontent.com/u/17644818?s=460&v=4",
      //End signature

      load: false,
      edit: false,
      attendance: [],
      auth_user: {},
      users: [],
      hospitals: [],
      options: ["nae", "toto", "ytr"],
      hours: "",
      userid: "",

      form: new Form({
        id: "",
        user_id: "",
        title: "",
        hospital_id: "",
        timein: "",
        timeout: "",
        lunchin: "",
        lunchout: "",
        date: ""
      }),

      fromdate: "",
      todate: "",

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
    this.getHospitals();

    P.$on("success", () => {
      this.getAttendance();
    });

    axios.get("api/user")
      .then(response => {
        this.auth_user = response.data
      })
      .catch(error => {
        console.log(error)
      })
  },

  computed: {
    attendanceExists() {
      if((this.attendance.length) > 0){
        return true
      } else {
        return false
      }
    }
  },

  methods: {
    generatePdf() {
      let data = {
        fromdate: this.fromdate,
        todate: this.todate,
        userid: this.userid,
        jpeg: this.$refs.signature.save()
      };
      this.axios.post("api/pdf", data).then(response => {
        console.log(response);
      });
    },

    displayModal() {
      this.edit = false;
      this.form.reset();
      this.$refs.attendanceModal.open();
    },

    pdfModal() {
      //    this.load=true;
      this.$refs.pdfModal.open();
      //   this.$refs.signature.clearOnResize
    },

    showUsers() {
      this.form.get("api/getusers").then(res => {
        this.users = res.data;
      });
    },

    getHospitals() {
      axios
        .get("api/get-all-hospitals")
        .then(response => {
          this.hospitals = response.data;
        })
        .catch(error => {
          console.log(error);
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
            this.hours = 9;
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
    },

    //Signature Methods
    save() {
      var _this = this;
      var png = _this.$refs.signature.save();
      var jpeg = _this.$refs.signature.save("image/jpeg");
      var svg = _this.$refs.signature.save("image/svg+xml");
      console.log(png);
      console.log(jpeg);
      console.log(svg);
    },

    clear() {
      var _this = this;
      _this.$refs.signature.clear();
    },

    undo() {
      var _this = this;
      _this.$refs.signature.undo();
    },

    addWaterMark() {
      var _this = this;
      _this.$refs.signature.addWaterMark({
        text: "mark text", // watermark text, > default ''
        font: "20px Arial", // mark font, > default '20px sans-serif'
        style: "all", // fillText and strokeText,  'all'/'stroke'/'fill', > default 'fill
        fillStyle: "red", // fillcolor, > default '#333'
        strokeStyle: "blue", // strokecolor, > default '#333'
        x: 100, // fill positionX, > default 20
        y: 200, // fill positionY, > default 20
        sx: 100, // stroke positionX, > default 40
        sy: 200 // stroke positionY, > default 40
      });
    },

    fromDataURL(url) {
      var _this = this;
      _this.$refs.signature.fromDataURL("data:image/png;base64,iVBORw0K...");
    },

    handleDisabled() {
      var _this = this;
      _this.disabled = !_this.disabled;
    }
    //end signature methods
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>


<style >
@import "https://use.fontawesome.com/releases/v5.6.3/css/all.css";

/* Select 2 */
@import "https://unpkg.com/vue-select@latest/dist/vue-select.css";

.custom-jumbotron {
  background: #eee;
  padding: 10px 20px;
  display: table-caption;
  margin-bottom: 20px;
}

.container {
  width: 100% !important;
}

.cursor {
  cursor: pointer;
}

.pr-1 {
  padding-right: 5px;
}

.pt-4 {
  padding-top: 16px;
}

.bold {
  font-weight: 700;
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

.table-wrapper {
  width: 100%;
  margin: 40px 0;
  overflow-x: auto;
}

.col-md-12 {
  position: relative;
}

.modal-button {
  margin-top: 20px;
}

.pdf-button {
  position: absolute;
  right: 90px;
  top: 30px;
}

.pdf {
  color: white !important;
  background-color: #dbb900 !important;
  width: 105px !important;
}

.vdp-datepicker {
  position: relative !important;
  text-align: left !important;
}

.vdp-datepicker input[type="text"] {
  width: 100%;
  padding: 6px 12px;
  display: block;
  height: 34px;
  border: 1px solid #ccc;
  color: #555;
  background-color: #fff;
}

.btn-secondary {
  background-color: green;
  color: white;
}

.btn-secondary:hover {
  background-color: green;
  color: white;
}

.canvas {
  border: 1px solid #3c8dbc;
}

.btnclear {
  float: right !important;
  border: 1px solid transparent;
  padding: 6px 12px;
}

.btnundo {
  float: right !important;
  border: 1px solid transparent;
  padding: 6px 12px;
}
</style>
