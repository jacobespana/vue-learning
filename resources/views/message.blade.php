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

    <!--this blade demonstrates use of custom components created in the app.js file-->

    <div id="root" class="container">

        <message title="First Post" body="Lorem ipsum dolar sit ..."></message>
        <message title="Second Post" body="fuck you"></message>
        <message title="hello" body="fuck you"></message>

    </div>

    <script src="/js/app.js"></script>


</body>
</html>