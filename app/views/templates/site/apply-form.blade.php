<div data-scrollName="applyform" class="block grey apply-cont">
  <div class="wrapper">
    <h2>Форма заявки</h2>
    <p class="sub-header">Заполните форму заявки — мы свяжемся с вами в течение двух рабочих часов.</p>
    <form id="applyform" action="json/test.json" class="js-apply-form apply-form">
      <div class="apply-table">
        <div class="table-row">
          <div class="table-col">Представтесь</div>
          <div class="table-col">
            <input name="name" class="us-input">
          </div>
        </div>
        <div class="table-row">
          <div class="table-col">Контактный телефон</div>
          <div class="table-col">
            <input name="" class="us-input">
          </div>
        </div>
        <div class="table-row">
          <div class="table-col">Электронная почта</div>
          <div class="table-col">
            <input name="email" class="us-input">
          </div>
        </div>
        <div class="table-row">
          <div class="table-col">Адрес вашего сайта</div>
          <div class="table-col">
            <input name="" class="us-input">
          </div>
        </div>
        <div class="table-row">
          <div class="table-col">Выберите набор услуг</div>
          <div class="table-col">
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-0">
              <label for="check-0"><span>Продвижение сайта</span></label>
            </div>
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-1">
              <label for="check-1"><span>Контекстная реклама</span></label>
            </div>
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-2">
              <label for="check-2"><span>Рекалама в социальных сетях (SMM)</span></label>
            </div>
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-3">
              <label for="check-3"><span>Медийная реклама</span></label>
            </div>
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-4">
              <label for="check-4"><span>Управление репутацией, SERM</span></label>
            </div>
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-5">
              <label for="check-5"><span>Продвижение мобильных приложений</span></label>
            </div>
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-6">
              <label for="check-6"><span>Юзабилити</span></label>
            </div>
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-7">
              <label for="check-7"><span>Копирайтинг</span></label>
            </div>
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-8">
              <label for="check-8"><span>Аудит сайта</span></label>
            </div>
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-9">
              <label for="check-9"><span>SEO-консалтинг</span></label>
            </div>
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-10">
              <label for="check-10"><span>Не знаю, посоветуйте</span></label>
            </div>
            <div class="check-cont">
              <input type="checkbox" name="service" id="check-11">
              <label for="check-11"><span>Другое</span></label>
            </div>
          </div>
        </div>
        <div class="table-row">
          <div class="table-col">Ваши пожелания</div>
          <div class="table-col">
            <textarea name="message" placeholder="Ключевые слова, сроки, способ связи с вами, регион оказания усуг и т.д." class="us-input js-auto"></textarea>
          </div>
        </div>
        <div class="table-row">
          <div class="table-col">Как вы узнали о нас</div>
          <div class="table-col">
            <select name="howyouknow">
              <option>Не указано</option>
              <option>2</option>
            </select>
          </div>
        </div>
        <div class="table-row">
          <div class="table-col"> </div>
          <div class="table-col">
            <button type="submit" class="hover-btn"><span>Оставить заявку</span></button>
            <div class="js-response-text ajax-message"></div>
          </div>
        </div>
      </div>
    </form>
    <p style="display: none;" class="sub-header js-final-response"></p>
  </div>
</div>