<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .hotel-detail {
            text-align: center;
            margin-bottom: 20px;
        }
        .hotel-detail img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        .hotel-name {
            font-size: 24px;
            margin-top: 10px;
            color: #333;
        }
        .description {
            font-size: 16px;
            color: #666;
            margin-top: 20px;
        }
        .book-btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .book-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hotel-detail">
            <?php
         
            if (isset($_GET['hotel_id'])) {
                $hotel_id = $_GET['hotel_id'];

               
                $hotelName = "Maharaj";
                $description = "The best Hotel all over India";
                $imagePath = "image/hotel1.jpg"; 
            
                if ($hotel_id == 1) {
                    $hotelName = "Superior Room";
                    $description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
                    $imagePath = "image/hotel1photo.webp";
                } elseif ($hotel_id == 2) {
                    $hotelName = "Deluxe Room";
                    $description = "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
                    $imagePath = "image/hotel3photo.avif";
                } elseif ($hotel_id == 3) {
                    $hotelName = "Guest Room";
                    $description = "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
                    $imagePath = "image/hotel4photo.jpg";
                } elseif ($hotel_id == 4) {
                    $hotelName = "Single Room";
                    $description = "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
                    $imagePath = "image/hotel2photo.jpg";
                }
             
                echo "<img src='$imagePath' alt='$hotelName'>";
                echo "<h2 class='hotel-name'>$hotelName</h2>";
                echo "<p class='description'>$description</p>";

                echo "<button class='book-btn' onclick='bookNow()'>Book Now</button>";
            } else {
               
                echo "<p>Error: Hotel not found.</p>";
            }
            ?>
        </div>
    </div>
    <script>
        function bookNow() {
            var name = prompt("Please enter your name:");
            var contactNumber = prompt("Please enter your contact number:");
            var roomCategory = prompt("Please enter the room booking category:");

            // Validate if required fields are filled
            if (name && contactNumber && roomCategory) {
                // Send the booking details to the server or perform any required action
                alert("Thank you, " + name + "! Your booking for the " + roomCategory + " has been successfully submitted. Our team will contact you shortly at " + contactNumber + ".");
            } else {
                // If any required field is not filled, show an error message
                alert("Please fill all the required fields.");
            }
        }

        // Script to navigate back to the home page when the user clicks the browser's back button
        window.onload = function() {
            if (window.history && window.history.pushState) {
                window.history.pushState('forward', null, './#');
                window.onpopstate = function() {
                    window.location.href = 'bookingdetails.php';
                };
            }
        };
    </script>
</body>
</html>
