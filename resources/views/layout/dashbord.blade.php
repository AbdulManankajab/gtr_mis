@extends('layout.header')
@section('content')
	<div class="page-content-wrapper">
	    <div class="page-content-wrapper-inner">
	      <div class="content-viewport">
	        <div class="row">
	          <div class="col-12 py-5">
	            <h4>Dashboard</h4>
	            <p class="text-gray">Welcome aboard, Allen Clerk</p>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-3 col-sm-6 col-6 equel-grid">
	            <div class="grid">
	              <div class="grid-body text-gray">
	                <div class="d-flex justify-content-between">
	                  <p>30%</p>
	                  <p>+06.2%</p>
	                </div>
	                <p class="text-black">Traffic</p>
	                <div class="wrapper w-50 mt-4">
	                  <canvas height="45" id="stat-line_1"></canvas>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-3 col-sm-6 col-6 equel-grid">
	            <div class="grid">
	              <div class="grid-body text-gray">
	                <div class="d-flex justify-content-between">
	                  <p>43%</p>
	                  <p>+15.7%</p>
	                </div>
	                <p class="text-black">Conversion</p>
	                <div class="wrapper w-50 mt-4">
	                  <canvas height="45" id="stat-line_2"></canvas>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-3 col-sm-6 col-6 equel-grid">
	            <div class="grid">
	              <div class="grid-body text-gray">
	                <div class="d-flex justify-content-between">
	                  <p>23%</p>
	                  <p>+02.7%</p>
	                </div>
	                <p class="text-black">Bounce Rate</p>
	                <div class="wrapper w-50 mt-4">
	                  <canvas height="45" id="stat-line_3"></canvas>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-3 col-sm-6 col-6 equel-grid">
	            <div class="grid">
	              <div class="grid-body text-gray">
	                <div class="d-flex justify-content-between">
	                  <p>75%</p>
	                  <p>- 53.34%</p>
	                </div>
	                <p class="text-black">Marketing</p>
	                <div class="wrapper w-50 mt-4">
	                  <canvas height="45" id="stat-line_4"></canvas>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 equel-grid">
	            <div class="grid">
	              <div class="grid-body d-flex flex-column h-100">
	                <div class="wrapper">
	                  <div class="d-flex justify-content-between">
	                    <div class="split-header">
	                      <img class="img-ss mt-1 mb-1 mr-2" src="../assets/images/social-icons/instagram.svg" alt="instagram">
	                      <p class="card-title">Followers Growth</p>
	                    </div>
	                    <div class="wrapper">
	                      <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-access-point text-muted mdi-2x"></i></button>
	                      <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-cloud-download-outline text-muted mdi-2x"></i></button>
	                    </div>
	                  </div>
	                  <div class="d-flex align-items-end pt-2 mb-4">
	                    <h4>16.2K</h4>
	                    <p class="ml-2 text-muted">New Followers</p>
	                  </div>
	                </div>
	                <div class="mt-auto">
	                  <canvas class="curved-mode" id="followers-bar-chart" height="220"></canvas>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 equel-grid">
	            <div class="grid">
	              <div class="grid-body">
	                <p class="card-title">Campaign</p>
	                <div id="radial-chart"></div>
	                <h4 class="text-center">$23,350.00</h4>
	                <p class="text-center text-muted">Used balance this billing cycle</p>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 equel-grid">
	            <div class="grid table-responsive">
	              <table class="table table-stretched">
	                <thead>
	                  <tr>
	                    <th>Symbol</th>
	                    <th>Price</th>
	                    <th>Change</th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <tr>
	                    <td>
	                      <p class="mb-n1 font-weight-medium">AAPL</p>
	                      <small class="text-gray">Apple Inc.</small>
	                    </td>
	                    <td class="font-weight-medium">198.18</td>
	                    <td class="text-danger font-weight-medium">
	                      <div class="badge badge-success">-1.39%</div>
	                    </td>
	                  </tr>
	                  <tr>
	                    <td>
	                      <p class="mb-n1 font-weight-medium">NKE</p>
	                      <small class="text-gray">Nike,Inc.</small>
	                    </td>
	                    <td class="font-weight-medium">03.95</td>
	                    <td class="text-danger font-weight-medium">
	                      <div class="badge badge-danger">-1.17%</div>
	                    </td>
	                  </tr>
	                  <tr>
	                    <td>
	                      <p class="mb-n1 font-weight-medium">NSEI</p>
	                      <small class="text-gray">Nifty 50</small>
	                    </td>
	                    <td class="font-weight-medium">11,278</td>
	                    <td class="text-danger font-weight-medium">
	                      <div class="badge badge-success">-0.24%</div>
	                    </td>
	                  </tr>
	                  <tr>
	                    <td>
	                      <p class="mb-n1 font-weight-medium">BA</p>
	                      <small class="text-gray">The Boeing Company</small>
	                    </td>
	                    <td class="font-weight-medium">354.67</td>
	                    <td class="text-success font-weight-medium">
	                      <div class="badge badge-success">+0.15%</div>
	                    </td>
	                  </tr>
	                  <tr>
	                    <td>
	                      <p class="mb-n1 font-weight-medium">SBUX</p>
	                      <small class="text-gray">Starbucks Corporation</small>
	                    </td>
	                    <td class="font-weight-medium">08.42</td>
	                    <td class="text-success font-weight-medium">
	                      <div class="badge badge-success">+0.67%</div>
	                    </td>
	                  </tr>
	                </tbody>
	              </table>
	            </div>
          	</div>
	      </div>
	    </div>
	    <!-- content viewport ends -->
	    <!-- partial:partials/_footer.html -->
	    <footer class="footer">
	      <div class="row">
	        <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
	          <small class="text-muted d-block">Copyright © 2019 <a href="http://gtr.com.my/" target="_blank">GTR</a>. All rights reserved</small>
	        </div>
	      </div>
	    </footer>
	    <!-- partial -->
	</div>
      <!-- page content ends -->
@endsection