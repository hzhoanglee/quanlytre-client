    $(document).ready(function(){
        refreshTemp();
        refreshHumid();
        refreshTable()
    });

    function refreshTemp(){
        $('#temp').load('/includes/getinfo.php?func=temp', function(){
            setTimeout(refreshTemp, 1000);
        });
    }

    function refreshHumid(){
        $('#humid').load('/includes/getinfo.php?func=humid', function(){
            setTimeout(refreshHumid, 1000);
        });
    }

    function refreshTable(){
        $('#distance').load('/includes/getinfo.php?func=distance', function(){
            setTimeout(refreshTable, 1000);
        });
    }