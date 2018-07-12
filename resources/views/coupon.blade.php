<!DOCTYPE html>
<html>
<head>
    <title>Vue.js Practice</title>

    <style>
        
        #root {

            padding-top: 40px;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

    <div id="root" class="container">

        <coupon @applied="onCouponApplied"></coupon>

        <h1 v-if="couponApplied">You used a coupon!</h1>

    </div>

    <script src="/js/app.js"></script>


</body>
</html>