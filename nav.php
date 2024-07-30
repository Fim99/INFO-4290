<?php
session_start();

// Handle logout request
if (isset($_POST['delete_session']))
{
    session_destroy();
    header("Location: /INFO_4290_Project/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/INFO_4290_Project/">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Search</a>
            <a class="navbar-brand" href="meal_functions/meal_records.php">Meal Records</a>
            <a class="navbar-brand" href="meal_functions/ingredient_alert.php">Ingredient Alert</a>
            <a class="navbar-brand" href="faq.php">FAQ / Support</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['username'])): ?>
                        <?php if (isset($_SESSION['current_meal_name'])): ?>
                            <li class="nav-item">
                                <span class="nav-link text-light">Currently Selected Meal: <?php echo htmlspecialchars($_SESSION['current_meal_name']); ?></span>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <span class="nav-link text-light fw-bold"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                        </li>
						<li class="nav-item">
							<a class="navbar-brand" href="account_functions/account_information.php">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-gear" viewBox="0 0 16 16">
									<path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
									<path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
								</svg>
							</a>
                        </li>
                        <li class="nav-item">
                            <form class="d-inline" method="post">
                                <button type="submit" name="delete_session" class="btn btn-danger">Logout</button>
                            </form>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <span class="nav-link text-light fw-bold">Guest</span>
                        </li>
                        <li class="nav-item">
                            <a href="account_functions/login.php" class="btn btn-success">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
