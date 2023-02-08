document.getElementById("offerteForm").addEventListener("submit", function(event){
    event.preventDefault();
    // hide step 1 form
    document.getElementById("offerteForm").style.display = "none";
    // show step 2 form
    document.getElementById("offerteForm2").style.display = "block";
    // update the progress bar
    progressBar.style.width = `${(2 / 3) * 100}%`;
    circles.forEach(function(circle) {
      circle.classList.remove("active");
      if (circle.getAttribute("data-step") == 2) {
        circle.classList.add("active");
      }
    });
  });

  
  document.getElementById("offerteForm2").addEventListener("submit", function(event){
    event.preventDefault();
    // hide step 2 form
    document.getElementById("offerteForm2").style.display = "none";
    // show step 3 form
    document.getElementById("offerteForm3").style.display = "block";
    // update the progress bar
    progressBar.style.width = `${(3 / 3) * 100}%`;
    circles.forEach(function(circle) {
      circle.classList.remove("active");
      if (circle.getAttribute("data-step") == 3) {
        circle.classList.add("active");
      }
    });
  });
  
  const circles = document.querySelectorAll(".circle");
  const progress = document.querySelector(".progress");
  const progressBar = document.getElementById("progress");
  
  let activeStep = 1;
  let currentStep = 1;
  
  circles[0].classList.add("active");
  progressBar.style.width = `${(activeStep / 9) * 100}%`;
  
  document.querySelectorAll(".btn").forEach(function(button) {
      button.addEventListener("click", function() {
          if (button.getAttribute("data-step") > activeStep) {
              activeStep = button.getAttribute("data-step");
              progressBar.style.width = `${(activeStep / 6) * 100}%`;
              circles.forEach(function(circle) {
                  circle.classList.remove("active");
                  if (circle.getAttribute("data-step") == activeStep) {
                      circle.classList.add("active");
                  }
              });
          }
      });
  });


  $(document).ready(function() {
    $("#animAppearTitleLine").click(function(e) {
      $(".form-group").css("display", "none");
    });
  
    $("#animAppearTitleLine").click(function() {
      $('.anim-appear-line').addClass('active');
      setTimeout(function() {
        $('.title-anim-appear-line').addClass('active');
      }, 1000);
    });
  });
  
