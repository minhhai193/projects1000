$('document').ready(function () {
    //Pagination JS
    //3 rows per page
    var show_per_page = 9;
    //Getting the amount of elements inside pagingBox div
    var number_of_items = $('#pagination-box').children().length;
    //Calculate the number of pages we are going to have
    var number_of_pages = Math.ceil(number_of_items / show_per_page);     //Math.ceil rounded up one number

    if (number_of_pages == 1) {
        document.getElementById('pgt').style.display = "none";
    }

    //Set the value of our hidden input fields
    $('#current_page').val(0);
    $('#show_per_page').val(show_per_page);

    //Show pagination

    /*
    What are we going to have in the navigation?
        - Link to previous page
        - Link to specific pages
        - Link to next page
    */

    // var navigation_html = '<a class="previous_link" href="javascript:prv();">&laquo;</a>';
    var navigation_html = '<a class="first_link" href="javascript:fst();">FIRST</a>';
    navigation_html += '<a class="previous_link" href="javascript:prv();"><</a>';
    
    var current_link = 0;
    while (number_of_pages > current_link) {
        navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link + ')" longdesc="' + current_link + '">' + (current_link + 1) + '</a>';
        current_link++;
    }

    // navigation_html += '<a class="next_link" href="javascript:nxt();">&raquo;</a>';
    navigation_html += '<a class="next_link" href="javascript:nxt();">></a>';
    navigation_html += '<a class="last_link" href="javascript:lst();">LAST</a>';

    $('.pagination').html(navigation_html);

    //Add active_page class to the first page link
    $('.pagination .page_link:first').addClass('active_page');

    //Hide all the elements inside pagingBox div
    $('#pagination-box').children().css('display', 'none');

    //And show the first n (show_per_page) elements
    $('#pagination-box').children().slice(0, show_per_page).css('display', 'block');
});

//FIRST JS
function fst(){
    new_page = 0;
    //If there is an item before the current active link run the function
    go_to_page(new_page);
}

// LAST JS
function lst(){
    new_page = $('.pagination').children().length - 5;
    //If there is an item before the current active link run the function
    go_to_page(new_page);
}

//Pre JS
function prv() {
    new_page = parseInt($('#current_page').val()) - 1;
    //If there is an item before the current active link run the function
    if ($('.active_page').prev('.page_link').length == true) {
        go_to_page(new_page);
    }

}

//Next JS
function nxt() {
    new_page = parseInt($('#current_page').val()) + 1;
    //If there is an item after the current active link run the function
    if ($('.active_page').next('.page_link').length == true) {
        go_to_page(new_page);
    }

}

//Page JS
function go_to_page(page_num) {
    //Get the number of items shown per page
    var show_per_page = parseInt($('#show_per_page').val());

    //Get the element number where to start the slice from
    start_from = page_num * show_per_page;

    //Get the element number where to end the slice
    end_on = start_from + show_per_page;

    //Hide all children elements of pagingBox div, get specific items and show them
    $('#pagination-box').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');

    /*Get the page link that has longdesc attribute of the current page and add active_page class to it
    and remove that class from previously active page link*/
    $('.page_link[longdesc=' + page_num + ']').addClass('active_page').siblings('.active_page').removeClass('active_page');

    //Update the current page input field
    $('#current_page').val(page_num);
}