$(document).ready(function(){
    
    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('header').toggleClass('toggle');
    });

    $(window).on('scroll load',function(){

        $('#menu').removeClass('fa-times');
        $('header').removeClass('toggle');

        if($(window).scrollTop() > 0){
            $('.top').show();
        }else{
            $('.top').hide();
        }

    });

    $('a[href*="#"]').on('click',function(e){

        e.preventDefault();

        $('html, body').animate({

            scrollTop : $($(this).attr('href')).offset().top,

        },
        500,
        'linear'
        );

    });

});

var typed = new Typed(".post", {
    strings: ["Front End Developer","Web Designer","Programer","Web Developer"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
}); 

/* notification (no backend needed) */
document.getElementById('contactForm').addEventListener('submit', function(event) {
  event.preventDefault();

  // kahit walang PHP, automatic success
  showNotification('✅ Message sent successfully!', 'success');
  this.reset();
});


// Function to show the notification with animation
function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `notification ${type} show`; 
    notification.innerText = message;

    document.body.appendChild(notification);

    
    setTimeout(() => {
        notification.style.opacity = '0';
        setTimeout(() => {
            notification.remove();
        }, 500); 
    }, 3000);
}

document.addEventListener("DOMContentLoaded", function () {
    const fadeInElements = document.querySelectorAll('.fade-in');

    function checkScroll() {
        fadeInElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top < window.innerHeight * 0.9) {
                element.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', checkScroll);
    checkScroll(); // Run once on page load
});
