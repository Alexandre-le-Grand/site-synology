<?php
$links = [
    'Google' => 'https://www.google.com',
    'YouTube' => 'https://www.youtube.com',
    'GitHub' => 'https://github.com',
    'OpenAI' => 'https://openai.com'
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Liens</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .button {
            background-color: #fff;
            color: #333;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
        .button:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>Mes Liens Favoris</h1>
    <div class="button-container">
        <?php foreach ($links as $name => $url): ?>
            <a class="button" href="<?php echo $url; ?>" target="_blank"> <?php echo $name; ?> </a>
        <?php endforeach; ?>
    </div>
</body>
</html>
