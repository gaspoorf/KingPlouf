/*________ ALERT MESSAGE ________*/
function alertMessage(alertMessage) {
    let alert = document.createElement('div');
    alert.classList.add('alert');
    alert.textContent = alertMessage;

    let alertChild = document.createElement('div');
    alert.appendChild(alertChild);

    document.querySelector('.main-container').appendChild(alert);
    setTimeout(() => {
        alert.remove();
    }, 7000);
}