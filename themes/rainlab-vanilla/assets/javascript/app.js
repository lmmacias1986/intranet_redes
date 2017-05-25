/*
 * Application
 */

$(document).tooltip({
    selector: "[data-toggle=tooltip]"
})

$('#chk_gestion' ).on( 'click', function() {
    if( $(this).is(':checked') ){        
        document.getElementById('div_gestion').style.display='block';
    } else {
        document.getElementById('div_gestion').style.display='none';
    }
});

$('#chk_mas_sitios' ).on( 'click', function() {
    if( $(this).is(':checked') ){        
        document.getElementById('div_sitio2').style.display='block';
        document.getElementById('div_sitio3').style.display='block';
    } else {
        document.getElementById('div_sitio2').style.display='none';
        document.getElementById('div_sitio3').style.display='none';
    }
});

$("#cmb_neg_especiales").change(function () {
    if( this.value=='Si' ){
        document.getElementById('div_neg_especiales').style.display='block';
    } else {
        document.getElementById('div_neg_especiales').style.display='none';
    }
});

$('#chk_contactos' ).on( 'click', function() {
    if( $(this).is(':checked') ){        
        document.getElementById('div_contactos').style.display='block';
    } else {
        document.getElementById('div_contactos').style.display='none';
    }
});

$("#facilitador").change(function () {
    if( this.value=='Si' ){        
        document.getElementById('div_facilitador').style.display='block';
    } else {
        document.getElementById('div_facilitador').style.display='none';
    }
});

$("#diferentes_centros_costo").change(function () {
    if( this.value=='Si' ){        
        document.getElementById('div_costos').style.display='block';
    } else {
        document.getElementById('div_costos').style.display='none';
    }
});

$("#require_informe").change(function () {
    if( this.value=='Si' ){        
        $("#cual_informe").prop('disabled', false);
    } else {
        $("#cual_informe").val('');
        $("#cual_informe").prop('disabled', 'disabled');
    }
});

$("#restricciones").change(function () {
    if( this.value=='Si' ){        
        $("#cual_restriccion").prop('disabled', false);
    } else {
        $("#cual_restriccion").val('');
        $("#cual_restriccion").prop('disabled', 'disabled');
    }
});


$( "input:radio[name=opciones]" ).on( "click", function() {
  if( this.value=='Si' ){        
        $("#examenes_aplicar").prop('disabled', false);
    } else {
        $("#examenes_aplicar").val('');
        $("#examenes_aplicar").prop('disabled', 'disabled');
    }
});

$("#carga_fisica").change(function () {
    if( this.value=='Si' ){        
        document.getElementById('div_carga_fisica').style.display='block';
    } else {
        document.getElementById('div_carga_fisica').style.display='none';
    }
});

function soloNumeros(evt){ 
    var nav4 = window.Event ? true : false; 
    var key = nav4 ? evt.which : evt.keyCode; 
    return (key <= 13 || key==46 || (key >= 38 && key <= 57)); 
}