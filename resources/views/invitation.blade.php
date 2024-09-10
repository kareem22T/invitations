<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invitation Card</title>
  <style>
    body {
	font-family: sans-serif;
	background-color: #000;
	color: #fff;
	margin: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
  }
  
  .decline {
	background-color: red;
  }
  .btn {
	border: none;
	width: 50%;
	margin-top: 1rem;
	max-width: 15rem;
	height: 3.5em;
	border-radius: 3em;
	display: flex;
	justify-content: center;
	align-items: center;
	gap: 12px;
	background: #1C1A1C;
	cursor: pointer;
	transition: all 450ms ease-in-out;
  }
  
  .sparkle {
	fill: #AAAAAA;
	transition: all 800ms ease;
  }
  
  .text {
	font-weight: 600;
	color: #AAAAAA;
	font-size: medium;
  }
  
  .btn {
	background: linear-gradient(0deg,#A47CF3,#683FEA);
	box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.4),
	inset 0px -4px 0px 0px rgba(0, 0, 0, 0.2),
	0px 0px 0px 4px rgba(255, 255, 255, 0.2),
	0px 0px 180px 0px #9917FF;
	transform: translateY(-2px);
  }
  
  .btn.danger span {
	color: white !important;
  }
  .btn.danger path {
	fill: white !important;
  }
  .btn.danger {
	background: linear-gradient(0deg,#fb5353,#f72727);
	box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.4),
	inset 0px -4px 0px 0px rgba(0, 0, 0, 0.2),
	0px 0px 0px 4px rgba(255, 255, 255, 0.2),
	0px 0px 180px 0px #ff1717;
	transform: translateY(-2px);
  }
  
  .btn:hover .text {
	color: white;
  }
  
  .btn:hover .sparkle {
	fill: white;
	transform: scale(1.2);
  } 
  .card-body {
	width: 100vw;
  }
  .form-container {
	width: 400px;
	max-width: 85%;
	margin: auto;
	background: linear-gradient(#212121, #212121) padding-box,
				linear-gradient(145deg, transparent 35%,#e81cff, #40c9ff) border-box;
	border: 2px solid transparent;
	padding: 32px 24px;
	font-size: 14px;
	font-family: inherit;
	color: white;
	display: flex;
	flex-direction: column;
	gap: 20px;
	box-sizing: border-box;
	border-radius: 16px;
  }
  
  .form-container button:active {
	scale: 0.95;
  }
  
  .form-container .form {
	display: flex;
	flex-direction: column;
	gap: 20px;
  }
  
  .form-container .form-group {
	display: flex;
	flex-direction: column;
	gap: 2px;
  }
  
  .form-container .form-group label {
	display: block;
	margin-bottom: 5px;
	color: #717171;
	font-weight: 600;
	font-size: 12px;
  }
  
  .form-container .form-group input {
	padding: 12px 16px;
	border-radius: 8px;
	color: #fff;
	font-family: inherit;
	background-color: transparent;
	border: 1px solid #414141;
  }

  .buttons {
	display: flex;
	gap: 1rem;
  }
  
  .form-container .form-group textarea {
	width: 100%;
	padding: 12px 16px;
	border-radius: 8px;
	resize: none;
	color: #fff;
	height: 96px;
	border: 1px solid #414141;
	background-color: transparent;
	font-family: inherit;
  }
  
  .form-container .form-group input::placeholder {
	opacity: 0.5;
  }
  
  .form-container .form-group input:focus {
	outline: none;
	border-color: #e81cff;
  }
  
  .form-container .form-group textarea:focus {
	outline: none;
	border-color: #e81cff;
  }
  
  .form-container .form-submit-btn {
	display: flex;
	align-items: flex-start;
	justify-content: center;
	align-self: flex-start;
	font-family: inherit;
	color: #717171;
	font-weight: 600;
	width: 40%;
	background: #313131;
	border: 1px solid #414141;
	padding: 12px 16px;
	font-size: inherit;
	gap: 8px;
	margin-top: 8px;
	cursor: pointer;
	border-radius: 6px;
  }
  
  .form-container .form-submit-btn:hover {
	background-color: #fff;
	border-color: #fff;
  }
  </style>
</head>
<body>
    <div id="success" style="  display: none;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 1rem;
        font-size: 20px;">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
            <path d="M9 12l2 2l4 -4" />
        </svg>
        Thanks for your time hope we did not upset you!
    </div>
  <div class="invitation-card"  id="form_wrapper">

    <div class="card-header" style="text-align: center;">
      <h1>You're Invited!</h1>
      <p>To a luxurious event you won't forget.</p>
    </div>
    <div class="card-body">
		<div class="form-container">
			<form class="form">
			  <div class="form-group">
				<label for="name">Your Name</label>
				<input type="text" id="name" name="name">
			  </div>
			  <div class="form-group">
				<label for="name">Phone Number</label>
				<input type="text" id="phone" name="phone">
			  </div>
			  <div class="buttons">
				  <button class="btn" onclick="vote(1)">
					  <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
						  <path fill="white" d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
					  </svg>
				  
					  <span class="text" style="color: white;">Accept</span>
				  </button>
				  <button class="btn danger" onclick="vote(0)">
					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="#FFFFFF" stroke-linecap="round" stroke-linejoin="round">
						<path fill="#aaaaaa" d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z" stroke-width="0" fill="currentColor" />
					  </svg>				  
					  <span class="text" style="color: #aaaaaa;">Decline</span>
				  </button>
			  </div>
			</form>
		  </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script></body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(".form").on("submit", function (e) {
        e.preventDefault()
    })
    function vote (sta) {
        let name = $("#name").val()
        let phone = $("#phone").val()
        let status = sta;
        let inviter_id = "{{ $inviter->id }}"
        const postData = {
            name,
            phone,
            status,
            inviter_id,
        };
        axios.post(
            `{{ route('invitation.vote') }}`,
            postData,
        ).then(res => {
            if (res.data.status === true) {
                $("#success").fadeIn().css("display", "flex")
                $("#form_wrapper").css("display", "none")
            } else {
                alert(res.data.errors[0]);
            }
        });
    }
  </script>
</html>
