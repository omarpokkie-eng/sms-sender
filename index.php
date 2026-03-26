<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom SMS Sender</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h2 { text-align: center; color: #333; }
        input, textarea, button { width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { background-color: #28a745; color: white; border: none; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #218838; }
        .footer { text-align: center; font-size: 12px; color: #777; margin-top: 10px; }
    </style>
</head>
<body>

<div class="container">
    <h2>SMS Sender</h2>
    <form action="send_sms.php" method="POST">
        <input type="text" name="number" placeholder="Enter Phone Number (e.g. 017xx...)" required>
        <textarea name="message" rows="4" placeholder="Type your message here..." required></textarea>
        <button type="submit" name="submit">Send SMS Now</button>
    </form>
    <div class="footer">Powered by Mohammad Ahad</div>
</div>

</body>
</html>
