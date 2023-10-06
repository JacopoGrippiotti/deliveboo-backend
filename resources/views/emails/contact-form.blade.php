<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #ff9654;
            color: white;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .content {
            background-color: #fff2b0;
            padding: 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            font-size: 18px;
        }

        .message {
            margin-top: 20px;
            font-size: 24px;
        }

        a.button {
            color: #f76627;
            border: none;
            text-decoration: none;
            font-weight: bold;
        }

        .button:hover {
            color: #f98350;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>DeliveBoo</h1>
    </div>
    <div class="content">
        <p>Ciao amministratori! Avete ricevuto un nuovo messaggio da {{ $lead->full_name }},</p>
        <p>Email ~ {{ $lead->email }}</p>

        <div class="message">
            <p> {{ $lead->message }}</p>
        </div>
        <p><a href="http://localhost:5174/" class="button">Clicca qui</a> per tornare alla Homepage</p>

    </div>
</body>

</html>
