// Start Galaxy
const canvas = document.getElementById('galaxy-canvas');
const ctx = canvas.getContext('2d');

let stars = [];
const numStars = 100;
let mouse = {
    x: 0,
    y: 0
};

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = document.querySelector('section').offsetHeight;
    generateStars();
}

function generateStars() {
    stars = [];
    for (let i = 0; i < numStars; i++) {
        stars.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            radius: Math.random() * 1.6 + 0.6,
            speed: Math.random() * 0.5 + 0.3
        });
    }
}

window.addEventListener('resize', resizeCanvas);
resizeCanvas();

window.addEventListener('mousemove', (e) => {
    mouse.x = (e.clientX / window.innerWidth) - 0.5;
    mouse.y = (e.clientY / canvas.height) - 0.5;
});

function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (let star of stars) {
        let offsetX = mouse.x * 50 * star.speed;
        let offsetY = mouse.y * 50 * star.speed;

        ctx.beginPath();
        ctx.arc(star.x + offsetX, star.y + offsetY, star.radius, 0, Math.PI * 2);
        ctx.fillStyle = '#cbd5e1'; // slate-300
        ctx.shadowColor = 'rgba(51, 65, 85, 0.8)'; // glow warna sama tapi transparan
        ctx.shadowBlur = 8;
        ctx.fill();
    }

    requestAnimationFrame(animate);
}

animate();
// End Galaxy