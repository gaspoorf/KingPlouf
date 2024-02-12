/*________ QUOTES ________*/
let quotes = [
    "Serez-vous à la hauteur de votre plouf ?" ,
    "Un roi qui sent bon n'est pas un roi qui s'occupe de son royaume.",
    "Si vous ne plongez pas, vous ne saurez jamais ce qui se cache au fond.",
    "Un plouf est un plouf, tout plouf est bon à prendre.",
    "Le plouf est un art dont seul vous en êtes le maître.",
    "La dynastie des ploufs est entre vos mains.",
    "Un plouf par jour éloigne les soucis pour toujours.",
    "Les rois sont ceux qui plongent, les autres ne sont que des sujets.",
    "Le temps est venu de plonger, le peuple attend.",
    "La patience est la clé de tout règne réussi.",
    "Si l'envie de régner vous prend, n'hésitez pas.",
    "La grandeur d'un royaume se mesure à la hauteur de son plouf.",
    "Lorsque vous prenez les reines du royaume, vous vous devez de durer dans le temps.",
    "L'histoire appartient à celui qui plouf le plus fort.",
    "Un plouf bruyant est un plouf qui marque les esprits.",
    "Un seigneur qui ne s'est jamais assis sur le trône ne peut prétendre à un tel titre.",
    "Ne craignez pas le plouf, il est votre allié.",
    "Le plouf est le commencement de tout bon règne.",
    "La tradition veut que celui qui plouf le plus longtemps le crie haut et fort.",
    "Régner c'est ploufer, ploufer c'est régner.",
];

/*________ RANDOM QUOTE ________*/
function randomQuote() {
    return quotes[Math.floor(Math.random() * quotes.length)];
}

/*________ CREATE P ELEMENT ________*/
let quoteText = randomQuote();
let quote = document.createElement('p');
document.querySelector('.main-container').appendChild(quote);
quote.classList.add('quote');
quote.textContent = "<<  " + quoteText + "  >>";