function toggle (id) {
    var toggleable = document.querySelector('#contenido-' + id);
    
    if (!toggleable) return;
    
    if (!toggleable.style.display
        || toggleable.style.display === 'none') {
        toggleable.style.display = 'block';
    } else {
        toggleable.style.display = 'none';
    }
    
    return false;
}




 function mostrar() {  //oculta y muestra el texto 
            div = document.getElementById("flotante");
            div.style.display = '';
        }

        function cerrar() {
            div = document.getElementById("flotante");
            div.style.display = 'none';
        }



document.oncontextmenu = function(){return false} // Bloquea el clic derecho




$(document).ready(function(){  //menu de despliege izquierdo

	$('#btn-menu').click(function(){

		if( $('.btn-menu span').attr('class') == 'fa fa-circle-o-notch' ){

			$('.btn-menu span').removeClass('fa fa-circle-o-notch').addClass('fa fa-close').css({'color':'#fff'});
			$('.full-menu').css({'left':'0'});

		}else{
			$('.btn-menu span').removeClass('fa fa-close').addClass('fa fa-circle-o-notch').css({'color':'#000'});
			$('.full-menu').css({'left':'-100%'});
		}

	});

});