import "./bootstrap";

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

const ascsortButton = document.getElementById("asc-date-sort-button");
const decsortButton = document.getElementById("dec-date-sort-button");
const tableBody = document.querySelector("tbody");

// Sort by ascending date
ascsortButton.addEventListener("click", () => {
    const rows = Array.from(tableBody.querySelectorAll("tr"));

    rows.sort((a, b) => {
        const dateA = new Date(a.querySelector("td:nth-child(2)").textContent);
        const dateB = new Date(b.querySelector("td:nth-child(2)").textContent);

        return dateA - dateB;
    });

    tableBody.append(...rows);
});

// Sort by descending date
decsortButton.addEventListener("click", () => {
    const rows = Array.from(tableBody.querySelectorAll("tr"));

    rows.sort((a, b) => {
        const dateA = new Date(a.querySelector("td:nth-child(2)").textContent);
        const dateB = new Date(b.querySelector("td:nth-child(2)").textContent);

        return dateB - dateA;
    });

    tableBody.append(...rows);
});
