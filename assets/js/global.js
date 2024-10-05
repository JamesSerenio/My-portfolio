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

/*Modal*/

function openModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "block";
}

function closeModal() {
    var modals = document.getElementsByClassName("modal");
    for (var i = 0; i < modals.length; i++) {
        modals[i].style.display = "none";
    }
}

/*notifacation*/

document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

   
    fetch('submit_form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
       
        if (data.status === 'success') {
           
            showNotification(data.message, 'success'); 
        } else {
            
            showNotification(data.message, 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('An error occurred while submitting the form.', 'error'); 
    });
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

// Function to check if an element is in view
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

document.addEventListener("DOMContentLoaded", function() {
    const fadeElements = document.querySelectorAll('.fade-in');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible'); 
            } else {
                entry.target.classList.remove('visible'); 
            }
        });
    }, observerOptions);

    fadeElements.forEach(element => {
        observer.observe(element); 
    });
});

