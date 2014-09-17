<?php
class HTMLView {
    public function echoHTML($body){
        if($body === null){
            throw new \Exception("HTML is Null");
        }
        echo"
<!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8' />
            <title>Laboration 2</title>
        </head>
        <body>
        <div class='content'>
        $body
        </div>
        </body>
        </html>";
    }
}
/**
 * Created by PhpStorm.
 * User: dav
 * Date: 2014-09-06
 * Time: 12:38
 */ 