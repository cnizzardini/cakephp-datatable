$(function() {
    
    // basic usage see app/Controllers/CitiesController::index
    $('#index').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/cities/index.json",
        "sDom": 'CRTfrtip'
    });
    
    // using linkable behavior see app/Controllers/CitiesController::linkable
    $('#linkable').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/cities/linkable.json",
        "sDom": 'CRTfrtip',
        "aoColumns":[
            {bVisible: false},
            null,
            null,
            null,
            {bSortable: false, bSearchable: false},
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            $('td:eq(3)', nRow).html('<button onclick="alert(\'City.id is '+aData[0]+'\')">Button</button>');
        }
    });
    
    // using containable behavior see app/Controllers/CitiesController::containable
    $('#containable').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/cities/containable.json",
        "sDom": 'CRTfrtip',
        "aoColumns":[
            {bVisible: false},
            null,
            null,
            null,
            {bSortable: false, bSearchable: false},
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            $('td:eq(3)', nRow).html('<button onclick="alert(\'City.id is '+aData[0]+'\')">Button</button>');
        }
    });
    
    // using concat see app/Controllers/CitiesController::concat
    // note: concat is not recommended
    $('#concat').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/cities/concat.json",
        "sDom": 'CRTfrtip',
        "aoColumns":[
            {bVisible: false},
            null,
            null,
            {bSortable: false, bSearchable: false},
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            $('td:eq(2)', nRow).html('<button onclick="alert(\'City.id is '+aData[0]+'\')">Button</button>');
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
        "sDom": 'CRTfrtip',
        "aoColumns":[
            {bVisible: false},
            null,
            null,
            {bSortable: false, bSearchable: false},
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            $('td:eq(2)', nRow).html('<button onclick="alert(\'City.id is '+aData[0]+'\')">Button</button>');
        }
    });
    
    // using noJsonHandler see app/Controllers/CitiesController::noJsonHandler
    $('#noJsonHandler').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/cities/noJsonHandler",
        "sDom": 'CRTfrtip',
        "aoColumns":[
            {bVisible: false},
            null,
            null,
            null,
            {bSortable: false, bSearchable: false},
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            $('td:eq(3)', nRow).html('<button onclick="alert(\'City.id is '+aData[0]+'\')">Button</button>');
        }
    }); 
});