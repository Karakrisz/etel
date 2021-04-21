<section class="placing-content">
    <div id="form-main">
        <div id="form-div">
            <form action="/placing-an-order" role="form" method="POST" class="form" id="form1">
                <div class="box">
                    <p>Melyik ételt választod? </p>
                </div>
                <div class="placing-content__label-content">
                    <label class="placing-content__label-content__label">
                        <!-- <input type="checkbox" class="check-soup-one" value="Leves 1" name="soup_one" id="soup_one"> -->
                        <span class="placing-content__label-content__label__span">Leves 1</span>
                        <!-- <strong class="placing-content__label__strong soup-one-checkbox-text">
                            <p class="placing-content__label__strong__p">Leves 1 rögzítve</p>
                        </strong> -->
                        <input type="hidden" name="soup_one_name" id="soup_one_name" value="Leves 1">
                        <div class="quantity">
                            <input name="soup_one" id="soup_one" type="number" min="1" value="1">
                        </div>
                    </label>
                    <label class="placing-content__label-content__label">
                        <!-- <input type="checkbox" class="check-soup-two" value="Leves 2" name="soup_two" id="soup_two"> -->
                        <span class="placing-content__label-content__label__span">Leves 2</span>
                        <!-- <strong class="placing-content__label__strong soup-two-checkbox-text">
                            <p class="placing-content__label__strong__p">Leves 2 rögzítve</p>
                        </strong> -->
                        <input type="hidden" name="soup_two_name" id="soup_two_name" value="Leves 2">
                        <div class="quantity">
                            <input name="soup_two" id="soup_two" type="number" min="1" value="1">
                        </div>
                    </label>
                    <label class="placing-content__label-content__label">
                        <!-- <input type="checkbox" class="check-main-course-one" value="Főétel 1" name="course_one" id="course_one"> -->
                        <span class="placing-content__label-content__label__span">Főétel 1</span>
                        <!-- <strong class="placing-content__label__strong main-course-one-checkbox-text">
                            <p class="placing-content__label__strong__p">Főétel 1 rögzítve</p>
                        </strong> -->
                        <input type="hidden" name="course_one_name" id="course_one_name" value="Főétel 1">
                        <div class="quantity">
                            <input name="course_one" id="course_one" type="number" min="1" value="1">
                        </div>
                    </label>
                    <label class="placing-content__label-content__label">
                        <!-- <input type="checkbox" class="check-main-course-two" value="Főétel 2" name="course_two" id="course_two"> -->
                        <span class="placing-content__label-content__label__span">Főétel 2</span>
                        <!-- <strong class="placing-content__label__strong main-course-two-checkbox-text">
                            <p class="placing-content__label__strong__p">Főétel 2 rögzítve</p>
                        </strong> -->
                        <input type="hidden" name="course_two_name" id="course_two_name" value="Főétel 2">
                        <div class="quantity">
                            <input name="course_two" id="course_two" type="number" min="1" value="1">
                        </div>
                    </label>
                    <label class="placing-content__label-content__label">
                        <!-- <input type="checkbox" class="check-main-course-two" value="Főétel 2" name="course_two" id="course_two"> -->
                        <span class="placing-content__label-content__label__span">Desszert</span>
                        <!-- <strong class="placing-content__label__strong main-course-two-checkbox-text">
                            <p class="placing-content__label__strong__p">Főétel 2 rögzítve</p>
                        </strong> -->
                        <input type="hidden" name="dessert_name" id="dessert_name" value="Desszert">
                        <div class="quantity">
                            <input name="dessert" id="dessert" type="number" min="1" value="1">
                        </div>
                    </label>
                </div>
                <div class="placing-content-img-content">
                    <a class="placing-content-img-content__link" id="placingContentImgShow">Tekintse meg étlapunkat</a>
                    <img id="test" class="placing-content-img-content__img" src="images/my-photo/hetimenu.jpg" alt="Snow">
                </div>
                <!-- The Modal -->
                <div id="placingContentImgModal" class="placing-content-img-modal">
                    <span class="placing-content-close">&times;</span>
                    <img class="placing-content-img-modal-content" id="img01">
                    <div id="placing-content-img-modal-caption"></div>
                </div>

                <p class="name">
                    <input name="name" id="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Név" id="name" />
                </p>

                <p class="email">
                    <input name="email" id="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                </p>
                <p class="email">
                    <input name="tel" id="tel" type="text" class="validate[required,custom[email]] feedback-input" id="tel" placeholder="Telefonszám" />
                </p>

                <p class="email">
                    <input name="house-number" id="house-number" type="text" class="validate[required,custom[email]] feedback-input" id="house-number" placeholder="Rendelési cím" />
                </p>

                <p class="email">
                    <input name="floor" id="floor" type="text" class="validate[required,custom[email]] feedback-input" id="floor" placeholder="Emelet" />
                </p>

                <p class="email">
                    <input name="door" id="door" type="text" class="validate[required,custom[email]] feedback-input" id="door" placeholder="Ajtó" />
                </p>

                <p class="email">
                    <input name="doorbell" id="doorbell" type="text" class="validate[required,custom[email]] feedback-input" id="doorbell" placeholder="Kapucsengő" />
                </p>

                <p class="text">
                    <textarea name="comment" id="comment" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Megjegyzés"></textarea>
                </p>


                <div class="submit">
                    <input type="hidden" name="event" id="event" value="sendemail">
                    <input type="submit" value="KÜLDÉS" id="button-blue" />
                    <div class="ease"></div>
                </div>
            </form>
        </div>
    </div>
</section>