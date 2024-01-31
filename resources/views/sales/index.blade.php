@extends('layouts.app')

@section('main', 'Sales')
@section('sub', '')

@section('content')


    <form action="{{ route('sales.yearly') }}" method="POST" id="graph">
        @csrf
        <div class="flex">
            <select id="year" name="year"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 mr-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="1">---Select year---</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
            </select>

            <select id="type" name="type" onchange="toggleMonthSelect()"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 mr-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="1">---Select type---</option>
                <option value="Yearly">Yearly</option>
                <option value="Monthly">Monthly</option>
            </select>

            <select id="month" name="month"
                class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 mr-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="0">--Select month--</option>
                <option value="1">January</option>
                <option value="2">Febraury</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>

            <button type="submit"
                class="inline-block px-6 py-3 text-xs font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Filter</button>
        </div>

    </form>

    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

    <div class="p-3 mt-5 shadow-xl rounded-xl">
        <div id="myPlot" style="width:100%;"></div>
    </div>

    <script>
        const xArray = [];
        const yArray = [];

        const data = [{
            x: xArray,
            y: yArray,
            type: "bar"
        }];

        const layout = {
            title: "Sales report"
        };

        Plotly.newPlot("myPlot", data, layout);

        //----------------load the month selector---------------
        function toggleMonthSelect() {
            var typeSelect = document.getElementById('type');
            var monthSelect = document.getElementById('month');
            if (typeSelect.value === 'Monthly') {
                monthSelect.classList.remove('hidden');
            } else {
                monthSelect.classList.add('hidden');
            }
        }
    </script>

@endsection

@section('script')
<script>
     $('body').on('submit', '#graph', function(e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),
                dataType: "JSON",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    const xArray = [];
                    const yArray = [];

                    const data = [{
                        x: response.dates,
                        y: response.count,
                        type: "bar"
                    }];

                    const layout = {
                        title: "Sales report"
                    };

                    Plotly.newPlot("myPlot", data, layout);
                },
                error: function(error) {
                    console.log(error);
                    toastr('please select all options');
                }
            });
        });


</script>
@endsection
