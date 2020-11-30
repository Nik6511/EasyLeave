
        p1 = document.getElementById('password').value;
        p2 = document.getElementById('password1').value;
        document.getElementById('submit').addEventListener('click', function(e) {

            newFunction(e);
        })

function newFunction(e) {
    if (p1 != p2) {
        e.preventDefault();
        alert("Passwords did not match");
    }
}
    