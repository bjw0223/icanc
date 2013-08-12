


<form id="createCodingQuizForm" action="<?=base_url()?>index.php/quiz/createCodingQuiz" method="post">

    <div>question
        <textarea id="qusetion" name="question" style="width:300px; height:200px;"></textarea>
        answer
        <textarea id="answer" name="answer" style="width:300px; height:200px;"></textarea>
    </div>
    <br/>

    <div>head
        <textarea id="head" name="head" style="width:300px; height:200px;"></textarea>
         tail
        <textarea id="tail" name="tail" style="width:300px; height:200px;"></textarea>
    </div>
    <br/>

    <div>description
        <textarea id="description" name="description" style="width:300px; height:200px;"></textarea>
    </div>
    <br/>

    <div>
        <input type="submit" id="send" name="send" value="send" style="width:300px; height:200px;"></input>
    </div>
</form>
