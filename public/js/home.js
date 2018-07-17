window.onload = function () {

  addManual(0);

  document.getElementById("addManual").onclick = function() {
    addManual(1);
  };
  var now   = new Date();
  //document.getElementByName( "month" ).value =  now.getMonth();

};
  function addManual(e){
    var element = document.createElement('div');
    element.className = "line";
    element.innerHTML = 
        '<input type="number" name="year[]" class="edit year" value="1" min="1" max="3000" step="1">' +
        '<input type="number" name="month[]" class="edit month" value="1" min="1" max="12" step="1">' +
        '<input type="text" name="name[]" class="edit name">' +
        '<input type="text" name="mainCategory[]" class="edit mainCategory">' +
        '<input type="text" name="subCategory[]" class="edit subCategory">' +
        '<input type="number" name="price[]" class="edit price" value="108" min="0" max="1000000" step="1">' +
        '<input type="number" name="volume[]" class="edit volume" value="'+ e +'" min="0" max="100" step="1">';
    var manualTable = document.getElementById("manualTable");
    manualTable.appendChild(element);
  }
