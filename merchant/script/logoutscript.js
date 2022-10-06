var answer = confirm("Do you really want to log out mate?")
if (answer) {
    window.location.href = '../api/merchentlogout.php'
} else {
    text = "You canceled!";
}