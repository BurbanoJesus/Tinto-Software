let altura_pantalla = window.innerHeight;
let menu = document.querySelector('#menu_animacion');
let rango_menu = (document.querySelector('.wrap_main_multimedia') !== null) ? document.querySelector('.wrap_main_multimedia').clientHeight - 100 : 0;


function check_animation(array,name_animation, rango = 320){
    array.forEach(function(elemento,index) {
        let posicion_scroll = elemento.getBoundingClientRect().top;
        if (posicion_scroll < altura_pantalla - rango) {
            elemento.classList.add(name_animation);
        }else{
            elemento.classList.remove(name_animation);
        }
    });
}

function menu_header(){
    if (window.scrollY > rango_menu){
        menu.classList.add("move");
    }else{
        menu.classList.remove("move");
    }
}

window.addEventListener('scroll', function(){
    let array_der = this.document.querySelectorAll('.anim_der');
    let array_izq = this.document.querySelectorAll('.anim_izq');
    let array_arriba = this.document.querySelectorAll('.anim_arriba');
    let array_arriba_simple = document.querySelectorAll('.anim_arriba_s');
    // 
    // console.log(window.scrollY);
    check_animation(array_der,'animacion_derecha');
    check_animation(array_izq,'animacion_izquierda');
    check_animation(array_arriba,'animacion_arriba');
    check_animation(array_arriba_simple,'animacion_arriba_simple', 0);
    // check_animation(array_arriba_simple,'animacion_arriba_simple');
    // 
    (rango_menu > 0) ? menu_header() : true;

});

window.addEventListener('load', function(){
    let array_arriba_simple = document.querySelectorAll('.anim_arriba_s');
    check_animation(array_arriba_simple,'animacion_arriba_simple', 0);
});