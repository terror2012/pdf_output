<page>
    <!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>A simple, clean, and responsive HTML invoice template</title>

        <style>
            .invoice-box{
                max-width:800px;
                margin:auto;
                padding:30px;
                border:1px solid #eee;
                box-shadow:0 0 10px rgba(0, 0, 0, .15);
                font-size:16px;
                line-height:24px;
                color:#555;
            }


            .invoice-box table td{
                padding:5px;
                vertical-align:top;
            }

            .invoice-box table tr td:nth-child(2){
                text-align:right;
            }

            .invoice-box table tr.top table td{
                padding-bottom:20px;
            }

            .invoice-box table tr.top table td.title{
                font-size:45px;
                line-height:45px;
                color:#333;
            }

            .invoice-box table tr.information table td{
                padding-bottom:40px;
            }

            .invoice-box table tr.heading td{
                background:#eee;
                border-bottom:1px solid #ddd;
                font-weight:bold;
            }

            .invoice-box table tr.details td{
                padding-bottom:20px;
            }

            .invoice-box table tr.item td{
                border-bottom:1px solid #eee;
            }

            .invoice-box table tr.item.last td{
                border-bottom:none;
            }

            .invoice-box table tr.total td:nth-child(2){
                border-top:2px solid #eee;
                font-weight:bold;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td{
                    width:100%;
                    display:block;
                    text-align:center;
                }

                .invoice-box table tr.information table td{
                    width:100%;
                    display:block;
                    text-align:center;
                }

        </style>
    </head>

    <body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0" style="width: 100%">
            <tr class="top">
                <td colspan="2">
                    <table style="width: 100%">
                        <tr>
                            <td class="title">
                                <img src="logo.jpg" style="width:100%; max-width:300px;">
                            </td>

                            <td align="right" style="border: 1px solid black">
                                <strong>Company</strong> Lorenzo Filippi <br>
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HKL Consulting <br>
                                <strong>Address</strong> XXXXXXXX <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XXXXXXXX <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XXXXXXXX <br>
                                <strong>VAT Num.</strong> XXXXXXXX
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="details">
                <td style="border: 1px solid black">
                    Customer Name
                </td>

                <td style="border: 1px solid black">
                    <?php echo $company; ?>
                </td>
            </tr>

            <tr class="details">
                <td style="border: 1px solid black">
                    Address
                </td>

                <td style="border: 1px solid black">
                    <?php echo $address; ?>
                </td>
            </tr>

            <tr class="details">
                <td style="border: 1px solid black">
                    &nbsp;
                </td>

                <td style="border: 1px solid black">
                    <?php echo $city; ?>
                </td>
                <td style="border: 1px solid black"><?php echo $zip; ?></td>
                <td style="border: 1px solid black"><?php echo $state; ?></td>
            </tr>

            <tr class="details">
                <td style="border: 1px solid black">
                    VAT Number
                </td>

                <td style="border: 1px solid black">
                    <?php echo $vat_number ?>
                </td>
            </tr>

            <tr class="item">
                <td style="border: 1px solid black">
                        Company Reg Number
                </td>

                <td style="border: 1px solid black">
                        <?php echo $company_number ?>
                </td>
            </tr>
            <tr class="item">
                <td style="border: 1px solid black">
                    Invoice Number
                </td>

                <td style="border: 1px solid black">
                    <?php echo $invoice_number ?>
                </td>
            </tr>
            <tr class="item">
                <td style="border: 1px solid black">
                    Account
                </td>

                <td style="border: 1px solid black">
                    XXXXXXXXX
                </td>
            </tr>
            <tr class="item">
                <td style="border: 1px solid black">
                    Data
                </td>

                <td style="border: 1px solid black">
                    <?php echo $dates ?>
                </td>
            </tr>
        </table>

        <br>
        <table style="width: 100%">
            <tr>
                <td><strong>Our fee for the services rendered are as follow:</strong></td>
                <td><strong><?php echo $currency ?></strong></td>
            </tr>
        </table>

        <br>

        <table style="width: 100%">
            <?php

            for($i = 1; $i < count($arraySet) + 1; $i++)
            {
            ?>
                <tr>
                    <td style="border: 1px solid black;"><?php echo $arraySet[$i]['servicedescription_'.$i] ?></td>
                    <td style="border: 1px solid black"><?php echo $arraySet[$i]['netamount_'.$i] ?></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black">VAT <?php echo $arraySet[$i]['vatcode_'.$i] ?> (see NOTE)</td>
                    <td style="border: 1px solid black"><?php echo $arraySet[$i]['vatamount_'.$i] ?></td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <table align="center">
            <tr>
                <td><strong>Total</strong></td>
                <td><strong><?php echo $total_amount ?></strong></td>
            </tr>
        </table>
        <br>

        <strong><?php echo $note; ?></strong>
        <br>

        <strong>Kindly make the payment to: </strong>
        <br>
        <strong>Bank Name:</strong> &nbsp; &nbsp; &nbsp; XXXXx
        <br>
        <strong>IBAN:</strong> &nbsp; &nbsp; &nbsp; &nbsp; XXXXx
        <br>
        <strong>BIC (Swift):</strong> &nbsp; &nbsp; &nbsp; XXXXx
<br>
        <br>
        <div style="float: right;">
            <strong>Lorenzon Filippi</strong>
            <br>
            <strong>Contact Information:</strong>
            <br>
            XXXXXXXXXXXXX
            <br>
            XXXXXXXXX
        </div>
    </div>
    </body>
    </html>
</page>