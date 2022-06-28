function themeNuitJour(){
    const date = new Date()
    const hour = date.getHours()

    if(hour > 5 || hour < 20) {

        document.documentElement.style.setProperty('--main-color','#6D0C9D')
        document.documentElement.style.setProperty('--main-bg-color','#C9CDFF')
        document.documentElement.style.setProperty('--background-img','url(sources/low-poly-house-light.png)')
        
    }else {
        document.documentElement.style.setProperty('--main-color','#white')
        document.documentElement.style.setProperty('--main-bg-color','#2E2760')
        document.documentElement.style.setProperty('--background-img','url(sources/low-poly-house.png)')
    }
}

themeNuitJour()


// const btnToggle = document.querySelector('btn-toggle');

// btnToggle.addEventListener('click', () => {
//         const nav = document.nav;
//         const body = document.body;

//         if(nav.classlist.contains('dark-mode')){
//             nav.classlist.remove('dark-mode')
//             nav.classlist.add('light-mode')

//         } else if(nav.classlist.contains('light-mode')){

//             nav.classlist.remove('light-mode')
//             nav.classlist.add('dark-mode')
//         }

//         if(body.classlist.contains('dark-mode')){
//             body.classlist.remove('dark-mode')
//             body.classlist.add('light-mode')

//         } else if(body.classlist.contains('light-mode')){

//             body.classlist.remove('light-mode')
//             body.classlist.add('dark-mode')
//         }

// })






