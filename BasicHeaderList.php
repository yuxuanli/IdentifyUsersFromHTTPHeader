
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <title>I know who you are!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h3>Your browser software transmitted the following HTTP headers</h3>
            <table class="table table-striped" style="word-break:break-all; word-wrap:break-all;">
                <thead>
                    <tr class="info">
                    <th class="col-sm-4">HTTP Header</th>
                    <th class="col-sm-8">Value</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $headers = getallheaders();
                ksort($headers);
                foreach ($headers as $header => $value) {
                    if (in_array($header,array("Cookie"))){
                        continue;
                    }
                    else{
                        echo "<tr><td>$header</td>:<td>$value</td></tr>\n";
                    }
                }
                ?>
                
                </tbody>
            </table>
        
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>



