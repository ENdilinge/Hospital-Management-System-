<?php
    session_start();
    include('assets/inc/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Book an Appointment</h2>
        <form action="book_appointment.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="appointment_date">Appointment Date</label>
                <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
            </div>
            <div class="form-group">
                <label for="appointment_time">Appointment Time</label>
                <input type="time" class="form-control" id="appointment_time" name="appointment_time" required>
            </div>
            <div class="form-group">
                <label for="symptoms">Symptoms</label>
                <textarea class="form-control" id="symptoms" name="symptoms"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Book Appointment</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
