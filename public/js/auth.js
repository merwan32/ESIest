group = document.querySelector('.group');
annee = document.querySelector('.annee');


annee.onclick = ()=>{  
if (annee.value == 1) {
    group.innerHTML = `<option value="1">groupe 1 </option>
    <option value="2">groupe 2 </option>
    <option value="3">groupe 3 </option>
    <option value="4">groupe 4 </option>
    <option value="5">groupe 5 </option>
    <option value="6">groupe 6 </option>
    <option value="7">groupe 7 </option>
    <option value="8">groupe 8 </option>
    <option value="9">groupe 9 </option>
    <option value="10">groupe 10 </option>
    <option value="11">groupe 11 </option>
    <option value="12">groupe 12 </option>`;
} else {
    group.innerHTML = `<option value="1">groupe 1 </option>
    <option value="2">groupe 2 </option>
    <option value="3">groupe 3 </option>
    <option value="4">groupe 4 </option>
    <option value="5">groupe 5 </option>
    <option value="6">groupe 6 </option>
    <option value="7">groupe 7 </option>
    <option value="8">groupe 8 </option>
    <option value="9">groupe 9 </option>`;
}
} 

