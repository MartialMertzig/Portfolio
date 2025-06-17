document.addEventListener('DOMContentLoaded', function () {
    const output = document.getElementById('output');
    const input = document.getElementById('input');

    if (input) {
        // Gérer l'envoi de commandes avec Enter
        input.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                handleCommand(input.value);
                input.value = '';
            }
        });

        // Gérer l'animation de la largeur de l'input
        input.addEventListener('input', function () {
            this.setAttribute('style', 'width:' + ((this.value.length + 1) * 8) + 'px');
        });
    }

    function handleCommand(command) {
        // Redirection vers la page d'accueil
        if (command.toLowerCase() === 'index') {
            window.location.href = 'index.html';
        } else {
            output.innerHTML += `<div>> ${command}</div>`;
            output.innerHTML += '<div>Commande inconnue, tapez "index" pour ouvrir la page.</div>';
        }

        // Défiler automatiquement vers le bas
        output.scrollTop = output.scrollHeight;
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const skillsSchema = document.getElementById('skills-schema');

    const skillsData = [
        { name: 'HTM/CSS', number: 60 },
        { name: 'PHP', number: 40 },
        { name: 'JavaScript', number: 40 },
        { name: 'Python', number: 20 },
        { name: 'C#', number: 20 },
        { name: 'C++', number: 20 },
        { name: '.NET', number: 20 },
        { name: 'WordPress', number: 60 },
        { name: 'MySQL', number: 60 },
        { name: 'InDesign', number: 60 },
        { name: 'Photoshop', number: 60 },
        { name: 'Illustrator', number: 60 },
    ];

    skillsData.forEach((skill, index) => {
        const skillCard = document.createElement('div');
        skillCard.classList.add('skill-card');
        skillCard.innerHTML = `<div class="skill-name">${skill.name}</div>`;
        skillsSchema.appendChild(skillCard);
        skillCard.style.animation = `fadeInUp 0.5s ease-out ${index * 0.2}s`;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach((item) => {
        item.addEventListener('click', () => {
            faqItems.forEach((otherItem) => {
                if (otherItem !== item) {
                    otherItem.classList.remove('opened');
                    otherItem.querySelector('.answer').style.maxHeight = '0';
                }
            });

            item.classList.toggle('opened');
            const answer = item.querySelector('.answer');
            answer.style.maxHeight = item.classList.contains('opened') ? answer.scrollHeight + 'px' : '0';
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const sortable = new Sortable(document.getElementById('sortable-container'), {
        animation: 150,
        handle: '.dashboard-item',
        onEnd: function (evt) {
            const movedWidget = evt.item.className.split(' ')[1];
            console.log(`Widget "${movedWidget}" déplacé à la position ${evt.newIndex + 1}`);
        },
    });
});
