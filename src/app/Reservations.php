<?php
namespace App;
use PDO;

interface ReservationInterface
{
    public function addReservation(
        string $name,
        string $email,
        string $phone_number
    ): void;
}

abstract class AbstractReservation implements ReservationInterface
{
    protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}

class Reservation extends AbstractReservation
{
    public function addReservation(string $name, string $email, string $phone_number): void {
        date_default_timezone_set('Asia/Tokyo');
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        $stmt = $this->pdo->prepare("INSERT INTO bookings(name, email, phone_number, created_at, updated_at) VALUES (:name, :email, :phone_number, :created_at, :updated_at)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone_number", $phone_number);
        $stmt->bindParam(":created_at", $created_at);
        $stmt->bindParam(":updated_at", $updated_at);
        $stmt->execute();
    }
}
