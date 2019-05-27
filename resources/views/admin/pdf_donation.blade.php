<!DOCTYPE html>
<html lang="en">

<h1>Donation receipt</h1>
<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-3" style="background-color:lavender;">
            Holy family church<br>
            Bhuigaon, Vasai(west),<br>
            Dist-Palghar, Pin - 401201.
        </div>

        <div class="col-lg-9" style="background-color:lavenderblush;">
            Donated by:{{ $donation_details->donor_name }}<br>
            Address :{{ $donation_details->donor_address }}<br>
            Date of donation{{ $donation_details->donation_date }}<br>
            Donation value:{{ $donation_details->donation_amount }}<br>
            Payment mode:{{ $donation_details->payment_mode }}<br>
            Authorized signature:                       <br>
        </div>
    </div>
</div>
</body>
<p>Thank you for your generosity.We appreciate you support!</p>
<br>
<p>Printed on:</p>{{ date('Y-m-d') }}

</html>




