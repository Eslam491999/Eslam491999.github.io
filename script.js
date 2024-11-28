document.addEventListener('scroll', function () {
  const valuesSection = document.querySelector('.values-section');
  const sectionPosition = valuesSection.getBoundingClientRect().top;
  const screenPosition = window.innerHeight / 1.3;

  console.log('sectionPosition:', sectionPosition, 'screenPosition:', screenPosition);

  if (sectionPosition < screenPosition) {
    valuesSection.classList.add('fade-in');
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  if (form) {
    form.reset();  // Resets the form data on page load
  }
});
