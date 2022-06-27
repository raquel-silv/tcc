(function(){
  var selects = document.querySelectorAll('[data-limit]');
  
  // percorre a lista de selects
  [].forEach.call(selects, function(select){
    
    var limit = select.getAttribute('data-limit');
    
    // percorre a lista de options do select
    [].forEach.call(select.options, function(option){
      var text = option.innerHTML.substring(0, limit);
      option.innerHTML = text;
    });
  });
})();