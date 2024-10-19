<!-- resources/views/partials/footer.blade.php -->
<footer class="bg-gradient-to-r from-blue-900 via-slate-800 to-gray-900 text-white py-4 shadow-lg">
     <div class="container mx-auto text-center">
         <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
             <!-- Company Info -->
             <div class="space-y-4">
                 <h3 class="text-lg font-semibold">About E-Commerce</h3>
                 <p class="text-sm text-gray-300">Your go-to platform for the best deals on electronics, clothing, accessories, and more. Shop with confidence and enjoy premium products at competitive prices.</p>
                 <a href="#" class="text-blue-400 hover:text-blue-500 transition duration-300 ease-in-out">Learn More &rarr;</a>
             </div>
 
             <!-- Useful Links -->
             <div class="space-y-4">
                 <h3 class="text-lg font-semibold">Useful Links</h3>
                 <div class="flex flex-col space-y-2">
                     <a href="#" class="text-gray-300 hover:text-blue-400 transition duration-300 ease-in-out">Privacy Policy</a>
                     <a href="#" class="text-gray-300 hover:text-blue-400 transition duration-300 ease-in-out">Terms of Service</a>
                     <a href="#" class="text-gray-300 hover:text-blue-400 transition duration-300 ease-in-out">Refund Policy</a>
                     <a href="#" class="text-gray-300 hover:text-blue-400 transition duration-300 ease-in-out">Shipping Info</a>
                 </div>
             </div>
 
             <!-- Social Media -->
             <div class="space-y-4">
                 <h3 class="text-lg font-semibold">Follow Us</h3>
                 <div class="flex justify-center space-x-4">
                     <a href="#" class="hover:text-blue-400 transition duration-300 ease-in-out">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                             <path d="M24 4.56v14.88A4.56 4.56 0 0119.44 24H4.56A4.56 4.56 0 010 19.44V4.56A4.56 4.56 0 014.56 0h14.88A4.56 4.56 0 0124 4.56zM16.88 12h-3v8h-3.76v-8h-2.76V9.12h2.76v-2.72C9.88 4.08 10.6 3 13.2 3h2.68v3.12h-1.96c-.72 0-.84.28-.84.88v2.12h2.8L16.88 12z"/>
                         </svg>
                     </a>
                     <a href="#" class="hover:text-blue-400 transition duration-300 ease-in-out">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                             <path d="M12 2.04c-5.46 0-9.9 4.44-9.9 9.92 0 4.38 3.58 8.03 8.2 8.78v-6.22H7.9v-2.56h2.34V9.66c0-2.3 1.38-3.56 3.46-3.56.994 0 1.846.074 2.094.108v2.43h-1.432c-1.12 0-1.342.534-1.342 1.32v1.7h2.68l-.352 2.56h-2.328V20.74c4.62-.76 8.18-4.4 8.18-8.78 0-5.48-4.44-9.92-9.9-9.92z"/>
                         </svg>
                     </a>
                     <a href="#" class="hover:text-blue-400 transition duration-300 ease-in-out">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                             <path d="M12 0C5.372 0 0 5.372 0 12c0 5.084 3.157 9.409 7.553 11.017-.103-.95-.194-2.396.04-3.432.213-.968 1.373-6.177 1.373-6.177s-.349-.698-.349-1.73c0-1.62.941-2.83 2.112-2.83.996 0 1.476.747 1.476 1.645 0 1-.637 2.504-.965 3.89-.279 1.176.586 2.137 1.74 2.137 2.09 0 3.506-2.206 3.506-5.387 0-2.808-2.016-4.772-4.889-4.772-3.33 0-5.287 2.494-5.287 5.071 0 .912.349 1.889.784 2.418.087.104.1.195.075.3-.08.347-.255 1.1-.294 1.252-.046.195-.151.236-.352.142-1.316-.614-2.13-2.546-2.13-4.097 0-3.329 2.418-6.387 6.971-6.387 3.661 0 6.519 2.616 6.519 6.113 0 3.646-2.295 6.572-5.485 6.572-1.07 0-2.08-.56-2.424-1.215 0 0-.577 2.202-.716 2.73-.26.99-.94 2.223-1.402 2.975C8.78 23.62 10.355 24 12 24c6.628 0 12-5.372 12-12C24 5.372 18.628 0 12 0z"/>
                         </svg>
                     </a>
                 </div>
             </div>
         </div>
 
         <!-- Footer Bottom -->
         <div class="mt-1 border-t border-gray-700 pt-1">
             <p class="text-sm">&copy; {{ date('Y') }} E-Commerce. All rights reserved.</p>
             <p class="text-xs mt-2">Powered by <a href="#" class="text-blue-400 hover:text-blue-500 transition duration-300 ease-in-out">JoChaho</a></p>
         </div>
     </div>
 </footer>
 