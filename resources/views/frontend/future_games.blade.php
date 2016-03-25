<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            td {
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
              <div class="title">Upcoming Games</div>


            <!-- {{!! var_dump($games) !!}} -->
            {!! $games['matches'][0]['league']['name'] !!}<br>
            Best out of {!! $games['matches'][0]['series_type'] !!}<br>
            <img src="<?php echo 'http://dailydota2.com'.$games['matches'][0]['league']['image_url']?>" width="100px", height="auto">
            <hr>

            {!! $games['matches'][1]['league']['name'] !!}<br>
            Best out of {!! $games['matches'][1]['series_type'] !!}<br>
            <img src="<?php echo 'http://dailydota2.com'.$games['matches'][1]['league']['image_url']?>" width="100px", height="auto">
            <hr>

            {!! $games['matches'][2]['league']['name'] !!}<br>
            Best out of {!! $games['matches'][1]['series_type'] !!}<br>
            <img src="<?php echo 'http://dailydota2.com'.$games['matches'][2]['league']['image_url']?>" width="100px", height="auto">
            <hr>

            {!! $games['matches'][3]['league']['name'] !!}<br>
            Best out of {!! $games['matches'][3]['series_type'] !!}<br>
            <img src="<?php echo 'http://dailydota2.com'.$games['matches'][3]['league']['image_url']?>" width="100px", height="auto">
            <hr>

            {!! $games['matches'][4]['league']['name'] !!}<br>
            Best out of {!! $games['matches'][4]['series_type'] !!}<br>
            <img src="<?php echo 'http://dailydota2.com'.$games['matches'][4]['league']['image_url']?>" width="100px", height="auto">
            <hr>

            {!! $games['matches'][5]['league']['name'] !!}<br>
            Best out of {!! $games['matches'][5]['series_type'] !!}<br>
            <img src="<?php echo 'http://dailydota2.com'.$games['matches'][5]['league']['image_url']?>" width="100px", height="auto">
    </body>
</html>
