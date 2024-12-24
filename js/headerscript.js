let navbar = document.querySelector(".navbar");

document.querySelector("#menu-btn").onclick = () => {
  navbar.classList.toggle("active");
  searchForm.classList.remove("active");
};

let searchForm = document.querySelector(".search-form");
let searchBtn = document.querySelector("#search-btn");
let searchInput = searchForm.querySelector("input");

// Toggle the search form visibility when the search button is clicked
document.querySelector("#search-btn").onclick = (e) => {
  e.stopPropagation(); // Prevent the click from propagating to the document
  searchForm.classList.toggle("active");
  searchBtn.classList.toggle("active"); // Toggle active class on the button
  navbar.classList.remove("active");
};

// Hide the search form when clicking outside
document.addEventListener("click", (e) => {
  if (!searchForm.contains(e.target) && e.target.id !== "search-btn") {
    searchForm.classList.remove("active");
    searchInput.value = ""; // Clear the input field
    searchBtn.classList.remove("active"); // Remove active class when hiding
  }
});

// Hide the search form and navbar on scroll
window.onscroll = () => {
  navbar.classList.remove("active");
  searchForm.classList.remove("active");
  searchInput.value = ""; // Clear the input field
  searchBtn.classList.remove("active"); // Remove active class when hiding
};



let currentPage = window.location.pathname.split('/').pop(); // Get current file name
let navLinks = document.querySelectorAll(".navbar a");

navLinks.forEach(link => {
  if (link.getAttribute("href") === currentPage) {
    link.classList.add("active"); // Add an 'active' class to the matching link
  }
});