let flippedCards = [];
let matchedPairs = 0;

document.querySelectorAll(".card").forEach(card => {
    card.addEventListener("click", () => {
        if (flippedCards.length < 2 && !card.classList.contains("flipped")) {
            card.classList.add("flipped");
            flippedCards.push(card);

            if (flippedCards.length === 2) {
                setTimeout(checkMatch, 800);
            }
        }
    });
});

function checkMatch() {
    const [card1, card2] = flippedCards;
    if (card1.dataset.symbol === card2.dataset.symbol) {
        matchedPairs++;
        if (matchedPairs === 8) {
            alert("¡Ganaste!");
        }
    } else {
        card1.classList.remove("flipped");
        card2.classList.remove("flipped");
    }
    flippedCards = [];
}