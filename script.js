loadData();

document.getElementById("studentForm").addEventListener("submit",function(e){

e.preventDefault();

let name=document.getElementById("name").value;

let age=document.getElementById("age").value;

fetch("insert.php",{

method:"POST",

headers:{
"Content-Type":"application/x-www-form-urlencoded"
},

body:`name=${name}&age=${age}`

})

.then(res=>res.text())

.then(()=>{

document.getElementById("studentForm").reset();

loadData();

});

});

function loadData(){

fetch("fetch.php")

.then(res=>res.json())

.then(data=>{

let table="";

data.forEach(student=>{

table+=`

<tr>

<td>${student.id}</td>

<td>${student.name}</td>

<td>${student.age}</td>

<td>${student.status}</td>

<td>

<button

class="toggleBtn"

onclick="toggleStatus(${student.id})">

Toggle

</button>

</td>

</tr>

`;

});

document.getElementById("tableBody").innerHTML=table;

});

}

function toggleStatus(id){

fetch("toggle.php",{

method:"POST",

headers:{

"Content-Type":"application/x-www-form-urlencoded"

},

body:`id=${id}`

})

.then(res=>res.text())

.then(()=>{

loadData();

});

}