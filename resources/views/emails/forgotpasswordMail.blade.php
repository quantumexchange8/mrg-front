<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reset Your Password</title>
        <style>
            body {
                font-family: 'Helvetica Neue', Arial, sans-serif;
                background-color: #f5f7fa;
                margin: 0;
                padding: 0;
                color: #333;
            }

            .container {
                max-width: 600px;
                margin: 40px auto;
                background-color: #fff;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border: 1px solid #e1e1e1;
            }

            h1 {
                color: #4A90E2;
                text-align: center;
                font-weight: 700;
                margin-bottom: 20px;
                font-size: 24px;
            }

            p {
                font-size: 16px;
                line-height: 1.6;
                margin: 15px 0;
                color: #555;
            }

            .important-info {
                background-color: #f0f8ff;
                padding: 20px;
                border-left: 4px solid #4A90E2;
                border-radius: 4px;
                margin-bottom: 30px;
            }

            .cta-button {
                display: block;
                background-color: #4A90E2;
                color: white;
                padding: 12px 20px;
                border-radius: 5px;
                text-decoration: none;
                text-align: center;
                margin: 30px auto 40px;
                max-width: 200px;
                font-weight: bold;
                transition: background-color 0.3s ease;
            }

            .cta-button:hover {
                background-color: #357ABD;
            }

            .footer {
                margin-top: 30px;
                font-size: 12px;
                color: #999;
                text-align: center;
            }

            .footer p {
                margin: 5px 0;
            }

            /* Media query for mobile responsiveness */
            @media only screen and (max-width: 600px) {
                .container {
                    padding: 20px;
                }

                h1 {
                    font-size: 18px;
                }

                p {
                    font-size: 14px;
                }

                .cta-button {
                    padding: 10px 18px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Reset Your Password</h1>

            <p>Hello,</p>

            <div class="important-info">
                <p>We received a request to reset your password. Click the button below to reset it. If you didn’t request this, please ignore this email.</p>
            </div>

            <a href="{{ route('reset', ['token' => $user->remember_token]) }}" class="cta-button">Reset Password</a>

            <div class="footer">
                <p>This is an automated message. Please do not reply directly to this email.</p>
            </div>
        </div>
    </body>
</html>
