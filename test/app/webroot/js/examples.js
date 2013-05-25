$(function() {
    $('#linkable').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/cities/index.json",
        "sDom": 'CRTfrtip',
        "oTableTools": {
            "sSwfPath": "/js/datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf",
        },
        "aoColumns":[
            {bVisible: false},
            null,
            null,
            null,
            null,
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            $('td:eq(3)', nRow).html('<button onclick="alert(\'City.id is '+aData[0]+'\')">Button</button>');
        }
    });
});