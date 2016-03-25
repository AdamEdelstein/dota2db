<!DOCTYPE html>
<html>
    <head>
        <title>DotaDB</title>

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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
              <div class="title">Match Information</div>
              <div>Enter your MatchID Below:</div>
              <br>
              {!! Form::open(array('url' => '/match_info')); !!}
                <div>
                  {!! Form::text('match_id'); !!}
                  {!! Form::submit('Submit'); !!}
                </div>
              {!! Form::close() !!}
            </div>

            <div>

            <p>
           <br>

           <?php if (isset($match_dump)) { ?>

          {!! var_dump($match_dump['result']) !!}


          Match ID: {!! $match_dump['result']['match_id'] !!}<br>
          Match Duration: {!! $match_dump['result']['duration'] !!}<br>

          Who Won?: <?php
                      if ($match_dump['result']['radiant_win'] == 1) {
                        echo 'Radiant Victory';
                      } else {
                        echo 'Dire Victory';
                      }
                      ?><br>

          Start Time: {!! $match_dump['result']['start_time'] !!}<br>
          Server Cluster: {!! $match_dump['result']['cluster'] !!}<br>
          Game Mode: <?php
                        $game_mode = $match_dump['result']['game_mode'];

                        switch ($game_mode) {
                        case "0":
                            echo "Practice Mode";
                            break;
                        case "1":
                            echo "Public Matchmaking";
                            break;
                        case "2":
                            echo "Tournament";
                            break;
                        case "3":
                            echo "Tutorial";
                            break;
                        case "4":
                            echo "Co-op with bots";
                            break;
                        case "5":
                            echo "Team Match";
                            break;
                        case "6":
                            echo "Solo Queue";
                            break;
                        case "7":
                            echo "Ranked";
                            break;
                        case "8":
                            echo "Solo-Mid 1v1";
                            break;
                        default:
                            echo "Your lobby type was not found";
                      }

          //echo $match_dump['result']['game_mode'] ?><br>

          <?php } ?>



            </div>

        </div>

        <div>
        </div>

    </body>
</html>
