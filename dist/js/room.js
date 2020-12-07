    $(document).ready(function(){
        refreshDoor();
        refreshDoorPass();
        refreshOutOfRange();
        refreshTemp();
        refreshTVState();
        refreshTVLight();
        ontv();
        offtv()
    });

    function refreshDoor(){
        $('#Door').load('/includes/roominfo.php?func=DoorOpen', function(){
            setTimeout(refreshDoor, 1000);
        });
    }

    function refreshDoorPass(){
        $('#DoorPass').load('/includes/roominfo.php?func=DoorPassed', function(){
            setTimeout(refreshDoorPass, 1000);
        });
    }

    function refreshOutOfRange(){
        $('#OutOfRange').load('/includes/roominfo.php?func=OutOfRange', function(){
            setTimeout(refreshOutOfRange, 1000);
        });
    }
    function refreshTemp(){
        $('#Temp').load('/includes/roominfo.php?func=Temp', function(){
            setTimeout(refreshTemp, 1000);
        });
    }
    function refreshTVState(){
        $('#TVState').load('/includes/roominfo.php?func=TVState', function(){
            setTimeout(refreshTVState, 1000);
        });
    }
    function refreshTVLight(){
        $('#TVLight').load('/includes/roominfo.php?func=TVLight', function(){
            setTimeout(refreshTVLight, 1000);
        });
    }
    function ontv(){
        $('#result').load('/backend/switch.php?value=on');
        }
    function offtv(){
        $('#resultoff').load('/backend/switch.php?value=off');
    }

