<x-app-layout>
<style>
    table {
        width: 100%;
        border-spacing: 35px;
    }
    td:first-child {
        text-align: left; /* Align first column to the left */
    }

    td:last-child {
        text-align: right; /* Align second column to the right */
    }
</style>
<div class="container mt-4">
    <!-- more insight section start -->
    <div class="d-flex justify-content-between align-items-center border-bottom pb-3">
        <h3>
            More Insight
        </h3>
        <span>6th may 2025</span>
    </div>
    <div class="mt-2 p-4 custom-shadow">
        <div class="">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Performance-tab" data-bs-toggle="tab" data-bs-target="#Performance-tab-pane" type="button" role="tab" aria-controls="Performance-tab-pane" aria-selected="true">Performance</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Rates-tab" data-bs-toggle="tab" data-bs-target="#Rates-tab-pane" type="button" role="tab" aria-controls="Rates-tab-pane" aria-selected="false">Rates</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Demand-tab" data-bs-toggle="tab" data-bs-target="#Demand-tab-pane" type="button" role="tab" aria-controls="Demand-tab-pane" aria-selected="false">Demand</button>
                    </li>
                </ul>
                <button class="btn btn-primary">Free OTB Data</button>
            </div>

            <div class="tab-content p-4" id="myTabContent">
                <div class="tab-pane fade show active" id="Performance-tab-pane" role="tabpanel" aria-labelledby="Performance-tab" tabindex="0">
                    <!-- <div class="chart-container">
              <canvas id="performanceChart"></canvas>
            </div> -->
                    <div style="position: relative;">
                        <canvas id="myChart"></canvas>
                        <div id="chart-tooltip">
                            <div class="title">May 7, 2025</div>
                            <div class="hotel">Ramada</div>
                            <div class="price-row">
                                <div>
                                    <div class="price">$120</div>
                                    <div class="label">Current Price</div>
                                </div>
                                <div>
                                    <div class="price">$120</div>
                                    <div class="label">Median Comp Rate</div>
                                </div>
                                <div>
                                    <div class="price">4/25</div>
                                    <div class="label">My Price Position</div>
                                </div>
                            </div>
                            <div class="tab-row">
                                <div>OTB</div>
                                <div>Pick-Up</div>
                            </div>
                            <div class="bottom-row">
                                <div>My Hotel</div>
                                <div style="color: #ff4c4c;">...( )</div>
                                <div><span style="color: #ff4c4c;">__</span> vs Yesterday</div>
                            </div>
                            <div class="arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Rates-tab-pane" role="tabpanel" aria-labelledby="Rates-tab" tabindex="0">
                    tab2
                </div>
                <div class="tab-pane fade" id="Demand-tab-pane" role="tabpanel" aria-labelledby="Demand-tab" tabindex="0">
                    tab3
                </div>
            </div>
        </div>
        <div></div>
    </div>
    <!-- more insight section end -->
    <!-- market trends section start -->
    <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
        <h3>
            Market Trends
        </h3>
        <span>May 7, 2025 - Jun 6, 2025</span>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="custom-card custom-shadow">
                <h6 class="mb-2">Price difference</h6>
                <div class="price-diff">+4%</div>
                <div class="subtext mb-3">Avg vs Compset</div>
                <a href="#" class="link-text">View Full Rate Insight</a>
            </div>
        </div>
    </div>
    <!-- market trends section end -->
    <!-- Upcoming Events section start -->
    <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
        <h3>
            Upcoming Events
        </h3>
    </div>
    <div class="table-responsive custom-shadow">
        <table class="table table-striped">
            <tr>
                <td>Name</td>
                <td>Date</td>
                <td>My Pick-up vs Yesterday</td>
                <td class="text-end">
                    <span class="border-bottom text-primary">Suggestions</span>
                    <button class="btn btn-primary btn-sm ms-2">Free OTB Data</button>
                </td>
            </tr>
            <tr>
                <td>Event Name</td>
                <td>May 11, 2025</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Event Name</td>
                <td>May 11, 2025</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Event Name</td>
                <td>May 11, 2025</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>

    <!-- Upcoming Events section end -->
    <!-- Distribution Health section start -->
    <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
        <h3>
            Distribution Health
        </h3>
    </div>
    <div class="custom-card custom-shadow" class="height: 400px"></div>
    <div class="row mt-3 g-3 mb-5">
        <div class="col-lg-4">
            <div class="card custom-shadow sd border-0">
                <div class="card-body">
                    <h5 class="card-title"><img src="assets/images/booking.png" alt="" srcset="" class="me-2" /> Booking.com</h5>
                    <table>
                        <tr>
                            <td>Guest Name</td>
                            <td>Clinton Green</td>
                        </tr>
                        <tr>
                            <td>Confirm #</td>
                            <td>86147EE040297</td>
                        </tr>
                        <tr>
                            <td>Arrival Date</td>
                            <td>Apr 24, 2025</td>
                        </tr>
                        <tr>
                            <td>Departure Date</td>
                            <td>Apr 25, 2025</td>
                        </tr>
                    </table>
                    {{-- <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column text-center">
                            <span class="">Ranking</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="text-primary border-bottom">See Details</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">2</span>
                            <span class="">Out of all 4</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="">1st</span>
                            <span class="">Within own compset</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">Review score</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="text-primary border-bottom">See Details</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">6.9 / 10</span>
                            <span class="">Own hotel</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class=" ">2nd</span>
                            <span class="">Within own compset</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">Next 90 days parity issues</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="text-primary border-bottom">See Details</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">0</span>
                            <span class="">Issues</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class=" ">$ 0</span>
                            <span class="">Avg. loss issue</span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="col-lg-4">
            <div class="card custom-shadow border-0">
                <div class="card-body">
                    <h5 class="card-title"><img src="assets/images/booking.png" alt="" srcset="" class="me-2" /> Booking.com</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column text-center">
                            <span class="">Ranking</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="text-primary border-bottom">See Details</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">2</span>
                            <span class="">Out of all 4</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="">1st</span>
                            <span class="">Within own compset</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">Review score</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="text-primary border-bottom">See Details</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">6.9 / 10</span>
                            <span class="">Own hotel</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class=" ">2nd</span>
                            <span class="">Within own compset</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">Next 90 days parity issues</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="text-primary border-bottom">See Details</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">0</span>
                            <span class="">Issues</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class=" ">$ 0</span>
                            <span class="">Avg. loss issue</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card custom-shadow border-0">
                <div class="card-body">
                    <h5 class="card-title"><img src="assets/images/booking.png" alt="" srcset="" class="me-2" /> Booking.com</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column text-center">
                            <span class="">Ranking</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="text-primary border-bottom">See Details</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">2</span>
                            <span class="">Out of all 4</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="">1st</span>
                            <span class="">Within own compset</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">Review score</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="text-primary border-bottom">See Details</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">6.9 / 10</span>
                            <span class="">Own hotel</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class=" ">2nd</span>
                            <span class="">Within own compset</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">Next 90 days parity issues</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class="text-primary border-bottom">See Details</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="d-flex flex-column text-center">
                            <span class="">0</span>
                            <span class="">Issues</span>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <span class=" ">$ 0</span>
                            <span class="">Avg. loss issue</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Distribution Health section end -->
</div>
</x-app-layout>
