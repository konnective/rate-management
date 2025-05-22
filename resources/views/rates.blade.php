<x-app-layout>
    <style>
        #calendar {
            max-width: 1200px;
            margin: 0 auto;
        }

        .fc-scroller.fc-scroller-liquid-absolute {
            overflow: hidden !important;
        }

        .fc .fc-daygrid-day-number {
            /* padding: 4px; */
            position: relative;
            top: 13px;
            right: 13px;
            z-index: 4;
            background-color: #fff;
            /* padding: 10px; */
            height: 30px;
            width: 30px;
            border-radius: 30px;
            text-align: center;
            color: #4373D0;
        }

        .fc table {
            border-collapse: separate;
            border-spacing: 11px;
        }

        .fc .fc-daygrid-day-frame {
            background: linear-gradient(207.85deg,
                    rgba(71, 124, 227, 1) 0%,
                    rgba(64, 107, 192, 1) 100%);
            border-radius: 5px;
            border-color: #477ce3;
            border-width: 0px 10px 0px 0px;
            flex-shrink: 0;
            height: 20px;
            position: relative;
            box-shadow: 0px 4px 10px 0px rgba(167, 210, 255, 0.1),
                0px 17px 17px 0px rgba(167, 210, 255, 0.09),
                0px 39px 23px 0px rgba(167, 210, 255, 0.05),
                0px 70px 28px 0px rgba(167, 210, 255, 0.01),
                0px 109px 30px 0px rgba(167, 210, 255, 0);
        }

        .fc-theme-standard td,
        .fc-theme-standard th {
            border: none;
        }

        .fc-theme-standard .fc-scrollgrid {
            border: none;
        }

        .fc-h-event {
            background-color: transparent;
            border: none;
        }

        .fc .fc-daygrid-event-harness {
            bottom: 10px;
        }

        .tooltip-card {
            background: white;
            padding: 16px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            font-family: sans-serif;
            font-size: 14px;
            max-width: 700px;
        }

        .tooltip-header {
            font-weight: 500;
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
        }

        .tooltip-table {
            width: 100%;
            border-collapse: collapse;
        }

        .tooltip-table th {
            text-align: left;
            font-size: 13px;
            color: #666;
            padding-bottom: 6px;
        }

        .tooltip-table td {
            padding: 4px 0;
            font-size: 14px;
        }

        .dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: #8a8cf4;
            border-radius: 50%;
            margin-right: 6px;
        }

        .tippy-box {
            color: #000000 !important;
        }

        <style>.modal-content.bg-dark {
            background-color: var(--primary) !important;
            color: #fff;
        }
        .modal-content{
          background-color: var(--primary) !important;
        }
        .modal-header h5 {
            font-size: 1.25rem;
        }

        .modal-body {
            /* min-height: 300px; */
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary), #1c2d5f);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .modal-dialog {
            max-width: 960px;
        }
    </style>

    <div id='calendar'></div>
    {{-- <div id="custom-tooltip" class="tooltip-content" style="display: none;"></div> --}}
    <!-- Dark Themed Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xxl">
            <div class="modal-content  text-white border-0 rounded-4 shadow-lg">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-semibold" id="eventModalLabel">
                        <button class="bg-secondary  text-white"><i class="bi bi-chevron-left"></i></button>
                        <button class="bg-secondary text-white"><i class="bi bi-chevron-right"></i></button>
                         <span id="modalDate">Date</span>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pt-0" id="modalBody">
                    <!-- Chart or event content goes here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="./assets/js/custom.js"></script> --}}
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const modal = new bootstrap.Modal(document.getElementById('eventModal'));

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [{
                        title: 'Ramada by Wyndham',
                        start: '2025-05-13',
                        extendedProps: {
                            rate: '$169',
                            roomType: 'King room-non smoking',
                            statusIcon: '☕',
                            marketDemand: '29%',
                            mediaRate: '$29',
                            updated: 'Updated 2 hrs ago'
                        }
                    },
                    {
                        title: 'Comfort Suites',
                        start: '2025-05-14',
                        extendedProps: {
                            rate: '$149',
                            roomType: 'Queen room',
                            statusIcon: '',
                            marketDemand: '35%',
                            mediaRate: '$32',
                            updated: 'Updated 1 hr ago'
                        }
                    },
                    {
                        title: 'Holiday Inn Express',
                        start: '2025-05-15',
                        extendedProps: {
                            rate: 'Sold out',
                            roomType: 'King suite',
                            statusIcon: '',
                            marketDemand: '40%',
                            mediaRate: '$30',
                            updated: 'Updated 30 mins ago'
                        }
                    }
                ],
                eventDidMount: function(info) {
                    const props = info.event.extendedProps;
                    const tooltipContent = `
          <div style="font-family:sans-serif; max-width:300px;">
            <div style="font-size:13px; color:#888; text-align:right;">${info.event.start.toDateString()}<br><small>${props.updated}</small></div>
            <div style="display:flex; justify-content:space-between; font-weight:bold; margin:6px 0;">
              <span><span style="display:inline-block;width:12px;height:12px;background:#8486f2;border-radius:3px;margin-right:4px;"></span>${props.marketDemand} market demand</span>
              <span>${props.mediaRate} Media comp rate</span>
            </div>
            <table style="width:100%; font-size:14px; border-collapse:collapse; margin-top:6px;">
              <thead>
                <tr><th align="left">Property</th><th align="left">Rates</th><th align="left">Room</th></tr>
              </thead>
              <tbody>
                <tr>
                  <td>${info.event.title}</td>
                  <td>${props.rate} ${props.statusIcon}</td>
                  <td>${props.roomType}</td>
                </tr>
              </tbody>
            </table>
          </div>
        `;

                    tippy(info.el, {
                        content: tooltipContent,
                        allowHTML: true,
                        theme: 'light-border',
                        placement: 'top',
                        interactive: true,
                    });
                },
                eventClick: function(info) {
                    const props = info.event.extendedProps;

                    document.getElementById('modalDate').textContent = info.event.start.toDateString();

                    const modalContent = `
    <div class="">
      <ul class="d-flex justify-between gap-4">
        <li>Best flex</li>
        <li>Booking.com</li>
        <li>1 night</li>
        <li>2 guest</li>
        <li>Primary compset</li>
      </ul>
    </div>
 

    <!-- Chart Placeholder -->
    <div style="height:300px;">
      <canvas id="eventChart"></canvas>
    </div>
  `;

                    document.getElementById('modalBody').innerHTML = modalContent;

                    // Optional: Initialize chart using Chart.js
                    const ctx = document.getElementById('eventChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['40', '35', '30', '25', '20', '15', '10', '5', '0'],
                            datasets: [{
                                    label: 'Wyndham Hotels & Resorts',
                                    data: [12, 22, 18, 20, 35, 20, 15, 25, 32],
                                    borderColor: '#bbaaff',
                                    backgroundColor: '#bbaaff',
                                    pointRadius: 5,
                                    tension: 0.3
                                },
                                {
                                    label: 'Marriott International',
                                    data: [10, 20, 15, 10, 30, 25, 28, 30, 33],
                                    borderColor: '#407BFF',
                                    backgroundColor: '#407BFF',
                                    pointRadius: 5,
                                    tension: 0.3
                                },
                                {
                                    label: 'Radisson Hotel Group',
                                    data: [5, 10, 9, 8, 7, 6, 8, 12, 20],
                                    borderColor: '#b364f5',
                                    backgroundColor: '#b364f5',
                                    pointRadius: 5,
                                    tension: 0.3
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    labels: {
                                        color: '#fff'
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: '#fff'
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: '#fff'
                                    }
                                }
                            }
                        }
                    });

                    modal.show();
                }

            });

            calendar.render();
        });
    </script>
</x-app-layout>
