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
              <div class="title">Teams</div>


              <table style="width:100%">
                <tr>
                  <td><h2>Evil Geniuses</h2>
                      tag: {!! $eg_data['result']['teams'][0]['tag'] !!}<br>
                      country: {!! $eg_data['result']['teams'][0]['country_code'] !!}<br>
                      web: {!! $eg_data['result']['teams'][0]['url'] !!}<br>
                      <br>
                      Roster
                      <br>
                      {!! $eg_data['result']['teams'][0]['player_0_account_id'] !!}<br>
                      {!! $eg_data['result']['teams'][0]['player_1_account_id'] !!}<br>
                      {!! $eg_data['result']['teams'][0]['player_2_account_id'] !!}<br>
                      {!! $eg_data['result']['teams'][0]['player_3_account_id'] !!}<br>
                      {!! $eg_data['result']['teams'][0]['player_4_account_id'] !!}<br>
                  </td>

                  <td><h2>OG Dota2</h2>
                    tag: {!! $og_data['result']['teams'][0]['tag'] !!}<br>
                    country: {!! $og_data['result']['teams'][0]['country_code'] !!}<br>
                    web: {!! $og_data['result']['teams'][0]['url'] !!}<br>
                    <br>
                    Roster
                    <br>
                    {!! $og_data['result']['teams'][0]['player_0_account_id'] !!}<br>
                    {!! $og_data['result']['teams'][0]['player_1_account_id'] !!}<br>
                    {!! $og_data['result']['teams'][0]['player_2_account_id'] !!}<br>
                    {!! $og_data['result']['teams'][0]['player_3_account_id'] !!}<br>
                    {!! $og_data['result']['teams'][0]['player_4_account_id'] !!}<br>
                  </td>

                  <td><h2>Team Secret</h2>
                    tag: {!! $secret_data['result']['teams'][0]['tag'] !!}<br>
                    country: {!! $secret_data['result']['teams'][0]['country_code'] !!}<br>
                    web: {!! $secret_data['result']['teams'][0]['url'] !!}<br>
                    <br>
                    Roster
                    <br>
                    {!! $secret_data['result']['teams'][0]['player_0_account_id'] !!}<br>
                    {!! $secret_data['result']['teams'][0]['player_1_account_id'] !!}<br>
                    {!! $secret_data['result']['teams'][0]['player_2_account_id'] !!}<br>
                    {!! $secret_data['result']['teams'][0]['player_3_account_id'] !!}<br>
                    Unknown
                  </td>

                  <td><h2>MVP Phoenix</h2>
                    tag: {!! $mvp_data['result']['teams'][0]['tag'] !!}<br>
                    country: {!! $mvp_data['result']['teams'][0]['country_code'] !!}<br>
                    web: {!! $mvp_data['result']['teams'][0]['url'] !!}<br>
                    <br>
                    Roster
                    <br>
                    {!! $mvp_data['result']['teams'][0]['player_0_account_id'] !!}<br>
                    {!! $mvp_data['result']['teams'][0]['player_1_account_id'] !!}<br>
                    {!! $mvp_data['result']['teams'][0]['player_2_account_id'] !!}<br>
                    {!! $mvp_data['result']['teams'][0]['player_3_account_id'] !!}<br>
                    {!! $mvp_data['result']['teams'][0]['player_4_account_id'] !!}<br>
                  </td>
                </tr>

                <tr>
                  <td>CDEC Gaming

                  </td>
                  <td>Vici Gaming</td>
                  <td>Alliance</td>
                  <td>Virtus Pro</td>
                </tr>
                <tr>
                  <td>Team Liquid</td>
                  <td>Team Spirit</td>
                  <td>Team Archon</td>
                  <td>Fnatic</td>
                </tr>
                <tr>
                  <td>MVP Phoenix</td>
                  <td>Newbee</td>
                  <td>LGD Gaming</td>
                  <td>Complexity</td>
              </table>

            </div>
        </div>
    </body>
</html>
