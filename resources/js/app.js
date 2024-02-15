import './bootstrap';
import 'flowbite';

// Functionality for scrolling in navbar
window.addEventListener('scroll', function() {
    const navigation = document.querySelector('.navigation');
    console.log(navigation);
    if (window.scrollY > 0) {
        navigation.classList.add('bg-white');
    } else {
        navigation.classList.remove('bg-white');
    }
});