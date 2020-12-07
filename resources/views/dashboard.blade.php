
@extends('layout')
@section('title')
CREATE ADMIN
@endsection
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-cart-outline"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">15852</span>
                        Total Sales
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">956</span>
                        New Orders
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">5210</span>
                        New Users
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-currency-btc"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">20544</span>
                        Unique Visitors
                    </div>
                </div>
            </div>
        </div>
{{-- 
        <div class="row">

            <div class="col-xl-4">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Email Sent</h4>

                        <ul class="list-inline widget-chart m-t-20 text-center">
                            <li>
                                <h4 class=""><b>3652</b></h4>
                                <p class="text-muted m-b-0">Marketplace</p>
                            </li>
                            <li>
                                <h4 class=""><b>5421</b></h4>
                                <p class="text-muted m-b-0">Last week</p>
                            </li>
                            <li>
                                <h4 class=""><b>9652</b></h4>
                                <p class="text-muted m-b-0">Last Month</p>
                            </li>
                        </ul>

                        <div id="morris-area-example" style="height: 300px"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Revenue</h4>

                        <ul class="list-inline widget-chart m-t-20 text-center">
                            <li>
                                <h4 class=""><b>5248</b></h4>
                                <p class="text-muted m-b-0">Marketplace</p>
                            </li>
                            <li>
                                <h4 class=""><b>321</b></h4>
                                <p class="text-muted m-b-0">Last week</p>
                            </li>
                            <li>
                                <h4 class=""><b>964</b></h4>
                                <p class="text-muted m-b-0">Last Month</p>
                            </li>
                        </ul>

                        <div id="morris-bar-example" style="height: 300px"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Monthly Earnings</h4>

                        <ul class="list-inline widget-chart m-t-20 text-center">
                            <li>
                                <h4 class=""><b>3654</b></h4>
                                <p class="text-muted m-b-0">Marketplace</p>
                            </li>
                            <li>
                                <h4 class=""><b>954</b></h4>
                                <p class="text-muted m-b-0">Last week</p>
                            </li>
                            <li>
                                <h4 class=""><b>8462</b></h4>
                                <p class="text-muted m-b-0">Last Month</p>
                            </li>
                        </ul>

                        <div id="morris-donut-example" style="height: 300px"></div>
                    </div>
                </div>
            </div>

        </div> --}}
        <!-- end row -->


        <div class="row">

            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 m-b-15 header-title">Recent Candidates</h4>
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>

                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td><span class="badge badge-primary">Active</span></td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td><span class="badge badge-primary">Active</span></td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td><span class="badge badge-primary">Active</span></td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td><span class="badge badge-default">Deactive</span></td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td><span class="badge badge-primary">Active</span></td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td><span class="badge badge-primary">Active</span></td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td><span class="badge badge-default">Deactive</span></td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
    
                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4">
    
                                <h4 class="m-t-5 m-b-15 font-16">Created Events</h4>
                                <form method="post" id="add_event_form" class="m-t-5 m-b-20">
                                    <input type="text" class="form-control new-event-form" placeholder="Add new event..." />
                                </form>
    
                                <div id='external-events'>
                                    <h4 class="m-b-15 font-16">Draggable Events</h4>
                                    <div class='fc-event'>My Event 1</div>
                                    <div class='fc-event'>My Event 2</div>
                                    <div class='fc-event'>My Event 3</div>
                                    <div class='fc-event'>My Event 4</div>
                                    <div class='fc-event'>My Event 5</div>
                                </div>
    
                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="drop-remove">
                                    <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                </div>
    
                            </div>
    
                            <div id='calendar' class="col-xl-10 col-lg-9 col-md-8"></div>
    
                        </div>
                        <!-- end row -->
    
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    
    </div><!-- container-fluid -->


</div>

@endsection