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
            
        <tabs>

            <tab name="About Us"> This is about us </tab>

            <tab name="About Our Culture"> This is about our culture </tab>

            <tab name="About Our Vision"> This is about our vision </tab>

        </tabs>

    </div>

    <script src="/js/app.js"></script>


</body>
</html>