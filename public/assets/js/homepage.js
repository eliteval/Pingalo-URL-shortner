$(document).ready(function () {
    $("#copy_icon").on("click", function () {
        value = $("#default_short_url").text();
         alert(value);
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(value).select();
        document.execCommand("copy");
        $temp.remove();
    });

    $("#share_icon").on("click", function () {
        value = $("#destination_url").text();
        // alert(value);
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(value).select();
        document.execCommand("copy");
        $temp.remove();
    });

    $("#statistics_icon").on("click", function () {
        window.location.href = 'statistics';
        // alert({{$latest->id}});
    });
}
);
function click_copy(id){
    // console.log($("span [short_index=id]"));
    // console.log($("span").find(`[short_index='${id}']`));
    console.log($("span").find("[short_index='" + id + "']"));
    // console.log($("span short_index='" + id + "'"));
    // $("[myAttribute=value]")
}

function click_statistics(shorturl_id){
    window.location.href = 'statistics';
}
