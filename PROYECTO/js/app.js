function CustomAlert() {
    this.render = function(dialog) {
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH + "px";
        
        dialogbox.style.left = (winW/2) - (550 * .5) + "px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        
        document.getElementById('dialogboxhead').innerHTML = "Confirmación de Registro";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        // Botón de cierre que redirecciona al inicio
        document.getElementById('dialogboxfoot').innerHTML = '<a href="index.php"><button class="btn-popup">Agregar otro dato</button></a>';
    }
    
    this.ok = function() {
        document.getElementById('dialogbox').style.display = "none";
        document.getElementById('dialogoverlay').style.display = "none";
    }
}

var Alert = new CustomAlert();