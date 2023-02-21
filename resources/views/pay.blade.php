<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <label for="">Amount</label>
        <input type="text" name="amount" id="" />
        <button type="submit" onclick="pay()">Pay</button>

        <script>
            function pay() {}
        </script>
    </body>
</html> -->

<button id="rzp-button1" onclick="pay()">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script>
    function pay(){
var options = {
    "key": "rzp_test_w8Y1EMxtNy1vBM", // Enter the Key ID generated from the Dashboard
    "amount": 50000, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    // "order_id": "1234", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        alert('payment successful');
        
        // alert(response.razorpay_payment_id);
        // alert(response.razorpay_order_id);
        // alert(response.razorpay_signature)
    },
    // "prefill": {
    //     "name": "Gaurav Kumar",
    //     "email": "gaurav.kumar@example.com",
    //     "contact": "9999999999"
    // },
    // "notes": {
    //     "address": "Razorpay Corporate Office"
    // },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
         alert(response.error.code);
        // alert(response.error.description);
        // alert(response.error.source);
       
});
// document.getElementById('rzp-button1').onclick = function(e){
//     rzp1.open();
//     e.preventDefault();
// }
rzp1.open();
    }
</script>
