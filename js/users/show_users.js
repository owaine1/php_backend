function show_dbs(data){
  console.log('Inside show_dbs');
  data = JSON.parse(data); // turns string of characters into json objects
  console.log(data);

  for (var counter =0; counter < data.length; counter++){
    console.log(data[counter].Database);
    var tr = $('<tr>'); //create empty table row
    var td = $('<td>'); //make first td
    td.text(data[counter].Database); // add name of db
    tr.append(td); // add td to row
    td = $('<td>'); // make second td to hold delete button

    var btn = $('<button class = "delete" id="' + data[counter].Database + '">delete</button>');

    td.append(btn);
    tr.append(td);
    $('.table tbody').append(tr);
  }
  $('.delete').click(delete_db);
}
