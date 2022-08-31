"use strict";

document.querySelector('#form').addEventListener('submit', function(e) {
    e.preventDefault();   
    const data = new URLSearchParams(new FormData(this));  
    // console.log(data.request);
    fetch("ajax.php", {
        method: "POST",
        body: data,
    })
    .then(res => res.text())
    .then(html => {
        document.querySelector('#container').innerHTML = html;
    })
    .catch(err => {
        console.log(err);
    })    
});

