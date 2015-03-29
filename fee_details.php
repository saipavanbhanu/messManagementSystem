<?php
	include_once 'core.inc.php';
	include_once 'connect.inc.php';
	$student_username=getuserfield('username');
	$firstname = getuserfield('firstname');
	$surname = getuserfield('surname');

	$q="select * from fees where username='{$student_username}'";
	$q_r=mysql_query($q);
	$row=mysql_fetch_array($q_r);
	$var=$row['transaction_no'];
	
?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	NITR
</title>
    <style type="text/css">
        #header
        {
            background: #ffffff url('/images/header.jpg') no-repeat;
            height: 136px;
        }
        td
        {
            height: 30px;
            font-family: Calibri;
            border-bottom: Solid 1px #0099cc;
        }
        gridstyle
        {
            margin: 0px auto;
        }
         .txtVertical
        {
            filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); /* IE6,IE7 */
            ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)"; /* IE8 */
            -moz-transform: rotate(-90deg); /* FF3.5+ */
            -o-transform: rotate(-90deg); /* Opera 10.5 */
            -webkit-transform: rotate(-90deg); /* Safari 3.1+, Chrome */ /*-ms-transform:rotate(-90deg);*/
            position: absolute;
            font-weight: bold;
            font-family: Arial;
        }
        b
        {
        	font-family:Arial;
        	font-size:medium;
        	color:Red;
        }
        i
        {
        	font-family:Arial;
        	color:Black;
        	font-size:small;
        }
    </style>
    <script type="text/javascript">
        function printing() {

            document.getElementById("btnPrint").style.display = 'none';
            window.print();
            //window.close();
        }
    </script>
</head>
<body>
    <form name="form1" method="post" action="Print_Receipt1.aspx?trxsm=6851" id="form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTEyMDU1NTMzNw9kFgICAw9kFhYCAQ8PFgIeBFRleHQFCTExMWNzMDEzMmRkAgMPDxYCHwAFCTE2QXByMjAxNGRkAgUPDxYCHwAFHVBPVEhVUkkgQkhBTlUgU0FJIFBBVkFOIEtVTUFSZGQCBw8PFgIfAAUHMjAxMy0xNGRkAgkPDxYCHwAFBlNwcmluZ2RkAgsPPCsADQIADxYEHgtfIURhdGFCb3VuZGceC18hSXRlbUNvdW50AgpkBRYEHgZIZWlnaHQbAAAAAAAAOUABAAAAHgRfIVNCAoABFgJmD2QWFgIBD2QWBmYPZBYCZg8VAQExZAIBD2QWAgIBDw8WAh8ABQpUdXRpb24gRmVlZGQCAg9kFgICAQ8PFgIfAAUFMTc1MDBkZAICD2QWBmYPZBYCZg8VAQEyZAIBD2QWAgIBDw8WAh8ABShPdGhlciBGZWVzKEV4YW0uLCBMaWIsIEVsZWN0cmljaXR5IGV0Yy4pZGQCAg9kFgICAQ8PFgIfAAUEMzAwMGRkAgMPZBYGZg9kFgJmDxUBATNkAgEPZBYCAgEPDxYCHwAFFFN0dWRlbnQgQWN0aXZpdHkgRmVlZGQCAg9kFgICAQ8PFgIfAAUEMTUwMGRkAgQPZBYGZg9kFgJmDxUBATRkAgEPZBYCAgEPDxYCHwAFC01lZGljYWwgRmVlZGQCAg9kFgICAQ8PFgIfAAUEMTAwMGRkAgUPZBYGZg9kFgJmDxUBATVkAgEPZBYCAgEPDxYCHwAFCEJvb2sgRmVlZGQCAg9kFgICAQ8PFgIfAAUEMTAwMGRkAgYPZBYGZg9kFgJmDxUBATZkAgEPZBYCAgEPDxYCHwAFEEhvc3RlbCBTZWF0IFJlbnRkZAICD2QWAgIBDw8WAh8ABQQyNTAwZGQCBw9kFgZmD2QWAmYPFQEBN2QCAQ9kFgICAQ8PFgIfAAUQTGF0ZSBQYXltZW50IEZlZWRkAgIPZBYCAgEPDxYCHwAFATBkZAIID2QWBmYPZBYCZg8VAQE4ZAIBD2QWAgIBDw8WAh8ABRFFc3RhYmxpc2htZW50IEZlZWRkAgIPZBYCAgEPDxYCHwAFBDI1MDBkZAIJD2QWBmYPZBYCZg8VAQE5ZAIBD2QWAgIBDw8WAh8ABQhNZXNzRHVlc2RkAgIPZBYCAgEPDxYCHwAFBTEyNTAwZGQCCg9kFgZmD2QWAmYPFQECMTBkAgEPZBYCAgEPDxYCHwAFCE90aGVyRmVlZGQCAg9kFgICAQ8PFgIfAAUBMGRkAgsPZBYCAgIPZBYCAgEPDxYCHwAFBTQxNTAwZGQCDQ8PFgIfAAUHMzAyOTg5MGRkAg8PDxYCHwAFCzA4IEphbiAyMDE0ZGQCEQ8PFgIfAAUKbmV0QmFua2luZ2RkAhMPDxYCHwAFB1N1Y2Nlc3NkZAIXDw8WAh8ABRk8PU5JVFI6MTAwNDAwMTYwNDIwMTQzMT0+ZGQYAQUJZ3ZQYXltZW50DzwrAAoBCAIBZIDtESKmIAOEg8harBBkLFtFa7hL" />
