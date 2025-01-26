var tl = gsap.timeline();
//nav bar animation
tl.from(".nav h1", {
  y: -20,
  opacity: 0,
  duration: 0.5,
  delay: 1,
});

tl.from(".option h3", {
  y: -20,
  opacity: 0,
  duration: 0.5,
  delay: 0.3,
  stagger: 1,
});

tl.from(".option h2", {
  y: -20,
  opacity: 0,
  duration: 0.5,
  delay: 0.3,
});
//Home animation
tl.from(".Home ", {
  y: -20,
  opacity: 0,
  duration: 0.5,
  delay: 0.4,
  stagger: 1,
});
//dark-mode to light mode
let dark_mode = document.getElementById("dark-mode");

dark_mode.addEventListener("click", function () {
  document.body.classList.toggle("dark-mode");
  document.body.classList.toggle("light-mode");
});

tl.from(".home h2", {
  y: -20,
  opacity: 0,
  duration: 0.5,
  delay: 0.3,
  stagger: 1,
});
//About animation

tl.from(".Aboutme", {
  y: -20,
  opacity: 0,
  duration: 0.5,
  delay: 0.4,
  stagger: 1,
});
//project animation
tl.from(".Project", {
  y: -20,
  opacity: 0,
  duration: 0.5,
  delay: 0.4,
  stagger: 1,
});
//Contact animation
tl.from(".Contact", {
  y: -20,
  opacity: 0,
  duration: 0.5,
  delay: 0.4,
  stagger: 1,
});
//end animation
tl.from(".end", {
  y: -20,
  opacity: 0,
  duration: 0.5,
  delay: 0.4,
  stagger: 1,
});
