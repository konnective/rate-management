<x-app-layout>
<div class="container my-5">
    <!-- Nav Tabs -->
    <ul class="nav nav-tabs mb-3" id="RankingTab" role="tablist">
        <li class="nav-item col-4 pe-3" role="presentation">
            <button class="nav-link active w-100 p-0 border-0 bg-transparent" id="booking-tab" data-bs-toggle="tab" data-bs-target="#booking" type="button" role="tab" aria-controls="booking" aria-selected="true">
                <!-- Booking Card -->
                <div class="card border-blue h-100">
                    <div class="card-header text-center">
                        <img src="assets/images/booking.png" alt="Booking.com" class="platform-icon" width="40" />
                        <strong>Booking.com</strong>
                    </div>
                    <div class="card-body p-0 bg-light_blue">
                        <div class="row text-center">
                            <div class="col-md-6 p-4 mb-3 mb-md-0 border-end">
                                <p>Ranking</p>
                                <p class="mb-0 fw-semibold">4</p>
                            </div>
                            <div class="col-md-6 p-4">
                                <p>Review Score</p>
                                <p class="mb-0 fw-semibold">4.6 <span class="score-change">(+0.1)</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
        </li>

        <!-- Repeat similar for 2 more tabs -->
        <li class="nav-item col-4 pe-3" role="presentation">
            <button class="nav-link w-100 p-0 border-0 bg-transparent" id="airbnb-tab" data-bs-toggle="tab" data-bs-target="#airbnb" type="button" role="tab" aria-controls="airbnb" aria-selected="false">
                <!-- Airbnb Card -->
                <div class="card border-blue h-100">
                    <div class="card-header text-center">
                        <img src="assets/images/booking.png" alt="Airbnb" class="platform-icon" width="40" />
                        <strong>Airbnb</strong>
                    </div>
                    <div class="card-body p-0 bg-light_blue">
                        <div class="row text-center">
                            <div class="col-md-6 p-4 mb-3 mb-md-0 border-end">
                                <p>Ranking</p>
                                <p class="mb-0 fw-semibold">2</p>
                            </div>
                            <div class="col-md-6 p-4">
                                <p>Review Score</p>
                                <p class="mb-0 fw-semibold">4.8 <span class="score-change">(+0.2)</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
        </li>

        <li class="nav-item col-4 pe-3" role="presentation">
            <button class="nav-link w-100 p-0 border-0 bg-transparent" id="expedia-tab" data-bs-toggle="tab" data-bs-target="#expedia" type="button" role="tab" aria-controls="expedia" aria-selected="false">
                <!-- Expedia Card -->
                <div class="card border-blue h-100">
                    <div class="card-header text-center">
                        <img src="assets/images/booking.png" alt="Expedia" class="platform-icon" width="40" />
                        <strong>Expedia</strong>
                    </div>
                    <div class="card-body p-0 bg-light_blue">
                        <div class="row text-center">
                            <div class="col-md-6 p-4 mb-3 mb-md-0 border-end">
                                <p>Ranking</p>
                                <p class="mb-0 fw-semibold">3</p>
                            </div>
                            <div class="col-md-6 p-4">
                                <p>Review Score</p>
                                <p class="mb-0 fw-semibold">4.7 <span class="score-change">(+0.3)</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="platformTabContent">
        <div class="tab-pane fade show active" id="booking" role="tabpanel" aria-labelledby="booking-tab">
            <h5 class="my-4">
                Compset
            </h5>
            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <thead class=""></thead>
                    <tbody>
                        <tr>
                            <th>Hotel</th>
                            <th>Ranking</th>
                            <th>Review score</th>
                        </tr>
                        <tr>
                            <td>Comfort Suites at Par 4 Resort</td>
                            <td>1 + 1</td>
                            <td>8.3</td>
                        </tr>
                        <tr>
                            <td>Ramada by Wyndham Waupaca</td>
                            <td>1</td>
                            <td>
                                6.9<br />
                                <span class="text-muted small">+0.1</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="custom-shadow p-3">
                <h5 class="mt-4 pb-4 border-bottom">
                    Ranking
                </h5>
                <canvas id="rankingChart" height="100" class=""></canvas>
            </div>
            <div class="custom-shadow bg-white p-3 my-3">
                <h5 class="mt-4 pb-4 border-bottom">
                    Review
                </h5>
                <canvas id="reviewChart" height="100" class=""></canvas>
            </div>
            <div class="customshadow">
                <h5 class="my-4">
                    Ranking per arrival date
                </h5>
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <button class="btn btn-outline"><i class="bi bi-chevron-left"></i></button>
                        <button class="btn btn-outline"><i class="bi bi-chevron-right"></i></button>
                        <button class="btn btn-outline">May 9, 2025 <i class="bi bi-calendar-plus ms-2"></i></button>
                    </div>
                    <div class="d-flex align-items-center justify-content-between gap-3 border p-2">
                        <a href="#"><i class="bi bi-file-earmark-arrow-down text-dark fs-3"></i></a>
                        <a href="#"><i class="bi bi-plus-circle text-dark fs-3"></i></a>
                    </div>
                </div>
                <div id="calendar" class="mt-3"></div>
                <div class="legend-section d-flex justify-content-center gap-4 py-3">
                    <div class="legend-item d-flex align-items-center gap-2">
                        <span class="dot dot-blue"></span>
                        <span class="label">Above average</span>
                    </div>
                    <div class="legend-item d-flex align-items-center gap-2">
                        <span class="dot dot-purple"></span>
                        <span class="label">Average</span>
                    </div>
                    <div class="legend-item d-flex align-items-center gap-2">
                        <span class="dot dot-green"></span>
                        <span class="label">Below average</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="airbnb" role="tabpanel" aria-labelledby="airbnb-tab">
            <p class="p-3">Content for Airbnb</p>
        </div>
        <div class="tab-pane fade" id="expedia" role="tabpanel" aria-labelledby="expedia-tab">
            <p class="p-3">Content for Expedia</p>
        </div>
    </div>
