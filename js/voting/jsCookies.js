$(document).ready(function () {

	$("a.wpgAdv__vote-Up").click(function () {
		let the_id = $(this).attr('id');
		// проверяем, есть ли запись о том, что vote + id уже нажимали
		if ($.cookies.get("vote" + the_id))
			$(".container_" + the_id).html("<span class='notVoted'>&#10008</span>");

		else // Если нет, то тогда работаем дальше
		{
			$.ajax({
				type: "post",
				data: "action=vote_up&id=" + $(this).attr("id"),
				url: "votes.php",
				success: function (msg) {
					if(msg == '0'){
						$(".container_" + the_id).html("<span class='voted'>&#10008</span>");
					}else{
						$(".container_" + the_id).html("<span class='voted'>&#10003</span>");
					}
					$.cookies.set("vote" + the_id, 'blocked_', { hoursToLive: 744 });
				}
			});
		}
	});

	$("a.wpgAdv__vote-Down").click(function () {
		let the_id = $(this).attr('id');

		if ($.cookies.get("vote" + the_id))
			$(".container_" + the_id).html("<span class='notVoted'>&#10008</span>");
		else // Если нет, то тогда работаем дальше
		{
			$.ajax({
				type: "POST",
				data: "action=vote_down&id=" + $(this).attr("id"),
				url: "votes.php",
				success: function (msg) {
					if(msg == 0){
						$(".container_" + the_id).html("<span class='voted'>&#10008</span>");
					}else{
						$(".container_" + the_id).html("<span class='voted'>&#10003</span>");
					}
					$.cookies.set("vote" + the_id, 'blocked_', { hoursToLive: 744 });
				}
			});


		}
	});


	$(".imgs").click(function () {
		the_id = $(this).attr('id');
		console.log(the_id);

		window.location.href = "../cards/card.php?id=" + the_id;
	});
});