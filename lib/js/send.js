<script>

		//Отправка сообщения по нажатию Enter
		
		    function loadDoc2(text, userlogin) {

		        
		    var xhttp = new XMLHttpRequest();
		    var param = document.getElementById("text").value; // Считываем значение
		    var param2 = document.getElementById("userlogin").value; // Считываем значение
		       
		        xhttp.open('GET', "./lib/send.php?text="+param+"&userlogin="+param2, true);
		        xhttp.send();
		      document.getElementById('text').value = "";
		    }
		
		      function checkKey(e) {
		    var inp = document.getElementById('text');
		    var inp2 = document.getElementById('userlogin');
		        if(e.keyCode == "13") {
		        loadDoc2();
				
		        }
		
		      }
		
		</script>
		
		