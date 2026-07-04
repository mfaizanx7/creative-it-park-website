<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #28a745;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-size: 24px;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #888;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            {{ $appName }} 
        </div>
        <div class="content">
            <p>Dear [Subscriber Name],</p>

            <p>Thank you for subscribing to our newsletter! We are excited to have you on board.</p>

            <p>You will now receive regular updates, news, and exclusive offers directly to your inbox. To ensure you
                don't miss any important emails, please add our email address to your contact list.</p>

            <p>If you have any questions or need assistance, feel free to contact our support team at [Support Email] or
                [Support Phone Number].</p>

            <p>Thank you for being a part of our community!</p>

            <p>Best regards,</p>
            <p>[Your Name]<br>
                [Your Position]<br>
                [Company Name]<br>
                <a href="[Website URL]">[Website URL]</a>
            </p>
        </div>
        <div class="footer">
            You are receiving this email because you subscribed to our newsletter on {{ $appName }}. If you no
            longer wish to receive these emails, you can unsubscribe at any time.
        </div>
    </div>
</body>

</html>
