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

        <modal-card>
            
            <template slot="header">Green Bay Packers</template>

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et architecto beatae quod. Fugiat incidunt dicta nulla exercitationem voluptas rerum cum. Minus deserunt, odio reprehenderit quae nesciunt unde earum a reiciendis? 

            <template slot="footer">
            
                <a class="button is-primary">Save changes</a>        

                <a class="button">Discard</a>

            </template>       
            


        </modal-card>

    </div>

    <script src="/js/app.js"></script>


</body>
</html>