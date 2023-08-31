// TOGGLE-ICON
const toggleIcon = document.querySelector('.toggle-icon');
const navMenu = document.querySelector('nav ul');

toggleIcon.addEventListener('click', () => {
    toggleIcon.classList.toggle('active');
    navMenu.classList.toggle('active');
    
})

// CONTACT FORM POPUP
let popup = document.getElementById('popup');
    
        function openPopup(){
            popup.classList.add('open_popup');
            document.getElementById("contact-container").style.visibility = "hidden";
            document.getElementById("h1").style.display = "none";  
        }

        function closePopup(){
            popup.classList.remove('open_popup');
        }

// Close the dropdown menu if the user clicks outside of it
// window.onclick = function(event) {
//     if (!event.target.matches('nav ul li')) {
//         var dropdowns = document.getElementsByClassName('nav ul');
//         var i;
//         for (i = 0; i < dropdowns.length; i++) {
//             var openDropdown = dropdowns[i];
//     if (openDropdown.classList.contains('show')) {
//     openDropdown.classList.remove('show');
//     }
//     }
//     } 
// }