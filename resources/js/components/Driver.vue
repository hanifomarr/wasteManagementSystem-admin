<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Driver Information</h3>

            <div class="card-tools">
              <button class="btn btn-success" @click="newModal">
                Add New Driver
                <i class="fas fa-user-plus fa-fw"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Area</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="driver in drivers" :key="driver.id">
                  <td>{{driver.id}}</td>
                  <td>{{driver.name}}</td>
                  <td>{{driver.email}}</td>
                  <td>Titiwangsa</td>
                  <td>
                    <a href="#" @click="editModal(driver)">
                      <i class="fa fa-edit"></i>
                    </a>
                    /
                    <a href="#" @click="deleteDriver(driver.id)">
                      <i class="fa fa-trash"></i>
                    </a>
                    /
                    <a href="#">
                      <i class="fa fa-user"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="AddNewDriver"
      tabindex="-1"
      aria-labelledby="AddNewDriverLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              v-show="editmode"
              class="modal-title"
              id="AddNewDriverLabel"
            >Update Driverv Information</h5>
            <h5 v-show="!editmode" class="modal-title" id="AddNewDriverLabel">Add New Driver</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="editmode ? updateDriver() : createDriver()">
            <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input
                  v-model="form.name"
                  type="text"
                  name="name"
                  class="form-control"
                  placeholder="Name"
                  :class="{ 'is-invalid': form.errors.has('name') }"
                />
                <has-error :form="form" field="name"></has-error>
              </div>

              <div class="form-group">
                <label>Email</label>
                <input
                  v-model="form.email"
                  type="email"
                  name="email"
                  class="form-control"
                  placeholder="Email Address"
                  :class="{ 'is-invalid': form.errors.has('email') }"
                />
                <has-error :form="form" field="email"></has-error>
              </div>

              <div class="form-group">
                <label>Area</label>
                <select
                  v-model="form.area"
                  name="area"
                  id="area"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('area') }"
                >
                  <option value>Select Driver Area</option>
                  <option value="Bukit Bintang">Bukit Bintang</option>
                  <option value="Batu">Batu</option>
                  <option value="Bandar Tun Razak">Bandar Tun Razak</option>
                  <option value="Cheras">Cheras</option>
                  <option value="Kepong">Kepong</option>
                  <option value="Lembah Pantai">Lembah Pantai</option>
                  <option value="Titiwangsa">Titiwangsa</option>
                  <option value="Segambut">Segambut</option>
                  <option value="Setiawangsa">Setiawangsa</option>
                  <option value="Seputeh">Seputeh</option>
                  <option value="Wangsa Maju">Wangsa Maju</option>
                </select>
                <has-error :form="form" field="area"></has-error>
              </div>

              <div v-show="!editmode" class="form-group">
                <label>Password</label>
                <input
                  v-model="form.password"
                  type="password"
                  name="password"
                  class="form-control"
                  placeholder="Password"
                  :class="{ 'is-invalid': form.errors.has('password') }"
                />
                <has-error :form="form" field="password"></has-error>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
              <button v-show="!editmode" type="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template> 

<script>
import Form from "vform";
export default {
  data() {
    return {
      editmode: false,
      drivers: {},
      form: new Form({
        id: "",
        name: "",
        email: "",
        password: "",
        area: "",
        photo: "",
      }),
    };
  },
  methods: {
    updateDriver() {
      this.$Progress.start();
      this.form
        .put("api/driver/" + this.form.id)
        .then(() => {
          $("#AddNewDriver").modal("hide");
          Swal.fire("Deleted!", "Your file has been deleted.", "success");
          Fire.$emit("AfterCreate");
        })
        .catch(() => {
          this.$Progress.finish();
        });
    },
    editModal(driver) {
      this.editmode = true;
      this.form.reset();
      $("#AddNewDriver").modal("show");
      this.form.fill(driver);
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $("#AddNewDriver").modal("show");
    },

    deleteDriver(id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        //send request to server
        if (result.value) {
          this.form
            .delete("api/driver/" + id)
            .then(() => {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              Fire.$emit("AfterCreate");
            })
            .catch(() => {
              Swal.fire("Failed!", "There are something wrong", "Warning");
            });
        }
      });
    },

    loadDrivers() {
      axios.get("api/driver").then(({ data }) => (this.drivers = data.data));
    },
    createDriver() {
      this.$Progress.start();

      this.form
        .post("api/driver")
        .then(() => {
          Fire.$emit("AfterCreate");

          $("#AddNewDriver").modal("hide");

          Toast.fire({
            icon: "success",
            title: "Driver Registration is success",
          });
          this.$Progress.finish();
        })
        .catch(() => {});
    },
  },
  created() {
    this.loadDrivers();
    Fire.$on("AfterCreate", () => {
      this.loadDrivers();
    });
  },
};
</script>
