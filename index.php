<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Bienvenida</title>
    <style>
        body {
            background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .card {
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: #fff;
        }
        .card h1 {
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        .btn {
            border-radius: 10px;
            padding: 6px 10px;
            font-size: 0.75rem;
            border: none; /* Elimina el borde */
        }
        .btn-danger {
            background-image: linear-gradient(to top, #ff6b6b 0%, #c76b8c 100%);
            color: #fff;
        }
        .btn-danger:hover {
            background-color: #e63946;
        }
        .btn i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1><i class="fas fa-user-check"></i> Bienvenido, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
        <a href="app/controller/logout.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
