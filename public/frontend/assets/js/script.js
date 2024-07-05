
let mouseX = 0;
let mouseY = 0;
let dotX = 0;
let dotY = 0;
let isHoveringLink = false;

document.addEventListener('mousemove', function (e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
});

document.addEventListener('mouseover', function (e) {
    if (e.target.tagName.toLowerCase() === 'a') {
        isHoveringLink = true;
    }
});

document.addEventListener('mouseout', function (e) {
    if (e.target.tagName.toLowerCase() === 'a') {
        isHoveringLink = false;
    }
});

function updateDotPosition() {
    const dot = document.getElementById('follower-dot');

    if (!isHoveringLink) {
        const speed = 0.2; // Adjust the speed for more or less delay
        dotX += (mouseX - dotX) * speed;
        dotY += (mouseY - dotY) * speed;

        dot.style.left = `${dotX}px`;
        dot.style.top = `${dotY}px`;
        dot.style.opacity = 1; // Make the dot visible
    } else {
        dot.style.opacity = 0; // Make the dot invisible
    }

    requestAnimationFrame(updateDotPosition);
}

// Start the animation loop
updateDotPosition();