const container = document.querySelector(".container_register")
const ball = document.querySelectorAll(".ball")
const containerAnimacion = document.querySelector(".container_animacion")
const input = document.querySelectorAll("input")
container.addEventListener("mousemove", (e) => {


    for (let i = 0; i < ball.length; i++) {
        if (e.target != input[i]) {
            console.log()
            console.log()
            const velocidad = ball[i].getAttribute('data-velocidad')
            const x = 600 - e.pageX / 4 * velocidad
            const y = 600 - e.pageY * velocidad

            ball[i].style.transform = `translateY(${x/50}px) translateX(${y/70}px) `
        }
    }

})

container.addEventListener("mouseleave", (e) => {
    for (let i = 0; i < ball.length; i++) {
        ball[i].style.transition = 'all 1s ease'
        ball[i].style.transform = `translateY(${0}px) translateX(${0}px) `

    }
})

container.addEventListener("mouseenter", (e) => {
    for (let i = 0; i < ball.length; i++) {
        ball[i].style.transition = 'none'

    }
})