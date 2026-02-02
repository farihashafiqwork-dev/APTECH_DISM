var selectedRow = null
// first function
function onformsub(){
event.preventDefault();
var formdata = readformdata();
    if(selectedRow == null){
       insertNewRecord(formdata);
    }
    else
    {
        updateRecord(formdata);
    }
    resetform();
}

// second function
function readformdata(){
var formdata = {}; //creatnig  empty object
formdata["Name"] =document.getElementById("name").value;
formdata["EMP_Code"] = document.getElementById("code").value;
formdata["Salary"] = document.getElementById("salary").value;
formdata["City"] = document.getElementById("city").value;
return formdata;
}

// third function
function insertNewRecord(data){
var table = document.getElementById("employeelist").getElementsByTagName("tbody")[0];
var newRow = table.insertRow(table.length); //insert new row, intial length will be 0

cell1 = newRow.insertCell(0);
cell1.innerHTML= data.Name;

cell2 = newRow.insertCell(1);
cell2.innerHTML= data.EMP_Code;

cell3 = newRow.insertCell(2);
cell3.innerHTML= data.Salary;

cell4 = newRow.insertCell(3);
cell4.innerHTML= data.City;

cell5 = newRow.insertCell(4);
cell5.innerHTML= 
            `<button class="btn btn-success" onclick="onEdit(this)">Edit</button>
            <button class="btn btn-danger"  onclick="onDelete(this)">Delete</button>`
}


// fifth function
function onEdit(td){
    selectedRow = td.parentElement.parentElement // first parentElement is td(row) and second parentElement is table
    document.getElementById("name").value = selectedRow.cells[0].innerHTML; // set the value of cell to the name input field
    document.getElementById("code").value = selectedRow.cells[1].innerHTML;
    document.getElementById("salary").value = selectedRow.cells[2].innerHTML;
    document.getElementById("city").value = selectedRow.cells[3].innerHTML;
}

// sixth function
function updateRecord(formdata){
    selectedRow.cells[0].innerHTML = formdata.Name;
    selectedRow.cells[1].innerHTML = formdata.EMP_Code;
    selectedRow.cells[2].innerHTML = formdata.Salary;
    selectedRow.cells[3].innerHTML = formdata.City;
}

// seventh function
function onDelete(td){
    
    if(confirm("Do you want to delete this record?"))
    {
        row = td.parentElement.parentElement;
        document.getElementById("employeelist").deleteRow(row.rowIndex); 
        //deleteRow deletes a row 
        //rowIndex allows you to specify which row you want to delete.
        resetform();
    }
    
}
// fourth function
function resetform(){
    document.getElementById("name").value = "";
    document.getElementById("code").value = "";
    document.getElementById("salary").value = "";
    document.getElementById("city").value = "";
    selectedRow = null;
}

