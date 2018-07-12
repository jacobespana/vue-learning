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

        <progress-view inline-template>
            
            <div>
                
                    <!--remember to use @{{ }} instead of {{ }} when using blade files-->
                <h1>Completion rate is @{{ completionRate }}%</h1>

                <p><button @click="completionRate += 10">Update Completion Rate</button></p>    
            </div>

        </progress-view>

    </div>

    <script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>

    <script src="/js/app.js"></script>


</body>
</html>