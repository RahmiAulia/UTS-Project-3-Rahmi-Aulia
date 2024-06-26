@extends('layouts.main')
@section('title', 'Dashboard')
    
@section('content')
    <!-- partial -->
    {{-- <div class="main-panel"> --}}
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome!</h3>
                  <h6 class="font-weight-normal mb-0"><span class="text-primary">Hope you have a wonderful day!</span></h6><br>
                </div>
                
                <div class="row">
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card tale-bg">
                      <div class="card-people mt-auto">
                        <img src="images/dashboard/people.svg" alt="people">
                        <div class="weather-info">
                          <div class="d-flex">
                            <div>
                              <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                            </div>
                            <div class="ml-2">
                              <h4 class="location font-weight-normal">Bangalore</h4>
                              <h6 class="font-weight-normal">India</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                      <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                          <div class="card-body">
                            <p class="mb-4">Today’s Bookings</p>
                            <p class="fs-30 mb-2">4006</p>
                            <p>10.00% (30 days)</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                          <div class="card-body">
                            <p class="mb-4">Total Bookings</p>
                            <p class="fs-30 mb-2">61344</p>
                            <p>22.00% (30 days)</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                          <div class="card-body">
                            <p class="mb-4">Number of Meetings</p>
                            <p class="fs-30 mb-2">34040</p>
                            <p>2.00% (30 days)</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                          <div class="card-body">
                            <p class="mb-4">Number of Clients</p>
                            <p class="fs-30 mb-2">47033</p>
                            <p>0.22% (30 days)</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="font-weight-normal mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel illo minima repellat perferendis rerum iusto 
                  provident placeat ea maiores totam quasi aperiam dolore temporibus excepturi, ad aspernatur! Odit, 
                  veritatis? Maiores illum ea incidunt nisi, eaque, fuga dolorem voluptatum molestiae, minima ipsum quas eum 
                  officiis consequatur numquam pariatur laboriosam repellat expedita. Temporibus quis eligendi sequi hic 
                  expedita dolor velit dignissimos repellat facere nostrum! Similique, quaerat dolores. Voluptate quidem unde 
                  harum laudantium magni? Ab possimus deserunt nam excepturi quasi? Quis, cumque labore? Provident atque 
                  doloremque praesentium aliquam quia ut rerum numquam! Porro veniam asperiores quam placeat eos, qui iste 
                  itaque omnis temporibus facere tempore. Quod ipsa illum recusandae nihil placeat error consectetur 
                  reprehenderit corporis est. </p>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      {{-- </div> --}}
      <!-- main-panel ends -->
@endsection


