var response;
var index = 0;
function AJAX_JSON_Req( url )
{
    var AJAX_req = new XMLHttpRequest();
    AJAX_req.open( "GET", url, true );
    AJAX_req.setRequestHeader("Content-type", "application/json");

    AJAX_req.onreadystatechange = function()
    {
        if( AJAX_req.readyState == 4 && AJAX_req.status == 200 )
        {
            response = JSON.parse( AJAX_req.responseText );
            document.getElementById('pageContainer').innerHTML = response.pages[index].PageText;            
        }
    }
    AJAX_req.send();
}

AJAX_JSON_Req('test.json');

function nextPage() {
	index++;
	document.getElementById('pageContainer').innerHTML = response.pages[index].PageText;
}
