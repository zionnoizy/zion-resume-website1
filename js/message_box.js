const openModelButtons = document.querySelectorAll('[data-openmessagebox-target]')

const closeModelButtons = document.querySelectorAll('[data-close-button]')

const overlay = document.getElementById('overlay')


openModelButtons.forEach(button => {
    button.addEventListener('click', () =>{
        console.log(button.dataset);
        const mb = document.querySelector(button.dataset.openmessageboxTarget)
        openModal(mb)
    })
})

overlay.addEventListener('click', () =>{
    const m = document.querySelectorAll('.message_box.active')
    m.forEach(mb => {
        closeModal(mb)
    })
})

closeModelButtons.forEach(button => {
    button.addEventListener('click', () =>{
        const my_modal = button.closest('.message_box')
        closeModal(my_modal)
    })
})

function openModal(mb){
    if (mb == null) return
    mb.classList.add('active')
    overlay.classList.add('active')
}

function closeModal(mb){
    if (mb == null) return
    mb.classList.remove('active')
    overlay.classList.remove('active')
}