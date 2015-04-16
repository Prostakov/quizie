quizName = $('#quiz_name').text();
chapterNum = $('#chapter_name').attr('data-chapter');
window.userQuizData = new UserQuizData();
if (typeof $.cookie('userQuizData') == 'undefined') {
    userQuizData.addQuiz(quizName);
    userQuizData.addChapter(quizName, chapterNum);
} else {
    userQuizData = JSON.parse($.cookie('userQuizData'));
    userQuizData.__proto__ = (new UserQuizData()).__proto__;
    protoQuiz = (new Quiz()).__proto__;
    protoChapter = (new Chapter()).__proto__;
    protoQuestion = (new Question()).__proto__;
    for (quizIndex=0; quizIndex<userQuizData.quizzes.length; ++quizIndex) {
        userQuizData.quizzes[quizIndex].__proto__ = protoQuiz;
        for (chapterIndex=0; chapterIndex<userQuizData.quizzes[quizIndex].chapters.length; ++chapterIndex) {
            userQuizData.quizzes[quizIndex].chapters[chapterIndex].__proto__ = protoChapter;
            for (questionIndex=0; questionIndex<userQuizData.quizzes[quizIndex].chapters[chapterIndex].questions.length; ++questionIndex) {
                userQuizData.quizzes[quizIndex].chapters[chapterIndex].questions[questionIndex].__proto__ = protoQuestion;
            }
        }
    }
    quizIndex = userQuizData.findQuiz(quizName);
    if (quizIndex == -1) {
        userQuizData.addQuiz(quizName);
        userQuizData.addChapter(quizName, chapterNum);
    } else {
        chapterIndex = userQuizData.quizzes[quizIndex].findChapter(chapterNum);
        if (chapterIndex == -1) {
            userQuizData.addChapter(quizName, chapterNum);
        } else {
            questions = userQuizData.quizzes[quizIndex].chapters[chapterIndex].questions;
            for (questionIndex=0; questionIndex<questions.length; ++questionIndex) {
                num = questions[questionIndex].num;
                option = questions[questionIndex].option;
                $('.question_container[data-question='+num+']').find('label.btn').eq(option-1).addClass('active');
            }
        }
    }
}
$('.btn-group-vertical .btn.btn-default').on('click',function(){
    option = $(this).attr('data-option');
    num = $(this).parent().parent().attr('data-question');
    userQuizData.setQuestion(quizName, chapterNum, num, option);
    $.cookie('userQuizData', JSON.stringify(userQuizData), { expires: 7 });
});
$('#reset_quiz').on('click', function(e){
    e.preventDefault();
    $('.btn-group-vertical .btn.btn-default').removeClass('active').removeClass('harsh_red');
    $('.question_container').removeClass('green').removeClass('red');
    $('.transparent_barrier').hide();
    userQuizData.clearQuestions(quizName, chapterNum);
    $.cookie('userQuizData', JSON.stringify(userQuizData), { expires: 7 });
});