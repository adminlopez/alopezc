/*! Isaac Alejandro López Castrejón | 2017 */
/* ==========================================================================
    Validar si el input esta vacio
   ========================================================================== */
//function validar_input(valor)
//{
//    valor = (valor==="")?parseFloat(0):parseFloat(valor);
//    return valor;
//}
/* ==========================================================================
    Validar si el input esta vacio
   ========================================================================== */

(function($)
{
    /* ==========================================================================
        Input moneda
       ========================================================================== */
    $.fn.monedaInput = function()
    {
        this.each(function()
        {
            $(this).after('<label class="moneda-symbol">$</label>');
            $(this).attr("type","number");
            $(this).attr("step","any");
            $(this).attr("placeholder","0.00");
            $(this).change(function()
            {
                var id = $(this).attr("id");
                var min = parseFloat($(this).attr("min"));
                var max = parseFloat($(this).attr("max"));
                var value = this.valueAsNumber;
                if(isNaN(value))
                {
                    value = min;
                }
                else if(value < 0)
                {
                    value = Math.abs(value);
                }
                else if(value < min)
                {
                    value = min;
                }
                else if(value > max)
                {
                    value = max;
                }
                $(this).val(value.toFixed(2)); 
            });
        });
    };
    /* ==========================================================================
        Input moneda
       ========================================================================== */
    
    /* ==========================================================================
        Input centimetros
       ========================================================================== */
    $.fn.centimetrosInput = function()
    {
        this.each(function()
        {
            $(this).after('<span class="centimetros-symbol">cm</span>');
            $(this).attr("type","number");
            $(this).attr("step","any");
            $(this).attr("placeholder","0");
            $(this).change(function()
            {
                var id = $(this).attr("id");
                var min = parseFloat($(this).attr("min"));
                var max = parseFloat($(this).attr("max"));
                var value = this.valueAsNumber;
                if(isNaN(value))
                {
                    value = min;
                }
                else if(value < 0)
                {
                    value = Math.abs(value);
                }
                else if(value < min)
                {
                    value = min;
                }
                else if(value > max)
                {
                    //alert("id = "+id+"  Maximo = "+max);
                    value = max;
                }
                $(this).val(value.toFixed(1));
            });
        });
    };
    /* ==========================================================================
        Input centimetros
       ========================================================================== */
    
    /* ==========================================================================
        Input horas
       ========================================================================== */
    $.fn.horasInput = function()
    {
        this.each(function()
        {
            $(this).after('<span class="horas-symbol">Hs</span>');
            $(this).attr("type","number");
            $(this).attr("step","any");
            $(this).attr("placeholder","0");
            $(this).change(function()
            {
                var id = $(this).attr("id");
                var min = parseInt($(this).attr("min"));
                var max = parseInt($(this).attr("max"));
                var value = this.valueAsNumber;
                if(isNaN(value))
                {
                    value = min;
                }
                else if(value < 0)
                {
                    value = Math.abs(value);
                }
                else if(value < min)
                {
                    value = min;
                }
                else if(value > max)
                {
                    value = max;
                }
                $(this).val(value.toFixed(1));
            });
        });
    };
    /* ==========================================================================
        Input horas
       ========================================================================== */
    
    /* ==========================================================================
        Input piezas
       ========================================================================== */
    $.fn.piezasInput = function()
    {
        this.each(function()
        {
            $(this).after('<span class="cantidad-symbol">Pzas</span>');
            $(this).attr("type","number");
            $(this).attr("placeholder","0");
            $(this).change(function()
            {
                var id = $(this).attr("id");
                var min = parseInt($(this).attr("min"));
                var max = parseInt($(this).attr("max"));
                var value = this.valueAsNumber;
                if(isNaN(value))
                {
                    value = min;
                }
                else if(value < 0)
                {
                    value = Math.abs(value);
                }
                else if(value < min)
                {
                    value = min;
                }
                else if(value > max)
                {
                    value = max;
                }
                $(this).val(parseInt(value));
            });
        });
    };
    /* ==========================================================================
        Input piezas
       ========================================================================== */
    
    /* ==========================================================================
        Input porcentaje
       ========================================================================== */
    $.fn.porcentajeInput = function()
    {
        this.each(function()
        {
            $(this).after('<span class="porcentaje-symbol">%</span>');
            $(this).attr("type","number");
            $(this).attr("placeholder","0");
            $(this).change(function()
            {
                var id = $(this).attr("id");
                var min = parseInt($(this).attr("min"));
                var max = parseInt($(this).attr("max"));
                var value = this.valueAsNumber;
                if(isNaN(value))
                {
                    value = min;
                }
                else if(value < 0)
                {
                    value = Math.abs(value);
                }
                else if(value < min)
                {
                    value = min;
                }
                else if(value > max)
                {
                    value = max;
                }
                $(this).val(parseInt(value));
            });
        });
    };
    /* ==========================================================================
        Input porcentaje
       ========================================================================== */
    
    /* ==========================================================================
        Input porcentaje
       ========================================================================== */
    $.fn.EliminarTildes = function()
    {
        this.keyup(function()
        {
            var cadena = $(this).val();
            
            cadena = cadena.replace(/á+|ª+|à+|ä+|â+|ã+|å+|ą+|æ+$/g,'a');
            cadena = cadena.replace(/Á+|À+|Ä+|Â+|Ã+|Å+|Ą+|Æ+$/g,'A');
            
            cadena = cadena.replace(/é+|è+|ë+|ê+|ę+|ė+|ē+$/g,'e');
            cadena = cadena.replace(/É+|È+|Ë+|Ê+|Ę+|Ė+|Ē+$/g,'E');
            
            cadena = cadena.replace(/í+|ï+|ì+|î+|į+|ī+$/g,'i');
            cadena = cadena.replace(/Í+|Ï+|Ì+|Î+|Į+|Ī+$/g,'I');
            
            cadena = cadena.replace(/ó+|º+|ò+|ö+|ô+|õ+|ø+|œ+|ō+$/g,'o');
            cadena = cadena.replace(/Ó+|Ò+|Ö+|Ô+|Õ+|Ø+|Œ+|Ō+$/g,'O');
            
            cadena = cadena.replace(/ú+|ü+|ù+|û+|ū+$/g,'u');
            cadena = cadena.replace(/Ú+|Ü+|Ù+|Û+|Ū+$/g,'U');
            
            cadena = cadena.replace(/ñ+S/g,'n');
            cadena = cadena.replace(/Ñ+S/g,'N');
            
            
            cadena = cadena.replace('!',' ');
            cadena = cadena.replace('¡',' ');
            cadena = cadena.replace('?',' ');
            cadena = cadena.replace('¿',' ');
            cadena = cadena.replace('(',' ');
            cadena = cadena.replace(')',' ');
            cadena = cadena.replace('[',' ');
            cadena = cadena.replace(']',' ');
            cadena = cadena.replace('{',' ');
            cadena = cadena.replace('}',' ');
            cadena = cadena.replace('<',' ');
            cadena = cadena.replace('>',' ');
            cadena = cadena.replace('≤',' ');
            cadena = cadena.replace('|',' ');
            cadena = cadena.replace('/',' ');
            cadena = cadena.replace('-',' ');
            cadena = cadena.replace('_',' ');
            cadena = cadena.replace('¬',' ');
            cadena = cadena.replace('~',' ');
            cadena = cadena.replace('"',' ');
            cadena = cadena.replace('.',' ');
            cadena = cadena.replace('…',' ');
            cadena = cadena.replace(',',' ');
            cadena = cadena.replace('„',' ');
            cadena = cadena.replace('*',' ');
            cadena = cadena.replace('+',' ');
            cadena = cadena.replace('=',' ');
            cadena = cadena.replace('≠',' ');
            cadena = cadena.replace('%',' ');
            cadena = cadena.replace('$',' ');
            cadena = cadena.replace('#',' ');
            cadena = cadena.replace('@',' ');
            cadena = cadena.replace('®',' ');
            cadena = cadena.replace('©',' ');
            cadena = cadena.replace('™',' ');
            cadena = cadena.replace('ç',' ');
            cadena = cadena.replace('Ç',' ');
            cadena = cadena.replace('¢',' ');
            cadena = cadena.replace('€',' ');
            cadena = cadena.replace('†',' ');
            cadena = cadena.replace('¥',' ');
            cadena = cadena.replace('¶',' ');
            cadena = cadena.replace('∫',' ');
            cadena = cadena.replace('§',' ');
            cadena = cadena.replace('π',' ');
            cadena = cadena.replace('ƒ',' ');
            cadena = cadena.replace('∂',' ');
            cadena = cadena.replace('Ω',' ');
            cadena = cadena.replace('∑',' ');
            cadena = cadena.replace('√',' ');
            cadena = cadena.replace('ß',' ');
            cadena = cadena.replace('µ',' ');

            $(this).val(cadena);
        });
    };
    
    /* ==========================================================================
        Atributo Nombre
       ========================================================================== */
    $.fn.AttrName = function()
    {
        this.each(function()
        {
            var id = $(this).attr("id");
            var radio = $(this).attr("type");
            if(radio != "radio")
            {
                $(this).attr("name",id);
            }
        });
    };
    /* ==========================================================================
        Atributo Nombre
       ========================================================================== */
    
    /* ==========================================================================
        Atributo Nombre
       ========================================================================== */
    $.fn.div_line = function()
    {
        this.each(function()
        {
            $(this).wrap('<div class="col-xs-12"></div>');
            $(this).addClass('row');
            $(this).html('<hr style="border-top: 1px solid Ie1e1e1;">');
        });
    };
    /* ==========================================================================
        Atributo Nombre
       ========================================================================== */
    
    /* ==========================================================================
       Tab Index
       ========================================================================== */
    $.fn.inputNoTabindex = function()
    {
        this.each(function()
        {
            $(this).attr('readonly','true');
            $(this).attr('tabindex',-1);
        });
    };
    
    $.fn.inputTabindex = function()
    {
        var n = 1;
        this.each(function()
        {
            $(this).attr('required','true');
            $(this).attr('tabindex',n++);
        });
    };
    /* ==========================================================================
       Tab Index
       ========================================================================== */
    
    /* ==========================================================================
       Fecha Actual
       ========================================================================== */
    $.fn.dia_actual_basico = function()
    {
        this.each(function()
        {
            var f = new Date();
            var dia_actual_basico = (f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
            $(this).html(dia_actual_basico);
        });
    };
    
    $.fn.dia_actual_mes = function()
    {
        this.each(function()
        {
            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            var f=new Date();
            var dia_actual_mes = (f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
            $(this).html(dia_actual_mes);
        });
    };
    
    $.fn.dia_actual_dia_mes = function()
    {
        this.each(function()
        {
            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
            var f=new Date();
            var dia_actual_dia_mes = (diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
            $(this).html(dia_actual_dia_mes);
        });
    };
    /* ==========================================================================
       Fecha Actual
       ========================================================================== */
})(jQuery);

$(document).ready(function()
{
    $('input.moneda').monedaInput();
    $('input.centimetros').centimetrosInput();
    $('input.horas').horasInput();
    $('input.cantidad').piezasInput();
    $('input.porcentaje').porcentajeInput();
    
    $('input.sintildes').EliminarTildes();
    
    $('input').AttrName();
    $('select').AttrName();
    $('textarea').AttrName();
    
    $('[readonly]').inputNoTabindex();
    $('.readonly').inputNoTabindex();
    $('.tabindex').inputTabindex();
    
    $('div.div_line_h').div_line();
    
    $('#dia_actual_basico').dia_actual_basico();
    $('#dia_actual_mes').dia_actual_mes();
    $('#dia_actual_dia_mes').dia_actual_dia_mes();
});

/* ==========================================================================
   Hora actual
   ========================================================================== */
//function addZero(i)
//{
//    if (i < 10)
//    {
//        if(i<0)
//        {
//            i = i;
//        }
//        else
//        {
//            i = "0" + i;
//        }
//    }
//    return i;
//}
//
//function tiempo_orden()
//{
//    var momentoActual = new Date();
//    var hora = addZero(momentoActual.getHours());
//    var minuto = addZero(momentoActual.getMinutes());
//    var segundo = addZero(momentoActual.getSeconds());
//    var horaActual = hora+":"+minuto+":"+segundo;
//    document.getElementById("hora_actual").innerHTML = horaActual;
//}
//
//setInterval (tiempo_orden, 500);
/* ==========================================================================
   Hora actual
   ========================================================================== */