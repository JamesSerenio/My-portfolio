<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <header>
<div class="user">
    <img src="assets/image/pic.jpg" alt="">
    <h3 class="name"> James Serenio</h3>
    <p class="post"></p>
</div>

<nav class="navbar">
    <ul>
        <li><a href="#Home">Home</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="#Education">Education</a></li>
        <li><a href="#Portfolio">Portfolio</a></li>
        <li><a href="#Contact">Contact</a></li>
    </ul>
</nav>
</header>

<div id="menu" class="fas fa-bars"></div>
<section class="home fade-in" id="Home">
    
<h3>Welcome</h3>
<h3>To</h3>
<h3>James Serenio </h3>
<h3>Portfolio</h3>  
<img src="assets/image/pics.png" alt="">
</section>

<section class="about fade-in" id="About">
    <h1 class="heading fade-in"> <span> About </span> Me </h1>
    <div class="row fade-in">
        <div class="info fade-in">
            <h3><span> Name:</span> James M. Serenio </h3>
            <h3><span> Age: </span> 22 </h3>
            <h3><span> Post:</span> Front End Developer, Web Designer, Programer, Web Developer </h3>
            <h3><span> Language: </span> English </h3>
        </div>
        
        <div class="counter fade-in">
    <div class="box fade-in">
        <a href="assets/activity/about_me/Project_Completed.php">
            <span>5+</span>
            <h3>Project Completed</h3>
        </a>
    </div>

    <div class="box fade-in">
        <a href="assets/activity/about_me/Year_Of_Studying.php">
            <span>2+</span>
            <h3>Year Of Studying</h3>
        </a>
    </div>

    <div class="box fade-in">
        <a href="assets/activity/about_me/Certificate_Awards.php">
            <span>5+</span>
            <h3>Certificate Awards</h3>
        </a>
    </div>

    <div class="box fade-in">
        <a href="satisfied_customers.html">
            <span>5+</span>
            <h3>Satisfied Customers</h3>
        </a>
    </div>
</div>

<!-- projectModal 

<div id="project" class="modal">
    <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
        <h1>BOOK Appointment System</h1>
        <p>"I was in my second year then, and that was assigned to us by our proof laboratory. We collaborated with the third year, with us handling the front end and the third year working on the back end. Our system was a Booking Appointment System."</p>
        <img src="assets/image/a.png" alt="Project Image">
        <img src="assets/image/b.png" alt="Project Image">
        <img src="assets/image/c.png" alt="Project Image">
        <img src="assets/image/d.png" alt="Project Image">
        <h1>Set two value and set Three Value</h1>
        <p>"I was in my second year during that time. That was assigned to us by our proof lecture, and it involved working with two set values and three set values."</p>
        <img src="assets/image/e.png" alt="Project Image">
        <h1>Chess Game</h1>
        <p>"I was in my first year during that time. That was our second-semester finals for our GAME DEV. We were given the task to create a chess game, and the second picture we showed was what we presented because the first one didn't turn out so well."</p>
        <img src="assets/image/f.png" alt="Project Image">
        <img src="assets/image/g.png" alt="Project Image">
        <h1>Flappy box Game</h1>
        <p>"I was in my first year during that time. That was a game I created just for fun, as I was experimenting with coding and decided to try my hand at making a game."</p>
        <img src="assets/image/h.png" alt="Project Image">
        <h1>Lost Game</h1>
        <p>"I was also in my first year during that time. That was the period when my friend and I, just for fun, decided to create a game. We were just enjoying ourselves, and we had talked about becoming game developers in the future, so we made a game called 'Lost Game.'"</p>
        <img src="assets/image/i.png" alt="Project Image">
    </div>
</div>



<div id="yearOfStudying" class="modal">
    <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
        <h1>First Year</h1>
        <p>"I'm still in my first year then, and we're waiting for the next school year. While waiting, we took pictures."</p>
        <img src="assets/image/studying2.jpg" alt="Project Image">
        <h1>Second Year</h1>
        <p>"I was in my second year then, and we were creating a portfolio design using Figma, I think it was around 7 PM."</p>
        <img src="assets/image/studying1.jpg" alt="Project Image">
    </div>
</div>


<div id="certificateAwards" class="modal">
    <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
        <h1>Awards</h1>
        <p>"Those were my high school days when I was aiming to win all the awards for my swimming achievements."</p>
        <img src="assets/image/awards.jpg" alt="Project Image">
    </div>
