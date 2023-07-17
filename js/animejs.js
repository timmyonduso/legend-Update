    let tl =anime.timeline({
    easing: 'easeOutExpo',
    duration: 750
})

    tl.add({
    targets: '#slick .slick',
    width: '100%',
    backgroundColor: 'rgb(197,197,255)',
    delay: anime.stagger(100)
})
    tl.add({
    targets: '#slick .slick',
    width: '90%',
    backgroundColor: 'rgb(200,200,255)',
})
    tl.add({
    targets: '#habout',
    top: '20%',
    opacity: 1,
    duration: 4000,
}, '-=1600')

    tl.add({
        targets: '.headin',
        opacity: 1,
        duration: 4000,
    }, '-=2600')


    let tilt = anime({
    targets: '#slick',
    scaleY: '2',
    scaleX: '2',
    translateX: '40%',
    rotate: '360deg',
    duration: 20000,
    autoplay: false
})


        document.querySelector('#slick').addEventListener('mouseover', () =>{
        tl.play();
    })
    //     document.querySelector('#slick').addEventListener('mouseover', () =>{
    //     tilt.play();
    // })

    //     document.querySelector('#habout').addEventListener('mouseout', () =>{
    //     tl.reverse();
    // })

//     document.querySelector('#slick').addEventListener('mouseout', () =>{
//     tilt.reverse();
// })

