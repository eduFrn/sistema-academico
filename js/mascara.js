function mascara(vCpf){
    
    var cpf = vCpf.value;
    
    if (cpf.length == 3 || cpf.length == 7) vCpf.value += ".";
    if (cpf.length == 11) vCpf.value += "-";

}