import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// resources/js/app.js (or directly in the Blade view)
document.addEventListener('DOMContentLoaded', function() {
     // Show loader when page is loading
     document.querySelectorAll('a').forEach(function(link) {
         link.addEventListener('click', function() {
             document.getElementById('loader').style.display = 'flex';
             setTimeout(function() {
                 document.getElementById('loader').style.display = 'none';
             }, 1000); // Hide loader after 1 second
         });
     });
 });
 
 