// Function to check if an item is visible
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();

    console.dir(rect);

    return (
      (rect.bottom - rect.height) <= (window.innerHeight || document.documentElement.clientHeight)
    );
  }

// Function to add the visible class to elements that are visible
function handleVisibility() {
  var elements = document.querySelectorAll(".wdks_anim_on_visible");
  elements.forEach(function (element) {
    if (isElementInViewport(element)) {
      if (!element.classList.contains("visible")) {
        element.classList.add("visible");
      }
    }
  });
}

// Call the handleVisibility function when scrolling the page
window.addEventListener("scroll", handleVisibility);
// Call the handleVisibility function on page load to handle elements that are already visible on load
window.addEventListener("load", handleVisibility);
