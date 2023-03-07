
$('#pojisteni a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
  })
  
/*
  $('#myTab a[href="#profile"]').tab('show')    // Select tab by name
  $('#myTab li:first-child a').tab('show')      // Select first tab
  $('#myTab li:last-child a').tab('show')       // Select last tab
  $('#myTab li:nth-child(3) a').tab('show')     // Select third tab

  $('#someTab').tab('show')
  $('#someTab').tab('dispose')

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    e.target // newly activated tab
    e.relatedTarget // previous active tab
  })
  */