</div>




    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="./assets/js/custom.js"></script> --}}
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script>
        const ctx = document.getElementById('rankingChart').getContext('2d');
        const rankingChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Sep 2024', 'Oct 2024', 'Nov 2024', 'Dec 2024', 'Jan 2025', 'Feb 2025', 'Mar 2025',
                    'Apr 2025', 'May 2025'
                ],
                datasets: [{
                        label: 'Hotel A',
                        data: [1, 2, 3, 2.5, 4, 1, 2, 3, 5],
                        borderColor: '#4fc3f7',
                        backgroundColor: 'rgba(79,195,247,0.1)',
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#4fc3f7',
                        pointRadius: 6,
                        pointHoverRadius: 8,

                    },
                    {
                        label: 'Hotel B',
                        data: [2, 2, 2.5, 2, 1.8, 1.5, 1.9, 2.2, 3.8],
                        borderColor: '#ba68c8',
                        backgroundColor: 'rgba(186,104,200,0.1)',
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#ba68c8',
                        pointRadius: 6,
                        pointHoverRadius: 8,

                    },
                    {
                        label: 'Hotel C',
                        data: [3, 3.5, 2.7, 3.3, 5, 2.1, 4, 4.5, 4.8],
                        borderColor: '#64b5f6',
                        backgroundColor: 'rgba(100,181,246,0.1)',
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#64b5f6',
                        pointRadius: 6,
                        pointHoverRadius: 8,

                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        reverse: true,
                        min: 1,
                        max: 5,
                        ticks: {
                            stepSize: 1,
                            color: '#000000'
                        },
                        grid: {
                            color: 'rgba(255,255,255,0.3)'
                        }
                    },
                    x: {
                        ticks: {
                            color: '#000000'
                        },
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: '#000000'
                        }
                    }
                }
            }
        });
    </script>
    <script>
        const reviewCtx = document.getElementById('reviewChart').getContext('2d');
        const reviewChart = new Chart(reviewCtx, {
            type: 'line',
            data: {
                labels: ['Sep 2024', 'Oct 2024', 'Nov 2024', 'Dec 2024', 'Jan 2025', 'Feb 2025', 'Mar 2025',
                    'Apr 2025', 'May 2025'
                ],
                datasets: [{
                        label: 'Hotel A',
                        data: [1, 2, 3, 2.5, 4, 1, 2, 3, 5],
                        borderColor: '#4fc3f7',
                        backgroundColor: 'rgba(79,195,247,0.1)',
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#4fc3f7',
                        pointRadius: 6,
                        pointHoverRadius: 8,

                    },
                    {
                        label: 'Hotel B',
                        data: [2, 2, 2.5, 2, 1.8, 1.5, 1.9, 2.2, 3.8],
                        borderColor: '#ba68c8',
                        backgroundColor: 'rgba(186,104,200,0.1)',
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#ba68c8',
                        pointRadius: 6,
                        pointHoverRadius: 8,

                    },
                    {
                        label: 'Hotel C',
                        data: [3, 3.5, 2.7, 3.3, 5, 2.1, 4, 4.5, 4.8],
                        borderColor: '#64b5f6',
                        backgroundColor: 'rgba(100,181,246,0.1)',
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#64b5f6',
                        pointRadius: 6,
                        pointHoverRadius: 8,

                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        reverse: true,
                        min: 1,
                        max: 5,
                        ticks: {
                            stepSize: 1,
                            color: '#000000'
                        },
                        grid: {
                            color: 'rgba(255,255,255,0.3)'
                        }
                    },
                    x: {
                        ticks: {
                            color: '#000000'
                        },
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: '#000000'
                        }
                    }
                }
            }
        });
    </script>
</x-app-layout>
