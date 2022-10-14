function showSuccessMsg(title, message, type) {
    console.log('SUCCESS')
    msg({
        title: title,
        message: message,
        type: type,
        duration: 5000
    });
}

function showErrorMsg(title, message, type) {
    msg({
        title: title,
        message: message,
        type: type,
        duration: 5000
    });
}
// msg function
function msg({
    title = "",
    message = "",
    type = "info",
    duration = 3000
}) {
    const main = document.getElementById("msg");
    if (main) {
        const msg = document.createElement("div");

        // Auto remove msg
        const autoRemoveId = setTimeout(function() {
            main.removeChild(msg);
        }, duration + 1000);

        // Remove msg when clicked
        msg.onclick = function(e) {
            if (e.target.closest(".msg__close")) {
                main.removeChild(msg);
                clearTimeout(autoRemoveId);
            }
        };

        const icons = {
            success: "fas fa-check-circle",
            info: "fas fa-info-circle",
            warning: "fas fa-exclamation-circle",
            error: "fas fa-exclamation-circle"
        };
        const icon = icons[type];
        const delay = (duration / 1000).toFixed(2);

        msg.classList.add("msg", `msg--${type}`);
        msg.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;

        msg.innerHTML = `
                <div class="msg__icon">
                    <i class="${icon}"></i>
                </div>
                <div class="msg__body">
                    <h3 class="msg__title">${title}</h3>
                    <p class="msg__msg">${message}</p>
                </div>
                <div class="msg__close">
                    <i class="fas fa-times"></i>
                </div>
            `;
        main.appendChild(msg);
    }
}