
document.addEventListener('DOMContentLoaded', function () {
   // Check user's preferred theme from localStorage
   const currentTheme = localStorage.getItem('theme') || 'light-mode';
   document.body.classList.add(currentTheme);

   // Toggle between dark and light mode
   const themeToggle = document.getElementById('theme-toggle');
   themeToggle.addEventListener('click', function () {
      const newTheme = document.body.classList.contains('light-mode') ? 'dark-mode' : 'light-mode';
      document.body.className = newTheme;

      // Save the user's theme preference to localStorage
      localStorage.setItem('theme', newTheme);
   });
});

