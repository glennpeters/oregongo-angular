<?php

	$errorMsg = "Unknown error";
	$errorCode = is_numeric($_GET['code']) ? intval($_GET['code'], 10) : 0;

	if ( $errorCode != 0 && $errorCode > 399 && $errorCode < 511 )
	{
		$errors[400] = "Bad Request";
		$errors[401] = "Authorization Required";
		$errors[402] = "Payment Required";
		$errors[403] = "Forbidden";
		$errors[404] = "Not Found";
		$errors[405] = "Method Not Allowed";
		$errors[406] = "Not Acceptable";
		$errors[407] = "Proxy Authentication Required";
		$errors[408] = "Request Time-out";
		$errors[409] = "Conflict";
		$errors[410] = "Gone";
		$errors[411] = "Length Required";
		$errors[412] = "Precondition Failed";
		$errors[413] = "Request Entity Too Large";
		$errors[414] = "Request-URI Too Large";
		$errors[415] = "Unsupported Media Type";
		$errors[416] = "Requested Range Not Satisfiable";
		$errors[417] = "Expectation Failed";
		$errors[418] = "I Am A Teapot";
		$errors[422] = "Unprocessable Entity";
		$errors[423] = "Locked";
		$errors[424] = "Failed Dependency";
		$errors[425] = "No code";
		$errors[426] = "Upgrade Required";
		$errors[500] = "Internal Server Error";
		$errors[501] = "Method Not Implemented";
		$errors[502] = "Bad Gateway";
		$errors[503] = "Service Temporarily Unavailable";
		$errors[504] = "Gateway Time-out";
		$errors[505] = "HTTP Version Not Supported";
		$errors[506] = "Variant Also Negotiates";
		$errors[507] = "Insufficient Storage";
		$errors[510] = "Not Extended";

		if ( isset( $errors[$errorCode] ) )
		{
			$errorMsg = $errors[$errorCode];
		}
	}


