console.log("Task Manager JS Loaded Successfully!");

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.task-item').forEach((el, i) => {
        el.style.opacity = 0;
        setTimeout(() => {
            el.style.transition = "0.6s";
            el.style.opacity = 1;
        }, i * 150);
    });
});