</div>

<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWAgL8tsfHBgL+6YyoCttc/IntjUQapvR4GH0gqOnX5X3b" />
</div>
    <div style="width: 800px; margin: 0px auto;">
        <div id="header">
            &nbsp; 
        </div>
        <div>
            <table width="80%" cellspacing="0" style="margin: 0px auto;">
                <tr>
                    <td width="30%">
                        Name
                    </td>
                    <td width="3%">
                        :
                    </td>
                    <td width="30%">
                        <span id="lblName"><?php echo $firstname.' '.$surname; ?></span>
                    </td>
                    <td width="30%">
                        Academic Year
                    </td>
                    <td width="3%">
                        :
                    </td>
                    <td width="30%">
                        <span id="lblacyear">2013-14</span>
                    </td>
                </tr>
                <tr>
                    <td width="30%">
                        Session
                    </td>
                    <td width="3%">
                        :
                    </td>
                    <td width="30%">
                        <span id="lblSession">Spring</span>
                    </td>
                    <td colspan="3">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align: center; padding-top: 20px;">
                        <div>
	<table class="gridstyle" cellspacing="0" border="0" id="gvPayment" style="border-color:#5E5A5A;border-width:1px;border-style:Solid;width:100%;border-collapse:collapse;">
		<tr align="center" style="color:White;background-color:#588DD1;height:25px;">
			<th scope="col">
                                        <span id="gvPayment_ctl01_lblslno">Sl.No.</span>
                                    </th><th scope="col" style="text-align:center;">Fee Heads</th><th scope="col">Amount</th>
		</tr><tr style="height:25px;">
			<td align="center" style="width:10px;text-align:center;">
                                        1
                                    </td><td style="width:250px;text-align:left;">
                                        <span id="gvPayment_ctl07_lblHead">Hostel Seat Rent</span>
                                    </td><td align="center" style="width:150px;text-align:center;">
                                        <span id="gvPayment_ctl07_lblamount">2500</span>
                                    </td>
		</tr><tr style="height:25px;">
			<td align="center" style="width:10px;text-align:center;">
                                        2
                                    </td><td style="width:250px;text-align:left;">
                                        <span id="gvPayment_ctl08_lblHead">Late Payment Fee</span>
                                    </td><td align="center" style="width:150px;text-align:center;">
                                        <span id="gvPayment_ctl08_lblamount">0</span>
                                    </td>
		</tr><tr style="height:25px;">
			<td align="center" style="width:10px;text-align:center;">
                                        3
                                    </td><td style="width:250px;text-align:left;">
                                        <span id="gvPayment_ctl09_lblHead">Establishment Fee</span>
                                    </td><td align="center" style="width:150px;text-align:center;">
                                        <span id="gvPayment_ctl09_lblamount">2500</span>
                                    </td>
		</tr><tr style="height:25px;">
			<td align="center" style="width:10px;text-align:center;">
                                        4
                                    </td><td style="width:250px;text-align:left;">
                                        <span id="gvPayment_ctl10_lblHead">MessDues</span>
                                    </td><td align="center" style="width:150px;text-align:center;">
                                        <span id="gvPayment_ctl10_lblamount">12500</span>
                                    </td>
		</tr><tr style="height:25px;">
			<td align="center" style="width:10px;text-align:center;">
                                        5
                                    </td><td style="width:250px;text-align:left;">
                                        <span id="gvPayment_ctl11_lblHead">OtherFee</span>
                                    </td><td align="center" style="width:150px;text-align:center;">
                                        <span id="gvPayment_ctl11_lblamount">0</span>
                                    </td>
		</tr><tr align="center" style="color:White;background-color:#588DD1;font-weight:bold;height:25px;">
			<td>&nbsp;</td><td>
                                        <span id="gvPayment_ctl12_lbltxttotal">Total</span>
                                    </td><td>
                                        <span id="gvPayment_ctl12_lblTotal">17500</span>
                                    </td>
		</tr>
	</table>
</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style=" padding-top: 20px;" align="left">
                        <div style="margin: 0px">
                            <table style="width:auto;border:solid 1px #588dd1;" cellspacing="0">
                               <tr>
                                 <td style="background-color:#588dd1;color:#ffffff;" colspan="3" align="center">
                                    Transaction Details
                                 </td>
                               </tr>
                                <tr>
                                    <td>
                                        TransactionNo
                                    </td>
                                    <td width="3%">
                                        :
                                    </td>
                                    <td>
                                        <?php echo $var;?>
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    <td>
                                        Transaction Status
                                    </td>
                                    <td width="3%">
                                        :
                                    </td>
                                    <td>
                                        <span id="lblstatus">Success</span>
                                    </td>
                                </tr>
								
								<tr>
								<td>
									<a href="student_homepage.php" style="font-size:25px">Back to Student's page</a>
								</td>
								
								</tr>
								
                            </table>
                        </div>
                    </td>
                    <td colspan="3" align="right" valign="bottom">
                       <div>
                                    <br /><br />
                           
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <br />
        
      <br /> 
      <div >
        <br />
      </div>                              
    </div>
    </form>
</body>
</html>

