// document.getElementById("contact-form").addEventListener("submit", function(event) {
//     event.preventDefault();
//
//     function redirect() {
//         window.location.href = "https://www.chaspotinternational.org/";
//     }
//
//     // get form data
//     var name = document.getElementById("name").value;
//     var email = document.getElementById("email").value;
//     var message = document.getElementById("message").value;
//
//     // validate form data
//     if (name === "" || email === "" || message === "") {
//         alert("Please fill out all fields.");
//         return;
//     }
//
//     // send form data to server
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "anodawan.php", true);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhr.onload = function() {
//         if (xhr.responseText === "success") {
//             redirect();
//         } else {
//             alert("There was an error sending the email.");
//         }
//     };
//     xhr.send("name=" + name + "&email=" + email + "&message=" + message);
// });
