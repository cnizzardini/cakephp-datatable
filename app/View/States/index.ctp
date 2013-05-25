<script type="text/javascript">
$(function() {
    $('#states-table').dataTable({
        "iDisplayLength": 100,
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "/states/index.json",
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
            null,
            {bSortable: false}
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex){
            $('td:eq(0)', nRow).html('hi');
        }
    });
});
</script>

<table id="states-table" class="table table-bordered table-striped table_vam">
    <thead>
    <tr>
        <th>ID</th>
        <th>Company</th>
        <th>Phone</th>
        <th>Fax</th>
        <th>Website</th>
        <th>Tax Number</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    </tbody>
</table>