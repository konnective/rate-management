<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Booking Receipt</title>
    <style>
        body {
            font-family: monospace;
            font-size: 12px;
            margin: 0;
            padding: 10px;
        }
        .page-break {
            page-break-after: always;
        }

        .receipt {
            flex: 1;
            width: 250px;
            margin: auto;
            float: left;
        }

        .header,
        .footer {
            text-align: center;
        }

        .title {
            font-size: 13px;
        }

        .line {
            border-top: 1px dashed #000;
            margin: 10px 0;
        }

        table {
            width: 100%;
            border-spacing: 10px;
        }
        td:first-child {
            text-align: left; /* Align first column to the left */
        }

        td:last-child {
            text-align: right; /* Align second column to the right */
        }

    </style>
</head>

<body>

    <div class="receipt page-break">
        <div class="header">
            {{-- <h2>MyHotel POS</h2> --}}
            <p class="title">Super 8 by Wyndham Madison South
                1602 West Beltline Highway
                Madison, Wisconsin 53713-2330
                608-2588882</p>
            <p class="title">Apr 23, 2025 04:27 PM</p>
        </div>

        <div class="line"></div>

        <table>
            <tr>
                <td>Guest Name</td>
                <td>Clinton Green</td>
            </tr>
            <tr>
                <td>Confirm #</td>
                <td>86147EE040297</td>
            </tr>
            <tr>
                <td>Arrival Date</td>
                <td>Apr 24, 2025</td>
            </tr>
            <tr>
                <td>Departure Date</td>
                <td>Apr 25, 2025</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td>Card Type</td>
                <td>VI</td>
            </tr>
            <tr>
                <td>Entry Method</td>
                <td>Manual</td>
            </tr>
            <tr>
                <td>Card #</td>
                <td>************0967</td>
            </tr>
            <tr>
                <td>Invoice</td>
                <td>59940064</td>
            </tr>
            <tr>
                <td>Approval Code</td>
                <td>613272</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td>Amount</td>
                <td>$123.71</td>
            </tr>
        </table>

        <p>********** APPROVED **********</p>
        <br>
        <p>x______________________________</p>
        <p>SIGNATURE</p>
        <div class="line"></div>
    </div>
    <div class="receipt page-break">
        <div class="header">
            {{-- <h2>MyHotel POS</h2> --}}
            <p class="title">Super 8 by Wyndham Madison South
                1602 West Beltline Highway
                Madison, Wisconsin 53713-2330
                608-2588882</p>
            <p class="title">Apr 23, 2025 04:27 PM</p>
        </div>

        <div class="line"></div>

        <table>
            <tr>
                <td>Guest Name</td>
                <td>Clinton Green</td>
            </tr>
            <tr>
                <td>Confirm #</td>
                <td>86147EE040297</td>
            </tr>
            <tr>
                <td>Arrival Date</td>
                <td>Apr 24, 2025</td>
            </tr>
            <tr>
                <td>Departure Date</td>
                <td>Apr 25, 2025</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td>Card Type</td>
                <td>VI</td>
            </tr>
            <tr>
                <td>Entry Method</td>
                <td>Manual</td>
            </tr>
            <tr>
                <td>Card #</td>
                <td>************0967</td>
            </tr>
            <tr>
                <td>Invoice</td>
                <td>59940064</td>
            </tr>
            <tr>
                <td>Approval Code</td>
                <td>613272</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td>Amount</td>
                <td>$123.71</td>
            </tr>
        </table>

        <p>********** APPROVED **********</p>
        <br>
        <p>x______________________________</p>
        <p>SIGNATURE</p>
        <div class="line"></div>
    </div>
</body>

</html>
