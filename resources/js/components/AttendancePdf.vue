<template>
  <div class="container">
    <div class="row justify-content-center mt-5 center">
      <div class="col-md-8 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Generate Pdf</h5>
            <form>
              <div class="form-row" v-show="!display">
                <div class="form-group col-md-4">
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
                <div class="form-group col-md-4" v-show="!display">
                  <label for="exampleInputEmail1">From Date</label>
                  <datepicker name="fromdate" v-model="fromdate"></datepicker>
                </div>
                <div class="form-group col-md-4" v-show="!display">
                  <label for="exampleInputEmail1">To Date</label>
                  <datepicker name="todate" v-model="todate"></datepicker>
                </div>
              </div>

              <div class="form-row" v-show="!display">
                <div class="form-group col-md-12">
                  <label for="inputCity">Employee Signature</label>
                  <vueSignature
                    ref="signature1"
                    :sigOption="option"
                    :w="'100%'"
                    :h="'300px'"
                    :disabled="disabled"
                  ></vueSignature>

                  <button @click.prevent="clear1">Clear</button>
                  <button @click.prevent="undo1">Undo</button>
                </div>
              </div>
              <div class="form-row" v-if="display">
                <div class="form-group col-md-12">
                  <label for="inputCity">Supervisor Signature</label>
                  <vueSignature
                    ref="signature"
                    :sigOption="option"
                    :w="'100%'"
                    :h="'300px'"
                    :disabled="disabled"
                  ></vueSignature>

                  <button @click.prevent="clear">Clear</button>
                  <button @click.prevent="undo">Undo</button>
                </div>
              </div>

              <button class="btn btn-primary" v-show="!display" @click.prevent="nextSignature">
                <i class="fas fa-forward"></i>Next
              </button>
              <button
                type="submit"
                class="btn btn-secondary float-right"
                @click.prevent="generatePdf"
                v-show="display"
              >
                <i class="fas fa-file-pdf"></i>
                Generate
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vueSignature from "vue-signature";
Vue.use(vueSignature);
export default {
  data() {
    return {
      //Signature
      option: {
        penColor: "rgb(0, 0, 0)",
        backgroundColor: "rgb(255,255,255)"
      },
      disabled: false,
      dataUrl: "",
      //End signature

      form: new Form({}),
      display: false,
      userid: "",
      users: {},
      fromdate: "",
      todate: ""
    };
  },
  components: {
    vueSignature
  },
  created() {
    this.showUsers();
  },
  methods: {
    nextSignature() {
      var _this = this;
      this.display = true;
      this.disabled = false;
    },

    generatePdf() {
      let data = {
        fromdate: this.fromdate,
        todate: this.todate,
        userid: this.userid,
        jpeg: this.$refs.signature1.save(),
        jpeg1: this.$refs.signature.save()
      };

      // this.axios.post('api/pdf',data)
      // .then((response)=>{
      //     console.log(response)

      // })

      this.axios
        .post("api/pdf", data, { responseType: "arraybuffer" })
        .then(response => {
          // let blob = new Blob([response], { type: 'application/pdf' }),
          //     url = window.URL.createObjectURL(blob)
          //      window.open(url)
          console.log(response);

          const url = window.URL.createObjectURL(new Blob([response.data]));
          const link = document.createElement("a");
          link.href = url;
          link.setAttribute("download", "attendance.pdf");
          document.body.appendChild(link);
          link.click();
        });
    },

    showUsers() {
      this.form.get("api/getusers").then(res => {
        this.users = res.data;
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

    //Signature 1
    clear1() {
      var _this = this;
      _this.$refs.signature1.clear();
    },

    undo1() {
      var _this = this;
      _this.$refs.signature1.undo();
    },

    //End signature1
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
  }
};
</script>

<style scoped>
body {
  background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

.center {
  display: flex;
  justify-content: center;
}

.row {
  margin-top: 30px;
  justify-content: center !important;
  margin-bottom: 50px;
}

.card {
  background-color: whitesmoke;
  width: 100% !important;
}

.card-title {
  font-size: 30px;
  color: #dbb900;
  margin-left: 10px;
  padding: 10px 0;
}

.btn-secondary {
  float: right !important;
  margin-right: 12px;
}

.btn-primary {
  margin-left: 12px;
  margin: 10px 0 20px 20px;
}

.canvas {
  width: 100% !important;
}
</style>


