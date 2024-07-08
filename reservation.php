<?php
include_once('header.php');
?>

<style>
    * {
        margin: 0;
        max-width: 100%;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

</style>
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <!-- <h2>Reservation</h2> -->
                    <h2>Book Now!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto ">
                <form class="main_form" action="process.php" method="POST">
                    <div class="form-box">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="contactus" placeholder="Enter Your Name"
                            required />
                    </div>
                    <div class="form-box">
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" id="phone" class="contactus" placeholder="Enter Your Phone"
                            required />
                    </div>
                    <div class="form-box">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="contactus" placeholder="Enter Your email"
                            required />
                    </div>
                    <div class="form-box">
                        <label for="room">Room Type:</label>
                        <select name="room" id="room" class="contactus" required>
                            <option value="Studio Room">Studio Room</option>
                            <option value="Deluxe Room">Deluxe Room</option>
                            <option value="Adjoining Room">Adjoining Room</option>
                            <option value="Apartment-style Room">Apartment-style Room</option>
                        </select>
                    </div>
                    <div class="form-box">
                        <label for="adults">Adults:</label>
                        <input type="number" name="adults" id="adults" class="contactus" placeholder="No. of Adults"
                            required />
                    </div>
                    <div class="form-box">
                        <label for="kids">Kids:</label>
                        <input type="number" name="kids" id="kids" class="contactus" placeholder="No. of Kids"
                            required />
                    </div>
                    <div class="form-box">
                        <label for="checkin">Check In:</label>
                        <input type="date" name="checkin" id="checkin" class="contactus" required />
                    </div>
                    <div class="form-box">
                        <label for="checkout">Check Out:</label>
                        <input type="date" name="checkout" id="checkout" class="contactus" required />
                    </div>
                    <div class="form-box">
                        <label>Including Meal:</label>
                        <div class="form-box-inline">
                            <input type="checkbox" name="breakfast" id="breakfast" value="yes" />
                            <label for="breakfast">Breakfast</label>
                        </div>
                        <div class="form-box-inline">
                            <input type="checkbox" name="lunch" id="lunch" value="yes" />
                            <label for="lunch">Lunch</label>
                        </div>
                        <div class="form-box-inline">
                            <input type="checkbox" name="dinner" id="dinner" value="yes" />
                            <label for="dinner">Dinner</label>
                        </div>
                    </div>
                    <div class="form-box">
                        <label>Comments:</label>
                        <textarea name="comment" id="comment" class="textarea" placeholder="Custom Message"></textarea>
                    </div>
                    <div class="form-box form-box-submit">
                        <label>&nbsp;</label>
                        <input class="btn btn-primary" type="submit" />
                        <input class="btn btn-danger" type="reset">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once('footer.php');
?>