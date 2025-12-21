 const images = [
        " img/soiree.JPG ",
        "img/activiter.JPG",
        "img/bourse1.JPG",
        "img/collecte.JPG"
    ];
     const images1 = [
        " img/soiree.JPG ",
        "img/activiter.JPG",
        "img/bourse1.JPG",
        "img/collecte.JPG"
    ];
     const images2 = [
        " img/soiree.JPG ",
        "img/activiter.JPG",
        "img/bourse1.JPG",
        "img/collecte.JPG"
    ];
     const images3 = [
        " img/soiree.JPG ",
        "img/activiter.JPG",
        "img/bourse1.JPG",
        "img/collecte.JPG"
    ];

    let index = 0;

    const trigger = document.getElementById("triggerImage");
    const trigger1 = document.getElementById("triggerImage1");
    const trigger2 = document.getElementById("triggerImage2");
    const trigger3 = document.getElementById("triggerImage3");
    const menu = document.getElementById("floatingMenu");
    const overlay = document.getElementById("overlay");
    const menuImage = document.getElementById("menuImage");

    // OUVERTURE
    trigger1.onclick = () => {
        overlay.style.display = "block";
        menu.style.display = "block";
        menuImage.src = images[index];
    };
    trigger2.onclick = () => {
        overlay.style.display = "block";
        menu.style.display = "block";
        menuImage.src = images[index];
    };
    trigger3.onclick = () => {
        overlay.style.display = "block";
        menu.style.display = "block";
        menuImage.src = images[index];
    };
    trigger.onclick = () => {
        overlay.style.display = "block";
        menu.style.display = "block";
        menuImage.src = images[index];
    };

    // FERMETURE
    function closeMenu() {
        menu.style.display = "none";
        overlay.style.display = "none";
    }

    // NAVIGATION
    function nextImage() {
        index = (index + 1) % images.length;
        menuImage.src = images[index];
    }
    function prevImage() {
        index = (index - 1 + images.length) % images.length;
        menuImage.src = images[index];
    }
    function nextImage() {
        index = (index + 1) % images1.length;
        menuImage.src = images1[index];
    }
    function prevImage() {
        index = (index - 1 + images1.length) % images1.length;
        menuImage.src = images1[index];
    }
    function nextImage() {
        index = (index + 1) % images2.length;
        menuImage.src = images2[index];
    }
    function prevImage() {
        index = (index - 1 + images2.length) % images2.length;
        menuImage.src = images2[index];
    }
    function nextImage() {
        index = (index + 1) % images3.length;
        menuImage.src = images3[index];
    }
    function prevImage() {
        index = (index - 1 + images3.length) % images3.length;
        menuImage.src = images3[index];
    }
    // CLIQUER HORS DU MENU = FERMETURE
    overlay.onclick = () => closeMenu();
