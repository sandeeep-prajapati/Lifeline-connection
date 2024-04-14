<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Dev.css">
</head>

<body>
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-info" href="/"><b>Code-Crafter<b></a>
                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" aria-current="page" href="/buynow">Buy alerts</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="/read">Read More</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="/price">Price</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <!-- bio -->
    <div id="login-page">
        <h4 class="pt-4">
            <b>HealthConnect: Affordable Innovation </b>
            <br>
            <br>
            Our IoT device, costing less than three figures in rupees, offers accessible healthcare solutions for doctors and patients. It's designed for seamless integration, ensuring efficient communication and care delivery. With HealthConnect, cutting-edge technology meets cost-effectiveness, revolutionizing healthcare accessibility for all.
</h4>

    </div>
    <!-- Doctor Login Page -->
    <div id="login-page">
        <h1>Doctor's Login</h1>
        <form id="login-form">
            <input type="text" id="username" placeholder="Username" required>
            <input type="text" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <!-- test -->
    
    <!-- test-end -->



    <!-- Dashboard for Doctors -->
    <div id="dashboard" style="display: none;">
        <h1>Welcome, <span id="doctor-name"></span>!</h1>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="user-details">
            <h2>Patient details</h2>
            <p><strong>id:</strong><?php echo e($all->id); ?></p>
            <p><strong>Contact Number 1: </strong><?php echo e($all->contact1); ?></p>
            <p><strong>Contact Number 2: </strong> <?php echo e($all->contact2); ?></p>
            <p><strong>Bed Number:</strong> <?php echo e($all->bed); ?></p>
            <!-- Add more user details as needed -->
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <div id="about-doctors">
            <h2>About Doctors</h2>
            <p>Your responsibility to check bed number when you get alerts.</p>
        </div>
        <div class="text-center">
            <button id="logout-btn">Logout</button>
        </div>
    </div>

    <div class="row" style="height: 30px;"></div>

    <div class="row bg-dark p-4 text-center">
        <p class="text-white">All copyright reserved to @code-crafters</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.2.0/socket.io.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="Dev.js"></script>
</body>

</html><?php /**PATH C:\Users\HP\OneDrive\Desktop\MMMUT\MMMUT\resources\views/buynow.blade.php ENDPATH**/ ?>