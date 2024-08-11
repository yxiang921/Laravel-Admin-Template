@extends('layouts.sidebar')
@section('content')
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md py-4 px-6 flex items-center justify-between border-b border-gray-200">
            <div class="text-gray-800 text-xl font-semibold">Events</div>
        </header>

        <!-- Main area -->
        <main class="flex flex-col m-4">
            <div class="m-4 flex flex-col justify-center items-center lg:flex-row">
                <div class="bg-white w-5/6 shadow-lg rounded-lg p-6 flex items-center justify-between mb-4 lg:mr-4">
                    <div class="text-gray-700 text-lg font-semibold">Total Events</div>
                    <div class="text-3xl font-bold text-blue-600">124</div>
                </div>
                <div class="bg-white w-5/6 shadow-lg rounded-lg p-6 flex items-center justify-between mb-4 lg:mr-4">
                    <div class="text-gray-700 text-lg font-semibold">Upcoming Events</div>
                    <div class="text-3xl font-bold text-green-600">45</div>
                </div>
                <div class="bg-white w-5/6 shadow-lg rounded-lg p-6 flex items-center justify-between mb-4 lg:mr-4">
                    <div class="text-gray-700 text-lg font-semibold">Registered Users</div>
                    <div class="text-3xl font-bold text-purple-600">890</div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <!-- Data analytic 1 -->
                <div class="bg-white shadow-md p-4">
                    <h2 class="text-lg font-semibold mb-4">Data Analytic 1</h2>
                    <div>
                        <canvas id="chart-1"></canvas>
                    </div>
                </div>

                <!-- Data analytic 2 -->
                <div class="bg-white shadow-md p-4">
                    <h2 class="text-lg font-semibold mb-4">Data Analytic 2</h2>
                    <div class="">
                        <canvas id="chart-2"></canvas>
                    </div>
                </div>
            </div>

            <!-- Chart -->
            <div class="bg-white shadow-md p-4 mt-4">
                <h2 class="text-lg font-semibold mb-4">Chart</h2>
                <div>
                    <canvas id="chart-3"></canvas>
                </div>
            </div>
        </main>
    </div>

<script>
    var barChartCtx = document.getElementById('chart-1').getContext('2d');
    var barChart = new Chart(barChartCtx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    });

    var pieChartCtx = document.getElementById('chart-2').getContext('2d');
    var pieChart = new Chart(pieChartCtx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    var verticalBarChartCtx = document.getElementById('chart-3').getContext('2d');
    var verticalBarChart = new Chart(verticalBarChartCtx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            indexAxis: 'y',
            scales: {
                x: {
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    });


    pieChart.resize(600, 450);
</script>

@endsection