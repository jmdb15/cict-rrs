<div class="container mx-auto px-0 sm:px-4">
    <div class="flex flex-wrap justify-center lg:justify-around xl:justify-between gap-4 pt-4 sm:p-8 lg:p-20">
        <div class="card">
            <div class="card-img-cont">
                <img src="../../src/img/Bell.png" class="h-auto w-full lg:w-3/4 rounded" alt="">
            </div>
            <div class="card-text-cont">
                <h1 class="card-text-number"><?=$row['request_row']?></h1>
                <p class="card-text-subheader">Total of Request</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img-cont">
                <img src="../../src/img/PDF.png" class="h-auto w-full lg:w-3/4 rounded" alt="">
            </div>
            <div class="card-text-cont">
                <h1 class="card-text-number"><?=$row['studies_row']?></h1>
                <p class="card-text-subheader">Files</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img-cont">
                <img src="../../src/img/Survey.png" class="h-auto w-full lg:w-3/4 rounded" alt="">
            </div>
            <div class="card-text-cont">
                <h1 class="card-text-number"><?=$row['surveys_row']?></h1>
                <p class="card-text-subheader">Surveys</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img-cont">
                <img src="../../src/img/People.png" class="h-auto w-full lg:w-3/4 rounded" alt="">
            </div>
            <div class="card-text-cont">
                <h1 class="card-text-number"><?=$row['user_row']?></h1>
                <p class="card-text-subheader">User Registered</p>
            </div>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row justify-center items-center gap-4 mx-auto my-8">
        <!-- PIE CHART CONTAINER -->
        <div id="pieChart" class="h-64 lg:h-[370px] w-[90%] min-w-[360px] max-w-[700px] lg:w-[49%]"></div>
    
        <!-- DONUT CONTAINER -->
        <div id="chartContainer" class="h-64 lg:h-[370px] w-[90%] min-w-[360px] max-w-[700px] lg:w-[49%]"></div>
    </div>

    <!-- SIDE CHART FOR MOST VIEWED -->
    <div id="mostViewedChart" class="mx-auto h-64 lg:h-[370px] w-[90%] lg:w-full max-w-[1420px]"></div> 


</div>


<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script>
    
    window.onload = function() {
        setActiveNav('dashboard');
        getPieObject();
        getMostViewedObject();
        getDonutObject();
    }
    
    // AJAX CALLS
    function getPieObject(){
        $.ajax({
            url:'../../src/ajax/activities-pie.php',
            success: function(response){
                const data = JSON.parse(response);
                createPieChart(data);
            }
        });
    }

    function getDonutObject(){
        $.ajax({
            url:'../../src/ajax/donut.php',
            success: function(response){
                const data = JSON.parse(response);
                createDonut(data);
            }
        });
    }

    function getMostViewedObject(){
        $.ajax({
            url:'../../src/ajax/most-viewed.php',
            success: function(response){
                const data = JSON.parse(response);
                createMostViewedChart(data);
            }
        });
    }

    // SIDE CHART JS (MOST VIEWED)
    function createMostViewedChart(data){
        var mostViewedChart = new CanvasJS.Chart("mostViewedChart", {
            theme: "light2", // "light1", "light2", "dark1"
            animationEnabled: true,
            exportEnabled: true,
            title: {
                text: "Top 10 Most Viewed Research"
            },
            axisX: {
                margin: 10,
                labelPlacement: "inside",
                tickPlacement: "inside"
            },
            // axisY2: {
            //     title: "Views (in billion)",
            //     titleFontSize: 14,
            //     includeZero: true,
            //     suffix: "bn"
            // },
            data: [{
                type: "bar",
                yValueFormatString: "",
                indexLabel: "{y}",
                axisYType: "secondary",
                dataPoints: data
            }]
        });
        mostViewedChart.render();
    }

    // PIE CHART JS
    function createPieChart(data){
       var pieChart = new CanvasJS.Chart("pieChart", {
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: "Activities in the System"
            },
            data: [{
                type: "pie",
                startAngle: 25,
                toolTipContent: "<b>{label}</b>: {y}%",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 12,
                indexLabel: "{label} - {y}%",
                dataPoints: data
            }]
        });
        pieChart.render();
    }

    function createDonut(data){
        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            exportEnabled: true,
            animationEnabled: true,
            title:{
                text: "Uploaded Research per Course",
                horizontalAlign: "center",
            },
            data: [{
                type: "doughnut",
                startAngle: 60,
                // innerRadius: 60,
                indexLabelFontSize: 14,
                indexLabel: "{label} - #percent%",
                toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                dataPoints: data
            }],
        });
        chart.render();
    }
</script>