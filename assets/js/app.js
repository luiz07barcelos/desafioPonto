$('.btn-cadastro').on("click",  function() {
	var email = $("input[name=email]").val();
	var password = $("input[name=password]").val();
	var passwordConfirm = $("input[name=passwordConfirm]").val();

	if (!password == passwordConfirm) {
		$("#error-senhaconfirm").html('As senhas digitadas não conferem.')
	} else {
		$.post(base_url+"cadastrar", {
			email: email,
			password: password,
			passwordConfirm: passwordConfirm
		},function(data) {
			if (data.tipo == "alert") {
				$("#error-email").html(data.campos.email);
				$("#error-senha").html(data.campos.password);
				$("#error-senhaconfirm").html(data.campos.passwordConfirm);
			} else {
				alert(data.mensagem);
				window.location.href = base_url;
			}

		}, 'JSON');
	}
});

$('.btn-login').on("click",  function() {
	var email = $("input[name=email]").val();
	var password = $("input[name=password]").val();
		

	$.post(base_url+"login", {
		email: email,
		password: password
	}, function(data) {
		if (data.tipo == "alert") {
			if (data.mensagem) {
				alert(data.mensagem);
			} else {
				$("#error-email").html(data.campos.email);
				$("#error-senha").html(data.campos.password);
			}
		} else {
			window.location.href = base_url+'dashboard';
		}

	}, 'JSON');
});

