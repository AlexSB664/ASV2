function addFields(){
    // Number of inputs to create
    var number = parseInt(document.getElementById("count").value);
    number++;
    // Container <div> where dynamic content will be placed
    var container = document.getElementById("giftExchangeFields");
    document.getElementById("count").value = number;
    
    //create a div for form-row
    var divForm = document.createElement("div");
    divForm.className = "form-row";
    //create a column for name
    var divCol1 = document.createElement("div");
    divCol1.className = "col";
    //label for name
    var label1 = document.createElement("label");
    label1.innerHTML="Friend "+(number)+":";
    label1.class = "label";
    //put label at colum
    divCol1.appendChild(label1);
    //input for name
    var input1 = document.createElement("input");
    input1.type = "text";
    input1.name = "person" + number;
    input1.id = "person" + number;
    input1.placeholder="Name of the person";
    input1.required = true;
    //put input at column
    divCol1.appendChild(input1);
    //put column at form-row
    divForm.appendChild(divCol1)

    //create a column for telephone
    var divCol2 = document.createElement("div");
    divCol2.className = "col";
    //label for name
    var label2 = document.createElement("label");
    label2.innerHTML="Telephone "+(number)+":";
    label2.class = "label";
    //put label at colum
    divCol2.appendChild(label2);
    //input for name
    var input2 = document.createElement("input");
    input2.type = "text";
    input2.name = "telephone" + number;
    input2.id = "telephone" + number;
    input2.placeholder="Telephone of the person";
    input2.required = true;
    //put input at column
    divCol2.appendChild(input2);
    //put column at form-row
    divForm.appendChild(divCol2)

    //put first column at form-row
    container.appendChild(divForm);
}


function rmFields(){
    // Number of inputs to create
    var number = parseInt(document.getElementById("count").value);
            
    // Container <div> where dynamic content will be placed
    var container = document.getElementById("giftExchangeFields");
    // Clear previous contents of the container
    if(number>=4 && number<=13){
        document.getElementById("count").value = number - 1;
        container.removeChild(container.lastChild);
    }else{
        alert(" you can't remove people ");
    }
}