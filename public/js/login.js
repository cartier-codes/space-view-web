const usernameInput = document.getElementById('signin-username');
const passwordInput = document.getElementById('signin-password');
const loginForm = document.getElementById('signin-form');

loginForm.addEventListener('submit', async (event) => {
    event.preventDefault();

    const userEnteredUsername = usernameInput.value;
    const userEnteredPassword = passwordInput.value;

    // Send the entered username and password to the server for authentication
    const response = await fetch('../api/signin.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `signin-username=${userEnteredUsername}&signin-password=${userEnteredPassword}`,
    });

    const result = await response.json();

    if (result.success) {
            window.location.href = '../planets.php';
        // Optionally, redirect or perform other actions upon successful login
    } else {
        // Display an error message to the user
        console.error(result.message);
    }
});