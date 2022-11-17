let cantidad = 60;

for (let i = 0; i < cantidad; i++) {
    const ball = document.createElement("div")

    const nameUser = document.querySelector(".nameUser")
    var velocidad = Math.floor(Math.random() * (6 - (-3)) + (-3))
    ball.setAttribute("data-velocidad", velocidad)
    nameUser.setAttribute("data-velocidad", velocidad)

    ball.classList.add("ball")
    let size = Math.random() * 125;
    let posX = Math.floor(Math.random() * window.innerWidth)
    let posY = Math.floor(Math.random() * window.innerHeight)

    ball.style.left = `${posX}px`;
    ball.style.top = `${posY}px`;
    ball.style.width = size + "px";
    ball.style.height = size + "px";
    document.body.appendChild(ball)
}

const ball = document.querySelectorAll(".ball")
document.addEventListener("mousemove", (e) => {
    for (let i = 0; i < ball.length; i++) {
        let vlc = ball[i].getAttribute('data-velocidad')
        const x = (window.innerWidth - e.pageX * vlc) / 30
        const y = (window.innerHeight - e.pageY * vlc) / 30

        ball[i].style.transform = `translateX(${y}px) translateY(${x}px)`
    }
})