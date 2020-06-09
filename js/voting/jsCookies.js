$(document).ready(function() {

    $("a.vote_up").click(function() {
        the_id = $(this).attr('id');
        // проверяем, есть ли запись о том, что vote + id уже нажимали
        if ($.cookies.get("vote" + the_id)) $(".container_" + the_id).html("<span class='notVoted'>&#10008</span>");

        else // Если нет, то тогда работаем дальше
        {
            $(".container_" + the_id).html("<span class='voted'>&#128504</span>");

            // ajax запрос создает cookies 
            $.ajax({
                type: "POST",
                data: "action=vote_up&id=" + $(this).attr("id"),
                url: "votes.php",
                success: function(msg) {
                    // создаем файл cookies
                    $.cookies.set("vote" + the_id, 12345679, { hoursToLive: 0.001 });
                }
            });
        }
    });

    $("a.vote_down").click(function() {
        the_id = $(this).attr('id');

        if ($.cookies.get("vote" + the_id)) $(".container_" + the_id).html("<span class='notVoted'>&#10008</span>");


        else // Если нет, то тогда работаем дальше
        {

            $(".container_" + the_id).html("<span class='voted'>&#128504</span>");


            $.ajax({
                type: "POST",
                data: "action=vote_down&id=" + $(this).attr("id"),
                url: "votes.php",
                success: function(msg) {

                    $.cookies.set("vote" + the_id, 12345679, { hoursToLive: 168 });
                }
            });
        }
    });
});