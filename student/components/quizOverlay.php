<div class="overlay take-quiz-overlay">
    <div class="popup quiz-popup">
        <div class="popup-header">
            <!-- <div class="close-button" onclick="
            closePopup('.take-quiz-overlay');
            ">
                <img src="../assets/icons/close.png" alt="">
            </div> -->
            <h1 class="pop-up-title">
                <div class="quiz-details">Quiz</div>
            </h1> 
        </div>

        <div class="popup-body quiz-popup-body">

            <div class="question-header">
                
            </div>

            <div class="question-area">
                
            </div>
        </div>

        <div class="popup-body quiz-results-body">
            <h1>Your Results</h1>

            <div class="quiz-result-area">
                <div class="total-quiz-mark">
                    <div class="text-divider">
                        <text>Total Quiz Marks</text>
                        <p>:</p>
                    </div>
                    <p class="total-quiz-mark-placeholder">0</p>
                </div>

                <div class="earned-quiz-mark">
                    <div class="text-divider">
                        <text>Score</text>
                        <p>:</p>
                    </div>
                    <p class="earned-quiz-mark-placeholder">0</p>
                </div>
            </div>

            <div class="button" onclick="
            closePopup('.take-quiz-overlay');
            refreshCourseOutline();
            // This will cause bugs when the layout is called in a different place
            // where refreshOutline is not applicable. Pass as a dependency.
            ">Done</div>
        </div>

        <div class="popup-footer button-group-footer">
            <div class="button-group quiz-button-group">
                <button class="button previous-question" disabled>Previous Question</button>
                <button class="button next-question">Next Question</button>
            </div>
        </div>

        <div class="popup-footer submit-footer">
            <button class="button finish-quiz-button">Submit Quiz</button>
        </div>


        <div class="loader-view take-quiz-loader">
            <div>
                <div class="sk-fold">
                    <div class="sk-fold-cube"></div>
                    <div class="sk-fold-cube"></div>
                    <div class="sk-fold-cube"></div>
                    <div class="sk-fold-cube"></div>
                </div>
                <p>...</p>
            </div>
        </div>

    </div>
</div>