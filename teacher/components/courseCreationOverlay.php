<div class="overlay create-course-overlay">
    <div class="popup">
        <div class="popup-header">
            <div class="close-button" onclick="closeCreateCourseOverlay()">
                <img src="../assets/icons/close.png" alt="">
            </div>
            <h1 class="pop-up-title">
                <text>Create Course</text>
            </h1>
        </div>

        <div class="popup-body">
            <form class="course-form">
                <div class="side-by-side-grid">
                    <label for="courseImageUpload" class="course-upload-input">
                        <div class="over-wrapper">
                            <img class="icon" src="../assets/icons/fi/fi-rr-images.svg" alt="">
                        </div>

                        <div class="course-image-view">
                            <img class="course-image-view-element" src="" alt="">
                        </div>

                        <input id="courseImageUpload" class="upload-input" type="file" accept="image/*" onchange="loadImageToCoursePopupView(event, '.course-image-view-element')">
                    </label>

                    <div class="form-input-container">
                        <span class="form-input-label"><text>Course Code</text></span>
                        <input class="form-input course-code" placeholder="Course Code" type="text" required>
                    </div>
                </div>

                <div class="form-input-container">
                    <span class="form-input-label"><text>Course Name</text></span>
                    <input class="form-input course-name" placeholder="Course Name" type="text" required>
                </div>
                <div class="form-input-container">
                    <span class="form-input-label"><text>Course Language</text></span>
                    <select class="form-input course-language" placeholder="Course Language" required>
                        <option selected value="turkish">Turkish</option>
                        <option value="english">English</option>
                        <option value="russian">Russian</option>
                        <option value="ukrainian">Ukrainian</option>
                    </select>
                </div>
                <div class="form-input-container">
                    <span class="form-input-label"><text>Is thıs course a Language Course ?</text></span>
                    <select class="form-input course-is-language" placeholder=" Is Language Course" required>
                        <option selected value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="popup-footer">
            <div type="submit" class="button" onclick="createCourse()">
                <text>Create</text>
            </div>
        </div>
    </div>
</div>