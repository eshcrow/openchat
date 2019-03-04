	<script>
		
		
		// Кроссбраузерное создание объекта запроса . Обновление чата
		
		function getXmlHttp(){
		    var xmlhttp;
		    try {
		        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		    } catch (e) {
		       try {
		       xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		       } catch (E) {
		          xmlhttp = false;
		       }
		    }
		    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		       xmlhttp = new XMLHttpRequest();
		    }
		    	       
		    return xmlhttp;
		}
		
		
		// После каждого time интервала функция обновляет div#updatebox 
		
		function update() {
		
		    var xmlhttp = getXmlHttp()
		    xmlhttp.open('GET', '/lib/view/chat.php', true);
		    xmlhttp.onreadystatechange = function() {
		        if (xmlhttp.readyState == 4) {
		            if(xmlhttp.status == 200) {
		                document.getElementById('updatebox').innerHTML = xmlhttp.responseText;
		            }
		        }
		    };
		    xmlhttp.send(null);
		}
		
		
		// Таймер
		
		var time = 3000;
		setInterval("update()", time);	
		
		</script>
