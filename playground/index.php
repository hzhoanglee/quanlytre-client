<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<div id="tableHolder"></div>
<script type="text/javascript">
    $(document).ready(function(){
        refreshTable();
    });

    function refreshTable(){
        $('#tableHolder').load('data.php', function(){
            setTimeout(refreshTable, 5000);
        });
    }
</script>