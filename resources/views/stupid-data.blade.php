<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jqxGrid Example</title>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jqWidgets CSS -->
    <link rel="stylesheet" href="https://jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />
    <!-- Include jqWidgets JavaScript -->
    <script type="text/javascript" src="https://jqwidgets.com/public/jqwidgets/jqx-all.js"></script>
</head>
<body>
<!-- Div for jqxGrid -->
<div id="myGrid"></div>

<!-- JavaScript to initialize jqxGrid -->
<script type="text/javascript">
    $(document).ready(function () {
        // Fetch data from Laravel backend
        $.ajax({
            url: '/api/stupid-data',
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                // Define data source
                let source = {
                    localdata: data,
                    datatype: "array",
                    datafields: [
                        { name: 'id', type: 'number' },
                        { name: 'name', type: 'string' },
                        { name: 'email', type: 'string' },
                        { name: 'phone', type: 'string' },
                        { name: 'is_stupid', type: 'string' }
                    ]
                };


                let dataAdapter = new $.jqx.dataAdapter(source);

                // Initialize jqxGrid
                $("#myGrid").jqxGrid({
                    width: 900,
                    source: dataAdapter,
                    columnsresize: true,
                    columns: [
                        { text: 'ID', datafield: 'id', width: 50 },
                        { text: 'Name', datafield: 'name', width: 200 },
                        { text: 'Email', datafield: 'email', width: 300 },
                        { text: 'Phone', datafield: 'phone', width: 200 },
                        { text: 'Is_Stupid', datafield: 'is_stupid', width: 100 },
                    ]
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Error fetching data: " + textStatus, errorThrown);
            }
        });
    });
</script>
</body>
</html>
