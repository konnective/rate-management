<div>
   <div class="mt-2 p-4 custom-shadow">
        <div class="">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li wire:click="changeGraphType('bar')" class="nav-item" role="presentation">
                        <button class="nav-link active" id="Performance-tab" data-bs-toggle="tab" data-bs-target="#Performance-tab-pane" type="button" role="tab" aria-controls="Performance-tab-pane" aria-selected="true">Performance</button>
                    </li>
                    <li wire:click="changeGraphType('line')" class="nav-item" role="presentation">
                        <button class="nav-link" id="Rates-tab" data-bs-toggle="tab" data-bs-target="#Rates-tab-pane" type="button" role="tab" aria-controls="Rates-tab-pane" aria-selected="false">Rates</button>
                    </li>
                    <li wire:click="changeGraphType('pie')" class="nav-item" role="presentation">
                        <button class="nav-link" id="Demand-tab" data-bs-toggle="tab" data-bs-target="#Demand-tab-pane" type="button" role="tab" aria-controls="Demand-tab-pane" aria-selected="false">Demand</button>
                    </li>
                </ul>
                <button class="btn btn-primary">Free OTB Data</button>
            </div>

            <div class="tab-content p-4" id="myTabContent">
                <div class="tab-pane fade show active" id="Performance-tab-pane" role="tabpanel" aria-labelledby="Performance-tab" tabindex="0">
                    
                    <div style="position: relative;">
                        <canvas id="myChart"></canvas>
                        {{-- <livewire:layout.graph /> --}}
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

    <script>
        document.addEventListener("livewire:load", () => {
            Livewire.on('refreshGraph', (graphType) => {
                const $tooltip = document.getElementById('chart-tooltip');
                const ctx = document.getElementById('myChart').getContext('2d');
                new Chart(ctx, {
                   type: graphType,
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
        });
    </script>
</div>