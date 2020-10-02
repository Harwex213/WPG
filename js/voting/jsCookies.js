$(document).ready(function() {

    $("a.vote_up").click(function() {
        the_id = $(this).attr('id');

        // проверяем, есть ли запись о том, что vote + id уже нажимали
        if ($.cookies.get("vote" + the_id))
            $(".container_" + the_id).html("<span class='notVoted'>&#10008</span>");
            

        else // Если нет, то тогда работаем дальше
        {
            $(".container_" + the_id).html("<span class='voted'>&#10004</span>");
            $.ajax({
                type: 'POST',
                url: 'votes.php',
                data: 'action=vote_up&id=' + $(this).attr('id'),

                success: function(msg) {
                    $('#message').html(msg);
                    //$.cookies.set("vote" + the_id, 12345679, { hoursToLive: 168 });
                }
            });
        }
    });

    $("a.vote_down").click(function() {
        the_id = $(this).attr('id');

        if ($.cookies.get("vote" + the_id)) $(".container_" + the_id).html("<span class='notVoted'>&#10008</span>");


        else // Если нет, то тогда работаем дальше
        {

            $(".container_" + the_id).html("<span class='voted'>&#10004;</span>");

            $.ajax({
                type: "POST",
                data: "action=vote_down&id=" + $(this).attr("id"),
                url: "votes.php",
                success: function(msg) {
                    //$.cookies.set("vote" + the_id, 12345679, { hoursToLive: 168 });
                }
            });
        }
    });


    $(".imgs").click(function() {
        the_id = $(this).attr('id');
        console.log(the_id);

        window.location.href = "../cards/card.php?id=" + the_id;
    });
});