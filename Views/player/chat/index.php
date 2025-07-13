<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Room</title>
    <link rel="stylesheet" href="../../Asset/Style.css">
</head>
<body>
    <div class="chat-container">
        <h1>Chat Room</h1>
        <div id="messages">
            <?php foreach ($messages as $message): ?>
                <div class="chat-message">
                    <strong><?= htmlspecialchars($message['username'] ?? 'Anonymous') ?>:</strong>
                    <span><?= htmlspecialchars($message['message'] ?? '') ?></span>
                </div>
            <?php endforeach; ?>
        </div>
        <form id="chat-form" method="post">
            <input type="text" id="message" name="message" placeholder="Type a message..." required>
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>