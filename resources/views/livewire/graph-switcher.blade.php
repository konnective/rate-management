<div>
    <div class="mb-4">
        <button wire:click="setChartType('bar')" class="px-4 py-2 bg-blue-500 text-white rounded">Bar</button>
        <button wire:click="setChartType('line')" class="px-4 py-2 bg-green-500 text-white rounded">Line</button>
        <button wire:click="setChartType('pie')" class="px-4 py-2 bg-red-500 text-white rounded">Pie</button>
    </div>

    <canvas id="myChart" height="100"></canvas>

    <script>
        document.addEventListener('livewire:load', function () {
            let chart;
            const ctx = document.getElementById('myChart').getContext('2d');

            const createChart = (type) => {
                if (chart) chart.destroy();

                chart = new Chart(ctx, {
                    type: type,
                    data: {
                        labels: ['Red', 'Blue', 'Yellow'],
                        datasets: [{
                            label: 'Votes',
                            data: [12, 19, 3],
                            backgroundColor: ['red', 'blue', 'yellow'],
                        }]
                    },
                    options: {
                        responsive: true,
                    }
                });
            };

            // Init with default chart type
            createChart(@json($chartType));

            // Listen to the event from Livewire
            window.addEventListener('update-chart', event => {
                createChart(event.detail.type);
            });
        });
    </script>
</div>
