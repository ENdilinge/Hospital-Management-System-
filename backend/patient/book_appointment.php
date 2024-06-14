<?php
    session_start();
    include('assets/inc/config.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $appointment_date = $_POST['appointment_date'];
        $appointment_time = $_POST['appointment_time'];
        $symptoms = $_POST['symptoms'];

        $sql = "INSERT INTO his_patient (first_name, last_name, email, phone, appointment_date, appointment_time, symptoms)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $first_name, $last_name, $email, $phone, $appointment_date, $appointment_time, $symptoms);

        if ($stmt->execute()) {
            echo "<script>alert('Appointment booked successfully');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Error: Could not book appointment');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid request');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
?>
