window.addEventListener('load', () => {
    const image = document.getElementById('parallax');
    const nav = document.getElementById('navbar');
    const lis = document.getElementById('navUl').getElementsByTagName('li');

    let interval = setInterval(() => {
      if (scrollY >= image.clientHeight - nav.clientHeight) {
        for (const li of lis) {
          li.getElementsByTagName('a')[0].classList.add('changedHover');
        }

        nav.classList.add('changedBG');
      } else {
        for (const li of lis) {
          li.getElementsByTagName('a')[0].classList.remove('changedHover');
        }

        nav.classList.remove('changedBG');
      }
    }, 10);
});
