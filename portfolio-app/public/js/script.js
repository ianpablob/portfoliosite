document.addEventListener("DOMContentLoaded", function () {
    const zoomableImages = document.querySelectorAll(".zoomable-image");
  
    zoomableImages.forEach((image) => {
      let isZoomed = false;
  
      image.addEventListener("click", function () {
        if (isZoomed) {
          image.style.transform = "scale(1)";
        } else {
          image.style.transform = "scale(1.5)";
        }
  
        isZoomed = !isZoomed;
      });
    });
  });

  
  function toggleZoom(image) {
    if (image.style.transform === 'scale(1.5)') {
      image.style.transform = 'scale(1.0)';
    } else {
      image.style.transform = 'scale(1.5)';
    }
  }