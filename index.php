<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- navigation -->
    <div class="nav">
        <h1>Sourav Bosu</h1>
        <div class="option">
            <h3><a href="#Home">Home</a></h3>
            <h3><a href="#Aboutme">About me</a></h3>
            <h3><a href="#Project">Project</a></h3>
            <h3><a href="#Contact">Contact</a></h3>
            <h3><a href="backend/login.php">Admin</a></h3>
            <h2 id="dark-mode"><i class="fa-solid fa-moon"></i></h2>
        </div>
    </div>
    <!-- Home -->
    <div class="Home" id="Home">
        <div class="image">
            <img class="my-image" src="image/img.jpg" />
        </div>
        <div class="home-line">
            <h2 id="hi">Hii 🙋,</h2>
            <h2>I'm Sourav Bosu.</h2>
            <h2>Web and Application Developer.</h2>
        </div>
        <div class="hire-btn">
            <button class="btn" onclick="document.location='backend/hire.php'">
                Hire me
            </button>
        </div>
    </div>
    <!-- About me -->
    <div class="Aboutme" id="Aboutme">
        <h2>About me</h2>

        <div class="about-lines">
            <p>
                👋 Hi there! I’m the mind behind innovative web and app solutions that
                not only meet but exceed user expectations. Passionate about crafting
                digital experiences that delight and engage, I've spent years honing
                my craft in web and mobile development. 📱💻 From concept to code,
                every project I touch turns into a user-centric platform where
                aesthetics meet functionality. My toolbox is full of HTML, CSS,
                JavaScript, React each used to elevate user interfaces for more
                intuitive digital interactions. Beyond my technical skills, my
                projects are known for their robust performance, a testament to my
                meticulous back-end work using Node.js and I also learn PHP language.
                I know some database like MySQL, MongoDB and Mongoose . I also know
                some other programing language like C, C++, Python, Dart. I know a
                mobile app building framework Flutter and I build some project on it.
                Formerly leading projects at [Previous Company], I improved user
                experience which increased customer retention by 20%. I believe in the
                power of technology to transform and improve businesses and everyday
                life. Feeling intrigued? Let’s connect! I’m always open to discuss web
                and app development and how I can bring your next project to life. 🚀
            </p>
            <h3>Top skills : JavaScript • React.js • Node.js • PHP • Flutter</h3>
        </div>
    </div>
    <!-- Project -->
    <div class="Project" id="Project">
        <h2 id="p-title">This is some of my resent project</h2>
        <div class="boxes">
            <div class="p-box">
                <img src="image/farmersff.jpg" id="ff" alt="" />
                <h2 class="ff-line">Farmer friends mobile app</h2>
                <a class="ff-view" href="#">View IT</a>
            </div>
            <div class="p-box">
                <img src="image/farmersff.jpg" id="ff" alt="" />
                <h2 class="ff-line">Farmer friends mobile app</h2>
                <a class="ff-view" href="#">View IT</a>
            </div>
            <div class="p-box">
                <img src="image/farmersff.jpg" id="ff" alt="" />
                <h2 class="ff-line">Farmer friends mobile app</h2>
                <a class="ff-view" href="#">View IT</a>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <div class="Contact" id="Contact">
        <?php


        if (isset($_POST['submit'])) {
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Number = $_POST['Number'];
            $Address = $_POST['Address'];

            if ($Name && $Email && $Number && $Address) {
                $connection = new mysqli('localhost', 'root', '', 'portfolio_s');
                if ($connection->connect_error) {
                    die("Connection failed: " .
                        mysqli_connect_error());
                }
                $query = "INSERT INTO souravp (Name, Email,
      Number, Address) VALUES ('$Name', '$Email', '$Number', '$Address')";
                $result = mysqli_query($connection, $query);
                if ($result) {
                    echo
                    "Connected";
                } else {
                    echo "Not Connected: " . mysqli_error($connection);
                }
            } else {
                echo "Please fill up the form.";
            }
            $connection->close();
        } ?>
        <h2>Contact</h2>
        <form action="index.php" method="post" class="from-b">
            <input type=" text" name="Name" placeholder="Name" required />
            <input type="email" name="Email" placeholder="Email" required />
            <input type="text" name="Number" placeholder="Number" required />
            <input type="text" name="Address" placeholder="Address" required />
            <input id="ssub" type="submit" name="submit" />
        </form>
    </div>
    <!-- End-part -->
    <div class="end">
        <div class="endline">
            <h1>You can find me</h1>
            <h2>Present Address:-Dhaka,Bangladesh</h2>
            <h2>Phone:-01737992520</h2>
            <h2>Gmail:-souravbosu844@gmail.com</h2>
            <div class="end-icon">
                <div class="i-box">
                    <a class="i-view" href="https://github.com/Sou963"> <i class="fa-brands fa-github" id="ii"></i></a>
                    <a class="i-view" href="https://www.linkedin.com/in/sourav-bosu/"> <i class="fa-brands fa-linkedin"
                            id="ii"></i></a>
                    <a class="i-view" href="https://www.facebook.com/sourav.sbose.003"> <i class="fa-brands fa-facebook"
                            id="ii"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>