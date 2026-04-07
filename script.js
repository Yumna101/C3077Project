const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}

const flowerQuotes = [
    { "text": "A rose speaks of love silently, in a language known only to the heart.", "flower": "Rose" },
    { "text": "Daisies are like sunshine to the ground.", "flower": "Daisy" },
    { "text": "The lily of the valley is delicate and small, yet its fragrance is enough to fill a room.", "flower": "Lily of the Valley" },
    { "text": "Hydrangeas symbolize gratitude, grace, and abundance.", "flower": "Hydrangea" },
    { "text": "A sunflower's beauty lies in its ability to turn towards the light.", "flower": "Sunflower" },
    { "text": "The cherry blossom represents the fleeting nature of life, a reminder to cherish each moment.", "flower": "Cherry Blossom" },
    { "text": "Orchids are proof that beauty flourishes in patience and care.", "flower": "Orchid" },
    { "text": "Tulips are the heralds of spring, whispering warmth after the cold.", "flower": "Tulip" },
    { "text": "Lavender is the scent of calmness, bringing peace to the restless soul.", "flower": "Lavender" },
    { "text": "The lotus flower blooms most beautifully from the deepest mud.", "flower": "Lotus" }
];

document.addEventListener("DOMContentLoaded", () => {
    const select = document.getElementById("flowerSelect");

    // Populate dropdown with flower names
    flowerQuotes.forEach(flower => {
        let option = document.createElement("option");
        option.value = flower.flower;
        option.textContent = flower.flower;
        select.appendChild(option);
    });
});

function getQuote() {
    const selectedFlower = document.getElementById("flowerSelect").value;
    const quoteDisplay = document.getElementById("quote");

    if (!selectedFlower) {
        quoteDisplay.textContent = "Please select a flower to see the quote.";
        return;
    }

    const quote = flowerQuotes.find(flower => flower.flower === selectedFlower);
    quoteDisplay.textContent = quote ? `"${quote.text}"` : "Quote not found.";
}
