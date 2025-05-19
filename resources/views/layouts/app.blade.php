<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


        {{-- scripts for temporary --}}
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            //login js start
            $(document).ready(function () {
                // Show Forgot Password form
                $("#showForgot").on("click", function (e) {
                    e.preventDefault();
                    $("#loginForm").removeClass("active");
                    $("#forgotForm").addClass("active");
                });

                // Back to Login form
                $("#backToLogin").on("click", function (e) {
                    e.preventDefault();
                    $("#forgotForm").removeClass("active");
                    $("#loginForm").addClass("active");
                });

                // Optional: handle reset form submit
                $("#resetForm").on("submit", function (e) {
                    e.preventDefault();
                    alert("Reset link sent!");
                    $("#forgotForm").removeClass("active");
                    $("#loginForm").addClass("active");
                });
            });

            //navbar sticky
            $(window).on("scroll", function () {
                if ($(this).scrollTop() > 100) {
                    $("#mainNavbar").addClass("sticky-nav");
                    $("#filterBar").addClass("sticky-filter");
                    $("#navPlaceholder").removeClass("d-none");
                    $("#filterPlaceholder").removeClass("d-none");
                } else {
                    $("#mainNavbar").removeClass("sticky-nav");
                    $("#filterBar").removeClass("sticky-filter");
                    $("#navPlaceholder").addClass("d-none");
                    $("#filterPlaceholder").addClass("d-none");
                }
            });

            // Toggle active menu
            $(".navbar-middle a").on("click", function (e) {
                e.preventDefault();
                $(".navbar-middle a").removeClass("active-link");
                $(this).addClass("active-link");
            });
            //chart js start
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
    </body>
</html>
