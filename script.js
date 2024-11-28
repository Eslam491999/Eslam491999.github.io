document.addEventListener('scroll', function () {
  const valuesSection = document.querySelector('.values-section');
  const sectionPosition = valuesSection.getBoundingClientRect().top;
  const screenPosition = window.innerHeight / 1.3;

  console.log('sectionPosition:', sectionPosition, 'screenPosition:', screenPosition);

  if (sectionPosition < screenPosition) {
    valuesSection.classList.add('fade-in');
  }
});
