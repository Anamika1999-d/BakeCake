@extends('layout.admin')

@section('body')
<!-- Chart's container -->
<h3>non of orders per month</h3>
    <div id="chart" style="height: 300px;"></div>
    <h3>earned per day</h3>
    <div id="chart2" style="height: 300px;"></div>
    <!-- <div id="chart3" style="height: 300px;"></div> -->
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->
    <script>
    var date = @json($date);
    var delivery_date = @json($delivery_date);
    var total = @json($total);
    var price = @json($price);
    var total = @json($no_of_orders);
      const chart = new Chartisan({
        el: '#chart',
        data: {
            chart: { "labels": delivery_date },
            datasets: [
                { "name": "Sample", "values": total },
            ],
        },
        loader: {
            color: '#222',
            size: [30, 30],
            type: 'bar',
            textColor: '#000',
            text: 'Loading some chart data...',
        },
      });
      const chart2 = new Chartisan({
        el: '#chart2',
        data: {
            chart: { "labels": date },
            datasets: [
                { "name": "Sample 1", "values": price }
            ],
        },
        hooks: new ChartisanHooks()
            .colors(['#ECC94B', '#4299E1', '#AAEE11'])
            .datasets([{ type: 'line', fill: true }, 'line']),
    });
    
    </script>
@endsection