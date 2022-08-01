
module = document.querySelector('.module');
ann = document.querySelector('.ann');



ann.onclick = ()=>{  
    if (ann.value == 1) {
        module.innerHTML = `<option value="ALG2">Algèbre 2</option>
        <option value="ALSDD">ALSDD</option>
        <option value="ANA2">Analyse 2</option>
        <option value="ANG1">Anglais 1</option>
        <option value="ELECF1">Electronique Fondamentale 1</option>
        <option value="MECA">Mécanique du Point</option>
        <option value="SYST2">Introduction au Système d’exploitation 2</option>
        <option value="TEO">TEO</option>`;
    } else {
        module.innerHTML = `<option value="LOGM">Logique Mathématique</option>
        <option value="POO">Programmation orientée objet</option>
        <option value="ANA4">Analyse 4</option>
        <option value="ANG3">Anglais 3</option>
        <option value="ISI">Système d’Information</option>
        <option value="PRST2">Probabilité & Statistiques 2</option>
        <option value="OOE">Optique et ondes éléctromagnitiques</option>`;
    }
    } 