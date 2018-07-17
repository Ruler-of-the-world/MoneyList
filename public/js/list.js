try{
window.onload = function () {

  var editButtons = document.getElementsByName("editButton");
  for(var i = 0; i < editButtons.length; i++ ){
    editButtons[i].onclick = function(){
      editMode(this.value);
    };
  }
  document.getElementsByName("editButton").onclick = function() {
    console.log('test');
  };
  var now   = new Date();
  //document.getElementByName( "month" ).value =  now.getMonth();

  function editMode(e){
    var manualTable = document.getElementById(e);
    var values = new Array();
  for(var i = 0; i < manualTable.children.length; i++ ){
    values.push(manualTable.children[i].innerText);
  }
    var element = document.createElement('span');
    element.innerHTML = 
      '<input type="hidden" name="id[]" value="'+ e +'">' +
      '<input type="number" name="year[]" class="edit year" value="' + values[0] + '" min="1" max="3000" step="1">' +
      '<input type="number" name="month[]" class="edit month" value="' + values[1] + '" min="1" max="12" step="1">' +
      '<input type="text" name="name[]" class="edit name" value="' + values[2] + '">' +
      '<input type="text" name="mainCategory[]" class="edit mainCategory" value="' + values[3] + '">' +
      '<input type="text" name="subCategory[]" class="edit subCategory" value="' + values[4] + '">' +
      '<input type="number" name="price[]" class="edit price" value="' + values[5] + '" min="0" max="1000000" step="1">' +
      '<button type="button" name="editButton">編集</button>';
    manualTable.textContent = null;
    manualTable.appendChild(element);
  }
};
}catch(e){
  console.log(e.message);
}
