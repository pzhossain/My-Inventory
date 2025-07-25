<html>
<head>
    <style>
        .customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 12px !important;
        }

        .customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .customers tr:nth-child(even){background-color: #f2f2f2;}

        .customers tr:hover {background-color: #ddd;}

        .customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 6px;
            text-align: left;
            background-color: #04aa6d27;
            color: rgb(0, 0, 0);
        }
    </style>
</head>
<body>

<h3>Summary</h3>

<table class="customers" >
    <thead>
    <tr>
        <th>Report</th>
        <th>Date</th>
        <th>Total sale</th>
        <th>Discount</th>
        <th>Vat</th>
        <th>Payable</th>
        <th>Total Profit</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Sales Report</td>
        <td>{{$from_date}} to {{$to_date}}</td>
        <td>{{$total}}</td>
        <td>{{$discount}}</td>
        <td>{{$vat}}</td>
        <td>{{$payable}} </td>
        <td>{{$total_profit}} </td>
    </tr>
    </tbody>
</table>


<h3>Details</h3>
<table class="customers" >
    <thead>
    <tr>
        <th>Customer</th>
        <th>Phone</th>        
        <th>Total</th>
        <th>Discount</th>
        <th>Vat</th>
        <th>Payable</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($list as $item)
        <tr>
            <td>{{$item->customer->name}}</td>
            <td>{{$item->customer->mobile}}</td>           
            <td>{{$item->total }}</td>
            <td>{{$item->discount }}</td>
            <td>{{$item->vat }}</td>
            <td>{{$item->payable }}</td>
            <td>{{$item->created_at }}</td>
        </tr>
    @endforeach

    </tbody>
</table>
</body>
</html>




