<?php
include_once('header.php');
?>
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    include_once('config.php');

                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    if ($username == 'admin' && $password == 'admin') {

                        $sql = "SELECT * FROM `bookings` ORDER BY `checkin`";
                        $res = mysqli_query($conn, $sql);
                        $num = mysqli_num_rows($res);
                        if ($num == 0) {
                            echo "No Records to show.";
                        } else {
                            echo '<hr class="border-dark">';
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <div class="card p-2 mb-3">
                                    <h5 class="card-title">Name: <?= $row['name']; ?></h5>
                                    <p class="card-text">Phone: <?= $row['phone']; ?></p>
                                    <p class="card-text">Email: <?= $row['email']; ?></p>
                                    <p class="card-text">Room Type: <?= $row['room']; ?></p>
                                    <p class="card-text">Adults: <?= $row['adults']; ?></p>
                                    <p class="card-text">Kids: <?= $row['kids']; ?></p>
                                    <p class="card-text">Checkin: <?= $row['checkin']; ?></p>
                                    <p class="card-text">Checkout: <?= $row['checkout']; ?></p>
                                    <p class="card-text">Breakfast: <?= $row['breakfast']; ?></p>
                                    <p class="card-text">Lunch: <?= $row['lunch']; ?></p>
                                    <p class="card-text">Dinner: <?= $row['dinner']; ?></p>
                                    <p class="card-text">Comments: <?= $row['comments']; ?></p>
                                </div>
                                <hr class="border-dark">
                                <?php
                            }
                            echo "</pre>";
                        }
                    }
                    ?>
                <?php } else { ?>
                    <form action method="POST">
                        <div class="form-group">
                            <label for="username">Admin Username</label>
                            <input type="text" name="username" class="form-control" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php
include_once('footer.php');
?>