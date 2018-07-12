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

    <!--this blade demonstrates use of custom components in app.js file; 
        also shows how to emit a custom event from child component
        and build a custom listener to speak to root instance div-->

    <div id="root" class="container">

        <button @click="showModal = true">Show Modal</button>
        
        <modal v-if="showModal" @close="showModal = false">

            <p style="text-align:center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis eligendi quod odio. Distinctio cum sit nostrum temporibus recusandae consectetur quidem? Eum placeat dolore asperiores laboriosam ipsa laudantium dolorem beatae ratione.
            </p>

        </modal>
        
    </div>

    <script src="/js/app.js"></script>


</body>
</html>