?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo( $errorMsg ) ?></title>
        <style>
            ::-moz-selection {
                background: #b3d4fc;
                text-shadow: none;
            }

            ::selection {
                background: #b3d4fc;
                text-shadow: none;
            }

            html {
                padding: 30px 10px;
                font-size: 20px;
                line-height: 1.4;
                color: #737373;
                /*background: #f0f0f0;*/
                background: #333;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }

            html,
            input {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            }

            body {
                max-width: 500px;
                _width: 500px;
                padding: 30px 20px 50px;
                border: 1px solid #b3b3b3;
                border-radius: 4px;
                margin: 0 auto;
                box-shadow: 0 1px 10px #000, inset 0 1px 0 #fff;
                /*background: #fcfcfc;*/
                background: #000;
            }

            h1 {
                margin: 0 10px;
                font-size: 50px;
                text-align: center;
            }

            h1 span {
                color: #bbb;
            }

            h3 {
                margin: 1.5em 0 0.5em;
            }

            p {
                margin: 1em 0;
            }

            ul {
                padding: 0 0 0 40px;
                margin: 1em 0;
            }

            .container {
                max-width: 600px;
                _width: 380px;
                margin: 0 auto;
            }

            /* google search */

            #goog-fixurl ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            #goog-fixurl form {
                margin: 0;
            }

            #goog-wm-qt,
            #goog-wm-sb {
                border: 1px solid #bbb;
                font-size: 16px;
                line-height: normal;
                vertical-align: top;
                color: #444;
                border-radius: 2px;
            }

            #goog-wm-qt {
                width: 220px;
                height: 20px;
                padding: 5px;
                margin: 5px 10px 0 0;
                box-shadow: inset 0 1px 1px #ccc;
            }

            #goog-wm-sb {
                display: inline-block;
                height: 32px;
                padding: 0 10px;
                margin: 5px 0 0;
                white-space: nowrap;
                cursor: pointer;
                background-color: #f5f5f5;
                background-image: -webkit-linear-gradient(rgba(255,255,255,0), #f1f1f1);
                background-image: -moz-linear-gradient(rgba(255,255,255,0), #f1f1f1);
                background-image: -ms-linear-gradient(rgba(255,255,255,0), #f1f1f1);
                background-image: -o-linear-gradient(rgba(255,255,255,0), #f1f1f1);
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                *overflow: visible;
                *display: inline;
                *zoom: 1;
            }

            #goog-wm-sb:hover,
            #goog-wm-sb:focus {
                border-color: #aaa;
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                background-color: #f8f8f8;
            }

            #goog-wm-qt:hover,
            #goog-wm-qt:focus {
                border-color: #105cb6;
                outline: 0;
                color: #222;
            }

            input::-moz-focus-inner {
                padding: 0;
                border: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1><?php echo( $errorMsg ) ?></h1>

<?php

switch ( $errorCode )
{
	case 401:
		// 401 Unauthorized
		echo '<a href="http://www.flickr.com/photos/apelad/304193001/" title="401 Unauthorized by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/122/304193001_7ed9b91756.jpg" width="500" height="500" alt="401 Unauthorized"></a>';
		break;

	case 402:
		// 402 Payment Required
		echo '<a href="http://www.flickr.com/photos/apelad/304193323/" title="402 Payment Required by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/106/304193323_3d98d9fcbe.jpg" width="500" height="500" alt="402 Payment Required"></a>';
		break;

	case 403:
		// 403 Forbidden
		echo '<a href="http://www.flickr.com/photos/apelad/304193677/" title="403 Forbidden by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/117/304193677_7ac63a179e.jpg" width="500" height="500" alt="403 Forbidden"></a>';
		break;

	case 404:
		// 404 File Not Found
		echo '<a href="http://www.flickr.com/photos/apelad/304194006/" title="404 Not Found by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/105/304194006_922af2210e.jpg" width="500" height="500" alt="404 Not Found"></a>';
		break;

	case 405:
		// 405 Method Not Allowed
		echo '<a href="http://www.flickr.com/photos/apelad/304194299/" title="405 Method Not Allowed by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/112/304194299_2fc0718bb5.jpg" width="500" height="500" alt="405 Method Not Allowed"></a>';
		break;

	case 406:
		// 406 Not Acceptable
		echo '<a href="http://www.flickr.com/photos/apelad/304194659/" title="406 Not Acceptable by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/116/304194659_eca0264c29.jpg" width="500" height="500" alt="406 Not Acceptable"></a>';
		break;

	case 408:
		// 408 Request Timeout
		echo '<a href="http://www.flickr.com/photos/apelad/304195027/" title="408 Request Timeout by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/120/304195027_092906cf44.jpg" width="500" height="500" alt="408 Request Timeout"></a>';
		break;

	case 409:
		// 409 Conflict
		echo '<a href="http://www.flickr.com/photos/apelad/304195427/" title="409 Conflict by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/115/304195427_f15002a254.jpg" width="500" height="500" alt="409 Conflict"></a>';
		break;

	case 410:
		// 410 Gone
		echo '<a href="http://www.flickr.com/photos/apelad/304195684/" title="410 Gone by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/99/304195684_7ed943c933.jpg" width="500" height="500" alt="410 Gone"></a>';
		break;

	case 411:
		// 411 Length Required
		echo '<a href="http://www.flickr.com/photos/apelad/304195993/" title="411 Length Required by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/109/304195993_bcc87426eb.jpg" width="500" height="500" alt="411 Length Required"></a>';
		break;

	case 413:
		// 413 Request Entity Too Large
		echo '<a href="http://www.flickr.com/photos/apelad/304196358/" title="413 Request Entity Too Large by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/101/304196358_0afd41ba2e.jpg" width="500" height="500" alt="413 Request Entity Too Large"></a>';
		break;

	case 414:
		// 414 Requested URL Too Long
		echo '<a href="http://www.flickr.com/photos/apelad/304196775/" title="414 Requested URL Too Long by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/113/304196775_0b461475f7.jpg" width="500" height="500" alt="414 Requested URL Too Long"></a>';
		break;

	case 415:
		// 415 Unsupported Media Type
		echo '<a href="http://www.flickr.com/photos/apelad/304197126/" title="415 Unsupported Media Type by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/120/304197126_079c77762b.jpg" width="500" height="500" alt="415 Unsupported Media Type"></a>';
		break;

	case 416:
		// 416 Requested Range Not Satisfied
		echo '<a href="http://www.flickr.com/photos/apelad/304197454/" title="416 Requested Range Not Satisfied by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/111/304197454_7d2319e1d6.jpg" width="500" height="500" alt="416 Requested Range Not Satisfied"></a>';
		break;

	case 417:
		// 417 Expectation Failed
		echo '<a href="http://www.flickr.com/photos/apelad/304197810/" title="417 Expectation Failed by Ape Lad, on Flickr"><img src="http://farm1.staticflickr.com/106/304197810_cbd6d2ff5e.jpg" width="500" height="500" alt="417 Expectation Failed"></a>';
		break;

	case 418:
		// 418 - I'm a teapot
		echo '<a href="http://www.flickr.com/photos/girliemac/6508102407/" title="418 - I Am A Teapot by GirlieMac, on Flickr"><img src="http://farm8.staticflickr.com/7006/6508102407_a4de65687b.jpg" width="500" height="400" alt="418 - I Am A Teapot"></a>';
		break;
}

		// Don't show this block if not a 404 error
		if ( $errorCode == 404 ) {
?>

            <p>Sorry, but the page you were trying to view does not exist.</p>
            <p>It looks like this was the result of either:</p>

            <ul>
                <li>a mistyped address</li>
                <li>an out-of-date link</li>
            </ul>

            <script>
                var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;
            </script>
            <script src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
<?php
		}
?>
        </div>
    </body>
</html>
