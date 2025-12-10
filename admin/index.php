<?php
session_start();

// Simple admin authentication
$admin_password = "guzalic2024";

if (!isset($_SESSION['admin_logged_in']) && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    if ($_POST['password'] === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $login_error = "Invalid password";
    }
}

// Check if logged in
if (!isset($_SESSION['admin_logged_in'])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login - GUZALIC</title>
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { 
                background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
                font-family: 'Montserrat', sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }
            .login-container {
                background: #1a1a1a;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0 20px 60px rgba(0,0,0,0.5);
                width: 100%;
                max-width: 400px;
                border: 2px solid #d4af37;
            }
            .login-container h1 {
                color: #d4af37;
                margin-bottom: 30px;
                text-align: center;
                font-family: 'Playfair Display', serif;
                font-size: 2rem;
            }
            .form-group {
                margin-bottom: 20px;
            }
            .form-group label {
                display: block;
                color: #c0c0c0;
                margin-bottom: 10px;
                font-weight: 600;
            }
            .form-group input {
                width: 100%;
                padding: 12px;
                border: 1px solid #d4af37;
                border-radius: 5px;
                background: #0a0a0a;
                color: #fff;
                font-size: 1rem;
            }
            .form-group input:focus {
                outline: none;
                box-shadow: 0 0 10px rgba(212, 175, 55, 0.3);
            }
            .btn {
                width: 100%;
                padding: 12px;
                background: linear-gradient(135deg, #d4af37 0%, #f4e4bc 100%);
                color: #0a0a0a;
                border: none;
                border-radius: 5px;
                font-weight: 700;
                cursor: pointer;
                font-size: 1rem;
                transition: all 0.3s;
            }
            .btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
            }
            .error {
                color: #ff6b6b;
                margin-bottom: 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <h1>GUZALIC Admin</h1>
            <?php if (isset($login_error)) { ?>
                <div class="error"><?php echo $login_error; ?></div>
            <?php } ?>
            <form method="POST">
                <div class="form-group">
                    <label for="password">Admin Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Load queries
$queriesFile = __DIR__ . '/../includes/queries.json';
$queries = [];
if (file_exists($queriesFile)) {
    $queries = json_decode(file_get_contents($queriesFile), true) ?: [];
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

// Handle status update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['query_id'])) {
    $query_id = $_POST['query_id'];
    $new_status = $_POST['status'];
    
    foreach ($queries as &$query) {
        if ($query['id'] === $query_id) {
            $query['status'] = $new_status;
            break;
        }
    }
    
    file_put_contents($queriesFile, json_encode($queries, JSON_PRETTY_PRINT));
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - GUZALIC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            background: #0a0a0a;
            font-family: 'Montserrat', sans-serif;
            color: #c0c0c0;
        }
        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #d4af37;
            padding-bottom: 20px;
        }
        .admin-header h1 {
            color: #d4af37;
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
        }
        .logout-btn {
            background: #d4af37;
            color: #0a0a0a;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
        }
        .logout-btn:hover {
            background: #f4e4bc;
        }
        .queries-section {
            background: #1a1a1a;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #d4af37;
        }
        .query-card {
            background: #2a2a2a;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
            border-left: 4px solid #d4af37;
        }
        .query-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .query-id {
            color: #d4af37;
            font-weight: 600;
            font-size: 0.9rem;
        }
        .query-status {
            padding: 5px 12px;
            border-radius: 3px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        .status-new {
            background: #ff6b6b;
            color: white;
        }
        .status-read {
            background: #4ecdc4;
            color: white;
        }
        .status-resolved {
            background: #95e1d3;
            color: #0a0a0a;
        }
        .query-name {
            color: #fff;
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .query-contact {
            font-size: 0.9rem;
            color: #a0a0a0;
            margin-bottom: 10px;
        }
        .query-subject {
            color: #d4af37;
            font-weight: 600;
            margin: 10px 0;
        }
        .query-message {
            background: #1a1a1a;
            padding: 10px;
            border-radius: 3px;
            margin: 10px 0;
            font-size: 0.9rem;
            line-height: 1.5;
        }
        .query-time {
            font-size: 0.8rem;
            color: #808080;
        }
        .query-actions {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }
        .status-btn {
            padding: 8px 15px;
            border: 1px solid #d4af37;
            background: transparent;
            color: #d4af37;
            border-radius: 3px;
            cursor: pointer;
            font-size: 0.8rem;
            transition: all 0.3s;
        }
        .status-btn:hover {
            background: #d4af37;
            color: #0a0a0a;
        }
        .no-queries {
            text-align: center;
            padding: 40px;
            color: #808080;
        }
        @media (max-width: 768px) {
            .admin-header {
                flex-direction: column;
                gap: 15px;
            }
            .query-header {
                flex-direction: column;
                align-items: flex-start;
            }
            .query-card {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1><i class="fas fa-crown"></i> GUZALIC Admin Panel</h1>
            <a href="?logout=true" class="logout-btn">Logout</a>
        </div>

        <div class="queries-section">
            <h2 style="color: #d4af37; margin-bottom: 20px; font-family: 'Playfair Display', serif; font-size: 1.5rem;">
                <i class="fas fa-comments"></i> Customer Queries
            </h2>

            <?php if (count($queries) === 0) { ?>
                <div class="no-queries">
                    <i class="fas fa-inbox" style="font-size: 3rem; opacity: 0.5;"></i>
                    <p style="margin-top: 10px;">No queries yet</p>
                </div>
            <?php } else { ?>
                <?php foreach (array_reverse($queries) as $query) { ?>
                    <div class="query-card">
                        <div class="query-header">
                            <div>
                                <div class="query-id">ID: <?php echo $query['id']; ?></div>
                                <div class="query-name"><?php echo $query['name']; ?></div>
                            </div>
                            <div class="query-status status-<?php echo $query['status']; ?>">
                                <?php echo strtoupper($query['status']); ?>
                            </div>
                        </div>
                        <div class="query-contact">
                            <i class="fas fa-envelope"></i> <?php echo $query['email']; ?> | 
                            <i class="fas fa-phone"></i> <?php echo $query['phone']; ?>
                        </div>
                        <div class="query-subject"><i class="fas fa-tag"></i> <?php echo $query['subject']; ?></div>
                        <div class="query-message"><?php echo nl2br($query['message']); ?></div>
                        <div class="query-time">
                            <i class="fas fa-clock"></i> <?php echo date('M d, Y H:i', strtotime($query['created_at'])); ?>
                        </div>
                        <div class="query-actions">
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="query_id" value="<?php echo $query['id']; ?>">
                                <input type="hidden" name="status" value="read">
                                <button type="submit" class="status-btn">Mark as Read</button>
                            </form>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="query_id" value="<?php echo $query['id']; ?>">
                                <input type="hidden" name="status" value="resolved">
                                <button type="submit" class="status-btn">Mark Resolved</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</body>
</html>