</div>
-->

<div id="satisfiedCustomers" class="modal">
    <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
        <h1>Satisfied Customers</h1>
        <p>"I was in my second year during that time. Those were the people who became my customers, but I also took the time to teach them because I wanted all of us to succeed."</p>
        <img src="assets/image/customer1.jpg" alt="Project Image">
        <img src="assets/image/customer2.jpg" alt="Project Image">
        <img src="assets/image/customer3.jpg" alt="Project Image">
        <img src="assets/image/customer4.jpg" alt="Project Image">
        <img src="assets/image/customer5.jpg" alt="Project Image">
        <img src="assets/image/customer6.jpg" alt="Project Image">
    </div>
</div>


</section>

<section class="education fade-in" id="Education">
    <h1 class="heading fade-in"> My <span> Education </span> </h1>
    <div class="box-container fade-in">

        <div class="box fade-in"onclick="openModal('modal2018')">
            <i class="hi fade-in"></i>
            <span>2018</span>
            <h3>Sports</h3>
            <p>"This year, 
I joined the swimming team for our school, 
and we practiced for a year for the upcoming
competition."</p>
        </div>

        <div class="box fade-in"onclick="openModal('modal2019')">
            <i class="hi fade-in"></i>
            <span>2019</span>
            <h3>Sports</h3>
            <p>"This year, 
we competed in the games, 
and I won three gold medals and other events. 
Although it wasn't bad, 
I also secured one silver and two bronze medals 
in the qualifying rounds for the 
Philippine team as a first-timer."</p>
        </div>

        <div class="box fade-in"onclick="openModal('modal2020')">
            <i class="hi fade-in"></i>
            <span>2020</span>
            <h3>A.B.M</h3>
            <p>"This year, 
I have graduated, 
and the strand I took was 
A.B.M (Accountancy, Business, and Management) 
because I know I can use it in the future."
</p>
        </div>

        <div class="box fade-in"onclick="openModal('modal2021')">
            <i class="hi fade-in"></i>
            <span>2021</span>
            <h3>A.B.M</h3>
            <p>"This year, 
I am an incoming graduate, 
and I will be taking
 the entrance exams for my college."</p>
        </div>

        <div class="box fade-in"onclick="openModal('modal2022')">
            <i class="hi fade-in"></i>
            <span>2022</span>
            <h3>Information technology</h3>
            <p>"This year, 
I passed the exam and qualified for almost all courses. 
I chose Information Technology 
and have already registered 
for my incoming first year in college."</p>
        </div>

        <div class="box fade-in"onclick="openModal('modal2023')">
            <i class="hi fade-in"></i>
            <span>2023</span>
            <h3>Information technology</h3>
            <p>"This year, 
I am not yet in my second year of college, 
but I am still in the learning phase. 
We have completed several projects, 
and I am currently studying front-end development. 
Next in line is back-end development as well."</p>
        </div>
    </div>

<!-- Modals for each year -->
<div id="modal2018" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h1>Year 2018</h1>
        <img src="assets/image/sport1.jpg" alt="Project Image">
    </div>
</div>

<div id="modal2019" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h1>Year 2019</h1>
        <img src="assets/image/sport2.jpg" alt="Project Image">
    </div>
</div>

<div id="modal2020" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h1>Year 2020</h1>
        <img src="assets/image/g11.jpg" alt="Project Image">
    </div>
</div>

<div id="modal2021" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h1>Year 2021</h1>
        <img src="assets/image/g12.jpg" alt="Project Image">
    </div>
</div>

<div id="modal2022" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h1>Year 2022</h1>
        <img src="assets/image/studying2.jpg" alt="Project Image">
    </div>
</div>

<div id="modal2023" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h1>Year 2023</h1>
        <img src="assets/image/2nd.jpg" alt="Project Image">
    </div>
</div>


</section>

