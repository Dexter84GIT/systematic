const mobileMenu = () => {
    const body = document.querySelector('body')
    const wrapper = document.querySelector('.mobile-wrapper')
    const btn = document.querySelector('.burger-btn')

    body.addEventListener('click', (e) => {
        if ((e.target.classList.contains('burger-btn')) || (e.target.closest('.burger-btn'))) {
            wrapper.classList.toggle('active')
            btn.classList.toggle('active')
        }
        else if (!e.target.closest('.mobile-menu')) {
            wrapper.classList.remove('active')
            btn.classList.remove('active')
        } 
    })
}
mobileMenu()