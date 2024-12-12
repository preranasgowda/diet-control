$(document).ready(function() {
    $("#registrationForm").submit(function(event) {
        event.preventDefault();
        
        var name = $("#name").val();
        var email = $("#email").val();
        var age = $("#age").val();
        var goal = $("#goal").val();

        $.ajax({
            url: 'submit.php',
            type: 'POST',
            data: { name: name, email: email, age: age, goal: goal },
            success: function(response) {
                $("#result").html(response);
            }
        });
    });
});
