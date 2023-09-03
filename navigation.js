// Get the navigation bar element
const navBar = document.querySelector('nav');

document.addEventListener('DOMContentLoaded', () => {
    // Get the list of links inside the navigation bar
    const navLinks = document.querySelectorAll('nav ul li a');
    // Add an event listener to each link
    navLinks.forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
  
        // Get the target section ID from the link href attribute
        const sectionId = link.getAttribute('href');
        const section = document.querySelector(sectionId);
  
        // Scroll to the target section using smooth scrolling
        section.scrollIntoView({ behavior: 'smooth' });
      });
    });
  });
  
