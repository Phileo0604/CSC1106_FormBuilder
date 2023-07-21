
// Attach an event listener to the "x" icon
document.querySelector('.close-icon').addEventListener('click', function() {
// Handle the click event here
// For example, you can remove the parent div when the "x" icon is clicked
this.parentElement.remove();
});