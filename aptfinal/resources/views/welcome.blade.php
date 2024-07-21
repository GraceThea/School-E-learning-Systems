<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elementary school website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"rel="stylesheet">
</head>
<body>
    <section class ="header">
        <nav>
            <a href  = "welcome.blade.php"><img src='/images/logo.png'></a>
            <div class = "nav-links" id=>
                <ul>       
                    <li><a href ="{{route('ba')}}">AboutUs</a></li>
                    <li><a href ="{{route('la')}}">Testimonials</a></li>
                    <li><a href ="{{route('log')}}">Login</a></li>
                    <li><a href ="/">Home</a></li>
                </ul>
            </div>
        </nav>


<div class="text-box">
    <h1>The Biggest Elementary school in J Town </h1>
    <p>Making a website is now one of the easiest thing in the world.You just need to learn HTML,CSS,<br>Java script and you are good to go.</p>
    <a href=""class="hero-btn">Visit us to know more</a>  

    <br><br><br><br><br>
<!---------- Course -------->
<section class="course">
    <h1>Courses we offer</h1>
    <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit </p>

    <div class="row">
        <div class="course-col">
                <h3>Intermediate</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="course-col">
                <h3>Advanced</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="course-col">
                <h3>Post-Graduate</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</body>
</html>