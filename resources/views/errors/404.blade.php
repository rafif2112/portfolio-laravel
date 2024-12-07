<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        body {
            background-color: #0078D7;
            color: #ffffff;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            width: 70%;
        }
        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            margin: 0;
            /* text-align: center; */
            flex-direction: column;
            padding: 0 20px;
        }

        .container {
            max-width: 600px;
            width: 100%;
        }

        .emoji {
            font-size: 130px;
            margin-bottom: 20px;
        }

        .error-code {
            font-weight: 300;
            font-size: 18px;
        }

        .error-message, .progress {
            font-weight: 300;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .details {
            font-size: 14px;
            margin-top: 20px;
        }

        .qr-code {
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #ffffff;
            background-color: #005499;
            border: none;
            border-radius: 5px;
            box-shadow: 0 4px #003f73;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #004080;
        }

        .button:active {
            background-color: #004080;
            box-shadow: 0 5px #003f73;
            transform: translateY(4px);
        }

        @media only screen and (min-width: 768px) {
            .error-code, .error-message, .progress {
                font-size: 24px;
            }
            .details {
                font-size: 16px;
            }
        }

        @media only screen and (max-width: 840px) {
            body{
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="emoji">:(</div>
            <div class="error-code">Sorry, we can't find the page you're looking for.</div>
            <div class="error-message">The page you requested could not be found. Please check the URL and try again.</div>
            <div class="progress">20% complete</div>
    
            <div class="info" style="display: flex; align-items: center; gap: 10px;">
                <div class="qr-code">
                    <img src="images/qr-code.png" alt="QR Code" style="width: 100px;">
                </div>
                <div class="details">
                    For more information about this issue and possible fixes, visit <a href="https://www.muhamadrafif.free.nf" style="color: #ffffff;">https://www.muhamadrafif.free.nf</a>
                    <br>If you call a support person, give them this info:
                    <br>Error code : 404_PAGE_NOT_FOUND
                </div>
            </div>
    
            <a href="/" class="button">Go Back</a>
        </div>
    </div>
</body>
</html>