<script>

		//Отправка сообщения по нажатию Enter
		
		    function loadDoc2(text) {

		        
		    var xhttp = new XMLHttpRequest();
		    var param = document.getElementById("text").value; // Считываем значение
		        xhttp.open('GET', "./lib/send.php?text="+encodeURIComponent(param), true);
		        xhttp.send();
		      document.getElementById('text').value = "";
		    }
		
		      function checkKey(e) {
		    var inp = document.getElementById('text');
		        if(e.keyCode == "13") {
		        loadDoc2();
				
		        }
		
		      }
		
		</script>
		
		
