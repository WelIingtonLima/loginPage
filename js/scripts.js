

var state= false;
function toggle(){
    if(state){
        document.getElementById("password").setAttribute("type","password");
        state = false;
        
        var icone = $('.input-group').find('i');
        icone.removeClass('fas fa-eye-slash',);
        icone.addClass('fas fa-eye');

        var iconeColor = $('.input-group').find('div');
        iconeColor.removeClass('iconColor',);
        iconeColor.addClass('iconColorBF');
            
    }else{
        document.getElementById("password").setAttribute("type","text");
        state = true;
        var iconeColor = $('.input-group').find('div');
        iconeColor.removeClass('iconColorBF',);
        iconeColor.addClass('iconColor');
        
        var icone = $('.input-group').find('i');
        icone.removeClass('fas fa-eye');
        icone.addClass('fas fa-eye-slash');

        
    }
}
