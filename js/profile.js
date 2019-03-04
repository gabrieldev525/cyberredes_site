// delete account
$("#delete-account").click(function() {
    window.open("connection/delete-account.php","_self");
});

// select table items item
var selectedList = [];

// delete agendamento
$("#agendar-delete").click(function() {
    if(selectedList.length > 0) {
        var string = "";

        for(i = 0; i < selectedList.length; i++) {
            string += selectedList[i] + ";";
        }

        post( "connection/delete-agendamento.php", { index: string } );
    }
});

// agendar button
$("#right-content #profile-agendar").click(function() {
    $("#agendar-content").css("display", "block");
});


// agendamento
$("#agendar-content button#agendar-cancel").click(function() {
    $("#agendar-content").css("display", "none");
});

$("#agendar-comfirm").click(function() {
    $("#form-agendar").submit();
});

// logout 
$("#logout-button").click(function() {
    window.open("connection/logout.php","_self")
});

function cancelar(index) {
    // alert(index);
    //if(selectedList.length > 0) {
        // row is selected
        if(selectedList.indexOf(index) != -1) {
            selectedList.splice(selectedList.indexOf(index), 1);
            $("tr#" + (parseInt(index))).removeClass("selected-item");
        } else {
            selectedList.push(index);
            $("tr#" + (parseInt(index))).addClass("selected-item");
        }

        // button delete
        if(selectedList.length == 0 && $("#agendar-delete").css("display") == "block") {
            $("#agendar-delete").css("display", "none");
        } else if(selectedList.length != 0 && $("#agendar-delete").css("display") == "none") {
            $("#agendar-delete").css("display", "block");
        }
    //}
}

function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
        }
    }

    document.body.appendChild(form);
    form.submit();
}