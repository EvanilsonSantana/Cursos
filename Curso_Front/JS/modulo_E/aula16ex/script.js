function contar()  {
    
    let ini = document.getElementById('txti');
    let fim = document.getElementById('txtf');
    let pass = document.getElementById('txtp');
    let res = document.getElementById('res');
    
    if (ini.value.length == 0 || fim.value.length == 0 || pass.value.length == 0) {
        alert('ERROR');
        res.innerHTML = 'Impossivel contar'
    
    } else {
        res.innerHTML = 'Contando: <br/>';

        let i = Number(ini.value);
        let f = Number(fim.value);
        let p = Number(pass.value);

        if (f >= 1000) {
            window.alert('Contagem limitada')    
        }
        if (p <= 0) {
            window.alert('Passo Invalido, comece do 1')
        }
        if (i < f) {
            for(let c = i; c <= f; c += p) {
                res.innerHTML += `${c} \u{1F449} `
            }
            
        
        } else {
            for(let c = i; c >= f; c -= p) {
                res.innerHTML += `${c} \u{1F449}`
            }

        }
        res.innerHTML += `\u{1f3c1}`
        
        
    }

}