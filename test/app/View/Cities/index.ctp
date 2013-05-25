<script type="text/javascript">
$(function() {
    $('#states-table').dataTable({
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
</script>

<table id="states-table" class="table table-bordered table-striped table_vam">
    <thead>
    <tr>
        <th>ID</th>
        <th>City</th>
        <th>State</th>
        <th>Population</th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    </tbody>
</table>