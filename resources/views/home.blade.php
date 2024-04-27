<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />


    <style>
        /* Custom CSS styles */
        .post {
            margin-bottom: 20px;
        }

        .post-actions {
            margin-top: 10px;
        }

        .rounded-image {
            border-radius: 50%;
            overflow: hidden;
            width: 100px;
            height: 100px;
            margin-bottom: 15px;
        }

        .search-box {
            display: inline-block;
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 5px;
            width: 500px;
            height: 40px;
            margin-bottom: 20px;
        }

        .search-input {
            border: none;
            width: calc(100% - 30px);
            height: 100%;
            padding: 0 10px;
            font-size: 16px;
        }

        .search-button {
            border: none;
            background-color:white;
            color: #fff;
            width: 24px;
            height: 100%;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #0056b3;
        }
        .post-actions{
            font-size: xx-large;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <!-- User Profile Section -->
                <div class="card">
                    <div class="card-body text-center">
                        <img class="rounded-image"
                            src="https://ps.w.org/user-avatar-reloaded/assets/icon-256x256.png?rev=2540745"
                            alt="User Image">
                        <h5 class="card-title">User Profile</h5>
                        <p class="card-text">User Name</p>
                        <p class="card-text">Bio: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Search Box -->
                <div class="search-box">
                    <input type="text" class="search-input" placeholder="Search...">
                    <button type="submit" class="search-button">&#128269;</button>
                </div>
                <!-- Post Section -->
                <div class="post">
                    <div class="right-section1 row align-items-center">
                        <div class="col-auto">
                            <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png"
                                height="40px" width="40px" style="border-radius: 100px; margin-bottom: 10px">
                        </div>
                        <div class="col">
                            <h5 style="margin-bottom: 0;">JAY_VALANI <br/>Mount-abu</h5>
                        </div>
                    </div>


                    <div class="post-content">
                        <img src="https://cdn.outsideonline.com/wp-content/uploads/2023/06/hiker-waterfall-nature_s.jpg"
                            alt="Social Media Post Content" height="400px" width="500px" />
                        <p>
                            This is the content of the social media post. Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. Ut vehicula felis sit amet justo
                            tempus, ac dictum nisi volutpat.
                        </p>
                    </div>
                    <div class="post-actions">
                        <a href="#" class="action-link"><i class="fas fa-thumbs-up action-icon"></i></a>
                        <a href="#" class="action-link"><i class="fas fa-comment action-icon"></i></a>
                        <a href="#" class="action-link"><i class="fas fa-share action-icon"></i></a>
                    </div>
                </div>

                <div class="post">
                    <div class="right-section1 row align-items-center">
                        <div class="col-auto">
                            <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png"
                                height="40px" width="40px" style="border-radius: 100px; margin-bottom: 10px">
                        </div>
                        <div class="col">
                            <h5 style="margin-bottom: 0;">JAY_VALANI <br />Mount-abu</h5>
                        </div>
                    </div>


                    <div class="post-content">
                        <img src="https://i0.wp.com/picjumbo.com/wp-content/uploads/magical-spring-forest-scenery-during-morning-breeze-free-photo.jpg?w=600&quality=80"
                            alt="Social Media Post Content" height="400px" width="500px" />
                        <p>
                            This is the content of the social media post. Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. Ut vehicula felis sit amet justo
                            tempus, ac dictum nisi volutpat.
                        </p>
                    </div>
                    <div class="post-actions">
                        <a href="#" class="action-link"><i class="fas fa-thumbs-up"></i></a>
                        <a href="#" class="action-link"><i class="fas fa-comment"></i></a>
                        <a href="#" class="action-link"><i class="fas fa-share"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
