TweenMax.to('.panneau',1.5,   {

    delay: 1,
    top: "-150%",
    ease: Expo.easeInOut

})

TweenMax.to('.panneau background-image',1.5, {

    delay: 0.5,
    top:"-150%",
    ease: Expo.easeInOut
})

TweenMax.from('.titre',3, {

    delay: 1,
    y: +600,
    ease: Expo.easeInOut
})

TweenMax.from('button',3, {

    delay: 1,
    y: +600,
    ease: Expo.easeInOuT
})  