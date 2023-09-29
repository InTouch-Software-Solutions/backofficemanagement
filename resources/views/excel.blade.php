<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <table class="excel-table">
        <thead>
            <tr>
                <th>Column A</th>
                <th>Column B</th>
                <th>Column C</th>
                <th>Column D</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="2">Data 1A (Row 1)</td>
                <td>Data 1B</td>
                <td>Data 2</td>
                <td>Data 3</td>
            </tr>
            <tr>
                <!-- This row will have one less cell for Column A -->
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
            </tr>
            <tr>
                <td>Data 7A</td>
                <td>Data 7B</td>
                <td>Data 8</td>
                <td>Data 9</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</body>
</html>
