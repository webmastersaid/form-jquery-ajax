$(() => {
	const $message = $('#form_message');
	$("#form").submit(() => {
		$.ajax({
			type: "POST",
			url: "rest/rest.php",
			data: $(this).serialize()
		}).done(() => {
			$message.html("Success!");
		}).fail(() => {
			$message.html("Error!");
		});
		return false;
	});
});
