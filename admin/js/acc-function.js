$(document).ready(function() {
    displayData();
    $("#live_search").keyup(function() {
        var input = $(this).val();

        if (input != '') {
            $.ajax({
                url: "acc-search.php",
                method: "post",
                data: {
                    input: input,
                    displaySend: "true"
                },
                success: function(data) {
                    $('#displayDataTable').html(data);
                    //$('#displayDataTable').css("dispaly","block");
                }
            })
        } else {
            displayData();
        }
    })
})


function uploadfile_for_insert() {
    //To save file with this name
    var file_data = $('#avatar_insert').prop('files')[0]; //Fetch the file
    filename = file_data['name'];
    console.log(filename);
    var form_data = new FormData();
    form_data.append("file", file_data);
    form_data.append("filename", filename);

    //Ajax to send file to upload
    $.ajax({
        url: "load.php", //Server api to receive the file
        type: "POST",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,

        success: function(dat2) {
            if (dat2 == 1) alert("Successful");
            else alert("Unable to Upload");
        }
    });
}

function uploadfile_for_update() {
    //To save file with this name
    var file_data = $('#avatar_update').prop('files')[0]; //Fetch the file
    filename = file_data['name'];
    console.log(filename);
    var form_data = new FormData();
    form_data.append("file", file_data);
    form_data.append("filename", filename);

    //Ajax to send file to upload
    $.ajax({
        url: "upload.php", //Server api to receive the file
        type: "POST",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,

        success: function(dat2) {
            if (dat2 == 1) alert("Successful");
            else alert("Unable to Upload");
        }
    });
}

function getDetails(id) {

    console.log(id);
    $.post("acc-getdataById.php", { updateid: id }, function(data, status) {
        var userid = JSON.parse(data);
        console.log(userid);
        $('#username_update').val(userid.username);
        $('#password_update').val(userid.password);
        //$('#avatar_update').val(userid.avatar);

    });

    $('#Edit').modal('show');
    //mai code
}

function updateDetails() {
    try {
        var file_data = $('#avatar_update').prop('files')[0]; //Fetch the file
        filename = file_data['name'];

        var username_update = $('#username_update').val();
        var password_update = $('#password_update').val();
        var avatar_update = filename;
        console.log(1);
        $.post("acc-update.php", {
            username_update: username_update,
            password_update: password_update,
            avatar_update: avatar_update
        }, function(data, status) {

            uploadfile_for_update();

            $('#username_update').val('');
            $('#password_update').val('');
            $('#avatar_update').val('');


            $('#Edit').modal('hide');

            displayData();


        });

    } catch {

        var username_update = $('#username_update').val();
        var password_update = $('#password_update').val();
        var avatar_update = '';
        $.post("acc-update.php", {
            username_update: username_update,
            password_update: password_update,
            avatar_update: avatar_update
        }, function(data, status) {

            $('#username_update').val('');
            $('#password_update').val('');

            $('#Edit').modal('hide');
            displayData();


        });


    }

}

function deleteuser(id) {
    //mai code
    $.ajax({

        url: "acc-delete.php",
        type: "post",
        data: {
            deleteid: id
        },
        success: function(data, status) {

            displayData();

        }
    })
}

function displayData() {
    var displayData = "true";
    $.ajax({
        url: "acc-getdataAll.php",
        type: "post",
        data: {
            displaySend: displayData
        },
        success: function(data, status) {
            $("#displayDataTable").html(data);
        }
    })

}

function showMessage(message) {

}


function adduser() {
    try {
        var file_data = $('#avatar_insert').prop('files')[0]; //Fetch the file
        filename = file_data['name'];

        var username = $('#username_insert').val();
        var password = $('#password_insert').val();
        var avatar = filename;


        $.ajax({
            url: "acc-insert.php",
            type: "post",
            data: {
                username_send: username,
                password_send: password,
                avatar_send: filename
            },
            success: function(data, status) {
                uploadfile_for_insert();

                $('#username_insert').val('');
                $('#password_insert').val('');
                $('#avatar_insert').val('');
                $('#New').modal('hide');
                displayData();
            }

        })

    } catch {
        alert("Chua chon file")
    }

}