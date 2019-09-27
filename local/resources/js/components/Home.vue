<template>
      <div class="container" style="margin-top: -20px;">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        <h6 class="slim-pagetitle">Welcome back,</h6>
        </div><!-- slim-pageheader -->

        <div class="row row-xs">
          <div class="col-sm-6 col-lg-3">
            <div class="card card-status">
              <div class="media">
                <i class="icon ion-ios-cloud-download-outline tx-purple"></i>
                <div class="media-body">
                    <h1>00000</h1>
                  <p>Total Stocks</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
            <div class="card card-status">
              <div class="media">
                <i class="icon ion-ios-bookmarks-outline tx-teal"></i>
                <div class="media-body">
                    <h1>00000</h1>
                  <p>Total Sale</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
            <div class="card card-status">
              <div class="media">
                <i class="icon ion-ios-cloud-upload-outline tx-primary"></i>
                <div class="media-body">
                    <h1>00000</h1>
                  <p>Total Expense</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
            <div class="card card-status">
              <div class="media">
                <i class="icon ion-ios-analytics-outline tx-pink"></i>
                <div class="media-body">
                    <h1>00000</h1>
                  <p>Net Profit</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->


        <div class="row row-xs mg-t-10">
          <div class="col-lg-6">
            <div class="card card-table">
              <div class="card-header">
                <h6 class="slim-card-title">Recent Stock History</h6>
              </div><!-- card-header -->
              <div class="table-responsive">
                <table class="table mg-b-0 tx-13">
                  <thead>
                    <tr class="tx-10">
                      <th class="wd-10p pd-y-5">&nbsp;</th>
                      <th class="pd-y-5">Product Name</th>
                      <th class="pd-y-5">Quantity</th>
                      <th class="pd-y-5">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                  

                  </tbody>
                </table>
              </div><!-- table-responsive -->
              <div class="card-footer tx-12 pd-y-15 bg-transparent">
                <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All  History</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-lg-6">
                <div class="card card-table">
                  <div class="card-header">
                    <h6 class="slim-card-title">Recent Sale History</h6>
                  </div><!-- card-header -->
                  <div class="table-responsive">
                    <table class="table mg-b-0 tx-13">
                      <thead>
                        <tr class="tx-10">
                          <th class="wd-10p pd-y-5">&nbsp;</th>
                          <th class="pd-y-5">Product Name</th>
                          <th class="pd-y-5">Quantity</th>
                          <th class="pd-y-5">Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                   

                      </tbody>
                    </table>
                  </div><!-- table-responsive -->
                  <div class="card-footer tx-12 pd-y-15 bg-transparent">
                    <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All  History</a>
                  </div><!-- card-footer -->
                </div><!-- card -->
              </div><!-- col-6 -->
        </div><!-- row -->
      </div><!-- container -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>