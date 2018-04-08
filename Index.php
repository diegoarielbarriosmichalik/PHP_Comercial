<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Estudio 4k</title>
        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="images/icon.ico">


        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="assets/scss/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

        <?php
//        include './Conexion.php';
//
//        $query = 'SELECT * FROM cuenta order by fecha';
//        $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
//
//        $ar1 = array(2, 0);
//        $ar2 = array(2, 0);
//        $ar3 = array(3, 0);
//        $ar4 = array(4, 0);
//        $ar5 = array(5, 0);
//        $ar6 = array(6, 0);
//        $ar7 = array(7, 0);
//
//        $total1 = 0;
//        $total2 = 0;
//        $total3 = 0;
//        $total4 = 0;
//        $total5 = 0;
//        $total6 = 0;
//        $total7 = 0;
//
//        $c = 0;
//
//        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
//            while ($c <= 31) {
//                $c = $c + 1;
//                if (($line['fecha'] == '2018-04-' . $c)) {
//                    $total[$c] = str_replace(".00", "", $line['total']) + $total[$c];
//                    $ar[$c] = array($c, $total2);
//                }
//            }
//        }
        ?>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);


            var arrayJS7 = <?php echo json_encode($ar[7]); ?>;
            var arrayJS6 = <?php echo json_encode($ar[6]); ?>;
            var arrayJS5 = <?php echo json_encode($ar[5]); ?>;
            var arrayJS4 = <?php echo json_encode($ar[4]); ?>;
            var arrayJS3 = <?php echo json_encode($ar[3]); ?>;
            var arrayJS2 = <?php echo json_encode($ar[2]); ?>;
            var arrayJS1 = <?php echo json_encode($ar[1]); ?>;

            var dato = ['Dias', 'Ventas'];

            var dato1 = [arrayJS1[0], arrayJS1[1]];
            var dato2 = [arrayJS2[0], arrayJS2[1]];
            var dato3 = [arrayJS3[0], arrayJS3[1]];
            var dato4 = [arrayJS4[0], arrayJS4[1]];
            var dato5 = [arrayJS5[0], arrayJS5[1]];
            var dato6 = [arrayJS6[0], arrayJS6[1]];
            var dato7 = [arrayJS7[0], arrayJS7[1]];

            function drawChart() {

                var data = google.visualization.arrayToDataTable([dato, dato1, dato2, dato3, dato4, dato5, dato6, dato7]);



                var options = {
                    title: 'Ventas por dia',
                    curveType: 'function',
                    legend: {position: 'bottom'}
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
                chart.draw(data, options);



            }
        </script>


    </head>
    <body>



        <?php include './left_panel.php'; ?>

        <div id="right-panel" class="right-panel">

            <?php include './Header.html'; ?>


            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Inicio</h1>
                        </div>
                    </div>
                </div>

            </div>


            <div id="curve_chart" style="width: 900px; height: 500px"></div>



        </div><!-- /#right-panel -->

        <!-- Right Panel -->




        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

        <!--  flot-chart js -->
        <script src="assets/js/lib/flot-chart/excanvas.min.js"></script>
        <script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
        <script src="assets/js/lib/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/js/lib/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/js/lib/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/js/lib/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="assets/js/lib/flot-chart/curvedLines.js"></script>
        <script src="assets/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="assets/js/lib/flot-chart/flot-chart-init.js"></script>

    </body>
</html>
