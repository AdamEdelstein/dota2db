<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

      <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">

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




              <div class="container">
	<div class="cards">


		<a class="card" href='{!! $games['matches'][0]['link'] !!}'>
			<span class="card-header" style="background-image: url(<?php echo 'http://dailydota2.com'.$games['matches'][0]['league']['image_url']?>);">
				<span class="card-title">
					<h3>{!! $games['matches'][0]['league']['name'] !!}</h3>
				</span>
			</span>
			<span class="card-summary card-sizes">
        <img src="<?php echo 'http://dailydota2.com'.$games['matches'][0]['team1']['logo_url']?>" width="100px", height="auto"> {!! $games['matches'][0]['team1']['team_name'] !!}<br>
        <div style="text-align: center">VS</div><br>

        {!! $games['matches'][0]['team2']['team_name'] !!} <img src="<?php echo 'http://dailydota2.com'.$games['matches'][0]['team2']['logo_url']?>" width="100px", height="auto">

        <br><br>

        Best out of {!! $games['matches'][0]['series_type'] !!}
			</span>
			<span class="card-meta">
			T-Minus:	{!! $games['matches'][0]['timediff'] !!} (seconds)
			</span>
		</a>

    <a class="card" href='{!! $games['matches'][1]['link'] !!}'>
			<span class="card-header" style="background-image: url(<?php echo 'http://dailydota2.com'.$games['matches'][1]['league']['image_url']?>);">
				<span class="card-title">
					<h3>{!! $games['matches'][1]['league']['name'] !!}</h3>
				</span>
			</span>
			<span class="card-summary card-sizes">
        <img src="<?php echo 'http://dailydota2.com'.$games['matches'][1]['team1']['logo_url']?>" width="100px", height="auto"> {!! $games['matches'][1]['team1']['team_name'] !!}<br>
        <div style="text-align: center">VS</div><br>

        {!! $games['matches'][1]['team2']['team_name'] !!} <img src="<?php echo 'http://dailydota2.com'.$games['matches'][1]['team2']['logo_url']?>" width="100px", height="auto">

        <br><br>

        Best out of {!! $games['matches'][1]['series_type'] !!}
			</span>
			<span class="card-meta">
			T-Minus:	{!! $games['matches'][1]['timediff'] !!} (seconds)
			</span>
      <br>
		</a>

    <a class="card" href='{!! $games['matches'][2]['link'] !!}'>
			<span class="card-header" style="background-image: url(<?php echo 'http://dailydota2.com'.$games['matches'][2]['league']['image_url']?>);">
				<span class="card-title">
					<h3>{!! $games['matches'][2]['league']['name'] !!}</h3>
				</span>
			</span>
			<span class="card-summary card-sizes">
        <img src="<?php echo 'http://dailydota2.com'.$games['matches'][2]['team1']['logo_url']?>" width="100px", height="auto"> {!! $games['matches'][2]['team1']['team_name'] !!}<br>
        <div style="text-align: center">VS</div><br>

        {!! $games['matches'][2]['team2']['team_name'] !!}<img src="<?php echo 'http://dailydota2.com'.$games['matches'][2]['team2']['logo_url']?>" width="100px", height="auto">

        <br><br>

        Best out of {!! $games['matches'][2]['series_type'] !!}
			</span>
			<span class="card-meta">
			T-Minus:	{!! $games['matches'][2]['timediff'] !!} (seconds)
      <br>
			</span>
		</a>

    <a class="card" href='{!! $games['matches'][3]['link'] !!}'>
			<span class="card-header" style="background-image: url(<?php echo 'http://dailydota2.com'.$games['matches'][3]['league']['image_url']?>);">
				<span class="card-title">
					<h3>{!! $games['matches'][3]['league']['name'] !!}</h3>
				</span>
			</span>
			<span class="card-summary card-sizes">
        <img src="<?php echo 'http://dailydota2.com'.$games['matches'][3]['team1']['logo_url']?>" width="100px", height="auto"> {!! $games['matches'][3]['team1']['team_name'] !!}<br>
        <div style="text-align: center">VS</div><br>

        {!! $games['matches'][3]['team2']['team_name'] !!}<img src="<?php echo 'http://dailydota2.com'.$games['matches'][3]['team2']['logo_url']?>" width="100px", height="auto">

        <br><br>

        Best out of {!! $games['matches'][3]['series_type'] !!}
			</span>
			<span class="card-meta">
			T-Minus:	{!! $games['matches'][3]['timediff'] !!} (seconds)
      <br>
			</span>
		</a>

    <a class="card" href='{!! $games['matches'][4]['link'] !!}'>
			<span class="card-header" style="background-image: url(<?php echo 'http://dailydota2.com'.$games['matches'][4]['league']['image_url']?>);">
				<span class="card-title">
					<h3>{!! $games['matches'][4]['league']['name'] !!}</h3>
				</span>
			</span>
			<span class="card-summary card-sizes">
        <img src="<?php echo 'http://dailydota2.com'.$games['matches'][4]['team1']['logo_url']?>" width="100px", height="auto"> {!! $games['matches'][4]['team1']['team_name'] !!}<br>
        <div style="text-align: center">VS</div><br>

        {!! $games['matches'][4]['team2']['team_name'] !!}<img src="<?php echo 'http://dailydota2.com'.$games['matches'][4]['team2']['logo_url']?>" width="100px", height="auto">

        <br><br>

        Best out of {!! $games['matches'][4]['series_type'] !!}
			</span>
			<span class="card-meta">
			T-Minus:	{!! $games['matches'][4]['timediff'] !!} (seconds)
      <br>
			</span>
		</a>

    <a class="card" href='{!! $games['matches'][5]['link'] !!}'>
			<span class="card-header" style="background-image: url(<?php echo 'http://dailydota2.com'.$games['matches'][5]['league']['image_url']?>);">
				<span class="card-title">
					<h3>{!! $games['matches'][5]['league']['name'] !!}</h3>
				</span>
			</span>
			<span class="card-summary card-sizes">
        <img src="<?php echo 'http://dailydota2.com'.$games['matches'][5]['team1']['logo_url']?>" width="100px", height="auto"> {!! $games['matches'][5]['team1']['team_name'] !!}<br>
        <div style="text-align: center">VS</div><br>

        {!! $games['matches'][5]['team2']['team_name'] !!}<img src="<?php echo 'http://dailydota2.com'.$games['matches'][5]['team2']['logo_url']?>" width="100px", height="auto">

        <br><br>

        Best out of {!! $games['matches'][5]['series_type'] !!}
			</span>
			<span class="card-meta">
			T-Minus:	{!! $games['matches'][5]['timediff'] !!} (seconds)
      <br>
			</span>
		</a>

	</div>
</div>
</body>
</html>
