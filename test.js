document.querySelectorAll('.form-group input').forEach((input) => {
  input.addEventListener('focus', () => {
    input.nextElementSibling.style.color = '#007bff';
  });

  input.addEventListener('blur', () => {
    if (!input.value) {
      input.nextElementSibling.style.color = 'transparent'; // Hide label if input is empty
    }
  });
});
