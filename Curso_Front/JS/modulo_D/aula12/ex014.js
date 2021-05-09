var day = new Date()
var diasem = day.getDay()

var mes = new Date()
var _mes = mes.getMonth()

var data = new Date()
var date = data.getDate()

var agora = new Date()
var hora = agora.getHours()

var min = new Date()
var minuto = min.getUTCMinutes()

console.log('******//Calendario//******')

switch(diasem) {
    
    case 0:
        var dia = 'Dom'
        break

    case 1:
        var dia = 'Seg'
        break

    case 2:
        var dia = 'Ter'
        break

    case 3:
        var dia = 'Qua'
        break

    case 4:
        var dia = 'Qui'
        break

    case 5:
        var dia = 'Sex'
        break
    
    case 6:
        var dia = 'Sab'
        break

    default:
        console.log('[ERROR] Dia invalido!')
}

switch(_mes) {
    
    case 0:
        var Mes = 'Jan'
        break

    case 1:
        var Mes = 'Fev'
        break

    case 2:
        var Mes = 'Mar'
        break

    case 3:
        var Mes = 'Apr'
        break

    case 4:
        var Mes = 'Mai'
        break

    case 5:
        var Mes = 'Jun'
        break
    
    case 6:
        var Mes = 'Jul'
        break
    
    case 7:
        var Mes = 'Ago'    
        break
    
    case 8:
        var Mes = 'Set'
        break

    case 9:
        var Mes = 'Out'
        break

    case 10:
        var Mes = 'Nov'
        break
    case 11:
        var Mes = 'Dez'
        break
                
    default:
        console.log('[ERROR] Mes invalido!')
}
console.log(`${dia} ${Mes} ${date} ${hora}:${minuto}`)