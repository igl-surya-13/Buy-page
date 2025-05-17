document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch('send.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    document.getElementById("statusMessage").textContent = data;
  })
  .catch(error => {
    document.getElementById("statusMessage").textContent = "An error occurred.";
  });
});