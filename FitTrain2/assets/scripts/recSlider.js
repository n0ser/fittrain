const rec = document.querySelector('.recomendation')
const prevBtn = document.querySelector('.prev')
const nextBtn = document.querySelector('.next')

prevBtn.addEventListener('click', () => {

rec.scrollLeft -= 250
})
nextBtn.addEventListener('click', () => {
rec.scrollLeft += 250
})