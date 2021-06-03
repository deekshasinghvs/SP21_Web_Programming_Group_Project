


function search_select_from_bookpreview(query, orderBy, limit, offset)
{
    // var query = $("#search_query").val();
    var data = {"query": query,
                "orderBy" : orderBy,
                "limit": parseInt(limit),
                "offset": parseInt(offset)
    };

    // Calls below function in the ajax/ajax.js file 
    search_bookpreview(data); 
}