<section class="portfolio fade-in" id="Portfolio">
    <h1 class="heading fade-in"> My <span> Portfolio </span> </h1>
    <div class="box-container fade-in">

        <!-- Example of a flip box -->
        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front fade-in">
                    <img src="assets/image/a.png" alt="Project Image">
                </div>
                <div class="flip-box-back">
                    <h1>Front End</h1>
                    <p>"I was in my second year during that time. This is the project I worked on, a book borrowing system where users can choose the categories they are interested in. It's also a part of the booking appointment system."</p>
                </div>
            </div>
        </div>

        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front fade-in">
                    <img src="assets/image/b.png" alt="Project Image">
                </div>
                <div class="flip-box-back">
                    <h1>Front End</h1>
                    <p>"I was in my second year during that time. This is what you'll see first when you open the book appointment system there, you'll find the email, password, and other details. It's the initial step before proceeding to the home page once you have an account."</p>
                </div>
            </div>
        </div>

        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front fade-in">
                     <img src="assets/image/c.png" alt="Project Image">
                </div>
                <div class="flip-box-back">
                    <h1>Front End</h1>
                    <p>"I was in my second year during that time. Once you're done with the login, you'll be directed to the home page, which includes sections like 'About Us,' 'Contact Us,' and others. This is also a part of our book appointment system."</p>
                </div>
            </div>
        </div>

        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front fade-in">
                    <img src="assets/image/d.png" alt="Project Image">
                </div>
                <div class="flip-box-back">
                    <h1>Front End</h1>
                    <p>"I am a second-year student and this is from our home page. When you select 'About Us,' this is what appears, with a description of our book appointment system."</p>
                </div>
            </div>
        </div>

        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front fade-in">
                    <img src="assets/image/f.png" alt="Project Image">
                </div>
                <div class="flip-box-back">
                    <h1>Full Stack</h1>
                    <p>"I am a first-year student and this is the first thing I worked on, a chess game, when we presented our game dev. However, we didn't present that."</p>
                </div>
            </div>
        </div>

        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front fade-in">
                    <img src="assets/image/g.png" alt="Project Image">
                </div>
                <div class="flip-box-back">
                    <h1>Full Stack</h1>
                    <p>"I am a first-year student, and this is the second project I worked on, a chess game, which we presented for our game dev."</p>
                </div>
            </div>
        </div>

        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front fade-in">
                    <img src="assets/image/h.png" alt="Project Image">
                </div>
                <div class="flip-box-back">
                    <h1>Full Stack</h1>
                    <p>"I am a first-year student, and this is something I worked on just for my own enjoyment. I created a Flappy Bird-style game called 'Fluppy Box."</p>
                </div>
            </div>
        </div>

        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front fade-in  ">
                    <img src="assets/image/i.png" alt="Project Image">
                </div>
                <div class="flip-box-back">
                    <h1>Full Stack</h1>
                    <p>"I Was Also In My First Year During That Time. That Was The Period When My Friend And I, Just For Fun, Decided To Create A Game. We Were Just Enjoying Ourselves, And We Had Talked About Becoming Game Developers In The Future, So We Made A Game Called 'Lost Game."</p>
                </div>
            </div>
        </div>

    </div>
</section>

<h1 class="heading fade-in"> My <span> Contact </span> </h1>
<section class="contact fade-in" id="Contact">
<div class="row fade-in">
    <div class="content fade-in">
        <h3 class="title fade-in"> Contact Info </h3>
        <div class="info">
            <h3><i class=" fas fa-envelope fade-in"></i><a href="mailto:sereniojames363@gmail.com">sereniojames363@gmail.com</a></h3>
            <h3><i class="fab fa-facebook fade-in"></i> <a href="https://www.facebook.com/JamesManayagaSerenio" target="_blank">James Manayaga Serenio</a></h3>
            <h3><i class=" fas fa-phone fade-in"></i> 09264686973-TM </h3>
            <h3><i class=" fas fa-phone fade-in"></i> 09308887220-Smart </h3>
            <h3><i class="fas fa-map-marker-alt fade-in"></i> <a href="https://www.google.com/maps?q=Tankulan,Manolo+Fortich,Bukidnon" target="_blank">Tankulan, Manolo Fortich, Bukidnon</a></h3>
        </div>
    </div>
    
    <form id="contactForm" action="submit_form.php" method="post">
    <input type="text" name="name" placeholder="Name:" class="box" required>
    <input type="email" name="email" placeholder="Email:" class="box" required>
    <input type="text" name="project_name" placeholder="Project Name:" class="box" required>
    <textarea name="message" cols="30" rows="10" class="box message" placeholder="Message:" required></textarea>
    <button type="submit" class="btn"> Send <i class="fas fa-paper-plane"></i> </button>
</form>

<!-- Notification -->
<div id="notification" class="notification"></div>
</section>

<a href="#Home" class="top">
    <img src="assets/image/rocket.png" alt="">
</a>
<!---script--->

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.7.1.js"></script>
    <script src="assets/js/global.js"></script>
</body>
</html>