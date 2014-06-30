$(function() {
    
    // basic usage see app/Controllers/CitiesController::index
    $('#index').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/cities/index.json",
        "aoColumns": [
            {mData:"City.id"},
            {mData:"City.name"},
            {mData:"State.name"},
            {mData:"City.population"}
        ],
        "sDom": 'frtip'
    });
    
    // using containable behavior see app/Controllers/CitiesController::containable
    $('#containable').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/cities/containable.json",
        "sDom": 'frtip',
        "aoColumns": [
            {mData:"City.id"},
            {mData:"City.name"},
            {mData:"State.name"},
            {mData:"City.population"}
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            $('td:eq(3)', nRow).html('<button onclick="alert(\'City.id is '+aData.City.id+'\')">Button</button>');
        }
    });
    
    // using concat see app/Controllers/CitiesController::concat
    // note: concat is not recommended
    $('#concat').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/cities/concat.json",
        "sDom": 'frtip',
        "aoColumns": [
            {mData:"City.id"},
            {mData:"0.together"},
            {mData:"State.name"}
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            $('td:eq(2)', nRow).html('<button onclick="alert(\'City.id is '+aData.City.id+'\')">Button</button>');
        },
        "fnInitComplete": function(){
            alert('WARNING!\n CONCAT is NOT recommended. I advise using virtualFields instead. Right now the code does not handle sorting or search on CONCATS too well');
        }
    });    
    
    // using virtualFields see app/Controllers/CitiesController::virtualFields
    $('#virtualFields').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/cities/virtualFields.json",
        "sDom": 'frtip',
        "aoColumns": [
            {mData:"City.id"},
            {mData:"City.together"},
            {mData:"State.name"},
            {mData:"City.population"}
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            $('td:eq(3)', nRow).html('<button onclick="alert(\'City.id is '+aData.City.id+'\')">Button</button>');
        }
    });
    
    // using noJsonHandler see app/Controllers/CitiesController::noJsonHandler
    $('#noJsonHandler').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/cities/noJsonHandler",
        "sDom": 'frtip',
        "aoColumns": [
            {mData:"City.id"},
            {mData:"City.name"},
            {mData:"State.name"},
            {mData:"City.population"},
            {mData:"City.id"}
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            $('td:eq(4)', nRow).html('<button onclick="alert(\'City.id is '+aData.City.id+'\')">Button</button>');
        }
    }); 
});