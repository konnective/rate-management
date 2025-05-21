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
    <livewire:graph-switcher />
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
            <div class="card custom-shadow border-0">
                <div class="card-body">
                    <h5 class="card-title">
                        <img src="assets/images/booking.png" alt="Booking Icon" class="me-2" />
                        Booking.com
                    </h5>

                    <table class="table table-borderless mb-0 mt-4">
                        <tbody>
                            <tr>
                                <td>Ranking</td>
                                <td class="text-primary text-end"><u>See Details</u></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>2</div>
                                    <small>Out of all 4</small>
                                </td>
                                <td class="text-end">
                                    <div>1st</div>
                                    <small>Within own compset</small>
                                </td>
                            </tr>

                            <tr class="pt-3">
                                <td>Review score</td>
                                <td class="text-primary text-end"><u>See Details</u></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>6.9 / 10</div>
                                    <small>Own hotel</small>
                                </td>
                                <td class="text-end">
                                    <div>2nd</div>
                                    <small>Within own compset</small>
                                </td>
                            </tr>

                            <tr class="pt-3">
                                <td>Next 90 days parity issues</td>
                                <td class="text-primary text-end"><u>See Details</u></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>0</div>
                                    <small>Issues</small>
                                </td>
                                <td class="text-end">
                                    <div>$ 0</div>
                                    <small>Avg. loss issue</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card custom-shadow border-0">
                <div class="card-body">
                    <h5 class="card-title">
                        <img src="assets/images/booking.png" alt="Booking Icon" class="me-2" />
                        Booking.com
                    </h5>

                    <table class="table table-borderless mb-0 mt-4">
                        <tbody>
                            <tr>
                                <td>Ranking</td>
                                <td class="text-primary text-end"><u>See Details</u></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>2</div>
                                    <small>Out of all 4</small>
                                </td>
                                <td class="text-end">
                                    <div>1st</div>
                                    <small>Within own compset</small>
                                </td>
                            </tr>

                            <tr class="pt-3">
                                <td>Review score</td>
                                <td class="text-primary text-end"><u>See Details</u></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>6.9 / 10</div>
                                    <small>Own hotel</small>
                                </td>
                                <td class="text-end">
                                    <div>2nd</div>
                                    <small>Within own compset</small>
                                </td>
                            </tr>

                            <tr class="pt-3">
                                <td>Next 90 days parity issues</td>
                                <td class="text-primary text-end"><u>See Details</u></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>0</div>
                                    <small>Issues</small>
                                </td>
                                <td class="text-end">
                                    <div>$ 0</div>
                                    <small>Avg. loss issue</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card custom-shadow border-0">
                <div class="card-body">
                    <h5 class="card-title">
                        <img src="assets/images/booking.png" alt="Booking Icon" class="me-2" />
                        Booking.com
                    </h5>

                    <table class="table table-borderless mb-0 mt-4">
                        <tbody>
                            <tr>
                                <td>Ranking</td>
                                <td class="text-primary text-end"><u>See Details</u></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>2</div>
                                    <small>Out of all 4</small>
                                </td>
                                <td class="text-end">
                                    <div>1st</div>
                                    <small>Within own compset</small>
                                </td>
                            </tr>

                            <tr class="pt-3">
                                <td>Review score</td>
                                <td class="text-primary text-end"><u>See Details</u></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>6.9 / 10</div>
                                    <small>Own hotel</small>
                                </td>
                                <td class="text-end">
                                    <div>2nd</div>
                                    <small>Within own compset</small>
                                </td>
                            </tr>

                            <tr class="pt-3">
                                <td>Next 90 days parity issues</td>
                                <td class="text-primary text-end"><u>See Details</u></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>0</div>
                                    <small>Issues</small>
                                </td>
                                <td class="text-end">
                                    <div>$ 0</div>
                                    <small>Avg. loss issue</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Distribution Health section end -->
</div>
</x-app-layout>
