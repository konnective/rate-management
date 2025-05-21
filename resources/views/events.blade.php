<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Revenue management</title>
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/themes/light.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>
    <style>
        .fc {
            border: none;
        }

        .fc-daygrid-day-frame {
            padding: 10px;
        }

        /* Hide default weekday header row */
        .fc-col-header {
            display: none;
        }

        /* Day label inside each cell */
        .custom-day-label {
            font-size: 0.75em;
            color: #888;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 2px;
        }

        .fc .fc-daygrid-day-number {
            padding: 0;
            font-size: 1.2em;
            font-weight: 600;
            color: #000000;
        }

        .fc .fc-daygrid-day-top {
            flex-direction: column;
            margin-top: 10%;
        }

        .fc .fc-daygrid-event {
            background: none !important;
            border: none;
            padding: 0;
            
        }

        .fc .fc-bg-event {
            opacity: 1 !important;
        }

        /* Custom event background blocks */
        .event-blue {
            background-color: #3ea6e33f !important;
            color: #1c9ae4;
            border-right: 3px solid #1c9ae4;
            height: 100%;
            padding: 5px 6px;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .event-green {
            background-color: #33ab852f !important;
            color:#33ab84; 
            border-right: 3px solid #33ab84;
            height: 100%;
            padding: 5px 6px;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .event-purple {
            background-color: #9b5de52f !important;
            color: #9b5de5;
            border-right: 3px solid #9b5de5;
            height: 100%;
            padding: 5px 6px;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .fc-event-title {
            color: inherit !important;
            margin-top: 50% !important;
            font-size: 12px;
            font-weight: 600;
        }

        /* Hide header toolbar */
        .fc-header-toolbar {
            display: none;
        }
    </style>

</head>

<body>

    <header>
        <!-- Navbar -->
        <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-custom px-3 pt-4 ">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Left: Logo -->
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="./assets/images/logo/logo-dark.png" alt="Logo" class="me-2" width="200">

                </a>

                <!-- Center Menu (Desktop) -->
                <div class="navbar-middle d-none d-md-flex gap-4">
                    <a href="#" class="text-dark text-decoration-none py-3 active-link">Overview</a>
                    <!-- <a href="#" class="text-dark text-decoration-none py-3">Rates</a> -->
                    <a href="#" class="text-dark text-decoration-none py-2"><select
                            class="form-select border-0 shadow-none" aria-label="Default select example">
                            <option selected><a href="rates.html" class="">Rates</a></option>
                            <option value="1"><a href="#" class="">Strategy </a></option>
                            <option value="2"><a href="#" class="">Events </a></option>
                            <option value="3"><a href="#" class="">Parity</a></option>
                            <option value="4"><a href="#" class="">Ranking </a></option>
                        </select></a>
                </div>

                <!-- Right Buttons + Sidebar Toggle -->
                <div class="d-flex gap-2 align-items-center">


                    <!-- Icon Buttons -->
                    <button class="nav-icon-btn"><i class="bi bi-person-circle"></i></button>
                    <button class="nav-icon-btn"><i class="bi bi-gear-fill"></i></button>
                    <!-- Toggle Sidebar on Mobile -->
                    <button class="nav-icon-btn d-md-none " type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#mobileMenu">
                        <i class="bi bi-list "></i>
                    </button>
                </div>
            </div>
        </nav>

        <div id="navPlaceholder" class="placeholder d-none"></div>

        <!-- Filter Bar -->
        <div id="filterBar" class="filter-bar border-bottom ">
            <div class="container">
                <div class="d-flex align-items-center  justify-content-between">
                    <div><button class="btn btn-outline"><i class="bi bi-chevron-left"></i></button>
                        <button class="btn btn-outline"><i class="bi bi-chevron-right"></i></button>
                        <button class="btn btn-outline">May 9, 2025 <i class="bi bi-calendar-plus ms-2"></i></button>
                    </div>
                    <div class="d-flex align-items-center  justify-content-between gap-3 border p-2">

                        <a href="#"><i class="bi bi-file-earmark-arrow-down text-dark fs-3"></i></a>
                        <a href="#"><i class="bi bi-plus-circle text-dark fs-3"></i></a>

                    </div>
                </div>
                <div class="d-flex align-items-center  justify-content-between mt-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="dropdown">
                            <button class="btn btn-outline dropdown-toggle" data-bs-toggle="dropdown">All
                                Categories</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Primary Compete</a></li>
                                <li><a class="dropdown-item" href="#">Secondary Compete</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-outline dropdown-toggle" data-bs-toggle="dropdown">All
                                Events</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Primary Compete</a></li>
                                <li><a class="dropdown-item" href="#">Secondary Compete</a></li>
                            </ul>
                        </div>
                    </div>

                    <button class="btn btn-outline"><i class="bi bi-search me-2 "></i> Search </button>

                </div>
            </div>



        </div>
        <div class="container">
            <div class="py-5">
                <div id="calendar"></div>
            </div>
        </div>


    </header>

    <!-- Scripts -->


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="./assets/js/custom.js"></script> --}}
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');

            const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                initialDate: '2025-06-01',
                headerToolbar: false,
                events: [{
                        title: 'Event',
                        start: '2025-06-09',
                        end: '2025-06-10',
                        display: 'background',
                        classNames: ['event-blue']
                    },
                    {
                        title: 'Event',
                        start: '2025-06-13',
                        end: '2025-06-13',
                        display: 'background',
                        classNames: ['event-green']
                    },
                    {
                        title: 'Event',
                        start: '2025-06-19',
                        end: '2025-06-20',
                        display: 'background',
                        classNames: ['event-purple']
                    }
                ],
                dayCellDidMount: function(arg) {
                    const day = arg.date.getDay(); // 0 = Sunday
                    const label = document.createElement('div');
                    label.className = 'custom-day-label';
                    label.innerText = dayNames[day];

                    const topEl = arg.el.querySelector('.fc-daygrid-day-top');
                    if (topEl) {
                        topEl.prepend(label);
                    }
                }
            });

            calendar.render();
        });
    </script>


</html>
