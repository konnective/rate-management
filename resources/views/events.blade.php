<x-app-layout>
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

    <div class="container">
        <div class="py-5">
            <div id="calendar"></div>
        </div>
    </div>
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
</x-app-layout>