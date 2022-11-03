<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>28</h3>

            <p>New Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <router-link to="/order" class="small-box-footer">
            More info
            <i class="fas fa-arrow-circle-right"></i>
          </router-link>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>
              11
              <sup style="font-size: 20px"></sup>
            </h3>

            <p>Payment</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <router-link to="/payment" class="small-box-footer">
            More info
            <i class="fas fa-arrow-circle-right"></i>
          </router-link>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>35</h3>

            <p>Online Driver</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <router-link to="/driver" class="small-box-footer">
            More info
            <i class="fas fa-arrow-circle-right"></i>
          </router-link>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>2</h3>

            <p>Cancel Order</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <router-link to="/order" class="small-box-footer">
            More info
            <i class="fas fa-arrow-circle-right"></i>
          </router-link>
        </div>
      </div>
      <!-- ./col -->
    </div>

    <!-- chart 2-->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Monthly Report</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Print</a>
                  <a href="#" class="dropdown-item">Settings</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">See More</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <p class="text-center">
                  <strong>Sales: 1 Aug, 2020 - 30 Aug, 2020</strong>
                </p>

                <div class="chart">
                  <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                      <div class></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                      <div class></div>
                    </div>
                  </div>
                  <!-- Sales Chart Canvas -->
                  <canvas
                    id="salesChart"
                    height="225"
                    style="height: 180px; display: block; width: 570px;"
                    width="712"
                    class="chartjs-render-monitor"
                  ></canvas>
                </div>
                <!-- /.chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <p class="text-center">
                  <strong>Monthly Goal</strong>
                </p>

                <div class="progress-group">
                  Total Order
                  <span class="float-right">
                    <b>160</b>/200
                  </span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->

                <div class="progress-group">
                  Complete Order
                  <span class="float-right">
                    <b>130</b>/170
                  </span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 75%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Others</span>
                  <span class="float-right">
                    <b>480</b>/800
                  </span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success">
                    <i class="fas fa-caret-up"></i> 17%
                  </span>
                  <h5 class="description-header">RM 3,210.43</h5>
                  <span class="description-text">TOTAL REVENUE</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success">
                    <i class="fas fa-caret-up"></i> 2%
                  </span>
                  <h5 class="description-header">RM 1,390.90</h5>
                  <span class="description-text">TOTAL COST</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success">
                    <i class="fas fa-caret-up"></i> 20%
                  </span>
                  <h5 class="description-header">RM 1,813.53</h5>
                  <span class="description-text">TOTAL PROFIT</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block">
                  <span class="description-percentage text-danger">
                    <i class="fas fa-caret-down"></i> 18%
                  </span>
                  <h5 class="description-header">1120</h5>
                  <span class="description-text">GOAL COMPLETIONS</span>
                </div>
                <!-- /.description-block -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>

    <!-- chart 3-->
    <div class="card">
      <div class="card-header border-0">
        <h3 class="card-title">Recycling Item Category</h3>
        <div class="card-tools">
          <a href="#" class="btn btn-tool btn-sm">
            <i class="fas fa-download"></i>
          </a>
          <a href="#" class="btn btn-tool btn-sm">
            <i class="fas fa-bars"></i>
          </a>
        </div>
      </div>
      <div class="card-body table-responsive p-0">
        <table class="table table-striped table-valign-middle">
          <thead>
            <tr>
              <th>Item</th>
              <th>Price/kg</th>
              <th>Sales</th>
              <th>More</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Cooking Oil</td>
              <td>RM 1.5</td>
              <td>
                <small class="text-success mr-1">
                  <i class="fas fa-arrow-up"></i>
                  12%
                </small>
              </td>
              <td>
                <a href="#" class="text-muted">
                  <i class="fas fa-search"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Plastic</td>
              <td>Rm 0.40</td>
              <td>
                <small class="text-danger mr-1">
                  <i class="fas fa-arrow-down"></i>
                  0.5%
                </small>
              </td>
              <td>
                <a href="#" class="text-muted">
                  <i class="fas fa-search"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Paper</td>
              <td>RM 0.60</td>
              <td>
                <small class="text-danger mr-1">
                  <i class="fas fa-arrow-down"></i>
                  3%
                </small>
              </td>
              <td>
                <a href="#" class="text-muted">
                  <i class="fas fa-search"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
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
