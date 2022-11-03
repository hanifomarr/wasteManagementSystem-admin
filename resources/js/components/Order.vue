<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-success elevation-1">
            <i class="fas fa-cog"></i>
          </span>

          <div class="info-box-content">
            <span class="info-box-text">Pending Order</span>
            <span class="info-box-number">20</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1">
            <i class="fas fa-thumbs-up"></i>
          </span>

          <div class="info-box-content">
            <span class="info-box-text">Success Order</span>
            <span class="info-box-number">58</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1">
            <i class="fas fa-ban"></i>
          </span>

          <div class="info-box-content">
            <span class="info-box-text">Reject Order</span>
            <span class="info-box-number">12</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1">
            <i class="fas fa-shopping-cart"></i>
          </span>

          <div class="info-box-content">
            <span class="info-box-text">Total Order</span>
            <span class="info-box-number">66</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>

    <!-- Table -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Pending Order</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="example1_length">
                <label>
                  Show
                  <select
                    name="example1_length"
                    aria-controls="example1"
                    class="custom-select custom-select-sm form-control form-control-sm"
                  >
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <table
                id="example1"
                class="table table-bordered table-striped dataTable dtr-inline"
                role="grid"
                aria-describedby="example1_info"
              >
                <thead>
                  <tr role="row">
                    <th
                      class="sorting_asc"
                      tabindex="0"
                      aria-controls="example1"
                      rowspan="1"
                      colspan="1"
                      aria-sort="ascending"
                      aria-label="Rendering engine: activate to sort column descending"
                    >Order ID</th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="example1"
                      rowspan="1"
                      colspan="1"
                      aria-label="Browser: activate to sort column ascending"
                    >Customer Name</th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="example1"
                      rowspan="1"
                      colspan="1"
                      aria-label="Platform(s): activate to sort column ascending"
                    >Address</th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="example1"
                      rowspan="1"
                      colspan="1"
                      aria-label="Engine version: activate to sort column ascending"
                    >Assign Driver</th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="example1"
                      rowspan="1"
                      colspan="1"
                      aria-label="CSS grade: activate to sort column ascending"
                    >Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">30126</td>
                    <td>Aiman</td>
                    <td>Titwangsa</td>
                    <td>Ali</td>
                    <td>Pending</td>
                  </tr>
                  <tr role="row" class="even">
                    <td tabindex="0" class="sorting_1">30283</td>
                    <td>Azfar</td>
                    <td>Sentul</td>
                    <td>Ali</td>
                    <td>Pending</td>
                  </tr>
                  <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">30176</td>
                    <td>Halimah</td>
                    <td>Wangsa Maju</td>
                    <td>Karim</td>
                    <td>Pending</td>
                  </tr>
                  <tr role="row" class="even">
                    <td tabindex="0" class="sorting_1">30198</td>
                    <td>AHmad</td>
                    <td>Wangsa Maju</td>
                    <td>Karim</td>
                    <td>Pending</td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">30164</td>
                    <td>Farah</td>
                    <td>Batu</td>
                    <td>Tiong Lii</td>
                    <td>Pending</td>
                  </tr>
                  <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">30963</td>
                    <td>Salmah</td>
                    <td>Bangsar</td>
                    <td>Raju</td>
                    <td>Pending</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <div
                class="dataTables_info"
                id="example1_info"
                role="status"
                aria-live="polite"
              >Showing 1 to 10 of 57 entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="example1_previous">
                    <a
                      href="#"
                      aria-controls="example1"
                      data-dt-idx="0"
                      tabindex="0"
                      class="page-link"
                    >Previous</a>
                  </li>
                  <li class="paginate_button page-item active">
                    <a
                      href="#"
                      aria-controls="example1"
                      data-dt-idx="1"
                      tabindex="0"
                      class="page-link"
                    >1</a>
                  </li>
                  <li class="paginate_button page-item">
                    <a
                      href="#"
                      aria-controls="example1"
                      data-dt-idx="2"
                      tabindex="0"
                      class="page-link"
                    >2</a>
                  </li>
                  <li class="paginate_button page-item">
                    <a
                      href="#"
                      aria-controls="example1"
                      data-dt-idx="3"
                      tabindex="0"
                      class="page-link"
                    >3</a>
                  </li>
                  <li class="paginate_button page-item">
                    <a
                      href="#"
                      aria-controls="example1"
                      data-dt-idx="4"
                      tabindex="0"
                      class="page-link"
                    >4</a>
                  </li>
                  <li class="paginate_button page-item">
                    <a
                      href="#"
                      aria-controls="example1"
                      data-dt-idx="5"
                      tabindex="0"
                      class="page-link"
                    >5</a>
                  </li>
                  <li class="paginate_button page-item">
                    <a
                      href="#"
                      aria-controls="example1"
                      data-dt-idx="6"
                      tabindex="0"
                      class="page-link"
                    >6</a>
                  </li>
                  <li class="paginate_button page-item next" id="example1_next">
                    <a
                      href="#"
                      aria-controls="example1"
                      data-dt-idx="7"
                      tabindex="0"
                      class="page-link"
                    >Next</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
