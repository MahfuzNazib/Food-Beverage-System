<!DOCTYPE html>
<html>

<head>
    {!! isset($pdf_style) ? $pdf_style : '' !!}
</head>

<body style="width: 90%;margin: auto;">
    <div class="card">
        <div class="card-header">
            <div class="col-md-6" style="text-align: center;margin-top: 20px;">
                <span
                    style="font-size:22px;padding: 2px 8px 2px 8px;border:4px double #000;display: inline-block;margin-left:45%;">
                    <span style="font-size:28px;">{{$title}}</span>
                </span>
                <br>
                <span style="font-size: 28px;font-weight: bold">Alesha Food & Beverage</span><br>
                <span style="font-size: 20px;">5th floor, 65b Kemal Ataturk Ave, Dhaka</span><br>
                <span style="font-size: 20px;">Bangladesh</span><br>
            </div><br><br>
        </div>
        <div class="row">
            <div class="col-md-6" style="width: 50%; display: block;">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="60%">Order ID</td>
                        <td>: {{ $order_details->order_id }}</td>
                    </tr>
                    <tr>
                        <td>Order Status</td>
                        <td>: {{ $order_details->order_status }}</td>
                    </tr>
                    <tr>
                        <td>Payment Status</td>
                        <td>: {{ $order_details->payment_status }}</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-6" style="width: 50%; display: block;">
                <table style="width=" 100%>
                    <tr>
                        <td width="50%">CustomerName</td>
                        <td>: {{ $order_details->name }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>: {{ $order_details->phone }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: {{ $order_details->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <br><br><br>
        <!-- /.card-header -->
        <div class="card-body" id="ledger_view">
            <table id="print_code" style="width: 630px">
                <thead>
                    <tr>
                        <th style="font-size:18px; width: 10px;padding:2px;">SL.No</th>
                        <th style="font-size:18px; width: 200px !important;padding:2px;">Product Name</th>
                        <th style="font-size:18px; width: 20px;padding:2px;">UnitPrice</th>
                        <th style="font-size:18px;padding:10px; width: 5px;">Qnty</th>
                        <th style="font-size:18px;padding:10px; width: 5px;">TotalPrice</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order_products as $product)
                    <tr>
                        <td style="padding: 8px; text-align: center; width: 10px;">{{ $loop->index + 1}}</td>
                        <td style="padding: 8px; text-align: center; width: 200px !important;">{{ $product->product->name}}
                        </td>
                        <td style="padding: 8px; text-align: center; width: 20px">{{$product->unit_price}}</td>
                        <td style="padding: 8px; text-align: center;width: 5px">{{ $product->product_quantity }}</td>
                        <td style="padding: 8px; text-align: center; width: 5px;">{{ $product->total_amount }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td style="text-align: left;" colspan="2" rowspan="4">
                            <h5>Shipping Address : </h5>
                            {{ $order_details->shipping_address }}
                        </td>
                        <td colspan="2">Sub Total</td>
                        <td style="text-align: center;">{{ $order_details->amount }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">Shipping Charge</td>
                        <td style="text-align: center;">
                            @if($order_details->shipping_charge)
                            {{ $order_details->shipping_charge }}/=
                            @else
                            0.00/=
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Discount</td>
                        <td style="text-align: center;">
                            @if($order_details->discount)
                            {{ $order_details->discount }}/=
                            @else
                            0.00/=
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Payble Amount</td>
                        <td style="text-align: center;">{{ $order_details->payble_amount }}</td>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
    </div>
</body>

</html>
