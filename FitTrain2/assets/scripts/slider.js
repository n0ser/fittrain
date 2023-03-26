const slider = document.querySelector('.slider')
const prevBtn = document.querySelector('.prev')
const nextBtn = document.querySelector('.next')

prevBtn.addEventListener('click', () => {

slider.scrollLeft -= 1
})
nextBtn.addEventListener('click', () => {
slider.scrollLeft += 1
})
setInterval(() => {
slider.scrollLeft += 1
}, 10000)