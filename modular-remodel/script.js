document.addEventListener('DOMContentLoaded', () => {
  const links = document.querySelectorAll('.city-link');
  const content = document.getElementById('city-content');

  links.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();

      links.forEach(l => l.classList.remove('active'));
      link.classList.add('active');

      const city = link.dataset.city;

      fetch(`data.php?city=${city}`)
        .then(response => response.json())
        .then(data => {
          if (data.error) {
            content.innerHTML = `<p>${data.error}</p>`;
          } else {
            content.classList.add('fade-out');
            setTimeout(() => {
              content.innerHTML = `
                <div class="city-card">
                  <div class="city-image">
                    <img src="${data.image}" alt="${data.title}">
                  </div>
                  <div class="city-info">
                    <h2>${data.title}</h2>
                    <div class="city-meta">
                      <p><strong>Country:</strong> ${data.country}</p>
                      <p><strong>Population:</strong> ${data.population}</p>
                      <p><strong>Nickname:</strong> ${data.nickname}</p>
                    </div>
                    <div class="city-description">${data.description}</div>
                  </div>
                </div>
              `;
              content.classList.remove('fade-out');
              content.classList.add('fade-in');
            }, 200);
          }
        })
        .catch(err => {
          content.innerHTML = `<p>Failed to load city data.</p>`;
          console.error(err);
        });
    });
  });
});
