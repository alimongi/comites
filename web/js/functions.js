/* Función para llenar combos desde JSON con Ajax */
function cargarCombo(url,value,target){
    var combo = document.getElementById(target);
    limpiarCombo(combo);
    $.getJSON(url,'id='+value,
        function(data){
            $.each(data.datos,
                function(i,item){
                    addItem(combo,item.id,item.descripcion);
                });
        });
}

/* Función para limpiar combos */
function limpiarCombo(target){
    while (target.length > 0) {
        target.remove(0);
    }
}

/* Función para agregar un item al combo */
function addItem(target, value, content){
    var opt;
    opt = document.createElement('option');
    opt.value = value;
    opt.appendChild(document.createTextNode(content));
    target.appendChild(opt);
}




