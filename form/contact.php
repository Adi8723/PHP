<?php
$title = "Contact site";
require_once "./blocks/header.php";
?>

<div class="container mt-2">

    <h1>Contact site</h1>

    <form action="checkPost.php" method="post">
        <div class="form-group">
            <div class="col">
                <input type="text" name="firstName" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <input type="text" name="lastName" class="form-control" placeholder="Last name">
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="col">
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
            </div>
            <div class="col">
                <textarea name="message" id="txt" cols="30" rows="10" class="form-control"></textarea>
            </div>

        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>





<?php
require_once "./blocks/footer.php";
?>