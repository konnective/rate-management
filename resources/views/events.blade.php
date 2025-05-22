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
        color: #4373d0;
    }

    .fc table {
        border-collapse: separate;
        border-spacing: 11px;
    }

    .fc .fc-daygrid-day-frame {
        background: linear-gradient(207.85deg, rgba(71, 124, 227, 1) 0%, rgba(64, 107, 192, 1) 100%);
        border-radius: 5px;
        border-color: #477ce3;
        border-width: 0px 10px 0px 0px;
        flex-shrink: 0;
        height: 20px;
        position: relative;
        box-shadow: 0px 4px 10px 0px rgba(167, 210, 255, 0.1), 0px 17px 17px 0px rgba(167, 210, 255, 0.09), 0px 39px 23px 0px rgba(167, 210, 255, 0.05), 0px 70px 28px 0px rgba(167, 210, 255, 0.01), 0px 109px 30px 0px rgba(167, 210, 255, 0);
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

    <style > .modal-content.bg-dark {
        background-color: var(--primary) !important;
        color: #fff;
    }
    .modal-content {
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