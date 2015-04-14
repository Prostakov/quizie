
function Question(num, option) {
    this.num = num;
    this.option = option;
}

function Chapter(num) {
    this.num = num;
    this.questions = [];
}

Chapter.prototype.findQuestion = function(num) {
    var index;
    for(index=0; index<this.questions.length; ++index) {
        if (this.questions[index].num == num) return index;
    }
    return -1;
}

Chapter.prototype.setQuestion = function(num, option) {
    var index = this.findQuestion(num);
    if (index == -1) {
        question = new Question(num, option);
        this.questions.push(question);
    } else {
        this.questions[index].option = option;
    }
}

function Quiz(name) {
    this.name = name;
    this.chapters = [];
}

Quiz.prototype.findChapter = function(num) {
    var index;
    for(index=0; index<this.chapters.length; ++index) {
        if (this.chapters[index].num == num) return index;
    }
    return -1;
}

Quiz.prototype.addChapter = function(num) {
    if (this.findChapter(num) == -1) {
        chapter = new Chapter(num);
        this.chapters.push(chapter);
    } else {
        throw "Chapter with this num already exists!";
    }
}

function UserQuizData() {
    this.quizzes = [];
}

UserQuizData.prototype.findQuiz = function(quizName) {
    var index;
    for(index=0; index<this.quizzes.length; ++index) {
        if (this.quizzes[index].name == quizName) return index;
    }
    return -1;
}

UserQuizData.prototype.addQuiz = function(quizName) {
    quiz = new Quiz(quizName);
    this.quizzes.push(quiz);
}

UserQuizData.prototype.addChapter = function(quizName, chapterNum) {
    quizIndex = this.findQuiz(quizName);
    if (quizIndex == -1) throw "Quiz with that name does not exist";
    chapterIndex = this.quizzes[quizIndex].findChapter(chapterNum);
    if (chapterIndex != -1) throw "Chapter with that num already exists!";
    this.quizzes[quizIndex].addChapter(chapterNum);
}

UserQuizData.prototype.setQuestion = function(quizName, chapterNum, questionNum, questionOption) {
    quizIndex = this.findQuiz(quizName);
    if (quizIndex == -1) throw "Quiz with that name does not exist";
    chapterIndex = this.quizzes[quizIndex].findChapter(chapterNum);
    if (chapterIndex == -1) throw "Chapter with that num does not exist!";
    this.quizzes[quizIndex].chapters[chapterIndex].setQuestion(questionNum, questionOption);
}












