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
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
        $(document).ready(function () {
                const $tooltip = $("#chart-tooltip");

                new Chart($("#myChart")[0].getContext("2d"), {
                    type: "line",
                    data: {
                        labels: ["1 May", "2 May", "3 May", "4 May", "5 May", "6 May", "7 May", "8 May", "9 May"],
                        datasets: [
                            {
                                label: "Line A",
                                data: [7, 8, 8, 9, 9, 9, 10, 11, 14],
                                borderColor: "#153F92",
                                pointBackgroundColor: "#ffffff",
                                pointBorderColor: "#153F92",
                                pointBorderWidth: 2,
                                pointRadius: 4,
                                pointHoverRadius: 6,
                                fill: false,
                                tension: 0,
                            },
                            // {
                            //   label: 'Line B',
                            //   data: [14,11,9,6,8,7,6,5,4],
                            //   borderColor: "#153F92",
                            //   pointBackgroundColor: "#ffffff",
                            //   pointBorderColor: "#153F92",
                            //   pointBorderWidth: 2,
                            //   pointRadius: 4,
                            //   pointHoverRadius: 6,
                            //   fill: false,
                            //   tension: 0,
                            // },
                        ],
                    },
                    options: {
                        interaction: {
                            mode: "nearest",
                            intersect: true,
                        },
                        plugins: {
                            tooltip: {
                                enabled: false,
                                external: function (context) {
                                    const tooltipModel = context.tooltip;

                                    if (tooltipModel.opacity === 0) {
                                        $tooltip.hide();
                                        return;
                                    }

                                    const dataPoint = tooltipModel.dataPoints?.[0];
                                    const x = dataPoint.element.x;
                                    const y = dataPoint.element.y;

                                    $tooltip.css({
                                        display: "block",
                                        left: `${x}px`,
                                        top: `${y}px`, // lift above dot
                                    });

                                    const index = dataPoint.dataIndex;
                                    const label = context.chart.data.labels[index];
                                    const value = dataPoint.raw;

                                    $tooltip.find(".title").text(label);
                                    $tooltip.find(".price").eq(0).text(`$${value}`);
                                    $tooltip
                                        .find(".price")
                                        .eq(1)
                                        .text(`$${value + 5}`);
                                    $tooltip.find(".price").eq(2).text("4/25");
                                },
                            },
                        },
                        scales: {
                            y: {
                                min: 6,
                                max: 16,
                                ticks: {
                                    stepSize: 2,
                                },
                            },
                            x: {
                                ticks: {
                                    maxRotation: 0,
                                    minRotation: 0,
                                },
                            },
                        },
                    },
                });
            });
    </script>
</x-app-layout>
