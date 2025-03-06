document.getElementById("contactForm").addEventListener("submit", async function (event) {
    event.preventDefault();

    let form = event.target;
    let formData = new FormData(form);

    let response = await fetch(form.action, {
        method: form.method,
        body: formData,
        headers: {
            "Accept": "application/json"
        }
    });

    if (response.ok) {
        document.getElementById("formResponse").innerText = "Message sent successfully!";
        form.reset(); // Form clear karne ke liye
    } else {
        document.getElementById("formResponse").innerText = "Oops! Something went wrong.";
    }
});
