<?php
// config.php
$host = 'localhost:3307';
$dbname = 'reservasi';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}

// Endpoint untuk memeriksa ketersediaan loker
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action'])) {
    header('Content-Type: application/json');
    
    switch($_GET['action']) {
        case 'check_availability':
            $date = $_POST['date'];
            $startTime = $_POST['startTime'];
            $endTime = $_POST['endTime'];
            
            $stmt = $pdo->prepare("SELECT locker_number FROM reservations 
                                 WHERE date = ? AND 
                                 ((start_time <= ? AND end_time >= ?) OR 
                                 (start_time <= ? AND end_time >= ?))");
            
            $stmt->execute([$date, $startTime, $startTime, $endTime, $endTime]);
            $reservedLockers = $stmt->fetchAll(PDO::FETCH_COLUMN);
            
            echo json_encode(['reserved_lockers' => $reservedLockers]);
            break;
            
        case 'make_reservation':
            $data = json_decode(file_get_contents('php://input'), true);
            
            $stmt = $pdo->prepare("INSERT INTO reservations 
                                 (name, date, start_time, end_time, locker_number) 
                                 VALUES (?, ?, ?, ?, ?)");
            
            try {
                $pdo->beginTransaction();
                $stmt->execute([
                    $data['name'],
                    $data['date'],
                    $data['startTime'],
                    $data['endTime'],
                    $data['lockerNumber']
                ]);
                $pdo->commit();
                echo json_encode(['success' => true, 'message' => 'Reservasi berhasil']);
            } catch(Exception $e) {
                $pdo->rollBack();
                echo json_encode(['error' => 'Gagal melakukan reservasi']);
            }
            break;
    }
    exit;
}
?>