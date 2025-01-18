<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Styling</title>
    <style>
        .image-container img{
            float: left;
            width:100%;
            
        }
        /* Reset styles to remove margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Full height body with centered content */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f0;  /* Light gray background */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Container for the image */
.image-container {
    position: relative;
    width: 100vw;  /* Full width of the viewport */
    height: 100vh; /* Full height of the viewport */
    overflow: hidden;
    background-color: #000;  /* Black background for contrast */
    display: flex;
    justify-content: center;
    align-items: center;
    border: 5px solid #fff;  /* Optional white border around the container */
    border-radius: 15px;  /* Optional rounded corners */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);  /* Soft shadow for depth */
}

/* Image styling */
.styled-image {
    width: 100%;  /* Full width of the container */
    height: 100%; /* Full height of the container */
    object-fit: contain;  /* Ensure the entire image is visible without cropping */
    transition: transform 0.5s ease, opacity 0.5s ease;  /* Smooth transition for zoom and fade effects */
}

/* Hover effect: slightly zoom the image */
.image-container:hover .styled-image {
    transform: scale(1.05);  /* Slight zoom-in effect */
    opacity: 0.9;  /* Fade effect on hover */
}

/* Responsive behavior: smaller image on mobile devices */
@media (max-width: 768px) {
    .styled-image {
        object-fit: contain;  /* Ensures the image fits within the container without cropping on small screens */
    }
}


    </style>
</head>
<body>
    <div class="image-container">
        <img src="assets/images/image.png" alt="Sample Image" class="styled-image">
    </div>
</body>
</html>
