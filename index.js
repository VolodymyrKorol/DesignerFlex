$('#about-slider').slick({
    nextArrow: '<div class="arrow-slider arrow-slider-right"><img src="img/right-arrow.png" alt=">"></div>',
    prevArrow: '<div class="arrow-slider arrow-slider-left"><img src="img/left-arrow.png" alt="<"></div>'
});
$(".burger-menu").on('click', function () {
    $(this).toggleClass('active-burger')
    $('.header-menu').toggleClass('mobile-header-visible')
    $('body').toggleClass('mobile-header-visible')
})

$('.latest-work-item').on('mouseover', function(){
    $(this).children('.latest-work-item-overlay').addClass('active-image-hover')
})
$('.latest-work-item').on('mouseout', function(){
    $(this).children('.latest-work-item-overlay').removeClass('active-image-hover')
})


$('.remove-user').on('click',function () {
    let user_id = $(this).closest('.user-list-item').attr('data-user-id')

    $.ajax({
        url:  '/user/delete',
        method: "POST",
        data: {
            id: user_id
        },
        dataType: "json",
        success: (json)=>{
            console.log(json)
            if (json.response){
                $(this).closest('.user-list-item').remove()
            }
        },
        error: ()=>{
            console.log('error')
        }
    })
})
$('.user-edit-field').on('change',function () {
    let user_id = $(this).closest('.user-list-item').attr('data-user-id')
    $('.user-list-item .error-text').text('')
    $.ajax({
        url:  '/user/edit',
        method: "POST",
        data: {
            id: user_id,
            fio: $('.user-list-item[data-user-id="' + user_id + '"] .name-admin').val(),
            phone: $('.user-list-item[data-user-id="' + user_id + '"] .phone-admin').val(),
            email: $('.user-list-item[data-user-id="' + user_id + '"] .email-admin').val(),
            roots: $('.user-list-item[data-user-id="' + user_id + '"] .roots-admin').prop('checked') ? 1 : 0,
            password: $('.user-list-item[data-user-id="' + user_id + '"] .password-admin').val()
        },
        dataType: "json",
        success: (json)=>{
            console.log(json)
            for (key in json) {
                $('.user-list-item[data-user-id="' + user_id + '"] .error-' + key).text(json[key])
            }
        },
        error: ()=>{
            console.log('error')
        }
    })
})