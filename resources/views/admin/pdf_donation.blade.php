<!DOCTYPE html>
<html lang="en">

<h1>Donation receipt</h1>
<body>
<div class="container-fluid">

    <div class="row">
        <div class="column" style="background-color:lavender;">
            Holy family church<br>
            Bhuigaon, Vasai(west),<br>
            Dist-Palghar, Pin - 401201.<br>
            Email :hfc@yahoo.com<br>
            Pnone no: 0250-6416128/29/30<br>
        </div>

        <div class="column" style="background-color:lavenderblush;">
            Donated by: <span style="display:inline-block; width: 25px;"></span>{{ $donation_details->donor_name }}<br>
            Address :<span style="display:inline-block; width: 40px;"></span>{{ $donation_details->donor_address }}<br>
            Date of donation : <span style="display:inline-block; width: 12px;"></span>{{ $donation_details->donation_date }}<br>
            Donation value:<span style="display:inline-block; width: 30px;"></span>{{ $donation_details->donation_amount }}<br>
            Payment mode:<span style="display:inline-block; width: 25px;"></span>{{ $donation_details->payment_mode }}<br>
            Authorized signature:                       <br>
        </div>
    </div>
</div>
</body>
<p>Thank you for your generosity.We appreciate you support!</p>
<br>
<p>Printed on:</p>{{ date('Y-m-d') }}

</html>




