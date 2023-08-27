jQuery(document).ready(function($) {
    let number_form = $('#my-number-form');

    number_form.submit(function (event){
        event.preventDefault();

        let num = $('#val').val();

        console.log('working:', num);

        $('#sp_num').html(num);
    });
});