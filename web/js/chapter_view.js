showAlert = function(id) {
    $('#error_msg>p').text('Question #'+id+' was left blank!');
    $('#error_msg').fadeIn(400);
};
$('#finish_quiz').on('click', function(){
    $('#error_msg').fadeOut(400);
    exitFlag = false;
    question_containers = $('.question_container');
    questions_count = question_containers.length;
    question_containers.each(function(){
        labels = $(this).find('label');
        activeCount = 0;
        labels.each(function(){
            if ($(this).hasClass('active')) activeCount++;
        });
        if (activeCount == 0) {
            showAlert($(this).attr('data-question'));
            exitFlag = true;
            return false;
        }
    });
    if (exitFlag) return;
    questions_correct_count = 0;
    question_containers.each(function(){
        correct_option = $(this).children('div').attr('data-correct-option');
        selected_option = $(this).find('label.active').attr('data-option');
        if (correct_option == selected_option){
            $(this).addClass('green');
            questions_correct_count++;
        }
        else {
            $(this).addClass('red');
            $(this).find('label[data-option='+correct_option+']').addClass('harsh_red');
        }
    });
    percentage_correct = questions_correct_count*100/questions_count;
    $('.results b').text(percentage_correct.toFixed(2)+"%");
    $('.results').show();
    $("body").animate({scrollTop:0}, '500', 'swing');
    $('.transparent_barrier').show();
});