import "./bootstrap";

import $ from 'jquery';
window.$ = $;

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

// JQuery Test - A test to check if JQuery is loaded
//window.onload = function() {
//    if (window.jQuery) {  
        // jQuery is loaded  
//        alert("JQuery Loaded!");
//    } else {
        // jQuery is not loaded
//        alert("JQuery Not Loaded!");
//    }
//}

const ascsortButton = document.getElementById("asc-date-sort-button");
const decsortButton = document.getElementById("dec-date-sort-button");
const tableBody = document.querySelector("tbody");

// Sort task table by ascending date
//ascsortButton.addEventListener("click", () => {
//    const rows = Array.from(tableBody.querySelectorAll("tr"));
//
//    rows.sort((a, b) => {
//        const dateA = new Date(a.querySelector("td:nth-child(2)").textContent);
//        const dateB = new Date(b.querySelector("td:nth-child(2)").textContent);
//
//        return dateA - dateB;
//    });
//
//    tableBody.append(...rows);
//});

// Sort task table by descending date
//decsortButton.addEventListener("click", () => {
//    const rows = Array.from(tableBody.querySelectorAll("tr"));
//
//    rows.sort((a, b) => {
//        const dateA = new Date(a.querySelector("td:nth-child(2)").textContent);
//        const dateB = new Date(b.querySelector("td:nth-child(2)").textContent);
//
//        return dateB - dateA;
//    });
//
//    tableBody.append(...rows);
//});

$("#due_date_checkbox").change(function() {
    if ( $(this).is(':checked') ) {
        $("#due_date_picker").show();
    } else {
        $("#due_date_picker").hide();
    }
});